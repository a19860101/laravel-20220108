<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PageController extends Controller
{
    //
    public function index(){
        $new_products = Product::orderBy('created_at','DESC')->limit(4)->get();
        $sale_products = Product::orderBy('created_at','DESC')->where('sale','!=',null)->limit(4)->get();
        return view('index',compact('new_products','sale_products'));

    }
}
