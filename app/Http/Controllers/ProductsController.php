<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function fnb(){
        return view('products.fnb')
        ->with('category', 'Food and Beverage');
    }


    public function bah(){
        return view('products.bah')
        ->with('category', 'Beauty and Healthy');
    }

    public function hc(){
        return view('products.hc')
        ->with('category', 'Home Care');
    }

    public function bk(){
        return view('products.bk')
        ->with('category', 'Baby Kid');
    }
}
