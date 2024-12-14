<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\products;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class ProductController extends Controller
{
    public function insert_product(Request $request)
    {
        
        $product = new products();
        $product->name = $request->input('name');
        $product->ram = $request->input('ram');
        $product->ssd = $request->input('ssd');
        $product->price_noma = $request->input('price_noma');
        $product->price_sale = $request->input('price_sale');
        $product->description = $request->input('description');
        $product->content = $request->input('content');
        $product->avatar = $request->input('avatar');
        if($request->has('product_images')){
            $product_images = implode('*', $request->input('product_images'));
            $product->images = $product_images;
        }
        // dd($request -> all());
        $product->save();
        return redirect()->back();
    }
    public function list_product(){
        $product =products::all();
        // dd($product);
        return view('admin.product.list',[
        'title' => 'Danh Sách Sản Phẩm',
        'products'=> $product
        ]);

    }
    public function add_product(){
        return view('admin.product.add',[
        'title' => 'Thêm Sản Phẩm',
        ]);
    }
    public function delete_product(Request $request){
        products::find($request -> product_id)->delete();
        return response() -> json([
            'success' => true
        ]);
    }
    public function edit_product(Request $request){
        $product = products::find($request -> id);
        return view('admin.product.edit',[
            'title' => 'Sửa Sản Phẩm',
            'product' => $product
        ]);
    }
    public function update_product(Request $request){
        $product = products::find($request -> id);
        $product->name = $request->input('name');
        $product->ram = $request->input('ram');
        $product->ssd = $request->input('ssd');
        $product->price_noma = $request->input('price_noma');
        $product->price_sale = $request->input('price_sale');
        $product->description = $request->input('description');
        $product->content = $request->input('content');
        $product->avatar = $request->input('avatar');
        if($request->has('product_images')){
            $product_images = implode('*', $request->input('product_images'));
            $product->images = $product_images;
        }
        $product->save();
        return redirect('/admin/product/list');
    }
}
