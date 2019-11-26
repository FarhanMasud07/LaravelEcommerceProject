<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themes.rokaux.com/unishop/v3.2.1/template-3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Nov 2019 21:23:06 GMT -->
<head>
    <meta charset="utf-8">
    <title>Unishop | Universal E-Commerce Template
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Unishop - Universal E-Commerce Template">
    <meta name="keywords" content="shop, e-commerce, modern, flat style, responsive, online store, business, mobile, blog, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Rokaux">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{asset('HomePages/css/vendor.min.css')}}">
    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" media="screen" href="{{asset('HomePages/css/styles.min.css')}}">
    <!-- Customizer Styles-->
    <link rel="stylesheet" media="screen" href="{{asset('HomePages/customizer/customizer.min.css')}}">
    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../../../../www.googletagmanager.com/gtm5445.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-T4DJFPZ');
      
    </script>
    <!-- Modernizr-->
    <script src="{{asset('HomePages/js/modernizr.min.js')}}"></script>
  </head>
  <!-- Body-->
  <body>
      
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-T4DJFPZ" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Template Customizer-->
    <div class="customizer-backdrop"></div>
    <div class="customizer">
      <div class="customizer-toggle"><i class="icon-settings"></i></div>
      <div class="customizer-body">
        <div class="btn-group mb-4">
          <button class="btn btn-white btn-rounded btn-block dropdown-toggle my-0" type="button" data-toggle="dropdown">Choose Template</button>
          <div class="dropdown-menu"><a class="dropdown-item" href="http://themes.rokaux.com/unishop/v3.2.1/template-1/index.html">Template 1 (Clothing)</a><a class="dropdown-item" href="http://themes.rokaux.com/unishop/v3.2.1/template-2/index.html">Template 2 (Furniture)</a><a class="dropdown-item" href="index.html">Template 3 (Electronics)</a></div>
        </div>
        <div class="customizer-title">Choose color</div>
        <div class="customizer-color-switch"><a class="active" href="#" data-color="default" style="background-color: #0055ff;"></a><a href="#" data-color="a0cd32" style="background-color: #a0cd32;"></a><a href="#" data-color="e61923" style="background-color: #e61923;"></a><a href="#" data-color="ff9900" style="background-color: #ff9900;"></a></div>
        <div class="customizer-title">Header option</div>
        <div class="form-group">
          <select class="form-control form-control-rounded input-light" id="header-option">
            <option value="sticky">Sticky</option>
            <option value="static">Static</option>
          </select>
        </div>
        <div class="customizer-title">Footer option</div>
        <div class="form-group">
          <select class="form-control form-control-rounded input-light" id="footer-option">
            <option value="dark">Dark</option>
            <option value="light">Light</option>
          </select>
        </div><a class="btn btn-primary btn-rounded btn-block margin-bottom-none" href="https://wrapbootstrap.com/theme/unishop-universal-e-commerce-template-WB0148688/?ref=rokaux">Buy Unishop</a>
      </div>
    </div>
    <!-- Header-->

    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="site-header navbar-sticky">
      <!-- Topbar-->
      <div class="topbar d-flex justify-content-between">
        <!-- Logo-->
        <div class="site-branding d-flex"><a class="site-logo align-self-center" href="index.html"><img src="{{asset('HomePages/img/logo/logo.png')}}" alt="Unishop"></a></div>
        <!-- Search / Categories-->
        <div class="search-box-wrap d-flex">
          <div class="search-box-inner align-self-center">
            <div class="search-box d-flex">
              <div class="btn-group categories-btn">
                <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="icon-menu text-lg"></i>&nbsp;Categories</button>
                <div class="dropdown-menu mega-dropdown">
                  <div class="row">
                    <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html"><img class="d-block" src="{{asset('HomePages/img/shop/header-categories/01.jpg')}}"><span class="text-gray-dark">Computers &amp; Accessories</span></a></div>
                    <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html"><img class="d-block" src="{{asset('HomePages/img/shop/header-categories/02.jpg')}}"><span class="text-gray-dark">Smartphones &amp; Tablets</span></a></div>
                    <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html"><img class="d-block" src="{{asset('HomePages/img/shop/header-categories/03.jpg')}}"><span class="text-gray-dark">TV, Video &amp; Audio</span></a></div>
                    <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html"><img class="d-block" src="{{asset('HomePages/img/shop/header-categories/04.jpg')}}"><span class="text-gray-dark">Cameras, Photo &amp; Video</span></a></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html"><img class="d-block" src="{{asset('HomePages/img/shop/header-categories/05.jpg')}}"><span class="text-gray-dark">Headphones</span></a></div>
                    <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html"><img class="d-block" src="{{asset('HomePages/img/shop/header-categories/06.jpg')}}"><span class="text-gray-dark">Wearable Electronics</span></a></div>
                    <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html"><img class="d-block" src="{{asset('HomePages/img/shop/header-categories/07.jpg')}}"><span class="text-gray-dark">Printers &amp; Ink</span></a></div>
                    <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html"><img class="d-block" src="{{asset('HomePages/img/shop/header-categories/08.jpg')}}"><span class="text-gray-dark">Video Games</span></a></div>
                  </div>
                </div>
              </div>
              <form class="input-group" method="get"><span class="input-group-btn">
                  <button type="submit"><i class="icon-search"></i></button></span>
                <input class="form-control" type="search" placeholder="Search for anything">
              </form>
            </div>
          </div>
        </div>
        <!-- Toolbar-->
        <div class="toolbar d-flex">
          <div class="toolbar-item visible-on-mobile mobile-menu-toggle"><a href="#">
              <div><i class="icon-menu"></i><span class="text-label">Menu</span></div></a></div>
          <div class="toolbar-item hidden-on-mobile"><a href="#">
              <div><i class="flag-icon"><img src="{{asset('HomePages/img/flags/EN.png')}}" alt="English"></i><span class="text-label">Eng / Usd</span></div></a>
            <ul class="toolbar-dropdown lang-dropdown">
              <li class="px-3 pt-1 pb-2">
                <select class="form-control form-control-sm">
                  <option value="usd">$ USD</option>
                  <option value="usd">€ EUR</option>
                  <option value="usd">£ UKP</option>
                  <option value="usd">¥ JPY</option>
                </select>
              </li>
              <li><a href="#"><i class="flag-icon"><img src="{{asset('HomePages/img/flags/FR.png')}}" alt="Français"></i>&nbsp;Français</a></li>
              <li><a href="#"><i class="flag-icon"><img src="{{asset('HomePages/img/flags/DE.png')}}" alt="Deutsch"></i>&nbsp;Deutsch</a></li>
              <li><a href="#"><i class="flag-icon"><img src="{{asset('HomePages/img/flags/IT.png')}}" alt="Italiano"></i>&nbsp;Italiano</a></li>
            </ul>
          </div>
          <div class="toolbar-item hidden-on-mobile"><a href="product-comparison.html">
              <div><span class="compare-icon"><i class="icon-repeat"></i><span class="count-label">3</span></span><span class="text-label">Compare</span></div></a></div>
          <div class="toolbar-item hidden-on-mobile"><a href="account-login.html">
              <div><i class="icon-user"></i><span class="text-label">Sign In / Up</span></div></a>
            <div class="toolbar-dropdown text-center px-3">
              <p class="text-xs mb-3 pt-2">Sign in to your account or register new one to have full control over your orders, receive bonuses and more.</p><a class="btn btn-primary btn-sm btn-block" href="account-login.html">Sign In</a>
              <p class="text-xs text-muted mb-2">New customer?&nbsp;<a href="account-login.html">Register</a></p>
            </div>
          </div>
          <div class="toolbar-item"><a href="cart.html">
              <div><span class="cart-icon"><i class="icon-shopping-cart"></i><span class="count-label">3   </span></span><span class="text-label">Cart</span></div></a>
            <div class="toolbar-dropdown cart-dropdown widget-cart hidden-on-mobile">
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="shop-single.html"><img src="{{asset('HomePages/img/shop/widget/04.jpg')}}" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="shop-single.html">Canon EOS M50 Mirrorless Camera</a></h4><span class="entry-meta">1 x $910.00</span>
                </div>
                <div class="entry-delete"><i class="icon-x"></i></div>
              </div>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="shop-single.html"><img src="{{asset('HomePages/img/shop/widget/05.jpg')}}" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="shop-single.html">Apple iPhone X 256 GB Space Gray</a></h4><span class="entry-meta">1 x $1,450.00</span>
                </div>
                <div class="entry-delete"><i class="icon-x"></i></div>
              </div>
              <!-- Entry-->
              <div class="entry">
                <div class="entry-thumb"><a href="shop-single.html"><img src="{{asset('HomePages/img/shop/widget/06.jpg')}}" alt="Product"></a></div>
                <div class="entry-content">
                  <h4 class="entry-title"><a href="shop-single.html">HP LaserJet Pro Laser Printer</a></h4><span class="entry-meta">1 x $188.50</span>
                </div>
                <div class="entry-delete"><i class="icon-x"></i></div>
              </div>
              <div class="text-right">
                <p class="text-gray-dark py-2 mb-0"><span class='text-muted'>Subtotal:</span> &nbsp;$2,548.50</p>
              </div>
              <div class="d-flex">
                <div class="pr-2 w-50"><a class="btn btn-secondary btn-sm btn-block mb-0" href="cart.html">Expand Cart</a></div>
                <div class="pl-2 w-50"><a class="btn btn-primary btn-sm btn-block mb-0" href="checkout.html">Checkout</a></div>
              </div>
            </div>
          </div>
        </div>
        <!-- Mobile Menu-->
        <div class="mobile-menu">
          <!-- Search Box-->
          <div class="mobile-search">
            <form class="input-group" method="get"><span class="input-group-btn">
                <button type="submit"><i class="icon-search"></i></button></span>
              <input class="form-control" type="search" placeholder="Search site">
            </form>
          </div>
          <!-- Toolbar-->
          <div class="toolbar">
            <div class="toolbar-item"><a href="#">
                <div><i class="flag-icon"><img src="{{asset('HomePages/img/flags/EN.png')}}" alt="English"></i><span class="text-label">Eng / Usd</span></div></a>
              <ul class="toolbar-dropdown lang-dropdown w-100">
                <li class="px-3 pt-1 pb-2">
                  <select class="form-control form-control-sm">
                    <option value="usd">$ USD</option>
                    <option value="usd">€ EUR</option>
                    <option value="usd">£ UKP</option>
                    <option value="usd">¥ JPY</option>
                  </select>
                </li>
                <li><a href="#"><i class="flag-icon"><img src="{{asset('HomePages/img/flags/FR.png')}}" alt="Français"></i>&nbsp;Français</a></li>
                <li><a href="#"><i class="flag-icon"><img src="{{asset('HomePages/img/flags/DE.png')}}" alt="Deutsch"></i>&nbsp;Deutsch</a></li>
                <li><a href="#"><i class="flag-icon"><img src="{{asset('HomePages/img/flags/IT.png')}}" alt="Italiano"></i>&nbsp;Italiano</a></li>
              </ul>
            </div>
            <div class="toolbar-item"><a href="product-comparison.html">
                <div><span class="compare-icon"><i class="icon-repeat"></i><span class="count-label">3</span></span><span class="text-label">Compare</span></div></a></div>
            <div class="toolbar-item"><a href="account-login.html">
                <div><i class="icon-user"></i><span class="text-label">Sign In / Up</span></div></a></div>
          </div>
          <!-- Slideable (Mobile) Menu-->
          <nav class="slideable-menu">
            <ul class="menu" data-initial-height="385">
              <li class="has-children active"><span><a href="{{route('products')}}">Home</a><span class="sub-menu-toggle"></span></span>
                <ul class="slideable-submenu">
                    <li class="active"><a href="index.html">Hero Slider</a></li>
                    <li><a href="home-featured-categories.html">Categories Grid</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="shop-grid-ls.html">Shop</a><span class="sub-menu-toggle"></span></span>
                <ul class="slideable-submenu">
                    <li><a href="shop-categories.html">Shop Categories</a></li>
                  <li class="has-children"><span><a href="shop-grid-ls.html">Shop Grid</a><span class="sub-menu-toggle"></span></span>
                    <ul class="slideable-submenu">
                        <li><a href="shop-grid-ls.html">Grid Left Sidebar</a></li>
                        <li><a href="shop-grid-rs.html">Grid Right Sidebar</a></li>
                        <li><a href="shop-grid-ns.html">Grid No Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="has-children"><span><a href="shop-list-ls.html">Shop List</a><span class="sub-menu-toggle"></span></span>
                    <ul class="slideable-submenu">
                        <li><a href="shop-list-ls.html">List Left Sidebar</a></li>
                        <li><a href="shop-list-rs.html">List Right Sidebar</a></li>
                        <li><a href="shop-list-ns.html">List No Sidebar</a></li>
                    </ul>
                  </li>
                    <li><a href="shop-single.html">Single Product</a></li>
                    <li><a href="cart.html">Cart</a></li>
                  <li class="has-children"><span><a href="checkout-address.html">Checkout</a><span class="sub-menu-toggle"></span></span>
                    <ul class="slideable-submenu">
                        <li><a href="checkout-address.html">Address</a></li>
                        <li><a href="checkout-shipping.html">Shipping</a></li>
                        <li><a href="checkout-payment.html">Payment</a></li>
                        <li><a href="checkout-review.html">Review</a></li>
                        <li><a href="checkout-complete.html">Complete</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="has-children"><span><a href="#">Categories</a><span class="sub-menu-toggle"></span></span>
                <ul class="slideable-submenu">
                  <li><a href="#">Computers &amp; Accessories</a></li>
                  <li><a href="#">Smartphones &amp; Tablets</a></li>
                  <li><a href="#">TV, Video &amp; Audio</a></li>
                  <li><a href="#">Cameras, Photo &amp; Video</a></li>
                  <li><a href="#">Headphones</a></li>
                  <li><a href="#">Wearable Electronics</a></li>
                  <li><a href="#">Printers &amp; Ink</a></li>
                  <li><a href="#">Video Games</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="account-orders.html">Account</a><span class="sub-menu-toggle"></span></span>
                <ul class="slideable-submenu">
                    <li><a href="account-login.html">Login / Register</a></li>
                    <li><a href="account-password-recovery.html">Password Recovery</a></li>
                    <li><a href="account-orders.html">Orders List</a></li>
                    <li><a href="account-wishlist.html">Wishlist</a></li>
                    <li><a href="account-profile.html">Profile Page</a></li>
                    <li><a href="account-address.html">Contact / Shipping Address</a></li>
                    <li><a href="account-open-ticket.html">Open Ticket</a></li>
                    <li><a href="account-tickets.html">My Tickets</a></li>
                    <li><a href="account-single-ticket.html">Single Ticket</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="blog-rs.html">Blog</a><span class="sub-menu-toggle"></span></span>
                <ul class="slideable-submenu">
                  <li class="has-children"><span><a href="blog-rs.html">Blog Layout</a><span class="sub-menu-toggle"></span></span>
                    <ul class="slideable-submenu">
                        <li><a href="blog-rs.html">Blog Right Sidebar</a></li>
                        <li><a href="blog-ls.html">Blog Left Sidebar</a></li>
                        <li><a href="blog-ns.html">Blog No Sidebar</a></li>
                    </ul>
                  </li>
                  <li class="has-children"><span><a href="blog-single-rs.html">Single Post Layout</a><span class="sub-menu-toggle"></span></span>
                    <ul class="slideable-submenu">
                        <li><a href="blog-single-rs.html">Post Right Sidebar</a></li>
                        <li><a href="blog-single-ls.html">Post Left Sidebar</a></li>
                        <li><a href="blog-single-ns.html">Post No Sidebar</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="has-children"><span><a href="#">Pages</a><span class="sub-menu-toggle"></span></span>
                <ul class="slideable-submenu">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="faq.html">Help / FAQ</a></li>
                    <li><a href="product-comparison.html">Product Comparison</a></li>
                    <li><a href="order-tracking.html">Order Tracking</a></li>
                    <li><a href="search-results.html">Search Results</a></li>
                    <li><a href="404.html">404 Not Found</a></li>
                    <li><a href="coming-soon.html">Coming Soon</a></li>
                  <li><a class="text-danger" href="docs/dev-setup.html">Documentation</a></li>
                </ul>
              </li>
              <li class="has-children"><span><a href="components/accordion.html">Components</a><span class="sub-menu-toggle"></span></span>
                <ul class="slideable-submenu">
                    <li><a href="components/accordion.html">Accordion</a></li>
                    <li><a href="components/alerts.html">Alerts</a></li>
                    <li><a href="components/buttons.html">Buttons</a></li>
                    <li><a href="components/cards.html">Cards</a></li>
                    <li><a href="components/carousel.html">Carousel</a></li>
                    <li><a href="components/countdown.html">Countdown</a></li>
                    <li><a href="components/forms.html">Forms</a></li>
                    <li><a href="components/gallery.html">Gallery</a></li>
                    <li><a href="components/google-maps.html">Google Maps</a></li>
                    <li><a href="components/images.html">Images &amp; Figures</a></li>
                    <li><a href="components/list-group.html">List Group</a></li>
                    <li><a href="components/market-social-buttons.html">Market &amp; Social Buttons</a></li>
                    <li><a href="components/media.html">Media Object</a></li>
                    <li><a href="components/modal.html">Modal</a></li>
                    <li><a href="components/pagination.html">Pagination</a></li>
                    <li><a href="components/pills.html">Pills</a></li>
                    <li><a href="components/progress-bars.html">Progress Bars</a></li>
                    <li><a href="components/shop-items.html">Shop Items</a></li>
                    <li><a href="components/steps.html">Steps</a></li>
                    <li><a href="components/tables.html">Tables</a></li>
                    <li><a href="components/tabs.html">Tabs</a></li>
                    <li><a href="components/team.html">Team</a></li>
                    <li><a href="components/toasts.html">Toast Notifications</a></li>
                    <li><a href="components/tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
                    <li><a href="components/typography.html">Typography</a></li>
                    <li><a href="components/video-player.html">Video Player</a></li>
                    <li><a href="components/widgets.html">Widgets</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- Navbar-->
      <div class="navbar">
        <div class="btn-group categories-btn">
          <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"><i class="icon-menu text-lg"></i>&nbsp;Categories</button>
          <div class="dropdown-menu mega-dropdown">
            <div class="row">
              <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html"><img class="d-block" src="img/shop/header-categories/01.jpg"><span class="text-gray-dark">Computers &amp; Accessories</span></a></div>
              <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html"><img class="d-block" src="img/shop/header-categories/02.jpg"><span class="text-gray-dark">Smartphones &amp; Tablets</span></a></div>
              <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html"><img class="d-block" src="img/shop/header-categories/03.jpg"><span class="text-gray-dark">TV, Video &amp; Audio</span></a></div>
              <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html"><img class="d-block" src="img/shop/header-categories/04.jpg"><span class="text-gray-dark">Cameras, Photo &amp; Video</span></a></div>
            </div>
            <div class="row">
              <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html"><img class="d-block" src="img/shop/header-categories/05.jpg"><span class="text-gray-dark">Headphones</span></a></div>
              <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html"><img class="d-block" src="img/shop/header-categories/06.jpg"><span class="text-gray-dark">Wearable Electronics</span></a></div>
              <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html"><img class="d-block" src="img/shop/header-categories/07.jpg"><span class="text-gray-dark">Printers &amp; Ink</span></a></div>
              <div class="col-sm-3"><a class="d-block navi-link text-center mb-30" href="shop-grid-ls.html"><img class="d-block" src="img/shop/header-categories/08.jpg"><span class="text-gray-dark">Video Games</span></a></div>
            </div>
          </div>
        </div>
        <!-- Main Navigation-->
        <nav class="site-menu">
          <ul>
            <li class="has-submenu active"><a href="{{route('products')}}">Home</a>
              <ul class="sub-menu">
                <li class="active has-children"><a href="index.html">Hero Slider</a>
                  <ul class="sub-menu w-400 p-0 overflow-hidden">
                    <li><a class="p-0" href="index.html"><img src="{{asset('HomePages/img/banners/home01.jpg')}}" alt="Hero Slider Home"></a></li>
                  </ul>
                </li>
                <li class="has-children"><a href="home-featured-categories.html">Categories Grid</a>
                  <ul class="sub-menu w-400 p-0 overflow-hidden">
                    <li><a class="p-0" href="home-featured-categories.html"><img src="{{asset('HomePages/img/banners/home02.jpg')}}" alt="Categories Grid Home"></a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-submenu"><a href="shop-grid-ls.html">Shop</a>
              <ul class="sub-menu">
                  <li><a href="shop-categories.html">Shop Categories</a></li>
                <li class="has-children"><a href="shop-grid-ls.html">Shop Grid</a>
                  <ul class="sub-menu">
                      <li><a href="shop-grid-ls.html">Grid Left Sidebar</a></li>
                      <li><a href="shop-grid-rs.html">Grid Right Sidebar</a></li>
                      <li><a href="shop-grid-ns.html">Grid No Sidebar</a></li>
                  </ul>
                </li>
                <li class="has-children"><a href="shop-list-ls.html">Shop List</a>
                  <ul class="sub-menu">
                      <li><a href="shop-list-ls.html">List Left Sidebar</a></li>
                      <li><a href="shop-list-rs.html">List Right Sidebar</a></li>
                      <li><a href="shop-list-ns.html">List No Sidebar</a></li>
                  </ul>
                </li>
                  <li><a href="shop-single.html">Single Product</a></li>
                  <li><a href="cart.html">Cart</a></li>
                <li class="has-children"><a href="checkout-address.html">Checkout</a>
                  <ul class="sub-menu">             
                      <li><a href="checkout-address.html">Address</a></li>
                      <li><a href="checkout-shipping.html">Shipping</a></li>
                      <li><a href="checkout-payment.html">Payment</a></li>
                      <li><a href="checkout-review.html">Review</a></li>
                      <li><a href="checkout-complete.html">Complete</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-megamenu"><a href="#">Mega Menu</a>
              <ul class="mega-menu">
                <li><span class="mega-menu-title">Top Categories</span>
                  <ul class="sub-menu">
                    <li><a href="#">Computers &amp; Accessories</a></li>
                    <li><a href="#">Smartphones &amp; Tablets</a></li>
                    <li><a href="#">TV, Video &amp; Audio</a></li>
                    <li><a href="#">Cameras, Photo &amp; Video</a></li>
                    <li><a href="#">Headphones</a></li>
                    <li><a href="#">Wearable Electronics</a></li>
                    <li><a href="#">Printers &amp; Ink</a></li>
                    <li><a href="#">Video Games</a></li>
                  </ul>
                </li>
                <li><span class="mega-menu-title">Popular Brands</span>
                  <ul class="sub-menu">
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Canon Inc.</a></li>
                    <li><a href="#">Hewlett-Packard</a></li>
                    <li><a href="#">Lenovo</a></li>
                    <li><a href="#">Panasonic</a></li>
                    <li><a href="#">Samsung Electronics</a></li>
                    <li><a href="#">Sony</a></li>
                    <li><a href="#">Toshiba</a></li>
                  </ul>
                </li>
                <li><span class="mega-menu-title">Store Locator</span>
                  <div class="card mb-3">
                    <div class="card-body">
                      <ul class="list-icon">
                        <li> <i class="icon-map-pin text-muted"></i>514 S. Magnolia St. Orlando, FL 32806, USA</li>
                        <li> <i class="icon-phone text-muted"></i>+1 (786) 322 560 40</li>
                        <li class="mb-0"><i class="icon-mail text-muted"></i><a class="navi-link" href="mailto:orlando.store@unishop.com">orlando.store@unishop.com</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <ul class="list-icon">
                        <li> <i class="icon-map-pin text-muted"></i>44 Shirley Ave. West Chicago, IL 60185, USA</li>
                        <li> <i class="icon-phone text-muted"></i>+1 (847) 252 765 33</li>
                        <li class="mb-0"><i class="icon-mail text-muted"></i><a class="navi-link" href="mailto:chicago.store@unishop.comm">chicago.store@unishop.com</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li><a class="card border-0 bg-secondary rounded-0" href="shop-grid-ls.html"><img class="d-block mx-auto" alt="Samsung Galaxy S9" src="{{asset('HomePages/img/banners/mega-menu.jpg')}}"></a></li>
              </ul>
            </li>
            <li class="has-submenu"><a href="account-orders.html">Account</a>
              <ul class="sub-menu">
                  <li><a href="account-login.html">Login / Register</a></li>
                  <li><a href="account-password-recovery.html">Password Recovery</a></li>
                  <li><a href="account-orders.html">Orders List</a></li>
                  <li><a href="account-wishlist.html">Wishlist</a></li>
                  <li><a href="account-profile.html">Profile Page</a></li>
                  <li><a href="account-address.html">Contact / Shipping Address</a></li>
                  <li><a href="account-tickets.html">My Tickets</a></li>
                  <li><a href="account-single-ticket.html">Single Ticket</a></li>
              </ul>
            </li>
            <li class="has-submenu"><a href="blog-rs.html">Blog</a>
              <ul class="sub-menu">
                <li class="has-children"><a href="blog-rs.html">Blog Layout</a>
                  <ul class="sub-menu">
                      <li><a href="blog-rs.html">Blog Right Sidebar</a></li>
                      <li><a href="blog-ls.html">Blog Left Sidebar</a></li>
                      <li><a href="blog-ns.html">Blog No Sidebar</a></li>
                  </ul>
                </li>
                <li class="has-children"><a href="blog-single-rs.html">Single Post Layout</a>
                  <ul class="sub-menu">
                      <li><a href="blog-single-rs.html">Post Right Sidebar</a></li>
                      <li><a href="blog-single-ls.html">Post Left Sidebar</a></li>
                      <li><a href="blog-single-ns.html">Post No Sidebar</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-submenu"><a href="#">Pages</a>
              <ul class="sub-menu">
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="contacts.html">Contacts</a></li>
                  <li><a href="faq.html">Help / FAQ</a></li>
                  <li><a href="product-comparison.html">Product Comparison</a></li>
                  <li><a href="order-tracking.html">Order Tracking</a></li>
                  <li><a href="search-results.html">Search Results</a></li>
                  <li><a href="404.html">404 Not Found</a></li>
                  <li><a href="coming-soon.html">Coming Soon</a></li>
                <li><a class="text-danger" href="docs/dev-setup.html">Documentation</a></li>
              </ul>
            </li>
            <li class="has-megamenu"><a href="{{asset('HomePages/components/accordion.html')}}">Components</a>
              <ul class="mega-menu">
                <li><span class="mega-menu-title">A - F</span>
                    <ul class="sub-menu">
                      <li><a href="components/accordion.html">Accordion</a></li>
                      <li><a href="components/alerts.html">Alerts</a></li>
                      <li><a href="components/buttons.html">Buttons</a></li>
                      <li><a href="components/cards.html">Cards</a></li>
                      <li><a href="components/carousel.html">Carousel</a></li>
                      <li><a href="components/countdown.html">Countdown</a></li>
                      <li><a href="components/forms.html">Forms</a></li>
                    </ul>
                </li>
                <li><span class="mega-menu-title">G - M</span>
                    <ul class="sub-menu">
                      <li><a href="components/gallery.html">Gallery</a></li>
                      <li><a href="components/google-maps.html">Google Maps</a></li>
                      <li><a href="components/images.html">Images &amp; Figures</a></li>
                      <li><a href="components/list-group.html">List Group</a></li>
                      <li><a href="components/market-social-buttons.html">Market &amp; Social Buttons</a></li>
                      <li><a href="components/media.html">Media Object</a></li>
                      <li><a href="components/modal.html">Modal</a></li>
                    </ul>
                </li>
                <li><span class="mega-menu-title">P - T</span>
                    <ul class="sub-menu">
                      <li><a href="components/pagination.html">Pagination</a></li>
                      <li><a href="components/pills.html">Pills</a></li>
                      <li><a href="components/progress-bars.html">Progress Bars</a></li>
                      <li><a href="components/shop-items.html">Shop Items</a></li>
                      <li><a href="components/spinners.html">Spinners</a></li>
                      <li><a href="components/steps.html">Steps</a></li>
                      <li><a href="components/tables.html">Tables</a></li>
                    </ul>
                </li>
                <li><span class="mega-menu-title">T - W</span>
                    <ul class="sub-menu">
                      <li><a href="components/tabs.html">Tabs</a></li>
                      <li><a href="components/team.html">Team</a></li>
                      <li><a href="components/toasts.html">Toast Notifications</a></li>
                      <li><a href="components/tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
                      <li><a href="components/typography.html">Typography</a></li>
                      <li><a href="components/video-player.html">Video Player</a></li>
                      <li><a href="components/widgets.html">Widgets</a></li>
                    </ul>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- Toolbar ( Put toolbar here only if you enable sticky navbar )-->
        <div class="toolbar">
          <div class="toolbar-inner">
            <div class="toolbar-item"><a href="product-comparison.html">
                <div><span class="compare-icon"><i class="icon-repeat"></i><span class="count-label">3</span></span><span class="text-label">Compare</span></div></a></div>
            <div class="toolbar-item"><a href="cart.html">
                <div><span class="cart-icon"><i class="icon-shopping-cart"></i><span class="count-label">3   </span></span><span class="text-label">Cart</span></div></a>
              <div class="toolbar-dropdown cart-dropdown widget-cart">
                <!-- Entry-->
                <div class="entry">
                  <div class="entry-thumb"><a href="shop-single.html"><img src="{{asset('HomePages/img/shop/widget/04.jpg')}}" alt="Product"></a></div>
                  <div class="entry-content">
                    <h4 class="entry-title"><a href="shop-single.html">Canon EOS M50 Mirrorless Camera</a></h4><span class="entry-meta">1 x $910.00</span>
                  </div>
                  <div class="entry-delete"><i class="icon-x"></i></div>
                </div>
                <!-- Entry-->
                <div class="entry">
                  <div class="entry-thumb"><a href="shop-single.html"><img src="{{asset('HomePages/img/shop/widget/05.jpg')}}" alt="Product"></a></div>
                  <div class="entry-content">
                    <h4 class="entry-title"><a href="shop-single.html">Apple iPhone X 256 GB Space Gray</a></h4><span class="entry-meta">1 x $1,450.00</span>
                  </div>
                  <div class="entry-delete"><i class="icon-x"></i></div>
                </div>
                <!-- Entry-->
                <div class="entry">
                  <div class="entry-thumb"><a href="shop-single.html"><img src="{{asset('HomePages/img/shop/widget/06.jpg')}}" alt="Product"></a></div>
                  <div class="entry-content">
                    <h4 class="entry-title"><a href="shop-single.html">HP LaserJet Pro Laser Printer</a></h4><span class="entry-meta">1 x $188.50</span>
                  </div>
                  <div class="entry-delete"><i class="icon-x"></i></div>
                </div>
                <div class="text-right">
                  <p class="text-gray-dark py-2 mb-0"><span class='text-muted'>Subtotal:</span> &nbsp;$2,548.50</p>
                </div>
                <div class="d-flex">
                  <div class="pr-2 w-50"><a class="btn btn-secondary btn-sm btn-block mb-0" href="cart.html">Expand Cart</a></div>
                  <div class="pl-2 w-50"><a class="btn btn-primary btn-sm btn-block mb-0" href="checkout.html">Checkout</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
     <!-- Page Content-->
     <!-- @yield('content') -->
    

    </footer>
    <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-chevron-up"></i></a>
    <!-- Backdrop-->
    <div class="site-backdrop"></div>
    <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
    <script src="{{asset('HomePages/js/vendor.min.js')}}"></script>
    <script src="{{asset('HomePages/js/scripts.min.js')}}"></script>
    <!-- Customizer scripts-->
    <script src="{{asset('HomePages/customizer/customizer.min.js')}}"></script>
  </body>

<!-- Mirrored from themes.rokaux.com/unishop/v3.2.1/template-3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Nov 2019 21:24:47 GMT -->
</html>

