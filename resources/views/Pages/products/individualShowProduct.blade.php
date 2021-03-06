<!-- {{$product->title}} -->
@extends('pages.navbar')

@section('content')


<div class="page-title">
    <div class="container">
        <div class="column">
            <h1>Single Product</h1>
        </div>
        <div class="column">
            <ul class="breadcrumbs">
                <li><a href="">Home</a>
                </li>
                <li class="separator">&nbsp;</li>
                <li><a href="shop-grid-ls.html">Shop</a>
                </li>
                <li class="separator">&nbsp;</li>
                <li>Single Product</li>
            </ul>
        </div>
    </div>
</div>
<!-- Page Content-->
<div class="container padding-bottom-3x">
    <div class="row">
        <!-- Poduct Gallery-->
        <div class="col-md-4">
            <div class="product-gallery">
                <div class="gallery-wrapper">
                    <!-- <div class="gallery-item video-btn text-center"><a href="#" data-toggle="tooltip" data-type="video" data-video="&lt;div class=&quot;wrapper&quot;&gt;&lt;div class=&quot;video-wrapper&quot;&gt;&lt;iframe class=&quot;pswp__video&quot; width=&quot;960&quot; height=&quot;640&quot; src=_https_/www.youtube.com/embed/CjNjcrQZtd8_.html frameborder=&quot;0&quot; allowfullscreen&gt;&lt;/iframe&gt;&lt;/div&gt;&lt;/div&gt;" title="Watch video"></a></div> -->
                </div>
                <!--<span class="product-badge bg-danger">Sale</span> -->
                <div class="product-carousel owl-carousel gallery-wrapper">


                    @php $i=0; @endphp

                    @foreach($product->images as $image)



                    <div class="gallery-item " data-hash="{{$i=0 ? 'active':''}}"><a href="" data-size="1000x667"> <img src="{{asset('upload/productspic/'.$image->image)}}" alt="Product"></a></div>


                    @php $i++; @endphp


                    @endforeach

                    <!-- <div class="gallery-item" data-hash="two"><a href="img/shop/single/02.jpg" data-size="1000x667"><img src="img/shop/single/02.jpg" alt="Product"></a></div>
                    <div class="gallery-item" data-hash="three"><a href="img/shop/single/03.jpg" data-size="1000x667"><img src="img/shop/single/03.jpg" alt="Product"></a></div>
                    <div class="gallery-item" data-hash="four"><a href="img/shop/single/04.jpg" data-size="1000x667"><img src="img/shop/single/04.jpg" alt="Product"></a></div>
                    <div class="gallery-item" data-hash="five"><a href="img/shop/single/05.jpg" data-size="1000x667"><img src="img/shop/single/05.jpg" alt="Product"></a></div> -->
                </div>

                <!-- <ul class="product-thumbnails">
                    <li class="active"><a href=""><img src="{{asset('upload/productspic/'.$image->image)}}" alt="Product"></a></li>
                   <li><a href="#two"><img src="img/shop/single/th02.jpg" alt="Product"></a></li>
                    <li><a href="#three"><img src="img/shop/single/th03.jpg" alt="Product"></a></li>
                    <li><a href="#four"><img src="img/shop/single/th04.jpg" alt="Product"></a></li>
                    <li><a href="#five"><img src="img/shop/single/th05.jpg" alt="Product"></a></li> 
                </ul> -->



            </div>
            <div class="mt-3">
                <p>Category : <span class="badge badge-info"> {{$product->category->name}} Category</span></p>
                <p>Brand : <span class="badge badge-info"> {{$product->brand->name}} Brand</span></p>
            </div>
        </div>
        <!-- Product Info-->
        <div class="col-md-6">
            <div class="padding-top-2x mt-2 hidden-md-up"></div>
            <div class="sp-categories pb-3"><i class="icon-tag"></i><a href="#">Drones,</a><a href="#">Action cameras</a></div>
            <h2 class="mb-3">{{$product->title}} </mark></h2><span class="h3 d-block">
                <del class="text-muted"></del>&nbsp; {{$product->price}} Taka</span>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta voluptatibus quos ea dolore rem, molestias laudantium et explicabo... <a href='#details' class='scroll-to'>More info</a></p>
            <div class="row margin-top-1x">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="size">Choose color</label>
                        <select class="form-control" id="size">
                            <option>White/Gray/Black</option>
                            <option>Black</option>
                            <option>Black/White/Red</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="color">Battery capacity</label>
                        <select class="form-control" id="color">
                            <option>5100 mAh</option>
                            <option>6200 mAh</option>
                            <option>8000 mAh</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row align-items-end pb-4">
                <div class="col-sm-4">
                    <div class="form-group mb-0">
                        <label for="quantity">Quantity</label>
                        <select class="form-control" id="quantity">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="pt-4 hidden-sm-up"></div>
                    <button class="btn btn-primary btn-block m-0" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-bag"></i> Add to Cart</button>
                </div>
            </div>
            <div class="pt-1 mb-4"><span class="text-medium">SKU:</span> #21457832</div>
            <hr class="mb-2">
            <div class="d-flex flex-wrap justify-content-between">
                <div class="mt-2 mb-2">
                    <button class="btn btn-outline-secondary btn-sm btn-wishlist"><i class="icon-heart"></i>&nbsp;To Wishlist</button>
                    <button class="btn btn-outline-secondary btn-sm btn-compare"><i class="icon-repeat"></i>&nbsp;Compare</button>
                </div>
                <div class="mt-2 mb-2"><span class="text-muted">Share:&nbsp;&nbsp;</span>
                    <div class="d-inline-block"><a class="social-button shape-rounded sb-facebook" href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="socicon-facebook"></i></a><a class="social-button shape-rounded sb-twitter" href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="socicon-twitter"></i></a><a class="social-button shape-rounded sb-instagram" href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="socicon-instagram"></i></a><a class="social-button shape-rounded sb-google-plus" href="#" data-toggle="tooltip" data-placement="top" title="Google +"><i class="socicon-googleplus"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Details-->
<div class="bg-secondary padding-top-3x padding-bottom-2x mb-3" id="details">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="h4">Details</h3>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                <h3 class="h4">Features</h3>
                <ul class="list-icon mb-4">
                    <li><i class="icon-check text-success"></i>Capture 4K30 Video and 12MP Photos</li>
                    <li><i class="icon-check text-success"></i>Game-Style Controller with Touchscreen</li>
                    <li><i class="icon-check text-success"></i>View Live Camera Feed</li>
                    <li><i class="icon-check text-success"></i>Full Control of HERO6 Black</li>
                    <li><i class="icon-check text-success"></i>Use App for Dedicated Camera Operation</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3 class="h4">Specifications</h3>
                <ul class="list-unstyled mb-4">
                    <li><strong>Weight:</strong> 35.5oz (1006g)</li>
                    <li><strong>Maximum Speed:</strong> 35 mph (15 m/s)</li>
                    <li><strong>Maximum Distance:</strong> Up to 9,840ft (3,000m)</li>
                    <li><strong>Operating Frequency:</strong> 2.4GHz</li>
                    <li><strong>Manufacturer:</strong> GoPro, USA</li>
                </ul>
                <h3 class="h4">Shipping Options:</h3>
                <ul class="list-unstyled mb-4">
                    <li><strong>Courier:</strong> 2 - 4 days, $22.50</li>
                    <li><strong>Local Shipping:</strong> up to one week, $10.00</li>
                    <li><strong>UPS Ground Shipping:</strong> 4 - 6 days, $18.00</li>
                    <li><strong>Unishop Global Export:</strong> 3 - 4 days, $25.00</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Reviews-->
<div class="container padding-top-2x">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card border-default">
                <div class="card-body">
                    <div class="text-center">
                        <div class="d-inline align-baseline display-3 mr-1">4.2</div>
                        <div class="d-inline align-baseline text-sm text-warning mr-1">
                            <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3">
                        <label class="text-medium text-sm">5 stars <span class='text-muted'>- 38</span></label>
                        <div class="progress margin-bottom-1x">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%; height: 2px;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <label class="text-medium text-sm">4 stars <span class='text-muted'>- 10</span></label>
                        <div class="progress margin-bottom-1x">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 20%; height: 2px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <label class="text-medium text-sm">3 stars <span class='text-muted'>- 3</span></label>
                        <div class="progress margin-bottom-1x">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 7%; height: 2px;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <label class="text-medium text-sm">2 stars <span class='text-muted'>- 1</span></label>
                        <div class="progress margin-bottom-1x">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 3%; height: 2px;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <label class="text-medium text-sm">1 star <span class='text-muted'>- 0</span></label>
                        <div class="progress mb-2">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 0; height: 2px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="pt-2"><a class="btn btn-warning btn-block" href="#" data-toggle="modal" data-target="#leaveReview">Leave a Review</a></div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <h3 class="padding-bottom-1x">Latest Reviews</h3>
            <!-- Review-->
            <div class="comment">
                <div class="comment-author-ava"><img src="img/reviews/02.jpg" alt="Comment author"></div>
                <div class="comment-body">
                    <div class="comment-header d-flex flex-wrap justify-content-between">
                        <h4 class="comment-title">My husband love his new...</h4>
                        <div class="mb-2">
                            <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor...</p>
                    <div class="comment-footer"><span class="comment-meta">Maggie Scott</span></div>
                </div>
            </div>
            <!-- Review-->
            <div class="comment">
                <div class="comment-author-ava"><img src="img/reviews/03.jpg" alt="Comment author"></div>
                <div class="comment-body">
                    <div class="comment-header d-flex flex-wrap justify-content-between">
                        <h4 class="comment-title">Awesome quality for the price</h4>
                        <div class="mb-2">
                            <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i>
                            </div>
                        </div>
                    </div>
                    <p class="comment-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium...</p>
                    <div class="comment-footer"><span class="comment-meta">Jacob Hammond</span></div>
                </div>
            </div>
            <!-- View All Button--><a class="btn btn-secondary btn-block" href="#">View All Reviews</a>
        </div>
    </div>
</div>
<div class="container padding-bottom-3x mb-1">
    <!-- Related Products Carousel-->
    <h3 class="text-center padding-top-2x mt-2 padding-bottom-1x">You May Also Like</h3>
    <!-- Carousel-->
    <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
        <!-- Product-->
        <div class="product-card">
            <div class="product-badge bg-danger">Sale</div><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/01.jpg" alt="Product"></a>
            <div class="product-card-body">
                <div class="product-category"><a href="#">Smart home</a></div>
                <h3 class="product-title"><a href="shop-single.html">Echo Dot (2nd Generation)</a></h3>
                <h4 class="product-price">
                    <del>$62.00</del>$49.99
                </h4>
            </div>
            <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-shopping-cart"></i><span>To Cart</span></a></div>
        </div>
        <!-- Product-->
        <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/11.jpg" alt="Product"></a>
            <div class="product-card-body">
                <div class="product-category"><a href="#">Headphones</a></div>
                <h3 class="product-title"><a href="shop-single.html">Edifier W855BT Bluetooth</a></h3>
                <h4 class="product-price">$99.75</h4>
            </div>
            <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-shopping-cart"></i><span>To Cart</span></a></div>
        </div>
        <!-- Product-->
        <div class="product-card">
            <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i>
            </div><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/06.jpg" alt="Product"></a>
            <div class="product-card-body">
                <div class="product-category"><a href="#">Video games</a></div>
                <h3 class="product-title"><a href="shop-single.html">Xbox One S White</a></h3>
                <h4 class="product-price">$298.99</h4>
            </div>
            <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-shopping-cart"></i><span>To Cart</span></a></div>
        </div>
        <!-- Product-->
        <div class="product-card"><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/07.jpg" alt="Product"></a>
            <div class="product-card-body">
                <div class="product-category"><a href="#">Smartphones</a></div>
                <h3 class="product-title"><a href="shop-single.html">Samsung Galaxy S9+</a></h3>
                <h4 class="product-price">$839.99</h4>
            </div>
            <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-shopping-cart"></i><span>To Cart</span></a></div>
        </div>
        <!-- Product-->
        <div class="product-card">
            <div class="product-badge bg-secondary border-default text-body">Out of stock</div><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/12.jpg" alt="Product"></a>
            <div class="product-card-body">
                <div class="product-category"><a href="#">Wearable electornics</a></div>
                <h3 class="product-title"><a href="shop-single.html">Apple Watch Series 3</a></h3>
                <h4 class="product-price">$329.10</h4>
            </div>
            <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="shop-single.html"><i class="icon-arrow-right"></i><span>Details</span></a></div>
        </div>
        <!-- Product-->
        <div class="product-card">
            <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
            </div><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/10.jpg" alt="Product"></a>
            <div class="product-card-body">
                <div class="product-category"><a href="#">Printers &amp; Ink</a></div>
                <h3 class="product-title"><a href="shop-single.html">HP LaserJet Pro Printer</a></h3>
                <h4 class="product-price">$249.50</h4>
            </div>
            <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-shopping-cart"></i><span>To Cart</span></a></div>
        </div>
        <!-- Product-->
        <div class="product-card">
            <div class="product-badge bg-danger">Sale</div><a class="product-thumb" href="shop-single.html"><img src="img/shop/products/09.jpg" alt="Product"></a>
            <div class="product-card-body">
                <div class="product-category"><a href="#">Action cameras</a></div>
                <h3 class="product-title"><a href="shop-single.html">Samsung Gear 360 Camera</a></h3>
                <h4 class="product-price">
                    <del>$74.00</del>$68.00
                </h4>
            </div>
            <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-shopping-cart"></i><span>To Cart</span></a></div>
        </div>
    </div>
</div>

@endsection