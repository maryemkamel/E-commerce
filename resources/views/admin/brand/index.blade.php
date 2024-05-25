


@extends('master1')

@section('content')
@csrf

 <div class="content-wrapper" style="/*overflow:scroll;*/"> 
      
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <div class="row" style="left: 200px;"> 
                    <i class="nav-icon fas fa-book" style="font-size: 20px; margin-top: 8px;margin-left: 8px;"></i>
                    <h1 style="margin-left: 4px;">Brand List</h1>
              </div>
              </div>
            
            <div style="left: 50px;bottom:20%" >
              <button type="button" onclick="window.location.href = '{{ route("add-brand") }}'" class="btn btn-secondary" style="position: absolute;
              /* bottom: 0px; */
              right: 28px;
              /* height: 26px; */
               /* width: 100px;"  
              ><i class="fas fa-plus"></i> Add New</button>
            </div>
            </div>
       </section>
              
          <div class="card" style="width: 100%;" >
             <div class="card-body">
               <table class="table table-bordered table-striped" >
                        <thead>
                        <tr style="text-align : center;">
                            <th>Id</th>
                            <th>Brand Name</th>
                            
                            <th>Action</th>
                        </tr>
                        </thead>
                    <tbody>
                    @foreach($brands as $item)
                    <tr style="text-align : center;">
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->brand_name }}</td>
                       
                        <td> 
                        <!-- <a href="{{ url('delete-prod/'.$item->id) }}" class="btn btn-danger">Delete</a> -->
                        <a href="{{ url('/editbrand/'.$item->id) }}" class="btn btn-sm btn-success" style="/*position:absolute;left:94%*/">
                        <i class="fa fa-edit fa-1x"></i></a>
                        <a href="{{ url('admin/brands/delete/'.$item->id) }}" class="btn btn-sm btn-danger" style="/*position:absolute;left:94%*/">
                        <i class="fa fa-trash"></i> </a>
                        
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
               </table>
</div>
              
              </div>
             </div>
            </div> 
            
            
        

        
   
    <!-- /.content -->

      <a id="back-to-top" href="#" class="btn btn-secondary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
      </a>

  </div>
  @endsection
</div> 

    
   