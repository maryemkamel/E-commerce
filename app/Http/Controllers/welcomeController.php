<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    
    public function index(){
        return view('welcome')->with(
            [
                "products" => Product::latest()->paginate(10),
                "categories" => Category::has("products")->get(),
            ]
        );
    }

    public function getProductByCategory(Category $category)
    {
        $products = $category->products()->paginate(10);

        return view('welcome')->with([
            "products" => $products,
            "categories" => Category::has("products")->get(),
        ]);
    }
}