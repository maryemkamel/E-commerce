<!DOCTYPE html>
<html lang="en">
<head>
<title>DecoShop</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">  <!-- Template Main CSS File -->
  <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
  <link href="/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/main_styles.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">

  <style>
#licategories{ display: inline-block;
    bottom:20px;
    position: relative;
    min-width: 50px;
    padding-left: 20px;
    text-align: center;
    vertical-align: middle;  
}
    #licategories>a {
    display: block;
    color: black;
    font-weight: 400;
    height: 50px;
    line-height: 50px;
    font-size: 13px;
}
#licategories:hover .account_selection2 {
    visibility: visible;
    opacity: 1;
    top: 100%;
}
.account_selection2 {
    display: block;
    position: absolute;
    right: 0;
    top: 120%;
    margin: 0;
    width: 100%;
    background: #FFFFFF;
    visibility: hidden;
    opacity: 0;
    z-index: 1;
    box-shadow: 0 0 25px rgba(63, 78, 100, 0.15);
    -webkit-transition: opacity 0.3s ease;
    -moz-transition: opacity 0.3s ease;
    -ms-transition: opacity 0.3s ease;
    -o-transition: opacity 0.3s ease;
    transition: all 0.3s ease;
}
.account_selection2 li {
    padding-left: 10px;
    padding-right: 10px;
    line-height: 30px;
   
}
.account_selection2 li a {
    display: block;
    color: #232530;
    border-bottom: solid 1px #dddddd;
    font-size: 13px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    
    
}

.account_selection2 li a:hover {
    color: #b5aec4;
}

.account_selection2 li:last-child a {
    border-bottom: none;
}

.account_selection2 li a i {
    margin-right: 10px;
}
</style>

  <script src="/assets/js/jquery-3.2.1.min.js"></script>
  <script src="/assets/js/popper.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/isotope.pkgd.min.js"></script>
  <script src="/assets/js/owl.carousel.js"></script>
  <script src="/assets/js/easing.js"></script>
  <script src="/assets/js/custom.js"></script>
</head>

<body>



<div class="super_container">
<header class="header trans_300">
<!-- Header -->

  <!-- Top Navigation -->

  <div class="top_nav">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="top_nav_left"> 
                
                   free shipping on all orders over 500 MAD</div>
        </div>
        <div class="col-md-6 text-right">
          <div class="top_nav_right">
        
            <ul class="top_nav_menu">

              <!-- Currency / Language / My Account -->

             
              <li class="account">
              @if(isset(Auth::user()->email) ) 
                <a href="#">
                 {{ Auth::user()->name }}
                  <i class="fa fa-angle-down"></i>
                </a>
              @else
                <a href="#">
                  My Account
                  <i class="fa fa-angle-down"></i>
                </a>
                @endif
                <ul class="account_selection">
                @guest
                  <li><a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
                  <li><a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>

                @else
                
                    <li class="nav-item">

                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>

                    </li>
                  
                @endguest

            </ul>

            </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="main_nav_container">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-right">
          <div class="logo_container">
            <a href="#">Deco<span>Shop    
            </span></a>
          </div>
          <nav class="navbar">
            <ul class="navbar_menu">
              <li><a href="{{ route('welcome') }}">home</a></li>
             
              <li id="licategories">
                <a href="#">
                 Categories 
                  <i class="fa fa-angle-down"></i>
                </a>
                <ul class="account_selection2">
                @foreach ($categories as $category)
                  <li><a href="{{url('productkitchen/'.$category->slug)}}">{{ $category->title }}</a></li>
                
                  @endforeach
                </ul>
              </li>
              <li><a href="{{ route('contact') }}">contact</a></li>
            </ul>
            <ul class="navbar_user">
                     <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
            <li class="checkout">
            <a href="{{ route('cart.index') }}">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  <span id="checkout_items" class="checkout_items">
                
                 {{Cart::getContent()->count()}} 
                
                  </span>
                </a>
              </li>
            </ul>
            <div class="hamburger_container">
              <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
          </nav>
        </div>
      </div>
    </div><div class="row">
            <div class="col-md-6 mx-auto my-2">
                @include('alerts')
            </div>
        </div>
  </div>
  @yield('content')


</body>
</html>