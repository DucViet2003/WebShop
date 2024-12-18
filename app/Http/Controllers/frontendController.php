<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\order;
use App\Models\products;
use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
class frontendController extends Controller
{
    public function index(){
        $products = products::all();
        return view('shop.home',[
            'products' => $products
        ]);
    }
    public function show_allhotproduct() {
        $products = products::all();  // Lấy tất cả các sản phẩm từ bảng Product
        return view('shop.allproduct', [
            'products' => $products   // Truyền biến $products vào view
        ]);
    }
    
    public function show_product(Request $request){
        $product = products::find($request -> id);
        return view('shop.product', [
            'product' =>  $product,
            
        ]);
    }
    //cart
    public function add_cart(Request $request){
        $product_id = $request -> product_id;
        $product_qty = $request -> product_qty;
        if(is_null(Session::get('cart'))){
            Session::put('cart',[
                $product_id => $product_qty 
            ]);
            return redirect('/shop/cart');
        }
        else {
            $cart = Session::get('cart');
            if(Arr::exists($cart,$product_id)){
                $cart[$product_id]= $cart[$product_id] + $product_qty;
                Session::put('cart',$cart);
                return redirect('/shop/cart');
            }
            else {
                $cart[$product_id]= $product_qty;
                Session::put('cart',$cart);
                return redirect('/shop/cart');
            }
        }
    }
    public function show_cart(){
        $cart = Session::get('cart');
        $product_id = array_keys($cart);
        $products = products::whereIn('id',$product_id) -> get();
        return view('shop.cart',[
            'products' => $products
        ]);
    }
    public function delete_cart(Request $request){
        $cart = Session::get('cart');
        $product_id = $request -> id;
        unset($cart[$product_id]);
        Session::put('cart',$cart);
        return redirect('/shop/cart');
    }
    public function update_cart(Request $request){
        $cart = $request -> product_id;
        Session::put('cart',$cart);
        return redirect('/shop/cart');
    }
    public function send_cart(Request $request){
        
        $token = Str::random(12);
        $order = new order;
        $order -> name = $request -> input('name');
        $order -> phone = $request -> input('phone');
        $order -> email = $request -> input('email');
        $order -> city = $request -> input('city');
        $order -> district = $request -> input('district');
        $order -> ward = $request -> input('ward');
        $order -> address = $request -> input('address');
        $order -> note = $request -> input('note');
        $order_detail  = json_encode($request -> input('product_id'));
        $order -> order_deail = $order_detail;
        $order -> token =  $token;
        $order -> save();
        Session::flush('cart');
        $mailinfo =  $order -> email ;
        $nameinfo = $order -> name;
        
        $Mail = Mail::to($mailinfo) -> send(new TestMail($nameinfo));
        // Notification::send($order, new EmailNotification($nameinfo));
        Notification::route('mail', 'vietchymte@gmail.com')
                ->notify(new EmailNotification($nameinfo));

        return redirect('/shop/order_confirm');
    }
    public function show_login(){
        return view('login');
    }
    public function check_login(Request $request){
        if(Auth::attempt([
            'email' => $request -> input('email'), 
            'password' => $request -> input('password')
        ]
    ))
    {
        return redirect('admin');
    }
       return redirect()-> back();
    
    ;
}
public function logout(Request $request) {
    Auth::logout(); // Đăng xuất người dùng
    $request->session()->invalidate(); // Xóa toàn bộ session
    $request->session()->regenerateToken(); // Tạo lại CSRF token mới

    return redirect('/login'); // Chuyển hướng về trang chủ hoặc trang đăng nhập
}
}

