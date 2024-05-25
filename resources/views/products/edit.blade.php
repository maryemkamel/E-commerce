@extends('master')

@section('content')
@csrf
<div class="super_container">
 <div class="content-wrapper" style="overflow:scroll;"S> 
    <!-- Content Header (Page header)
     <!-- Main content -->
     <section class="content">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              
           
        </div><!-- /.container-fluid -->
      
     
      <div class="card" style="width: 70%;left:2%;">
        <div class="card-header" style="font-size: 20px;color:black;">
            Product Information
        </div>
        <div class="card-body"> 
        <form method="post" action="{{ route('products.update',$product->slug) }}" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="form-group">
                            <input type="text"
                            name="title"
                            placeholder="Titre"
                            value="{{ $product->title }}"
                            class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="description" placeholder="Description"
                                cols="30" rows="3" class="form-control">{{ $product->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="number"
                                name="price"
                                placeholder="Prix"
                                value="{{ $product->price }}"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="number"
                            name="old_price"
                            placeholder="Prix Ancien"
                            value="{{ $product->old_price }}"
                            class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="number"
                            name="inStock"
                            placeholder="Quantité en stock"
                            value="{{ $product->inStock }}"
                            class="form-control">
                        </div>
                        <div class="form-group">
                            <img src="{{ asset($product->image) }}"
                            width="200"
                            height="200"
                            alt="{{ $product->title }}">
                        </div>
                        <div class="form-group">
                            <input type="file"
                            name="image"
                            class="form-control">
                        </div>
                        <div class="form-group">
                            <select name="category_id" class="form-control">
                                <option value="" selected disabled>
                                    Choose a category
                                </option>
                                @foreach ($categories as $category)
                                    <option
                                    {{ $product->category_id === $category->id ? "selected" : "" }}
                                    value="{{ $category->id }}">
                                        {{ $category->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="brand_id" class="form-control">
                                <option value="" selected disabled>
                                Choose a brand
                                </option>
                                @foreach ($brands as $brand)
                                    <option
                                    {{ $product->brand_id === $brand->id ? "selected" : "" }}
                                    value="{{ $brand->id }}">
                                        {{ $brand->brand_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-secondary">
                                Submit
                            </button>
                        </div>
                    </form>
                    </div>
          </section>
        </section>
         
    <!-- /.content -->

      <a id="back-to-top" href="#" class="btn btn-secondary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
      </a>

  </div>
  @endsection
</div> 
    
   