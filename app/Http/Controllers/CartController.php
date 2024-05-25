<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CartController extends Controller
{
    
    //
    public function index()
    {
        return view("cart.index")->with([
            "items" => \Cart::getContent(),
            "categories" => Category::all(),
        ]);
    }
        public function addProductToCart(Request $request, Product $product)
    {
        
        \Cart::add(array(
            "id" => $product->id,
            "name" => $product->title,
            "price" => $product->price,
            "quantity" => $request->qty,
            "attributes" => array(),
            "associatedModel" => $product,
         
           
        ));
       
        return redirect()->route("cart.index");
    }

     //update item on cart
     public function updateProductOnCart(Request $request, Product $product)
     {
         \Cart::update($product->id, array(
             'quantity' => array(
                 'relative' => false,
                 'value' => $request->qty
             ),
         ));
         return redirect()->route("cart.index");
     }
      //remove item from cart
    public function removeProductFromCart(Product $product)
    {
        \Cart::remove($product->id);
        return redirect()->route("cart.index");
    }
}
