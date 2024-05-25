
<body>

<div class="super_container">

<!-- Header -->



  <!-- Top Navigation -->
@extends('layout')

  

@section('content')

</header>

<div class="fs_menu_overlay"></div>
<div class="hamburger_menu">
  <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
  <div class="hamburger_menu_content text-right">
    <ul class="menu_top_nav">
      <li class="menu_item has-children">
        <a href="#">
          usd
          <i class="fa fa-angle-down"></i>
        </a>
        <ul class="menu_selection">
          <li><a href="#">cad</a></li>
          <li><a href="#">aud</a></li>
          <li><a href="#">eur</a></li>
          <li><a href="#">gbp</a></li>
        </ul>
      </li>
      <li class="menu_item has-children">
        <a href="#">
          English
          <i class="fa fa-angle-down"></i>
        </a>
        <ul class="menu_selection">
          <li><a href="#">French</a></li>
          <li><a href="#">Italian</a></li>
          <li><a href="#">German</a></li>
          <li><a href="#">Spanish</a></li>
        </ul>
      </li>
      <li class="menu_item has-children">
        <a href="#">
          My Account
          <i class="fa fa-angle-down"></i>
        </a>
        <ul class="menu_selection">
          <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
          <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
        </ul>
      </li>
      <li class="menu_item"><a href="#">home</a></li>
      <li class="menu_item"><a href="#">shop</a></li>
      <li class="menu_item"><a href="#">promotion</a></li>
      <li class="menu_item"><a href="#">pages</a></li>
      <li class="menu_item"><a href="#">blog</a></li>
      <li class="menu_item"><a href="#">contact</a></li>
    </ul>
  </div>
</div>




<!-- New Arrivals -->

<div class="new_arrivals" style="padding:150px">
  <div class="container">
   
  
    <div class="row ">
   
      <div class="col">
     
        <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

          <!-- Product 1 -->
          @foreach ($products as $product)
          <div class="product-item men">
            <div class="product discount product_filter">
              <div class="product_image">
                <img   src="{{ asset($product->image) }}" style="width:220px;height:170px" alt=" {{ $product->title }}" >
              </div>
              <div class="favorite favorite_left"></div>
              
              <div class="product_info">
                <h6 class="product_name"><a href="#"> {{ Str::limit($product->title,50) }}</a></h6>
                <h6 class="product_name"><a href="#"> {{ Str::limit($product->description,50) }}</a></h6>
                <div class="product_price">{{ $product->price }} DH<span> {{ $product->old_price }} DH</span></div>
              </div>
            </div>
            
             <div class="red_button add_to_cart_button"><a  href="{{ route('products.show',$product->slug) }}">show product</a></div>
          </div>
          @endforeach
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
          <div class="blog_background" style="background-image:url(/assets/images/blog_1.jpg)"></div>
          <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="blog_title">Here are the trends I see coming this fall</h4>
            <span class="blog_meta">by admin | dec 01, 2021</span>
            <a class="blog_more" href="#">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 blog_item_col">
        <div class="blog_item">
          <div class="blog_background" style="background-image:url(/assets/images/blog_2.jpg)"></div>
          <div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
            <h4 class="blog_title">Here are the trends I see coming this fall</h4>
            <span class="blog_meta">by admin | dec 01, 2021</span>
            <a class="blog_more" href="#">Read more</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 blog_item_col">
        <div class="blog_item">
          <div class="blog_background" style="background-image:url(/assets/images/blog_3.jpg)"></div>
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
