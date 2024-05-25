
<body class="hold-transition sidebar-mini">

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index3.html" class="brand-link" onclick="return false;">
        <img src="/../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8;visibility: hidden">
        <span class="brand-text font-weight-light"><strong><font face="palatino">DecoShop</font></strong></span>
      </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="border:none">
        
      </div>

      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{ route('acceuiladmin2')}}" class="nav-link {{ Request::is('acceuiladmin2') ? 'active':''}}">
                  <i class="nav-icon fas fa-tachometer-alt" href=""></i>
                  <p>
                    Dashboard
                    <!-- <i class="right fas fa-angle-left"></i> -->
                  </p>
                </a>
              </li><i class="fa-thin fa-chart-column"></i>
              <li class="nav-item">
                <a href="{{ route('orderspage')}}" class="nav-link {{ Request::is('orderspage') ? 'active':''}}">
                  <i class="nav-icon fas fa-chart-pie" href="" ></i>
                  <p>
                    Orders
                    <!-- <span class="right badge badge-danger">New</span> -->
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.brand')}}" class="nav-link  {{ Request::is('admin/brand') ? 'active':''}}">
                  <i class="nav-icon fas fa-columns" rol="button" href="{{ route('admin.brand')}}"></i>
                  <p>
                    Brands
                    <!-- <span class="right badge badge-danger">New</span> -->
                  </p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="{{ route('add-category')}}" class="nav-link {{ Request::is('add-category') ? 'active':''}}">
                  <i class="nav-icon fa fa-plus-square"></i>
                  <p>
                    Add Category
                    
                  </p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{ route('categories')}}" class="nav-link {{ Request::is('categories') ? 'active':''}}">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Categories
                    <!-- <span class="right badge badge-danger">New</span> -->
                  </p>
                </a>
              </li>
              
              <!-- <li class="nav-item">
                <a href="{{ route('products.create')}}" class="nav-link {{ Request::is('products.create') ? 'active':''}}">
                <span class="font-weight-bold">
                           
                           </span>
                  <i class="nav-icon fa fa-plus-square"></i>
                  <p>
                    Add Product
                    <span class="right badge badge-danger">New</span>
                  </p>
                </a>
              </li>
               -->
              <li class="nav-item">
                <a href="{{ route('productspage')}}" class="nav-link {{ Request::is('productspage') ? 'active':''}}"> <span class="font-weight-bold">
                           
                        </span>
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Products
                    <!-- <span class="right badge badge-danger">New</span> -->
                  </p>
                </a>
              </li>
              
          
          
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  
  <!-- /.content-wrapper -->

  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="../dist/js/demo.js"></script> -->


</body>
</html>
