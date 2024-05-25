<html lang="en">
<head>
<title>Decoshop</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Template Main CSS File -->
   <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main_styles.css">
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  

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
  <!-- Template Main JS File -->
  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <script src="assets/js/owl.carousel.js"></script>
  <script src="assets/js/easing.js"></script>
  <script src="assets/js/custom.js"></script>
</head>
<body>

@extends('layout')

  

@section('content')


<!-- Header -->


  <!-- Top Navigation -->


</header>



<main class="login-form"  style ="padding: 140px 0px 0px;">

<section class="vh-100" style="background-color: #FFC090;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="/assets/images/login.jpg"
                alt="login form" class="img-fluid" style="border-radius: Arem 0 0 1rem;height:100%" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="{{ route('login.post') }}" method="POST">
                @csrf
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <!-- <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i> -->
            <div class="logo_container" style="position:absolute;left:0px">
            <a href="#"  style="font-size:32px">Deco<span  style="font-size:32px">Shop    
            </span></a>
             </div>
                    
                  </div>
                    <br>
                  <h4 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Connect <font color="#FFAE6D">now</font> and  continue shopping</h4>

                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example17" class="form-control form-control-lg" name="email" placeholder="E-mail Address" required autofocus />
                    @if ($errors->has('email'))

                  <span class="text-danger">{{ $errors->first('email') }}</span>

                    @endif
                    <!-- <label class="form-label" for="form2Example17">Email address</label> -->
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" class="form-control form-control-lg"  placeholder="Password" name="password" required />
                    @if ($errors->has('password'))

                  <span class="text-danger">{{ $errors->first('password') }}</span>

                  @endif

                    <!-- <label class="form-label" for="form2Example27">Password</label> -->
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                  </div>

                  
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="{{ route('register') }}"
                      style="color: #393f81;">Register here</a></p>
                 
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</main>

<!-- Benefit -->

<div class="benefit">
  <div class="container">
    <div class="row benefit_row">
      <div class="col-lg-3 benefit_col">
        <div class="benefit_item d-flex flex-row align-items-center">
          <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
          <div class="benefit_content">
            <h6>free shipping</h6>
            <p>Suffered Alteration in Some Form</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 benefit_col">
        <div class="benefit_item d-flex flex-row align-items-center">
          <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
          <div class="benefit_content">
            <h6>cach on delivery</h6>
            <p>The Internet Tend To Repeat</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 benefit_col">
        <div class="benefit_item d-flex flex-row align-items-center">
          <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
          <div class="benefit_content">
            <h6>45 days return</h6>
            <p>Making it Look Like Readable</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 benefit_col">
        <div class="benefit_item d-flex flex-row align-items-center">
          <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
          <div class="benefit_content">
            <h6>opening all week</h6>
            <p>8AM - 09PM</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Blogs -->

<div class="blogs">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <div class="section_title">
          <h2>Latest Blogs</h2>
        </div>
      </div>
    </div>
    <div class="row blogs_container">
      <div class="col-lg-4 blog_item_col">
        <div class="blog_item">
          <div class="blog_background" style="background-image:url(assets/images/blog_1.jpg)"></div>
          <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="blog_title">Here are the trends I see coming this fall</h4>
            <span class="blog_meta">by admin | dec 01, 2021</span>
            <a class="blog_more" href="#">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 blog_item_col">
        <div class="blog_item">
          <div class="blog_background" style="background-image:url(assets/images/blog_2.jpg)"></div>
          <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="blog_title">Here are the trends I see coming this fall</h4>
            <span class="blog_meta">by admin | dec 01, 2021</span>
            <a class="blog_more" href="#">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 blog_item_col">
        <div class="blog_item">
          <div class="blog_background" style="background-image:url(assets/images/blog_3.jpg)"></div>
          <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="blog_title">Here are the trends I see coming this fall</h4>
            <span class="blog_meta">by admin | dec 01, 2021</span>
            <a class="blog_more" href="#">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Newsletter -->


<!-- Footer -->

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
          <ul class="footer_nav">
            <li><a href="#">Blog</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Contact us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
          <ul>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
       
      </div>
    </div>
  </div>
</footer>

</div>
</body>
</html>
@endsection
