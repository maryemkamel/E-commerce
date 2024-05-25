<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
//use Carbon\Carbon;

class BrandController extends Controller
{
    public function index()

    {   $brands = Brand::latest()->get();
        
        return view('admin.brand.index',compact('brands'));
    }
    public function addpage()

    { 
        
        return view('admin.brand.add');
    }
     // Store data
    public function Store(Request $request)

    {  
         $request->validate([
            'brand_name' =>'required|unique:brands,brand_name'
        
            ]);

        Brand::insert([
            'brand_name' => $request->brand_name,
            
        ]) ;
        return redirect('admin/brand');
    }
    //Edit data
    public function Edit($brand_id)
    {
        $brand = Brand::find($brand_id);
        return view('admin.brand.edit',\compact('brand'));
    }
    public function Delete($brand_id)
    {
        Brand::find($brand_id)->delete();
        return redirect('admin/brand');
    } 
    // public function Inactive($brand_id)
    // {
    //     Brand::find($brand_id)->update(['status' =>0]);
    //     return redirect('admin/brand');
    // }
    // public function Active($brand_id)
    // {
    //     Brand::find($brand_id)->update(['status' =>1]);
    //     return redirect('admin/brand');
    // }
    
    public function Update(Request $request)
  
    {  
         $request->validate([
            'brand_name' => 'required'
        
            ]);
            $brand_id = $request->id;

        Brand::find($brand_id)->update([
            'brand_name' => $request->brand_name,
            
        ]) ;
        return redirect('admin/brand');
    } 

}
