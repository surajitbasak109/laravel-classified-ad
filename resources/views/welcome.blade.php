<x-front>
  @include('front._hero')

  @include('front._search')

  <section class="category-list-area pt-130">
    <div class="container">
      <div class="category-list-wrapper">
        @foreach($categories as $category)
        <div class="category-list-item">
          <a href="{{ route('front.category', $category->name) }}">
            <div class="icon">
              <i class="fa fa-{{ $category->icon }}"></i>
            </div>
            <h3>{{ $category->name }}</h3>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <section class="latest-product-area pt-130 pb-110">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-xl-6 col-lg-7 col-md-10">
          <div class="text-center section-title mb-60">
            <h1>Latest Products</h1>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt dolore magna.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <a href="product-details.html">
                <img src="assets/images/product/l-product-1.jpg" alt="">
              </a>
              <div class="product-action">
                <a href="javascript:void(0)"><i class="lni lni-heart"></i></a>
                <a href="javascript:void(0)" class="share"><i class="lni lni-share"></i></a>
              </div>
            </div>
            <div class="product-content">
              <h3 class="name"><a href="product-details.html">Apple iPhone x</a></h3>
              <span class="update">Last Update: 5 hours ago</span>
              <ul class="address">
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-calendar"></i> 20 June, 2023</a>
                </li>
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-map-marker"></i> Canada</a>
                </li>
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-user"></i> Stifen Jon</a>
                </li>
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-package"></i> Used</a>
                </li>
              </ul>
              <div class="product-bottom">
                <h3 class="price">$120.99</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <a href="product-details.html">
                <img src="assets/images/product/l-product-2.jpg" alt="">
              </a>
              <div class="product-action">
                <a href="javascript:void(0)"><i class="lni lni-heart"></i></a>
                <a href="javascript:void(0)" class="share"><i class="lni lni-share"></i></a>
              </div>
            </div>
            <div class="product-content">
              <h3 class="name"><a href="product-details.html">Apple MacBook Air</a></h3>
              <span class="update">Last Update: 5 hours ago</span>
              <ul class="address">
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-calendar"></i> 20 June, 2023</a>
                </li>
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-map-marker"></i> Canada</a>
                </li>
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-user"></i> Stifen Jon</a>
                </li>
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-package"></i> Used</a>
                </li>
              </ul>
              <div class="product-bottom">
                <h3 class="price">$420.99</h3>
                <a href="javascript:void(0)" class="link-ad"><i class="lni lni-checkmark-circle"></i> Verified Ad</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <a href="product-details.html">
                <img src="assets/images/product/l-product-3.jpg" alt="">
              </a>
              <div class="product-action">
                <a href="javascript:void(0)"><i class="lni lni-heart"></i></a>
                <a href="javascript:void(0)" class="share"><i class="lni lni-share"></i></a>
              </div>
            </div>
            <div class="product-content">
              <h3 class="name"><a href="product-details.html">Cctv camera</a></h3>
              <span class="update">Last Update: 5 hours ago</span>
              <ul class="address">
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-calendar"></i> 20 June, 2023</a>
                </li>
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-map-marker"></i> Canada</a>
                </li>
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-user"></i> Stifen Jon</a>
                </li>
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-package"></i> Used</a>
                </li>
              </ul>
              <div class="product-bottom">
                <h3 class="price">$80.99</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <a href="product-details.html">
                <img src="assets/images/product/l-product-4.jpg" alt="">
              </a>
              <div class="product-action">
                <a href="javascript:void(0)"><i class="lni lni-heart"></i></a>
                <a href="javascript:void(0)" class="share"><i class="lni lni-share"></i></a>
              </div>
            </div>
            <div class="product-content">
              <h3 class="name"><a href="product-details.html">Apple's new iMac</a></h3>
              <span class="update">Last Update: 5 hours ago</span>
              <ul class="address">
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-calendar"></i> 20 June, 2023</a>
                </li>
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-map-marker"></i> Canada</a>
                </li>
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-user"></i> Stifen Jon</a>
                </li>
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-package"></i> Used</a>
                </li>
              </ul>
              <div class="product-bottom">
                <h3 class="price">$3000.99</h3>
                <a href="javascript:void(0)" class="link-ad"><i class="lni lni-checkmark-circle"></i> Verified Ad</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <a href="product-details.html">
                <img src="assets/images/product/l-product-5.jpg" alt="">
              </a>
              <div class="product-action">
                <a href="javascript:void(0)"><i class="lni lni-heart"></i></a>
                <a href="javascript:void(0)" class="share"><i class="lni lni-share"></i></a>
              </div>
            </div>
            <div class="product-content">
              <h3 class="name"><a href="product-details.html">Best Compact DSLR</a></h3>
              <span class="update">Last Update: 5 hours ago</span>
              <ul class="address">
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-calendar"></i> 20 June, 2023</a>
                </li>
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-map-marker"></i> Canada</a>
                </li>
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-user"></i> Stifen Jon</a>
                </li>
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-package"></i> Used</a>
                </li>
              </ul>
              <div class="product-bottom">
                <h3 class="price">$290.99</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="single-product">
            <div class="product-img">
              <a href="product-details.html">
                <img src="assets/images/product/l-product-6.jpg" alt="">
              </a>
              <div class="product-action">
                <a href="javascript:void(0)"><i class="lni lni-heart"></i></a>
                <a href="javascript:void(0)" class="share"><i class="lni lni-share"></i></a>
              </div>
            </div>
            <div class="product-content">
              <h3 class="name"><a href="product-details.html">10 Future Concept Cars</a></h3>
              <span class="update">Last Update: 5 hours ago</span>
              <ul class="address">
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-calendar"></i> 20 June, 2023</a>
                </li>
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-map-marker"></i> Canada</a>
                </li>
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-user"></i> Stifen Jon</a>
                </li>
                <li>
                  <a href="javascript:void(0)"><i class="lni lni-package"></i> Used</a>
                </li>
              </ul>
              <div class="product-bottom">
                <h3 class="price">$4520.99</h3>
                <a href="javascript:void(0)" class="link-ad"><i class="lni lni-checkmark-circle"></i> Verified Ad</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="video-area">
    <div class="video-wrapper img-bg">
      <div class="container">
        <div class="text-center video-content">
          <h1 class="text-white mb-60">Learn More About ClassiList</h1>
          <a href="#" class="glightbox video-btn"><i class="lni lni-play"></i></a>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="count-up-wrapper">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="single-counter">
              <div class="icon">
                <i class="lni lni-layers"></i>
              </div>
              <span class="count">34864</span>
              <span>Regular Ads</span>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="single-counter">
              <div class="icon">
                <i class="lni lni-map-marker"></i>
              </div>
              <span class="count">867</span>
              <span>Locations</span>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="single-counter">
              <div class="icon">
                <i class="lni lni-users"></i>
              </div>
              <span class="count">56743</span>
              <span>Regular Members</span>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="single-counter">
              <div class="icon">
                <i class="lni lni-briefcase"></i>
              </div>
              <span class="count">4583</span>
              <span>Premium Ads</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="feature-product-area bg_cover">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg-6 col-md-10">
          <div class="text-center section-title mb-60">
            <h1>Featured Products</h1>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
          </div>
        </div>
      </div>
      <div class="product-carousel-wrapper">
        <div class="row feature-product-carousel">
          <div class="col-lg-4 col-md-6">
            <div class="single-product">
              <div class="product-img">
                <img src="assets/images/product/l-product-1.jpg" alt="">
              </div>
              <div class="product-content">
                <div class="rating-wrapper">
                  <h5 class="price theme-color">$120.99</h5>
                  <div class="rating">
                    <span>2 Review</span>
                    <i class="lni lni-star-filled"></i>
                    <i class="lni lni-star-filled"></i>
                    <i class="lni lni-star-filled"></i>
                    <i class="lni lni-star-filled"></i>
                    <i class="lni lni-star"></i>
                  </div>
                </div>
                <h3 class="name"><a href="product-details.html">Apple iPhone x</a></h3>
                <p class="sort-des">Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam.</p>
                <div class="product-bottom">
                  <a href="javascript:void(0)" class="address-link"><i class="lni lni-map-marker"></i> United State of America</a>
                  <span class="theme-color"><i class="lni lni-heart"></i></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-product">
              <div class="product-img">
                <a href="javascript:void(0)" class="badge">New</a>
                <img src="assets/images/product/l-product-2.jpg" alt="">
              </div>
              <div class="product-content">
                <div class="rating-wrapper">
                  <h5 class="price theme-color">$320.99</h5>
                  <div class="rating">
                    <span>2 Review</span>
                    <i class="lni lni-star-filled"></i>
                    <i class="lni lni-star-filled"></i>
                    <i class="lni lni-star-filled"></i>
                    <i class="lni lni-star-filled"></i>
                    <i class="lni lni-star"></i>
                  </div>
                </div>
                <h3 class="name"><a href="product-details.html">Best Compact DSLR</a></h3>
                <p class="sort-des">Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam.</p>
                <div class="product-bottom">
                  <a href="javascript:void(0)" class="address-link"><i class="lni lni-map-marker"></i> United State of America</a>
                  <span class="theme-color"><i class="lni lni-heart"></i></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-product">
              <div class="product-img">
                <a href="javascript:void(0)" class="badge bottom">25% Discount</a>
                <img src="assets/images/product/l-product-3.jpg" alt="">
              </div>
              <div class="product-content">
                <div class="rating-wrapper">
                  <h5 class="price theme-color">$90 <del>$120</del></h5>
                  <div class="rating">
                    <span>2 Review</span>
                    <i class="lni lni-star-filled"></i>
                    <i class="lni lni-star-filled"></i>
                    <i class="lni lni-star-filled"></i>
                    <i class="lni lni-star-filled"></i>
                    <i class="lni lni-star"></i>
                  </div>
                </div>
                <h3 class="name"><a href="product-details.html">Cctv camera</a></h3>
                <p class="sort-des">Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam.</p>
                <div class="product-bottom">
                  <a href="javascript:void(0)" class="address-link"><i class="lni lni-map-marker"></i> United State of America</a>
                  <span class="theme-color"><i class="lni lni-heart"></i></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-product">
              <div class="product-img">
                <img src="assets/images/product/l-product-4.jpg" alt="">
              </div>
              <div class="product-content">
                <div class="rating-wrapper">
                  <h5 class="price theme-color">$1120.99</h5>
                  <div class="rating">
                    <span>2 Review</span>
                    <i class="lni lni-star-filled"></i>
                    <i class="lni lni-star-filled"></i>
                    <i class="lni lni-star-filled"></i>
                    <i class="lni lni-star-filled"></i>
                    <i class="lni lni-star"></i>
                  </div>
                </div>
                <h3 class="name"><a href="product-details.html">Apple's new iMac</a></h3>
                <p class="sort-des">Lorem ipsum dolor sit amet, consetetur sadipscing elitr sed diam.</p>
                <div class="product-bottom">
                  <a href="javascript:void(0)" class="address-link"><i class="lni lni-map-marker"></i> United State of America</a>
                  <span class="theme-color"><i class="lni lni-heart"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="subscribe-area">
    <div class="container">
      <div class="subscribe-wrapper bg_cover">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="subscribe-content section-title">
              <h1 class="text-white">Subscribe Our Newsletter</h1>
              <p class="text-white">Buy and sell everything from used cars to mobile phones and computer or search for property.</p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="subscribe-form-wrapper">
              <form action="#" class="subscribe-form">
                <input type="email" name="sub-email" placeholder="Enter your Email">
                <button><i class="lni lni-telegram-original"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</x-front>
