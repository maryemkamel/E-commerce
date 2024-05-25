


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
           
            <div class="card"> 
                <div class="card-header">Add Brand </div>
            <div class="card-body"> 
              <form action="{{url('brand-store')}}" method="POST"  enctype="multipart/form-data">
                  @csrf
              <div class="form-group"> 
                  <label for="">Brand Name</label>
                  <input type="text" class="form-control" name="brand_name" placeholder="Enter Brand">
                </div>
                <div class="col-md-12">
                  <button type="submit"  class="btn btn-secondary" style="postion:absolute;margin-top:2%;margin-left:91%">Submit</button>
                </div>
              </div>
              
            </form>
           </div>  
              </div>
              </div>
              

            
            
              <div>  
        
        <!-- /.container-fluid -->
      </section>
    </section>
    
    <!-- /.content -->

      <a id="back-to-top" href="#" class="btn btn-secondary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
      </a>

  </div>

    
@endsection