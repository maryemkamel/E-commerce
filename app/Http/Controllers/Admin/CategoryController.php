<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use File;

class CategoryController extends Controller
{
    
    public function index(){
      $category = Category::all();
      return view('admin.category.index',compact('category'));

}
public function add(){
    //   return view('admin.category.index');
      return view('admin.category.add');
}
public function insert(Request $request){
    $category = new Category();
    if ($request->has("image")) {
        $file = $request->image;
        $imageName = "assets/uploads/" . time() . "_" . $file->getClientOriginalName();
        $file->move(public_path("assets/uploads"), $imageName);
       
   
        $category->image =  $imageName;
    }
        $category->title = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->save();
        return redirect('/categories')->with('status',"Category Added Successfully");
   
}
public function edit($id){
    $category = Category::find($id);
    return view('admin.category.edit',compact('category'));
}
public function update(Request $request,$id){
    $category = Category::find($id);
     
        if ($request->has("image")) {
            $image_path = public_path("assets/uploads/" . $category->image);
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $file = $request->image;
            $imageName = "assets/uploads/" . time() . "_" . $file->getClientOriginalName();
            $file->move(public_path("assets/uploads"), $imageName);
            $category->image = $imageName;
        
    }
        $category->title = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->update();
        return redirect('/categories')->with('status',"Category Added Successfully");
    
}
public function destroy($id){
    $category = Category::find($id);
    if($category->image ){
        $path = 'assets/uploads/category/'.$category->image;
        if(File::exists($path))
        {
            File::delete($path);
        }
    }

        $category->delete();
    return redirect('/categories')->with('status',"Category Added Successfully");
}
}