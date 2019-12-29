@extends('pages.navbar')

@section('content')



<!-- Page Title-->

<div class="page-title">
  <div class="container">
    <div class="column">
      <h1>Shop Grid Left Sidebar</h1>
    </div>
    <div class="column">
      <ul class="breadcrumbs">
        <li><a href="index.html">Home</a>
        </li>
        <li class="separator">&nbsp;</li>
        <li>Shop Grid Left Sidebar</li>
      </ul>
    </div>
  </div>
</div>
<!-- Page Content-->
<div class="container padding-bottom-3x mb-1">
  <div class="row">
    <!-- Products-->
    <div class="col-lg-9 order-lg-2">

      <!-- Shop Toolbar-->
      <div class="shop-toolbar padding-bottom-1x mb-2">
        <div class="column">
          <div class="shop-sorting">
            <label for="sorting">Sort by:</label>
            <select class="form-control" id="sorting">
              <option>Popularity</option>
              <option>Low - High Price</option>
              <option>High - Low Price</option>
              <option>Average Rating</option>
              <option>A - Z Order</option>
              <option>Z - A Order</option>
            </select><span class="text-muted">Showing:&nbsp;</span><span>1 - 12 items</span>
          </div>
        </div>
        <div class="column">
          <div class="shop-view"><a class="grid-view active" href="shop-grid-ls.html"><span></span><span></span><span></span></a><a class="list-view" href="shop-list-ls.html"><span></span><span></span><span></span></a></div>
        </div>
      </div>

      <h3>All products in <span class="badge badge-info">{{$category->name}} category</span></h3>
      @php
      $products = $category->products;
      @endphp

      @if($products->count()>0)
      <!-- Products Grid-->
      <div class="row">

        @foreach($products as $product)

        <div class="col-md-4 col-sm-6">
          <div class="product-card mb-30">
            <div class="product-badge bg-danger">Sale</div>
            @php $i=1; @endphp

            @foreach($product->images as $image)

            @if($i>0)
            <a class="product-thumb" href="{{URL::to('shop/'.$product->slug)}}"><img style="height:200px;width:200px;" src="{{asset('upload/productspic/'.$image->image)}}" alt="Product"></a>

            @endif

            @php $i--; @endphp

            @endforeach
            <div class="product-card-body">
              <div class="product-category"><a href="#">Smart home</a></div>
              <h3 class="product-title"><a href="shop-single.html">{{$product->title}}</a></h3>
              <h4 class="product-price">
                <del>$62.00</del>{{$product->price}}
              </h4>
            </div>
            <div class="product-button-group"><a class="product-button btn-wishlist" href="#"><i class="icon-heart"></i><span>Wishlist</span></a><a class="product-button btn-compare" href="#"><i class="icon-repeat"></i><span>Compare</span></a><a class="product-button" href="#" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-check-circle" data-toast-title="Product" data-toast-message="successfuly added to cart!"><i class="icon-shopping-cart"></i><span>To Cart</span></a></div>
          </div>
        </div>
        @endforeach


      </div>
      <!-- Pagination-->
      @else
      <div class="alert alert-warning">
        No products found.
      </div>
      @endif


    </div>

    <!-- Sidebar          -->
    <div class="col-lg-3 order-lg-1">
      <div class="sidebar-toggle position-left"><i class="icon-filter"></i></div>
      <aside class="sidebar sidebar-offcanvas position-left"><span class="sidebar-close"><i class="icon-x"></i></span>
        <!-- Widget Categories-->
        <section class="widget widget-categories">
          <h3 class="widget-title">Shop Categories</h3>
          @foreach(App\Models\Category::orderBy('name','asc')->where('parent_id',NULL)->get() as $parent)

          <ul>
            <li class="has-children "><a href="#main{{$parent->id}}">{{$parent->name}}</a><span></span>
              @foreach(App\Models\Category::orderBy('name','asc')->where('parent_id',$parent->id)->get() as $child)
              <ul>
                <li><a href="{{URL::to('categories/'.$child->id)}}">{{$child->name}}</a><span></span>
                  <!-- <ul>
                    <li><a href="#">Office PC</a></li>
                    <li><a href="#">Gaming PC</a></li>
                    <li><a href="#">PC for Learning</a></li>
                  </ul> -->
                </li>

              </ul>
              @endforeach
            </li>

          </ul>

          @endforeach

        </section>
        <!-- Widget Price Range-->
        <section class="widget widget-categories">
          <h3 class="widget-title">Price Range</h3>
          <form class="price-range-slider" method="post" data-start-min="250" data-start-max="650" data-min="0" data-max="1000" data-step="1">
            <div class="ui-range-slider"></div>
            <footer class="ui-range-slider-footer">
              <div class="column">
                <button class="btn btn-outline-primary btn-sm" type="submit">Filter</button>
              </div>
              <div class="column">
                <div class="ui-range-values">
                  <div class="ui-range-value-min">$<span></span>
                    <input type="hidden">
                  </div>&nbsp;-&nbsp;
                  <div class="ui-range-value-max">$<span></span>
                    <input type="hidden">
                  </div>
                </div>
              </div>
            </footer>
          </form>
        </section>
        <!-- Widget Size Filter-->
        <section class="widget">
          <h3 class="widget-title">Filter by Price</h3>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="low">
            <label class="custom-control-label" for="low">$50 - $100L&nbsp;<span class="text-muted">(208)</span></label>
          </div>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="middle">
            <label class="custom-control-label" for="middle">$100L - $500&nbsp;<span class="text-muted">(311)</span></label>
          </div>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="high">
            <label class="custom-control-label" for="high">$500 - $1,000&nbsp;<span class="text-muted">(485)</span></label>
          </div>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="top">
            <label class="custom-control-label" for="top">$1,000 - $5,000&nbsp;<span class="text-muted">(213)</span></label>
          </div>
        </section>
        <!-- Widget Brand Filter-->
        <section class="widget">
          <h3 class="widget-title">Filter by Brand</h3>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="apple">
            <label class="custom-control-label" for="apple">Apple&nbsp;<span class="text-muted">(254)</span></label>
          </div>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="bosh">
            <label class="custom-control-label" for="bosh">Bosh&nbsp;<span class="text-muted">(39)</span></label>
          </div>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="canon">
            <label class="custom-control-label" for="canon">Canon Inc.&nbsp;<span class="text-muted">(128)</span></label>
          </div>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="dell">
            <label class="custom-control-label" for="dell">Dell&nbsp;<span class="text-muted">(310)</span></label>
          </div>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="hewlet">
            <label class="custom-control-label" for="hewlet">Hewlett-Packard&nbsp;<span class="text-muted">(42)</span></label>
          </div>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="hitachi">
            <label class="custom-control-label" for="hitachi">Hitachi&nbsp;<span class="text-muted">(217)</span></label>
          </div>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="lg">
            <label class="custom-control-label" for="lg">LG Electronics&nbsp;<span class="text-muted">(310)</span></label>
          </div>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="panasonic">
            <label class="custom-control-label" for="panasonic">Panasonic&nbsp;<span class="text-muted">(74)</span></label>
          </div>
          <div class="custom-control custom-checkbox">
            <input class="custom-control-input" type="checkbox" id="siemens">
            <label class="custom-control-label" for="siemens">Siemens&nbsp;<span class="text-muted">(86)</span></label>
          </div>
        </section>
      </aside>
    </div>
  </div>
</div>

@endsection