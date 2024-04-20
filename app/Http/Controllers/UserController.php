<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Area;
use App\Models\FeedBack;
use App\Models\Product;
use App\Models\Eventmodel;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;
use Razorpay\Api\Api;

class UserController extends Controller
{
    //
    public function index(){
        return view('user.home');
    }
    //about function
    public function about(){
        return view('user.about');
    }
    //contact us function
    public function contact(){
        return view('user.contact');
    }
    public function store_contact(Request $request){
        /*echo "<pre>";
        print_r($request);echo "</pre>";die;  */
        $contact = new Contact;
        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->contact_no = $request['contact'];
        $contact->subject = $request['subject'];
        $contact->msg = $request['msg'];
        $contact->save();
        return redirect()->route('home')->with('contact','Contact details Sended');
    }
    //Registeration function
    public function showRegistration(){
        $areas = Area::all();
        $data = compact('areas');
        return view('user.register')->with($data); 
    }
    public function registration_store(Request $request){
        ini_set('memory_limit', '1024M');
        $users = new User();
        $password = $request['password'];
        $cpassword = $request['cpassword'];
        $imageName = $request->file('image')->getClientOriginalName();
        //$request->file('image')->storeAs('images', $imageName, 'public')
        if($password == $cpassword){
            $users->name = $request['name'];
            $users->email = $request['email'];
            $users->contact = $request['contact'];
            $users->address = $request['address'];
            $users->area_id = $request['area'];
            $users->role_id = '2';
            $users->gender = $request['gender'];
            $users->image = $imageName;
            $users->password = bcrypt($password);
            $users->email_verified_at = now();
            /*echo "<pre>";
            print_r($users);die;
            echo "</pre>";*/
            $request->file('image')->storeAs('user/upload', $imageName, 'public');
            $users->save();
            return redirect()->route('login')->with('registered','Registration successfully...');
            
        }else{
            return redirect()->route('register')->with('error','password are not matched');
        }
        
    }
    //feed-back view and storeFeedback function is used to store feedback into databases...
    public function FeedBack(){
        return view('user.feed_back');
    }
    public function storeFeedback(Request $request,$id){
        $rating = $request['rating'];
        $msg = $request['msg'];
        $user_id = $id;
        //echo $rating;die;
        //storing into database
        $feedback = new FeedBack;
        $feedback->user_id = $user_id;
        $feedback->rating = $rating;
        $feedback->msg = $msg;
        $feedback->save();
        return redirect()->route('home')->with('feedback','FeedBack  Sended.....');
    }
    //showing menu to user for order
    public function ShowMenu(){
        $foods = Product::where('is_delete','0')->get();
        $categories = Category::all();
        return view('user.menu',compact('foods','categories'));
    }

    public function ShowEvents($id){
        $events = Eventmodel::join('users', 'book_table.user_id', '=', 'users.user_id')
                        ->where('book_table.user_id', $id)
                        ->select('book_table.*', 'users.name', 'users.contact', 'users.email')
                        ->get();
        //echo "<pre>"; print_r($events);die; echo "</pre>";
        return view('user.events',compact('events'));
    }
    //to show add an event form
    public function AddEvent(){
        //for event form view
        return view('user.add_event');
    }
    public function Store_event(Request $request,$id){
       $date = $request['date'];
       //$e_type = $request['e_type'];
       $status = 'Pending';
       $title = $request['name'];
       $s_time = $request['s_time'];
       $e_time = $request['e_time'];
       /*
       echo $date;
       echo "<br>"; echo $s_time; echo "<br>"; echo $e_time;echo "<br>";echo $status; echo "<br>"; echo $id;
       echo "<br>"; echo $title;die(); */
       $event = new Eventmodel;
       $event->user_id = $id;
       $event->b_date = $date;
       $event->starting_time = $s_time;
       $event->ending_time = $e_time;
       $event->booking_name = $title;
       $event->status = $status;
       $event->save();
       return redirect()->route('home')->with('booking','booking request  Sended.....');
    }
    //for cancle the event request by the users
    public function CancelEvents($id){
        $event = Eventmodel::where('b_id', $id)
        ->update(['status' => 'Cancelled by the user']);
        if($event > 0)
            {
                return redirect()->route('home')->with('Rejected','Booking  Cancelled...'); 
            }
    }

    //Profile page method
    public function UserProfile($id){
        $users = User::where('user_id',$id)->first();
        $areas = Area::all();
     
         /* echo "<pre>";
        print_r($users);
        echo "</pre>";die;
        $name = $users->name;
        $id = $users->user_id;
        $email = $users->email;
        echo $name."<br>".$email."<br>".$id;die;*/
        return view('user.profile',compact('users','areas'));
    }   
    //update-profile
    public function UpdateUserProfile($id,request $request){
      // echo "<pre>"; print_r($request); echo "</pre>";die;
      $users = new User();
      ini_set('memory_limit', '1024M');
      $name = $request['name'];
      $email = $request['email'];
      $contact = $request['contact'];
      $gender = $request['gender'];
      $address = $request['address'];
      $password = $request['password'];
      $pass = bcrypt($password);
      $cpassword = $request['cpassword'];
      $area = $request['area'];
      $imageName = $request->file('image')->getClientOriginalName();
        //$request->file('image')->storeAs('images', $imageName, 'public')
        if($password == $cpassword){
            $user = DB::table('users')
            ->where('user_id',$id)
            ->update([
                'name' => $name,
                'email' => $email,
                'contact' => $contact,
                'gender' => $gender,
                'address' => $address,
                'password' => $pass,
                'image' => $imageName,
                'area_id' => $area,
            ]);
            $request->file('image')->storeAs('user/upload', $imageName, 'public');
            return redirect()->back()->with('success', 'Profile updated successfully');
        }
        /*
            echo $name;echo "<br>";echo $email;echo "<br>";echo $contact;echo "<br>";echo $gender;echo "<br>";
            echo $password;echo "<br>";echo $cpassword;echo "<br>";
            echo $address;echo "<br>";
            echo $imageName;echo "<br>";echo $area; die;
      */
    }

    public function addToCart(Request $request)
    {
       // echo "<pre>"; print_r($request->all());die; echo"</pre>";
       $p_id = $request->input('product_id');
       $q_id = $request->input('quantity');
       $productData = Product::where('p_id',$p_id)->first();  
       
       // For debugging purposes
        /* echo "<pre>"; 
        echo "Product ID: " . $p_id . "<br>";
        print_r($productData);
        die; */
        $cart = session()->get('cart', []);
        $cart[$p_id] = [
            'p_id' => $p_id,
            'name' => $productData->p_name,
            'price' => $productData->price,
            'p_image' => $productData->p_image,
            'quantity' => $q_id
        ];
        session()->put('cart', $cart);

        return redirect()->route('menu')->with('success', 'Product added to cart successfully.');
    }

    public function showCart()
    {
        $carts = session()->get('cart', []);
        // Calculate total price here
        $totalPrice = 0;
        foreach($carts as $index => $cart) {
            $totalPrice += $cart['price'] * $cart['quantity'];
        }
        return view('user.show_cart', compact('carts','totalPrice'))->with('success');
    }

    public function SelectPaymentPage(request $request){
        $totalprice = $request['total_price'];
        $cart = session()->get('cart', []);
      // echo "<pre>"; print_r($cart); echo "</pre>";
      // echo $totalprice;die;
        return view('user.select_pay_method',compact('totalprice','cart'));
    }

    public function PlaceOrder(Request $request, $id) {
        $p_type = $request->input('payment_method');
        $price = $request->input('total_price');
        $cart = $request->session()->get('cart', []);
       // echo $p_type;die;
       $user = User::where('user_id', $id)->first();
      // echo "<pre>";
      // print_r($user);die;

        if ($p_type == 'cash') {
            $order = new Order();
            $order->user_id = $id;
            $order->total_price = $price;
            $order->payment_method = $p_type;
            $order->payment_status = 'Pending';
            $order->order_status = 'Pending'; // Set initial order status
            $order->save();
    
            // Get the order_id of the newly created order
            $order_id = $order->id;
    
            // Store each item from the cart as an order item
            foreach ($cart as $item) {
                $orderItem = new OrderItem();
                $orderItem->order_id = $order_id;
                $orderItem->p_id = $item['p_id'];
                $orderItem->quantity = $item['quantity'];
                $orderItem->price = $item['price'];
                $orderItem->save();
            }
            // Clear the cart session data
            $request->session()->forget('cart');
            return redirect()->route('home')->with('order', 'Order successfully.');
        } elseif ($p_type == 'razorpay') {
            $order = new Order();
            $order->user_id = $id;
            $order->total_price = $price;
            $order->payment_method = $p_type;
            $order->payment_status = 'Pending';
            $order->order_status = 'Pending'; // Set initial order status
            $order->save();
    
            // Get the order_id of the newly created order
            $order_id = $order->id;
            
    
            // Store each item from the cart as an order item
            foreach ($cart as $item) {
                $orderItem = new OrderItem();
                $orderItem->order_id = $order_id;
                $orderItem->p_id = $item['p_id'];
                $orderItem->quantity = $item['quantity'];
                $orderItem->price = $item['price'];
                $orderItem->save();
            }
            // Clear the cart session data
            $request->session()->forget('cart');
            
            return view('user.payment', compact('order_id', 'price','user'));

        }
    
        // Redirect or return response as needed
    }

    public function MyOrders($id){
       // echo $id ;die;
       $order = DB::table('order')
                    ->select('order.*', 'order_items.*', 'product.p_name')
                    ->join('order_items', 'order.order_id', '=', 'order_items.order_id')
                    ->join('product', 'order_items.p_id', '=', 'product.p_id')
                    ->where('order.user_id', '=', $id)
                    ->get();
   
        // Group the results by order ID
        // Group the results by order ID manually
        $groupedOrders = $order->groupBy('order_id')->map(function ($group) {
            return $group->reduce(function ($result, $item) {
                $result->p_name .= ", " . $item->p_name;
                $result->total_price = $item->total_price; // Assign the total price directly
                $result->payment_method = $item->payment_method; // Use the payment method from any item in the group
                $result->payment_status = $item->payment_status; // Use the payment status from any item in the group
                $result->order_status = $item->order_status; // Use the order status from any item in the group
                // You can add more fields to merge as needed
                return $result;
            }, (object)[
                'order_id' => $group[0]->order_id, // Assuming order ID is the same for all items in a group
                'p_name' => '',
                'total_price' => 0,
                'payment_method' => '', // Initialize payment method
                'payment_status' => '', // Initialize payment status
                'order_status' => '', // Initialize order status
                // Add more fields here if needed
            ]);
        });
         // Remove leading comma from p_name field
            $groupedOrders->transform(function ($item) {
                $item->p_name = ltrim($item->p_name, ', ');
                return $item;
            });
            
       //echo "<pre>"; print_r($groupedOrders); die; echo "</pre>";
        return view('user.my_order',compact('groupedOrders'));
    }

    //Razorpaypayment page
   
    //get the success page
    public function success(request $request,$id){
        $order =  DB::table('order')
                ->where('order_id', $id)
                ->update(['payment_status' => 'Completed']);
        return redirect()->route('home')->with('payment_success','Order Successfully...');
    }
}