<?php

namespace App\Http\Controllers;

use App\Models\slide;
use Illuminate\Http\Request;

class SlideFrontend extends Controller
{
    public function list_slide(){
        $slides = slide::all();
        return view('shop.part.slide',[
        'slides'=> $slides
        ]);

    }
    
}
