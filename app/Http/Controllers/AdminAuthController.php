<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use App\Models\Contact;
use App\Models\FeedBack;
use App\Models\Eventmodel;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Carbon;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;
class AdminAuthController extends Controller
{
    //login form show function
    public function showLoginForm()
    {
        return view('user.login');
    }
    //to store and fetch all details with database and then login
    public function login(Request $request)
    {
        $user = User::where('email','=',$request->email)->first();
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required' 
        ]);
        if(auth()->attempt(array('email'=>$input['email'],'password'=>$input['password']))){
            if(auth()->user()->role_id == 1){
                $request->session()->put('user_id',$user->user_id);
                return redirect()->route('dashboard')->with('success','Admin Logged In');
            }elseif(auth()->user()->role_id == 2){
                $data = $request->session()->put('user_id', auth()->user()->user_id);
                //echo "<pre>"; print_r(auth()->user()); echo "</pre>"; die;
                return redirect()->route('home')->with('success','User Logged IN','data');
            }
        }else{
            return redirect()->route('login')->with('error','Invalid id and password');
        }
    }

    //logout function
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('home')->with('success', 'Successfully Logout');
    
    }
    //to show dashboard function
    public function dashboard()
    {
       //echo "welcome dashboard";die;
       //to calcilate the user from database and send data to dashboard page
       $users = User::where('role_id','!=','1')->count();
       $event = Eventmodel::where('status', '!=', 'Rejected')
                    ->where('status', '!=', 'Cancled by the user')
                    ->count();

        //to calculate total orders into this we cannot not calculate Cancelled orders
        $orderCount = Order::whereNotIn('order_status', ['Cancelled', 'Cancelled by the user'])->count();
        //count pending orders
        $pendingorder =  Order::where('order_status', 'Pending')->count();
        //total price count to show revenue on dashboard
        $totalCompletedPrice = Order::where('order_status', 'Completed')->sum('total_price');


       /* echo "<pre>"; 
       print_r($pendingOrderCount);
       echo "</pre>";die;  */ 
       $data = array();
       //print_r($data);die;
       if(Session::has('user_id')){
        $data = User::where('email','=',Session::get('user_id'))->first();
        
        //echo "<pre>";print_r($data);die;echo "</pre>";
       }
       return view('admin.dashboard',compact('data','users','event','orderCount','pendingorder','totalCompletedPrice'));
    }
    //Add Category
    public function add_cat(){
        return view('admin.add_cat');
    }
    public function store_category(Request $request){
        /* 
        echo "<pre>"; 
        print_r($request);
        echo "</pre>";die;*/
        $category = new Category;
        $category->cat_name = $request['name'];
        //to save data into database...
        $category->save();
        return redirect()->route('all_category')->with('success','Category Was Added');
    }
    //to show all category from database
    public function show_category(){
        $categorys = Category::all();
        $data = compact('categorys');
        //file name
        return view('admin.all_cat')->with($data);
    }
    //delete category
    public function delete_category(Request $request,$id){
        //print_r($id);die;
        $category = Category::find($id);
        //print_r($category);die;
        if ($category) {
            $category->delete();
            return response()->json(['success' => true, 'tr' => 'tr_' . $id]);
        } else {
            return redirect()->route('all_category')->with('error', 'Category not found.');
        }
    }
    //update category
    public function edit_category($id){
        $category = Category::find($id);
        if(is_null($category)){
            return redirect()->route('all_category');
        }else{
            //echo "hi";die;
           $data = compact('category');
           //echo "<pre>"; print_r($data);echo "</pre>";die;
           return view('admin.update_cat')->with($data);
        }
    }
    public function update_cat($id,Request $request){
        /*echo "<pre>"; 
        print_r($request); 
        echo "</pre>";die;*/
        $name = $request['name'];
        //echo $name;die;
        $category = Category::find($id);
        /*echo "<pre>"; 
        print_r($category); 
        echo "</pre>";die;*/
        if ($category) {
            // Update the category properties
            $category->cat_name = $name;
            $category->save();
            return redirect()->route('all_category')->with('update', 'Category Was Updated');
        }
    }
    //manage user's
    public function showUsers(){
        $users=User::where('role_id',2)->paginate(5);
        //echo "<pre>"; print_r($users); die; echo "</pre>";
        $data = compact('users');
        return view('admin.all_user')->with($data);
    }
    //to show descript view of user's profile
    public function showUser($id){
        //echo $id; die;
        $user=User::where('user_id',$id)->get();
        //echo "<pre>"; print_r($user); die; echo "</pre>";
        $data = compact('user');
        return view('admin.m_user')->with($data);
    }
    public function showContact(){
        $contacts = Contact::paginate(5);
        $data = compact('contacts');
        return view('admin.all_contact')->with($data);
    }
    public function showFeedBack(){
        $feedbackData = Feedback::select('feedback.f_id', 'feedback.rating', 'feedback.msg', 'feedback.user_id', 'users.user_id', 'users.name', 'users.email')
        ->join('users', 'feedback.user_id', '=', 'users.user_id')
        ->paginate(5);
        /* echo "<pre>";
        print_r($feedbackData);die;
        echo "</pre>"; */
        $data = compact('feedbackData');
        return view('admin.all_feedback')->with($data);
    }
   public function showProduct(){
        $pro = Product::select('product.*', 'category.cat_name')
                ->join('category', 'product.cat_id', '=', 'category.cat_id')
                ->where('product.is_delete', 0)
                ->paginate(3); // Paginate with 3 products per page
    
        return view('admin.all_product', compact('pro'));
    }
    public function addProduct(){
        $categorys = Category::all();
        $data = compact('categorys');
        return view('admin.add_product')->with($data);
    }
    public function storeProduct(request $request,$id){
        $name = $request['name'];
        $price = $request['price'];
        $msg = $request['msg'];
        $image = $request->file('p_image')->getClientOriginalName();
        $cat = $request['cat'];
         /* echo "<pre>";
        echo $name; echo "<br>";
        echo $price; echo "<br>";
        echo $msg; echo "<br>";
        echo $image; echo "<br>";
        die;
        echo "</pre>"; */
        $pro = new Product;
        $pro->p_name = $name;
        $pro->p_image = $image;
        $pro->cat_id = $cat;
        $pro->user_id = $id;
        $pro->description =$msg;
        $pro->price = $price;
        $request->file('p_image')->storeAs('admin/upload', $image, 'public');
        $pro->save();
        return redirect()->route('all_product')->with('success','Product Was Added'); 
    }
    public function DeleteProduct($id){
        //echo "hello";die;
        //echo $id; die;
        $product = DB::table('product')
        ->where('p_id', $id) // Replace $p_id with the value you're matching against
        ->update(['is_delete' => 1]);
        return redirect()->route('all_product')->with('delete','Product Was deleted');
    }
    public function EditProduct($id){
        $products = Product::where('p_id',$id)->get();
        //echo "<pre>";print_r($products); echo "</pre>";die;
        
        if(is_null($products)){
            return redirect()->route('all_category');
        }else{
            $categorys = Category::all();
            //echo "hi";die;
           $data = compact('products','id','categorys');extract($data);
           //echo "<pre>"; print_r($data);echo "</pre>";die;
           return view('admin.edit_product')->with($data);
        }
    } 
    //edit product
    public function Store_Product(Request $request,$id){
       // echo "hi";die;
       //echo $id;die;
       ini_set('memory_limit', '1024M');
       $name = $request['name'];
       $price = $request['price'];
       $msg = $request['msg'];
       //$image = $request->file('p_image')->getClientOriginalName();
       $cat = $request['cat'];
       //echo "<pre>";print_r($request); echo "</pre>";die;
       if ($request->hasFile('p_image')) {
        $image = $request->file('p_image')->getClientOriginalName();
        $request->file('p_image')->storeAs('admin/upload', $image, 'public');
        } 
        $products = DB::table('product')->where('p_id', $id)->first();
        //echo "<pre>";print_r($products); echo "</pre>";die;
       if($products){
            //echo "hi";die;
            DB::table('product')->where('p_id', $id)->update([
                'p_name' => $name,
                'p_image' => $image,
                'cat_id' => $cat,
                'description' => $msg,
                'price' => $price
            ]);
            return redirect()->route('all_product')->with('update','Product Was Updated'); 
       }
    }
    
    public function ShowEvents(){
        $events= Eventmodel::join('users', 'book_table.user_id', '=', 'users.user_id')
        ->select('book_table.*', 'users.name', 'users.contact', 'users.email')
        ->orderBy('book_table.b_id', 'asc')
        ->paginate(5);
         //echo "<pre>"; print_r($events);die; echo "</pre>";
         return view('admin.all_event',compact('events'));
    }
    
    //accepting evetns request
    public function AcceptEvent($id){
       
       $event = Eventmodel::where('b_id', $id)
       ->update(['status' => 'Accepted']);
       if($event > 0)
        {
            return redirect()->route('All_bookings')->with('success','Event Status Updated'); 
        }
    }
    //Rejecting evetns request
    public function RejectEvent($id){
        $event = Eventmodel::where('b_id', $id)
        ->update(['status' => 'Rejected']);
        if($event > 0)
            {
                return redirect()->route('All_bookings')->with('Rejected','Event Status Updated'); 
            }
    }
    //Compliting evetns request
    public function CompletedEvent($id){
        $event = Eventmodel::where('b_id', $id)
        ->update(['status' => 'Completed']);
        if($event > 0)
            {
                return redirect()->route('All_bookings')->with('Completed','Event Status Updated'); 
            }
    }

    //Order Menu like pending and completed orders
    public function pendingOrder() {
        $orders = DB::table('order')
            ->select('order.*', 'order_items.*', 'product.p_name', 'users.name as user_name', 'users.contact')
            ->join('order_items', 'order.order_id', '=', 'order_items.order_id')
            ->join('product', 'order_items.p_id', '=', 'product.p_id')
            ->join('users', 'order.user_id', '=', 'users.user_id')
            ->where('order.order_status', '=', 'pending')
            ->get();
    
        // Group the results by order ID
        $groupedOrders = $orders->groupBy('order_id')->map(function ($group) {
            $mergedOrder = (object)[
                'order_id' => $group[0]->order_id,
                'user_name' => $group[0]->user_name,
                'contact' => $group[0]->contact, // Include contact
                'p_name' => [],
                'total_price' => 0,
                'payment_method' => null,
                'payment_status' => null,
                'order_status' => null
            ];
    
            foreach ($group as $item) {
                $mergedOrder->p_name[] = $item->p_name;
                $mergedOrder->total_price = $item->total_price;
                $mergedOrder->payment_method = $item->payment_method;
                $mergedOrder->payment_status = $item->payment_status;
                $mergedOrder->order_status = $item->order_status;
            }
    
            return $mergedOrder;
        });
    
        // Remove leading comma from p_names field
        $groupedOrders->transform(function ($item) {
            $item->p_name = implode(', ', $item->p_name);
            return $item;
        });
       // echo "<pre>"; print_r($groupedOrders);die;
        return view('admin.pending_order',compact('groupedOrders'));
    }
    //Order Cancle button
    public function OrderCancle($id){
        // echo $id;die;
        $order =  DB::table('order')
                    ->where('order_id', $id) // Assuming the primary key column is named 'id'
                    ->update(['order_status' => 'Cancelled']);
        return redirect()->route('PendingOrder')->with('cancel','Order Canceled Successfully');            
        
    }
    public function CompleteOrder($id){
        //echo $id;die;
        $order =  DB::table('order')
                    ->where('order_id', $id) // Assuming the primary key column is named 'id'
                    ->update(['order_status' => 'Completed','payment_status'=>'Completed']);
        return redirect()->route('PendingOrder')->with('success','Order Canceled Successfully'); 
    }
    //show Complete Order
    public function ShowCompleteOrder()
    {
        $orders = DB::table('order')
        ->select('order.*', 'order_items.*', 'product.p_name', 'users.name as user_name', 'users.contact')
        ->join('order_items', 'order.order_id', '=', 'order_items.order_id')
        ->join('product', 'order_items.p_id', '=', 'product.p_id')
        ->join('users', 'order.user_id', '=', 'users.user_id')
        ->where('order.order_status', '=', 'Completed')
        ->get();

     // Group the results by order ID
        $groupedOrders = $orders->groupBy('order_id')->map(function ($group) {
        $mergedOrder = (object)[
            'order_id' => $group[0]->order_id,
            'user_name' => $group[0]->user_name,
            'contact' => $group[0]->contact, // Include contact
            'p_name' => [],
            'total_price' => 0,
            'payment_method' => null,
            'payment_status' => null,
            'order_status' => null
        ];

        foreach ($group as $item) {
            $mergedOrder->p_name[] = $item->p_name;
            $mergedOrder->total_price = $item->total_price;
            $mergedOrder->payment_method = $item->payment_method;
            $mergedOrder->payment_status = $item->payment_status;
            $mergedOrder->order_status = $item->order_status;
        }

        return $mergedOrder;
        });

            // Remove leading comma from p_names field
            $groupedOrders->transform(function ($item) {
                $item->p_name = implode(', ', $item->p_name);
                return $item;
            });
        //echo "<pre>"; print_r($groupedOrders);die;
            return view('admin.completed_order',compact('groupedOrders'));

    }
}
