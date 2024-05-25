
 <link href="assets2/css/style.css" rel="stylesheet" media="screen">
    <link href="assets2/css/chblue.css" rel="stylesheet" media="screen">
    <link href="assets2/css/theme-responsive.css" rel="stylesheet" media="screen">
    <link href="assets2/css/dtb/jquery.dataTables.min.css" rel="stylesheet" media="screen">
    <link href="assets2/css/select2.min.css" rel="stylesheet" media="screen">
    <link href="assets2/css/toastr.min.css" rel="stylesheet" media="screen">        
    <script type="text/javascript" src="assets2/js/jquery.js"></script>
    <script type="text/javascript" src="assets2/js/jquery-ui.1.10.4.min.js"></script>
    <script type="text/javascript" src="assets2/js/toastr.min.js"></script>
    <script type="text/javascript" src="assets2/js/modernizr.js"></script>
   
@extends('layout')


@section('content')

</header>
<main class="login-form" style ="padding: 160px 0px 1px 0px;">
            <div class="content_info" >
                <div class="paddings-mini">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <aside>
                                    <h4>The Office</h4>
                                    <address>
                                        <strong>welcome to Our Decoration Agency Deco<strong style="color:red">Shop</strong>.</strong><br>
                                        <i class="fa fa-map-marker"></i><strong>Address: </strong>Ameublement et décoration.<br> Menuiserie. z.i. bab Almadina Tilila, <br>lot n°13 - BP 139 Tikiwine - 80000
Agadir<br>
                                        <i class="fa fa-phone"></i><strong>Phone: </strong> +212-616653441
                                    </address>
                                    <address>
                                        <strong>SurfsideMedia Emails</strong><br>
                                        <i class="fa fa-envelope"></i><strong>Email:</strong><a
                                            href="mailto:contact@surfsidemedia.in"> contact@DECOSHOP.in</a><br>
                                        <i class="fa fa-envelope"></i><strong>Email:</strong><a
                                            href="mailto:support@surfsidemedia.in"> support@DECOSHOP.in</a>
                                    </address>
                                </aside>
                                <hr class="tall">
                            </div>
   
                            <div class="col-md-6">
                                <h3>Contact Us</h3>
                                <p class="lead">
                                </p>

                                @if(Session::has('message_sent'))
                                <div class="alert alert-success"> 
                                 {{Session::get('message_sent')}}
                                </div>
                                @endif
                                <form id="contactform" class="form-horizontal" action="{{ route('contact') }}" method="post">
                                @csrf
                                <div class="form-group" >

                             <label for="Name">Name: </label>
                             <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
                          </div>
  <div class="form-group">
   <label for="email">Email: </label>
   <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
  </div>
  <div class="form-group">
   <label for="message">Message: </label>
   <textarea type="text" class="form-control" id="message" placeholder="Enter your message here" name="message" required> </textarea>
   
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary" value="Send">Send message</button>
  </div>
                                <div id="result"></div>
                            </div>
                        </div>
                    </div>
                </div>
    
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