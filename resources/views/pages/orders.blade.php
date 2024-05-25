


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
              <div class="row" style="left: 200px;">
                 <i class="nav-icon fas fa-chart-pie" style="font-size: 20px; margin-top: 8px;margin-left: 8px;"></i>
                <h1 style="margin-left: 4px;">Orders</h1></div>
                <!-- <h5 style="margin-left: 10px; font-style: italic;">Order list</h5> -->
            </div>
            
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Orders List Here</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr style="text-align : center;">
            <th>Id</th>
                        <th>Order number</th>
                        <th>Client</th>
                        <th>Price</th>
                        <th>Quantity </th>
                        <th>Paid</th>
                        <th>Delivered</th>
                        <th>Action</th>
   
            </tr>
            </thead>
            <tbody>
            @foreach ($order_items as $order)
            <tr style="text-align : center;">
              <td>{{ $order->id }}</td>
              <td>{{ $order->tracking_no }}
              </td>
              <td>{{ $order->name }}
              </td>
              <td>{{ $order->total_price }}
              </td>
              
              <td>{{ $order->quantite_elem }}</td>
             
              <td>
                                @if($order->paid)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-times text-danger"></i>
                                @endif
                            </td>

                            <td>
                                @if($order->delivered)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-times text-danger"></i>
                                @endif
                            </td>
                            <td class="d-flex flex-row justify-content-center align-items-center">
                                <form method="POST" action="{{ route('order_items.update',$order->id) }}">
                                    @csrf
                                    @method("PUT")
                                    <button class="btn btn-sm btn-success" style="position:relative;top:8px;">
                                        <i class="fa fa-check"></i>
                                    </button>
                                </form>
                                <form id="{{ $order->id }}" method="POST" action="{{ route('order_items.destroy',$order->id) }}">
                                    @csrf
                                    @method("DELETE")
                                    <button
                                    onclick="event.preventDefault();
                                       if(confirm('Do you really want to delete the order {{ $order->id  }} ?'))
                                        document.getElementById({{ $order->id }}).submit();
                                    "
                                    class="btn btn-sm btn-danger"  style="position:relative;top:8px;">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                              
                                    <button
                                    onclick="window.location.href = '{{url("order_items",$order->id) }}'"
                                    
                                    class="btn btn-sm  btn-info">
                                    <i class="fa fa-eye" style="color:white"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
            </tbody>
            <tfoot>
            <tr>
       
            </tr>
            </tfoot>
          </table>
          <hr>
            
          {{ $order_items->links('pagination::bootstrap-4') }}
    
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
    
   