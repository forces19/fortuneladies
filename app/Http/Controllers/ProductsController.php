<?php

namespace App\Http\Controllers;
use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $product = Products::all();
        return view('products',compact('product'));
    }
}
