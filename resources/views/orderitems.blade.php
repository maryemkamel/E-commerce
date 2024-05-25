

@extends('master')

@section('content')
@csrf
<div class="super_container">
 <div class="content-wrapper"> 
 <div class="page-header text-blue-d2" style="left:50px">
  
        <h3 class="page-title text-secondary-d1" style="position:relative;left:30px;top:18px">
        <i class="nav-icon fas fa-chart-pie" href="" ></i>
            Order 
                <i class="fa fa-angle-double-right text-80" ></i>
                ID:{{ $orderitem->tracking_no }}
           
        </h3>

</div>  

    <!-- Content Header (Page header)
     <!-- Main content -->

     
     <section class="content">
        
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
           
          
            <div class="card" style="position:relative;width: 1080px;left:0px;right:200px" >
              <div class="card-header">
                
                        <div >
                            <span class="text-sm text-grey-m2 align-middle">To:</span>
                            <span class="text-600 text-110 text-blue align-middle">{{$orderitem->name }}</span>
                        </div>
                        <div class="text-grey-m2">
                            <div class="my-1">
                               Article Number : {{$orderitem->quantite_elem }}
                            </div>
                            <div class="my-1">
                               Total Price : {{$orderitem->total_price }}
                            </div>
                            <div class="my-1">
                            date of the order : 
                            </div>
                            <div class="my-1"> <b class="text-600">{{ $orderitem->created_at }}</b></div>
                        </div>

                    
                        <hr class="d-sm-none" />
                        <div class="text-grey-m2" style="position:relative;left:500px;bottom:150px;
                        ">
                            <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                              Status
                            </div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90"></span> @if($orderitem->paid)
                                    <i class="fa fa-check text-success"> paid </i>
                                @else
                                    <i class="fa fa-times text-danger">unpaid</i>
                                @endif</div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90"></span>   @if($orderitem->delivered)
                                    <i class="fa fa-check text-success"> delivred</i>
                                @else
                                    <i class="fa fa-times text-danger">not delivred</i>
                                @endif</div>

                            
                        </div>
                        <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end" >
                    </div>
                    </div>
                    
                    <!-- /.col -->
                </div>



















                <!-- <h5 style="margin-left: 10px; font-style: italic;">Order list</h5> -->
            </div>
            
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Order list</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
            <th>Id</th>
                        <th>Product name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>total price </th>
                      
   
            </tr>
            </thead>
            <tbody>
            @foreach ($order as $item)
            <tr>
              <td>{{ $item->id }}</td>
              <td>{{ $item->product_name }}
              </td>
              <td>{{ $item->qty }}
              </td>
              <td>{{ $item->price }}
              </td>
              
              <td>{{ $item->total }}</td>
             
            
                        </tr>
                    @endforeach
            </tbody>
            <tfoot>
            <tr>
       
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    
    <!-- /.col -->
  
  <!-- /.row -->

    </section>
    <!-- /.content -->

    <a id="back-to-top" href="#" class="btn btn-secondary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
  </div>
  @endsection
</div> 
    
   