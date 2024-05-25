


@extends('master1')

@section('content')
@csrf

 <div class="content-wrapper"> 
    <!-- Content Header (Page header)
     <!-- Main content -->
     <section class="content">
      <section class="content-header">
        <!-- <div class="container-fluid"> -->
          <!-- <div class="row mb-2"> -->
            <div class="col-sm-9">
              <div class="row" style="left: 200px;"> 
            
                    <h3 style="margin-left: 4px;">Add Category</h3>
                    
              </div>
              <div class="card" >
              
              <div class="card-body" style="postion:absolute;height: 100%;bottom:40%"> 
              
                    <form action="{{url('insert-category')}}" method="POST"  enctype="multipart/form-data">
                        @csrf
                    <div class="row"> 
                      <div class="col-md-6 mb-3">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="name">
                      </div>
                      <div class="col-md-6">
                        <label for="">slug</label>
                        <input type="text" row="3" class="form-control" name="slug">
                      </div>
                      <div class="col-md-12 mb-3">
                        <label for="">description</label>
                        <textarea class="form-control" row="3" name="description"></textarea>
                      </div>
                       <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                      </div>
                      <div class="col-md-12">
                        <button type="submit"  class="btn btn-secondary" style="postion:absolute;margin-top:2%;margin-left:91%">Submit</button>
                      </div>
                    </div>
                    
                    </form>
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