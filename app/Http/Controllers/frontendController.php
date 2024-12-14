<?php

namespace App\Http\Controllers;
use App\Models\order;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
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
        $order -> token = $request -> $token;
        $order -> save();
        return redirect('/shop/order_confirm');
    }
    public function show_orderconfirm(Request $request){
        $order = order::find($request -> id);
        return view('shop.order_confirm',[
        'order' => $order
        ]);
    }
    
}
