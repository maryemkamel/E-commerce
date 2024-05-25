<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Rating;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Controllers\welcomeController;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('welcome')->with([
            "products" => Product::latest()->paginate(10),
            "categories" => Category::has("products")->get(),
            "brands" => Brand::has("products")->get(),
        ]);

         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function create()
    {
        //
        return view("products.addproduct")->with([
            "categories" => Category::all(),
            "brands" => Brand::all()
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            "title" => "required|min:3",
            "description" => "required|min:5",
            "image" => "required|image|mimes:png,jpg,jpeg|max:2048",
            "price" => "required|numeric",
            "category_id" => "required|numeric",
            "brand_id" => "required|numeric",
        ]);

        //add data
        if ($request->has("image")) {
            $file = $request->image;
            $imageName = "images/products/" . time() . "_" . $file->getClientOriginalName();
            $file->move(public_path("images/products"), $imageName);
            $title = $request->title;

            Product::create([
                "title" => $title,
                "slug" => Str::slug($title),
                "description" => $request->description,
                "price" => $request->price,
                "old_price" => $request->old_price,
                "inStock" => $request->inStock,
                "category_id" => $request->category_id,
                "brand_id" => $request->brand_id,
                "image" => $imageName,
            ]);
            return redirect()->route("productspage")
                ->withSuccess("Product added");
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,Product $product)

    {      
        $request->session()->put('id', $product['id']);
        //
        return view("products.show")->with([
            
           "rating"=> Rating::all(),
            "product" => $product,
            "categories" => Category::all(),
           
          
           
            
        ]);
       
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return view("products.edit")->with([
            "product" => $product,
            "categories" => Category::all(),
            "brands" => Brand::all()
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
  //validation
  public function update(Request $request, Product $product)
  {
      //validation
      $this->validate($request, [
          "title" => "required|min:3",
          "description" => "required|min:5",
          "image" => "image|mimes:png,jpg,jpeg|max:2048",
          "price" => "required|numeric",
          "category_id" => "required|numeric",
          "brand_id" => "required|numeric",
      ]);

      //update data
      if ($request->has("image")) {
          $image_path = public_path("images/products/" . $product->image);
          if (File::exists($image_path)) {
              unlink($image_path);
          }
          $file = $request->image;
          $imageName = "images/products/" . time() . "_" . $file->getClientOriginalName();
          $file->move(public_path("images/products"), $imageName);
          $product->image = $imageName;
      }
      $title = $request->title;
      $product->update([
          "title" => $title,
          "slug" => Str::slug($title),
          "description" => $request->description,
          "price" => $request->price,
          "old_price" => $request->old_price,
          "inStock" => $request->inStock,
          "category_id" => $request->category_id,
          "brand_id" => $request->brand_id,
          "image" =>  $product->image,
      ]);
      return redirect()->route("productspage")
      ->withSuccess("Product updated");}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
         //delete data
         $image_path = public_path("images/products/" . $product->image);
         if (File::exists($image_path)) {
             unlink($image_path);
         }
         $product->delete();
         return redirect()->route("productspage")
             ->withSuccess("Product deleted");
    }
}
