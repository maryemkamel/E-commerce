


@extends('master')

@section('content')
@csrf
<div class="super_container">
 <div class="content-wrapper"> 
    <!-- Content Header (Page header)
     <!-- Main content -->
     <section class="content">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              
           
        </div><!-- /.container-fluid -->
      </section>
      <div class="card" style=" position:absolute;height:80%;width: 60%;left:23%;">
        <div class="card-header" style="font-size: 20px;color:black;">
            Product Information
        </div>
        <div class="card-body" >
        <form method="post" action="{{ route("products.store") }}" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <input type="text"
                            name="title"
                            placeholder="Title"
                            class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="description" placeholder="Description"
                                cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="number"
                                name="price"
                                placeholder="Price"
                                class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="number"
                            name="old_price"
                            placeholder="Old Price"
                            class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="number"
                            name="inStock"
                            placeholder="In Stock"
                            class="form-control">
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
                                    <option value="{{ $category->id }}">
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
                                    <option value="{{ $brand->id }}">
                                        {{ $brand->brand_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-secondary" style="position: absolute; left:89%; top: 590px;">
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
    
   