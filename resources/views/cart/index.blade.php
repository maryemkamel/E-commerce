@extends('layout')

@section('content')


<!-- Header -->


  <!-- Top Navigation -->


</header>

<div class="container" style="padding:200px;">

   <div class="row" >
        <div class="col-md-16 card p-4">
            <h4 class="text-dark">Your cart</h4>
            <table class="table table-hover" style="width:1000px">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>
                                <img src="{{ asset($item->associatedModel->image) }}"
                                     alt="{{ $item->title }}"
                                     width="50"
                                     height="50"
                                     class="img-fluid rounded"
                                >
                            </td>
                            <td>
                                {{ $item->name }}
                            </td>
                            <td>
                                <form class="d-flex flex-row justify-content-center align-items-center" action="{{ route('update.cart',$item->associatedModel->slug) }}" method="post">
                                    @csrf
                                    @method("PUT")
                                    <div class="form-group">
                                        <input type="number" name="qty" id="qty"
                                            value="{{ $item->quantity }}"
                                            placeholder="Quantité"
                                            max="{{ $item->associatedModel->inStock }}"
                                            min="1"
                                            class="form-control"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-sm btn-warning" style="margin-left:8px; ">
                                            <i class="fa fa-edit"></i>
                                            
                                        </button>
                                    </div>
                                </form>
                            </td>
                            <td>
                                {{ $item->price }} DH
                            </td>
                            <td>
                                {{ $item->price * $item->quantity}} DH
                            </td>
                            <td>
                                <form class="d-flex flex-row justify-content-center align-items-center" action="{{ route('remove.cart',$item->associatedModel->slug) }}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr class="text-dark font-weight-bold">
                        <td colspan="3" class="border border-success">
                            Total
                        </td>
                        <td colspan="3" class="border border-success">
                            {{ Cart::getSubtotal() }} DH
                        </td>
                    </tr>
                </tbody>
            </table>
            @if(Cart::getSubtotal() > 0)
                <div class="form-group">
                    <a href="{{ route('make.payment') }}" class="btn btn-primary mt-3">
                        Pay {{ Cart::getSubtotal() }} DH via PayPal
                    </a>
                </div>
            @endif
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