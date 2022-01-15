<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PageController extends Controller
{
    //
    public function index(){
        $products = Product::get();
        return view('index',compact('products'));
    }
}
