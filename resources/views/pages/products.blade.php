


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
              <i class="nav-icon fas fa-table" style="font-size: 20px; margin-top: 8px;margin-left: 8px;"></i>
              <h1 style="margin-left: 4px;">Products</h1>
              </div>
            </div>
            <div style="left: 50px;" >
              <button type="button" onclick="window.location.href = '{{ route("products.create") }}'" class="btn btn-secondary" style="position: absolute;
              /* bottom: 0px; */
              right: 12px;
              /* height: 26px; */
               /* width: 100px;"  
              ><i class="fas fa-plus"></i> Add New</button>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Product List Here </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-striped" style="right:3%">
            <thead>
            <tr style="text-align : center;">
            
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>In Stock</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th style="text-align : center;">Action</th>
   
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                        <tr>
                            <td style="text-align : center;">{{ $product->id }}</td>
                            <td style="text-align : center;">{{ $product->title}}</td>
                            <td style="text-align : center;">{{ Str::limit($product->description,30) }}</td>
                            <td style="text-align : center;">{{ $product->inStock }}</td>
                            <td style="text-align : center;">{{ $product->price }} DH</td>
                            <td style="text-align : center;">
                                @if($product->inStock > 0)
                                    <i class="fa fa-check text-success"></i>
                                @else
                                    <i class="fa fa-times text-danger"></i>
                                @endif
                            </td>
                            <td style="text-align : center;">
                                <img src="{{ asset($product->image) }}"
                                     alt="{{ $product->title }}"
                                    width="50"
                                    height="50"
                                    class="img-fluid rounded"
                                >
                            </td>
                            <td style="text-align : center;">
                                {{ $product->category->title }}
                            </td>
                            <td style="text-align : center;">
                                {{ $product->brand->brand_name }}
                            </td>
                            
                            <!-- style="text-align : center;" -->
                            <td class="d-flex flex-row justify-content-center align-items-center"style="text-align : center;height:28px;" >
                                <a
                                    href="{{ route('products.edit',$product->slug) }}"
                                    class="btn btn-sm btn-warning" style=" margin-left:1px;margin-top:12px;">
                                        <i class="fa fa-edit" ></i>
                                </a>
                                <!-- style="position:absolute; top: 127px;" -->
                                <form id="{{ $product->id }}" method="POST" action="{{ route('products.destroy',$product->slug) }}">
                                    @csrf
                                    @method("DELETE")
                                    <button
                                    onclick="event.preventDefault();
                                       if(confirm('Do you really want to delete {{ $product->title  }} ?'))
                                        document.getElementById({{ $product->id }}).submit();
                                    "
                                    class="btn btn-sm btn-danger" style="margin-left:3px; margin-top:25px" >
                                        <i class="fa fa-trash"></i>
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
          {{ $products->links('pagination::bootstrap-4') }}
    
     
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
    
   