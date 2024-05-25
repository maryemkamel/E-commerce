<style>
     .rate {
         float: left;
         height: 46px;
         padding: 0 10px;
         }
         .rate:not(:checked) > input {
         position:absolute;
         display: none;
         }
         .rate:not(:checked) > label {
         float:right;
         width:1em;
         overflow:hidden;
         white-space:nowrap;
         cursor:pointer;
         font-size:30px;
         color:#ccc;
         }
         .rated:not(:checked) > label {
         float:right;
         width:1em;
         overflow:hidden;
         white-space:nowrap;
         cursor:pointer;
         font-size:30px;
         color:#ccc;
         }
         .rate:not(:checked) > label:before {
         content: '★ ';
         }
         .rate > input:checked ~ label {
         color: #ffc700;
         }
         .rate:not(:checked) > label:hover,
         .rate:not(:checked) > label:hover ~ label {
         color: #deb217;
         }
         .rate > input:checked + label:hover,
         .rate > input:checked + label:hover ~ label,
         .rate > input:checked ~ label:hover,
         .rate > input:checked ~ label:hover ~ label,
         .rate > label:hover ~ input:checked ~ label {
         color: #c59b08;
         }
         .star-rating-complete{
            color: #c59b08;
         }
         .rating-container .form-control:hover, .rating-container .form-control:focus{
         background: #fff;
         border: 1px solid #ced4da;
         }
         .rating-container textarea:focus, .rating-container input:focus {
         color: #000;
         }

         .rated {
         float: left;
         height: 46px;
         padding: 0 10px;
         }
         .rated:not(:checked) > input {
         position:absolute;
         display: none;
         }
         .rated:not(:checked) > label {
         float:right;
         width:1em;
         overflow:hidden;
         white-space:nowrap;
         cursor:pointer;
         font-size:30px;
         color:#ffc700;
         }
         .rated:not(:checked) > label:before {
         content: '★ ';
         }
         .rated > input:checked ~ label {
         color: #ffc700;
         }
         .rated:not(:checked) > label:hover,
         .rated:not(:checked) > label:hover ~ label {
         color: #deb217;
         }
         .rated > input:checked + label:hover,
         .rated > input:checked + label:hover ~ label,
         .rated > input:checked ~ label:hover,
         .rated > input:checked ~ label:hover ~ label,
         .rated > label:hover ~ input:checked ~ label {
         color: #c59b08;
         }
         </style>
<body>

<div class="super_container">

<!-- Header -->



  <!-- Top Navigation -->
@extends('layout')

  

@section('content')

</header>



<!-- New Arrivals -->

<div class="container" style="padding:190px">
    <div class="row"  >
        <div class="col-md-6"style= "width:50%" >
            <div class="card">
                <h3 class="card-header">{{ $product->title }}</h3>
                
                   
                <div class="card-img-top">
                    <img style="width:260px;hight:260px" src="{{ asset($product->image) }}"
                        alt="{{ $product->title }}">
                </div>

            </div>
        </div>
        <div class="col-md-6" style= "width:50%" >
            
        <div class="card-body">
                    <h5 class="card-title">
                        {{ $product->title }}
                    </h5>
                    <p class="text-dark font-weight-bold">
                        {{ $product->category->title }}
                    </p>
                    <p class=" font-weight-bold" style="color:#25316D">
                        {{ $product->brand->brand_name }}
                    </p>
                    <p class="d-flex flex-row justify-content-between align-items-center">
                        <span class="text-muted">
                            {{ $product->price }} DH
                        </span>
                        <span class="text-danger">
                            <strike>
                                {{ $product->old_price }} DH
                            </strike>
                        </span>
                    </p>
                    <p class="card-text">
                        {{ $product->description }}
                    </p>
                    <p class="font-weight-bold">
                        @if($product->inStock > 0)
                            <span class="text-success">
                                In Stock
                            </span>
                        @else
                            <span class="text-danger">
                            unavailable
                            </span>
                        @endif
                    </p>
                </div>
            <form action="{{ route('add.cart',$product->slug) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="qty"  class="font-weight-bold">
                    Quantity :
                    </label>
                    <input type="number" name="qty" id="qty"
                        value="1"
                        placeholder="Quantité"
                        max="{{ $product->inStock }}"
                        min="1"
                        class="form-control"
                    >

                </div>
                <div class="form-group">
                    <button type="submit" class="btn text-white btn-block bg-dark">
                        <i class="fa fa-shopping-cart"></i>
                        Add to cart
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- test  rating -->
@if(!empty($value->star_rating))
                                <div class="container">
                                    <div class="row">
                                       <div class="col mt-4">
                                             <p class="font-weight-bold ">Review</p>
                                             <div class="form-group row">
                                                <input type="hidden" name="booking_id" value="{{ $value->id }}">
                                                <div class="col">
                                                   <div class="rated">
                                                    @for($i=1; $i<=$value->star_rating; $i++)

                                                      {{-- <input type="radio" id="star{{$i}}" class="rate" name="rating" value="5"/> --}}
                                                      <label class="star-rating-complete" title="text">{{$i}} stars</label>
                                                    @endfor
                                                    </div>
                                                </div>
                                             </div>
                                             <div class="form-group row mt-4">
                                                <div class="col">
                                                    <p>{{ $value->comments }}</p>
                                                </div>
                                             </div>
                                       </div>
                                    </div>
                                 </div>
                                @else
                                <div class="container">
                                    <div class="row">
                                       <div class="col mt-4">
                                          <form class="py-2 px-4" action="{{route('review.store')}}" style="box-shadow: 0 0 10px 0 #ddd;" method="POST" autocomplete="off">
                                          {{ csrf_field() }} 
                                             <p class="font-weight-bold ">Review</p>
                                             <div class="form-group row">
                                                
                                                <div class="col">
                                                   <div class="rate">
                                                      <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                                                      <label for="star5" title="text">5 stars</label>
                                                      <input type="radio" checked id="star4" class="rate" name="rating" value="4"/>
                                                      <label for="star4" title="text">4 stars</label>
                                                      <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                                                      <label for="star3" title="text">3 stars</label>
                                                      <input type="radio" id="star2" class="rate" name="rating" value="2">
                                                      <label for="star2" title="text">2 stars</label>
                                                      <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                                                      <label for="star1" title="text">1 star</label>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="form-group row mt-4">
                                                <div class="col">
                                                   <textarea class="form-control" name="comment" rows="6 " placeholder="Comment" maxlength="200"></textarea>
                                                </div>
                                             </div>
                                             <div class="mt-3 text-right">
                                                <button class="btn btn-sm py-2 px-3 btn-info">Submit
                                                </button>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                                 @endif

                                
                                 
                                 <div class="container">
                                    <div class="row">
                                       <div class="col mt-4">
                                          <form class="py-2 px-4" >
                                      
                                             <p class="font-weight-bold ">Client Reviews </p>
                                             @foreach ($rating as $rat)
                                             <div>
                                              {{$rat->user->name}}
                                             </div>
                                             <div class="form-group row">
                                                
                                                <div class="col">
                                           
                                                   <div class="rate">
                                                   <?php    
    $stars_count = $rat->rating;
                    
    for($i=1; $i<=5; $i++)
    {
        if($stars_count >= $i)
        {
            ?>
                <i class="fa fa-star fa-2x" style="color:orange"></i>
            <?php 
        }
        else
        {
            ?>
                <i class="fa fa-star fa-2x" style="color:grey"></i>
            <?php
               
        } 
    }
?>
                                                    </div>
                                                  </div>
                                              </div>
                                              <div class="form-group row mt-4">
                                                  <div class="col">
                                                  <p>{{$rat->comment}}</p>
                                                  </div>
                                              </div>
                                              @endforeach
                                              </div>
                                              </div>
                                            </form>
                                      
                              
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
          
          <div class="red_button deal_ofthe_week_button"><a href="#">shop now</a></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Best Sellers -->


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
