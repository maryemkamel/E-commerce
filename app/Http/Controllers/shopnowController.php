<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class shopnowController extends Controller
{
    
    public function index(){
        return view('shopnow')->with(
            [
                "products" => Product::all(),
                "categories" => Category::has("products")->get(),
            ]
        );
    }

   
}