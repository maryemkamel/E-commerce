


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
              <div class="row" style="left: 200px;"> <i class="fa fa-cog fa-1x" aria-hidden="true" style="font-size: 20px; margin-top: 8px;margin-left: 8px;"></i><h1 style="margin-left: 4px;">Settings</h1></div>
            </div>
            
          </div>
        </div><!-- /.container-fluid -->
        
      </section>
      <div class="card" style="width: 60%; left: 2%;">
        <div class="card-header">
        <h4><strong style="font-weight: 500;"> General Settings</strong></h4> 
        </div>
      <div class="card-body">
        <div class="form-group">
          <label for="" style="font-weight: 400;">Site name</label>
          <input type="email" class="form-control" id="" placeholder="DecoShop" disabled>
        </div>
        <div class="form-group">
          <label for="" style="font-weight: 400;">Phone</label>
          <input type="email" class="form-control" id="" placeholder="+212611895339" disabled>
        </div>
        <div class="form-group">
          <label for="" style="font-weight: 400;">Store address</label>
          <input type="email" class="form-control" id="" placeholder="Adress 256,A.mohammed V Casablanca"disabled>
        </div>
        <div class="form-group">
          <label for="" style="font-weight: 400;">Email address</label>
          <input type="email" class="form-control" id="" placeholder="decoshop.19@gmail.com" disabled>
        </div>
        <div class="form-group">
          <label for="" style="font-weight: 400;">Quote code</label>
          <input type="email" class="form-control" id="" placeholder="MAD" disabled>
        </div>
        <div class="form-group">
          <label for="" style="font-weight: 400;">Quote symbol</label>
          <input type="email" class="form-control" id="" placeholder="DHS" disabled>
        </div>  
      </div>
      <!-- /.card-body -->
    </section>
    <!-- /.content -->

      <a id="back-to-top" href="#" class="btn btn-secondary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
      </a>

  </div>
  @endsection
</div> 
    
   