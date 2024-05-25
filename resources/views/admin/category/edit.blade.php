


@extends('master1')

@section('content')
@csrf
<head>
  <style>
    img {
      left:20px;
    }
  </style>
</head>

 <div class="content-wrapper"> 
    <!-- Content Header (Page header)
     <!-- Main content -->
     <section class="content">
      <section class="content-header">
        <!-- <div class="container-fluid"> -->
          <!-- <div class="row mb-2"> -->
            <div class="col-sm-9">
              <div class="row" style="left: 200px;"> 
            
                    <h3 style="margin-left: 4px;">Edit/Update Category</h3>
                    
              </div>
              <div class="card"  style="height: 90%;postion:absolute;bottom:40%">
              
              <div class="card-body"> 
              
                    <form action="{{url('update-category/' .$category->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("POST")
                    <div class="row"> 
                      <div class="col-md-6 mb-3">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="name" value="{{ $category->title }}">
                      </div>
                      <div class="col-md-6">
                        <label for="">slug</label>
                        <input type="text" row="3" class="form-control" name="slug" value="{{ $category->slug }}">
                      </div>
                      <div class="col-md-12 mb-3">
                        <label for="">description</label>
                        <textarea row="3" name="description" class="form-control">{{ $category->description }}</textarea>
                      </div> 
                      <div class="col-md-12 mb-3">
                        
                            <input type="file"
                            name="image"
                            class="form-control">
                        </div>
                      
                      <div class="form-group" style="postion:absolute;left:20px">
                            <img src="{{ asset($category->image) }}"
                            width="200";
                            height="200";
                            postion:absolute;
                            left:20px;
                            >
                        </div>
                        
                             
                     
                      <div class="col-md-12">
                        <button type="submit"  class="btn btn-secondary" >Submit</button>
                      </div>
                    </div>
                    
                    </form>
                </div>   
              </div>  
              </div>
              

            
            
          
        
        <!-- /.container-fluid -->
      </section>
    </section>
    <!-- /.content -->

      <a id="back-to-top" href="#" class="btn btn-secondary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
      </a>

  </div>

    
@endsection