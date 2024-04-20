<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/menu', [UserController::class, 'menu'])->name('menu');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::post('/store_contact', [UserController::class, 'store_contact'])->name('store_contact');
Route::get('/registeration', [UserController::class, 'showRegistration'])->name('register');
Route::post('/registration_store', [UserController::class, 'registration_store'])->name('store_register');

//login URL's
Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
Route::get('/logout',[AdminAuthController::class,'logout'])->name('logout');

//  ******  Admin Route's   *****
Route::post('/store_login', [AdminAuthController::class, 'login'])->name('store_login');
//dashboard URL
Route::get('/dashboard',[AdminAuthController::class,'dashboard'])->name('dashboard')->middleware('is_admin');
//Manage category :: 1>Add category
Route::get('/add_category', [AdminAuthController::class, 'add_cat'])->name('add_category')->middleware('is_admin');
//Store category into category table
Route::post('/store_category', [AdminAuthController::class, 'store_category'])->name('store_category')->middleware('is_admin');
//to see all category from database
Route::get('/all_category', [AdminAuthController::class, 'show_category'])->name('all_category')->middleware('is_admin');
//to delete an category
Route::get('/delete_categroy/{cat_id}', [AdminAuthController::class, 'delete_category'])->name('delete_categroy')->middleware('is_admin');
//to update category
Route::get('/edit_category/{cat_id}', [AdminAuthController::class, 'edit_category'])->name('edit_category')->middleware('is_admin');
Route::post('/update_category/{cat_id}', [AdminAuthController::class, 'update_cat'])->name('update_category')->middleware('is_admin');
//manage user see all the user's
Route::get('/all_users', [AdminAuthController::class, 'showUsers'])->name('all_users')->middleware('is_admin');
Route::get('/admin_pro/{user_id}', [AdminAuthController::class, 'showUser'])->name('admin_pro')->middleware('is_admin');
//all contact list
Route::get('/all_contact', [AdminAuthController::class, 'showContact'])->name('all_contact')->middleware('is_admin');
//all feed_back list
Route::get('/all_feedback', [AdminAuthController::class, 'showFeedBack'])->name('all_feedback')->middleware('is_admin');
//Manage product URl
Route::get('/all_product', [AdminAuthController::class, 'showProduct'])->name('all_product')->middleware('is_admin');
//add product URL and declare with store url
Route::get('/add_product', [AdminAuthController::class, 'addProduct'])->name('add_product')->middleware('is_admin');
Route::post('/store_product/{user_id}', [AdminAuthController::class, 'storeProduct'])->name('store_product')->middleware('is_admin');
//to delete an product
Route::get('/delete_product/{p_id}', [AdminAuthController::class, 'DeleteProduct'])->name('delete_product')->middleware('is_admin');
//to update product
Route::get('/updateproduct/{p_id}', [AdminAuthController::class, 'EditProduct'])->name('updateproduct')->middleware('is_admin');
Route::match(['get', 'post'], '/edit_product/{p_id}', [AdminAuthController::class, 'Store_Product'])->name('edit_product')->middleware('is_admin');
//Manage Event's URL's
Route::get('/All_bookings', [AdminAuthController::class, 'ShowEvents'])->name('All_bookings')->middleware('is_admin');
//accept event requet
Route::get('/accept_event/{e_id}', [AdminAuthController::class, 'AcceptEvent'])->name('accept_event')->middleware('is_admin');
//reject event request
Route::get('/reject_event/{e_id}', [AdminAuthController::class, 'RejectEvent'])->name('reject_event')->middleware('is_admin');
//completed evet request
Route::get('/completed_event/{e_id}', [AdminAuthController::class, 'CompletedEvent'])->name('completed_event')->middleware('is_admin');
//Pendig Orders
Route::get('/PendingOrder',[AdminAuthController::class,'PendingOrder'])->name('PendingOrder')->middleware('is_admin');
//cancle order
Route::get('/cancle_order/{o_id}', [AdminAuthController::class, 'OrderCancle'])->name('order_cancle')->middleware('is_admin');
//Complete-order
Route::get('/complete_order/{o_id}', [AdminAuthController::class, 'CompleteOrder'])->name('order_complete')->middleware('is_admin');
// Show all Completed Order
Route::get('/CompleteOrder',[AdminAuthController::class,'ShowCompleteOrder'])->name('CompleteOrder')->middleware('is_admin');





//  *****   User Route's    *****
//Feed-back page
Route::get('/feedBack', [UserController::class, 'FeedBack'])->name('feedBack')->middleware('is_admin');
//Store feed-back into feed-back table
Route::post('/store_Feedback/{user_id}', [UserController::class, 'storeFeedback'])->name('store_Feedback')->middleware('is_admin');
//menu page
Route::get('/menu', [UserController::class, 'ShowMenu'])->name('menu')->middleware('is_admin');
//event's page
Route::get('/table-booking/{user_id}', [UserController::class, 'ShowEvents'])->name('events')->middleware('is_admin');
//to make event with us
Route::get('/book_table', [UserController::class, 'AddEvent'])->name('add_event')->middleware('is_admin');
Route::post('/store_booking/{user_id}', [UserController::class, 'Store_event'])->name('store_Event')->middleware('is_admin');
//cancle the event request
Route::get('/cancle/{e_id}', [UserController::class, 'CancelEvents'])->name('cancle')->middleware('is_admin');
//Use-Profile page 
Route::get('/profile/{user_id}', [UserController::class, 'UserProfile'])->name('user_profile')->middleware('is_admin');
//update profile
Route::post('/update_profile/{user_id}', [UserController::class, 'UpdateUserProfile'])->name('update_profile')->middleware('is_admin');
//  ADD-TO-CART process
Route::post('/add-to-cart', [UserController::class, 'AddToCart'])->name('add-to-cart')->middleware('is_admin');
//  Show - Cart page
Route::get('/cart', [UserController::class, 'showCart'])->name('cart')->middleware('is_admin');
// Select-pyment method page
Route::match(['get', 'post'], '/select-payment', [UserController::class, 'SelectPaymentPage'])->name('select')->middleware('is_admin');// Place - Order on Cash - on - Delivery
Route::post('/placeorder/{user_id}',[UserController::class,'PlaceOrder'])->name('placeorder')->middleware('is_admin');


//success page
Route::post('/success/{order_id}',[UserController::class,'success'])->name('success')->middleware('is_admin');

// My-Orders
Route::get('/myorder/{user_id}', [UserController::class, 'MyOrders'])->name('myorder')->middleware('is_admin');
