
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

<!-- Slider -->

<div class="main_slider" style="background-image:url(/assets/images/slider_1.jpg)">
  <div class="container fill_height">
    <div class="row align-items-center fill_height">
      <div class="col">
        <div class="main_slider_content">
         <!-- <h6 style ="color:#f6685e">Spring / Summer Collection 2021</h6>-->
          <h1 style ="color:#f6685e">Welcome To Your DecoShop</h1>
          <div class="red_button shop_now_button"><a href="{{route('shopnow')}}">shop now</a></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Banner -->

<div class="banner">
  <div class="container">
    <div class="row">
    @foreach ($categories as $category)
      <div class="col-md-4">
   
      
        <div class="banner_item align-items-center" style="background-image:url({{asset($category->image)}})">
          <div class="banner_category">
          <a href="{{url('productkitchen/'.$category->slug)}}">{{ $category->title }}</a> 
          </div>
        </div>
       
      </div>
      @endforeach
  </div>
</div>

<!-- New Arrivals -->

<div class="new_arrivals">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <div class="section_title new_arrivals_title">
          <h2>New Arrivals</h2>
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col text-center">
        <div class="new_arrivals_sorting">
          <ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
          @foreach ($categories as $category)
                    <a href="{{ route('category.products',$category->slug) }} ">
                    <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*"> {{ $category->title }}</li>
                       
                    </a>
         @endforeach
           
          </ul>
        </div>
      </div>
    </div>
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

<!-- Deal of the week -->

<div class="deal_ofthe_week">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="deal_ofthe_week_img">
          <img src="/assets/images/deal_ofthe_week.png" alt="">
        </div>
      </div>
      <div class="col-lg-6 text-right deal_ofthe_week_col">
        <div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
          <div class="section_title">
            <h2>Deal Of The Week</h2>
          </div>
          
          <div class="red_button deal_ofthe_week_button"><a href="{{route('shopnow')}}">shop now</a></div>
        </div>
      </div>
    </div>
  </div>
</div>

          


          <!-- Slider Navigation -->

          <div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
          </div>
          <div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

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
