<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function insert_slide(Request $request)
    {
        
        $slide = new slide();
        $slide->banner = $request->input('banner');
        $slide->save();
        return redirect()->back();
    }
    public function list_slide(){
        $slide =slide::all();
        return view('admin.slide.list',[
        'title' => 'Danh Sách Banner',
        'slide'=> $slide
        ]);

    }
    public function delete_slide(Request $request){
        slide::find($request -> slide_id)->delete();
        return response() -> json([
            'success' => true
        ]);
    }
    public function add_slide(){
        return view('admin.slide.add',[
        'title' => 'Thêm Banner',
        ]);
    }
    public function edit_slide(Request $request){
        $slide = slide::find($request -> id);
        return view('admin.slide.edit',[
            'title' => 'Sửa Banner',
            'slide' => $slide
        ]);
    }
    public function update_slide(Request $request){
        $slide = slide::find($request -> id);
        $slide->banner = $request->input('banner');
        $slide->save();
        return redirect('/admin/slide/list');
    }
}
