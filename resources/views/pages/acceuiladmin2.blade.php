


@extends('master')

@section('content')
<div class="super_container">
 <div class="content-wrapper"> 
    <!-- Content Header (Page header)
     <!-- Main content -->
     <section class="content">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
            <div class="row" style="left: 200px;"> 
                <i class="nav-icon fas fa-tachometer-alt" style="font-size: 20px; margin-top: 8px;margin-left: 50px;"></i>
                <h1 style="margin-left: 8px;">Dashboard</h1>
              </div> 
            </div>  
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-6" style="left:50px;">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3> {{ $users->count() }}</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- contenu du page -->
        <div class="col-lg-4 col-6"style="left:60px;">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3> {{ $orders->count() }}<sup style="font-size: 20px"></sup></h3>

              <p>Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-6" style="left:50px;">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3> {{ $category->count() }}</h3>

              <p>Categories</p>
            </div>
            <div class="icon">
              <i class="fa fa-file" aria-hidden="true"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6" style="left:60px;">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3> {{ $products->count() }}</h3>

              <p>Products</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
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
    
   