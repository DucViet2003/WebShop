<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\order;
use App\Models\products;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list_order(){
        $orders = order::all();
        return view('admin.order.list',[
        'orders' => $orders,
        'title' => 'Danh Sách Đơn Hàng'
        ]);
    }
    public function delete_order(Request $request){
        order::find($request -> order_id)->delete();
        return response() -> json([
            'success' => true
        ]);
    }
   
    public function detail_order(Request $request){
        $order_detail = json_decode($request -> order_detail,true);
        $product_id = array_keys($order_detail);
        $products = products::whereIn('id',$product_id) -> get();
        return view('admin.order.detail',[
            'products' => $products,
            'order_detail' => $order_detail,
            'title' => 'Chi Tiết Đơn Hàng'
        ]);
    }
    public function show_orderconfirm(Request $request){
        $order = order::find($request -> id);
        return view('shop.order_confirm',[
        'order' => $order
        ]);
    }
}