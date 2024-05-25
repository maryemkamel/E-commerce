


@extends('master1')

@section('content')
@csrf

<div class="super_container">
 <div class="content-wrapper" style="overflow:scroll;"> 
    <!-- Content Header (Page header)
     <!-- Main content -->
     <section class="content">
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <div class="row" style="left: 200px;"> 
                    <i class="nav-icon fas fa-book" style="font-size: 20px; margin-top: 8px;margin-left: 8px;"></i>
                    <h1 style="margin-left: 4px;">Categories</h1>
              </div>
              </div>
              <div style="left: 50px;" >
              <button type="button" onclick="window.location.href = '{{ route("add-category") }}'" class="btn btn-secondary" style="position: absolute;
              /* bottom: 0px; */
              right: 28px;
              /* height: 26px; */
               /* width: 100px;"  
              ><i class="fas fa-plus"></i> Add New</button>
            </div>
            </div>
      </section>
              
          <div class="card" style="width: 100%;" >
              <div class="card-header">
                <h3 class="card-title">All Category List Here</h3>
               </div>
             <div class="card-body">
              <table class="table table-bordered table-striped" >
                <thead>
                  <tr style="text-align : center;">
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Slug</th>
                    <th>Action</th>
                  </tr>
                <tbody>
                  @foreach($category as $item)
                  <tr style="text-align : center;">
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->slug }}</td>
                    <td> 
                      <!-- <a href="{{ url('delete-prod/'.$item->id) }}" class="btn btn-danger">Delete</a> -->
                      <a href="{{ url('edit-category/'.$item->id) }}" class="fa fa-edit fa-1x" style="position:absolute;left:94%"></a>
                      <a href="{{ url('delete-category/'.$item->id) }}" class="fa fa-trash fa-1x red-icon" style="color:red; position:absolute;left:92%"></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>  
                </thead>
              </table>
              </div>
             </div>
            </div>  
          </div>
        </div><!-- /.container-fluid -->
      </section>
    </section>
    <!-- /.content -->

      <a id="back-to-top" href="#" class="btn btn-secondary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
      </a>

  </div>
  @endsection
</div> 

    
   