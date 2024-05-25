<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\order;
use App\Models\User;
use App\Models\order_items;
use App\Models\Category;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function viewcategory($slug){
       
            if(Category::where('slug',$slug)->exists())
          {  $products = Product::all();
            $categories = Category::has("products")->get();
            $category=Category::where('slug',$slug)->first();
            $product=Product::where('category_id',$category->id)->get();
            return view('productkitchen',compact('category','product','products','categories'));
          }
          else{
            return redirect('/')->with('warning','Oppes! slug does not exists');
          }

      
    }
    public function productlistAjax(){
        $products=Product::select('title')->get();
        $data=[];
        foreach ($products as  $item) {
            $data[]= $item['title'];
        }
        return $data;

    } 
    public function searchProduct(Request $request){
    
        $searched_product=$request->prodname;
        if($searched_product != ""){
          $products=Product::where("title","LIKE","%$searched_product%")->first();
          if($products){
           return  redirect(route('products.show',$products->slug));
          }
          else 
          {
            return redirect()->back()->with('warning','no product matched your search ');
          }
        }
        else{
            return redirect()->back();
        }
    }
    public function index(){
        return view('pages.acceuiladmin2')->with([
            "products" => Product::all(),
            "orders" => Order::all(),
            "order_items" => Order_items::all(),
            "users" => User::all(),
            "category" => Category::all()
        ]);;
    }
    public function brandspage()

    {   
        
        return view('pages.brands');
    }
    public function dashboardpage()

    {   
        
        return view('pages.dashboard');
    }
    public function getorderspage()

    {   
        
        return view('pages.orders')->with([
            "order_items" => order_items::latest()->paginate(5)
        ]);;
    }
    public function categoriespage()

    {   
        
        return view('pages.categories');
    }
    public function getproductspage()

    {   
        
        return view('pages.products')->with([
            "products" => Product::latest()->paginate(5)
        ]);
    }
    public function settingspage()

    {   
        
        return view('pages.settings');
    }
    
   

}
