<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\products;
abstract class Controller
{
    

   // Controller
public function header() {
    $cartCount = session()->get('cart') ? array_sum(array_column(session()->get('cart'), 'quantity')) : 0;
    return view('header', compact('cartCount'));
}

    
}
