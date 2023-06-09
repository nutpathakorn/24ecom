@extends('layouts.default')

@section('title_page')
Home - @parent
@stop

@section('content')

<!-- product tab start -->
<div class="product-tab pb-70">
    <div class="container grid-wraper">
        <div class="grid-nav-wraper mb-30">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                    <nav class="shop-grid-nav">
                        <ul class="nav nav-pills align-items-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">
                                    <i class="fa fa-th"></i>

                                </a>
                            </li>
                            <li class="nav-item me-0">
                                <a class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false"><i
                                        class="fa fa-list"></i></a>
                            </li>
                            <li> <span class="total-products text-capitalize">There are 13 products.</span></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-12 col-md-6 position-relative">
                    <div class="shop-grid-button d-flex align-items-center">
                        <span class="sort-by">Sort by:</span>
                        <button class="btn-dropdown d-flex justify-content-between" type="button"
                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Relevance <span class="ion-android-arrow-dropdown"></span>
                        </button>
                        <div class="dropdown-menu shop-grid-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Relevance</a>
                            <a class="dropdown-item" href="#"> Name, A to Z</a>
                            <a class="dropdown-item" href="#"> Name, Z to A</a>
                            <a class="dropdown-item" href="#"> Price, low to high</a>
                            <a class="dropdown-item" href="#"> Price, high to low</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product-tab-nav end -->
        <div class="tab-content" id="pills-tabContent">
            <!-- first tab-pane -->
            <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row grid-view theme1">
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="product-thumbnail position-relative">
                                    <span class="badge badge-danger top-left">New</span>
                                    <a href="single-product.html">
                                        <img class="first-img" src="{{URL::asset('resources/assets/img/product/1.jpg')}}" alt="thumbnail">
                                    </a>
                                    <!-- product links -->
                                    <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                    <!-- product links end-->
                                </div>
                                <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                            Men's Slim Fit Shirt Short Sleeve...</a></h3>
                                    <div class="star-rating my-10">
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star de-selected"></span>
                                    </div>
                                    <h6 class="product-price">$11.90</h6>
                                </div>
                            </div>
                        </div>
                        <!-- product-list End -->
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="product-thumbnail position-relative">
                                    <span class="badge badge-success top-left">-10%</span>
                                    <span class="badge badge-danger top-left">New</span>
                                    <a href="single-product.html">
                                        <img class="first-img" src="{{URL::asset('resources/assets/img/product/6.jpg')}}" alt="thumbnail">
                                    </a>
                                    <!-- product links -->
                                    <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                    <!-- product links end-->
                                </div>
                                <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                            Running Arishi trainers in triple</a></h3>
                                    <div class="star-rating my-10">
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star de-selected"></span>
                                    </div>
                                     <h6 class="product-price">$11.90</h6>
                                </div>
                            </div>
                        </div>
                        <!-- product-list End -->
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="product-thumbnail position-relative">
                                    <span class="badge badge-danger top-left">New</span>
                                    <a href="single-product.html">
                                        <img class="first-img" src="{{URL::asset('resources/assets/img/product/2.jpg')}}" alt="thumbnail">
                                    </a>
                                    <!-- product links -->
                                    <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                    <!-- product links end-->
                                </div>
                                <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                            Fresh Foam Kaymin from new zeland</a></h3>
                                    <div class="star-rating my-10">
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star de-selected"></span>
                                    </div>
                                    <h6 class="product-price">$11.90</h6>
                                </div>
                            </div>
                        </div>
                        <!-- product-list End -->
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="product-thumbnail position-relative">
                                    <span class="badge badge-danger top-left">New</span>
                                    <a href="single-product.html">
                                        <img class="first-img" src="{{URL::asset('resources/assets/img/product/7.jpg')}}" alt="thumbnail">
                                    </a>
                                    <!-- product links -->
                                    <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                    <!-- product links end-->
                                </div>
                                <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                            Running Fuel Cell trainers</a></h3>
                                    <div class="star-rating my-10">
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star de-selected"></span>
                                    </div>
                                    <h6 class="product-price">$11.90</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="product-thumbnail position-relative">
                                    <span class="badge badge-danger top-left">New</span>
                                    <a href="single-product.html">
                                        <img class="first-img" src="{{URL::asset('resources/assets/img/product/3.jpg')}}" alt="thumbnail">
                                    </a>
                                    <!-- product links -->
                                    <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                    <!-- product links end-->
                                </div>
                                <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                            Couture
                                            Tricot Logo Stripe Jacket</a></h3>
                                    <div class="star-rating my-10">
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star de-selected"></span>
                                    </div>
                                    <h6 class="product-price">$11.90</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="product-thumbnail position-relative">
                                    <span class="badge badge-danger top-left">New</span>
                                    <a href="single-product.html">
                                        <img class="first-img" src="{{URL::asset('resources/assets/img/product/8.jpg')}}" alt="thumbnail">
                                    </a>
                                    <!-- product links -->
                                    <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                    <!-- product links end-->
                                </div>
                                <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                            Kaval
                                            Windbreaker Winter Jacket</a></h3>
                                    <div class="star-rating my-10">
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star de-selected"></span>
                                    </div>
                                    <h6 class="product-price">$11.90</h6>
                                </div>
                            </div>
                        </div>
                        <!-- product-list End -->
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="product-thumbnail position-relative">
                                    <span class="badge badge-danger top-left">New</span>
                                    <a href="single-product.html">
                                        <img class="first-img" src="{{URL::asset('resources/assets/img/product/4.jpg')}}" alt="thumbnail">
                                        <img class="second-img" src="{{URL::asset('resources/assets/img/product/6.jpg')}}" alt="thumbnail">
                                    </a>
                                    <!-- product links -->
                                    <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                    <!-- product links end-->
                                </div>
                                <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                            Couture
                                            Tricot Logo Stripe Jacket</a></h3>
                                    <div class="star-rating my-10">
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star de-selected"></span>
                                    </div>
                                     <h6 class="product-price">$11.90</h6>
                                </div>
                            </div>
                        </div>
                        <!-- product-list End -->
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="product-thumbnail position-relative">
                                    <span class="badge badge-danger top-left">New</span>
                                    <a href="single-product.html">
                                        <img class="first-img" src="{{URL::asset('resources/assets/img/product/8.jpg')}}" alt="thumbnail">
                                    </a>
                                    <!-- product links -->
                                    <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                    <!-- product links end-->
                                </div>
                                <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                            Kaval
                                            Windbreaker Winter Jacket</a></h3>
                                    <div class="star-rating my-10">
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star de-selected"></span>
                                    </div>
                                    <h6 class="product-price">$11.90</h6>
                                </div>
                            </div>
                        </div>
                        <!-- product-list End -->
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="product-thumbnail position-relative">
                                    <span class="badge badge-danger top-left">New</span>
                                    <a href="single-product.html">
                                        <img class="first-img" src="{{URL::asset('resources/assets/img/product/5.jpg')}}" alt="thumbnail">
                                        <img class="second-img" src="{{URL::asset('resources/assets/img/product/6.jpg')}}" alt="thumbnail">
                                    </a>
                                    <!-- product links -->
                                    <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                    <!-- product links end-->
                                </div>
                                <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                            Men's
                                            Slim Fit Shirt Short Sleeve...</a></h3>
                                    <div class="star-rating my-10">
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star de-selected"></span>
                                    </div>
                                    <h6 class="product-price">$11.90</h6>
                                </div>
                            </div>
                        </div>
                        <!-- product-list End -->
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="product-thumbnail position-relative">
                                    <span class="badge badge-danger top-left">New</span>
                                    <a href="single-product.html">
                                        <img class="first-img" src="{{URL::asset('resources/assets/img/product/6.jpg')}}" alt="thumbnail">
                                        <img class="second-img" src="{{URL::asset('resources/assets/img/product/5.jpg')}}" alt="thumbnail">
                                    </a>
                                    <!-- product links -->
                                    <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                    <!-- product links end-->
                                </div>
                                <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                            Kaval
                                            Windbreaker Winter Jacket</a></h3>
                                    <div class="star-rating my-10">
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star de-selected"></span>
                                    </div>
                                    <h6 class="product-price">$11.90</h6>
                                </div>
                            </div>
                        </div>
                        <!-- product-list End -->
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="product-thumbnail position-relative">
                                    <span class="badge badge-danger top-left">New</span>
                                    <a href="single-product.html">
                                        <img class="first-img" src="{{URL::asset('resources/assets/img/product/7.jpg')}}" alt="thumbnail">
                                        <img class="second-img" src="{{URL::asset('resources/assets/img/product/8.jpg')}}" alt="thumbnail">
                                    </a>
                                    <!-- product links -->
                                    <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                    <!-- product links end-->
                                </div>
                                <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                            Men's
                                            Slim Fit Shirt Short Sleeve...</a></h3>
                                    <div class="star-rating my-10">
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star de-selected"></span>
                                    </div>
                                     <h6 class="product-price">$11.90</h6>
                                </div>
                            </div>
                        </div>
                        <!-- product-list End -->
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="product-thumbnail position-relative">
                                    <span class="badge badge-danger top-left">New</span>
                                    <a href="single-product.html">
                                        <img class="first-img" src="{{URL::asset('resources/assets/img/product/4.jpg')}}" alt="thumbnail">
                                        <img class="second-img" src="{{URL::asset('resources/assets/img/product/5.jpg')}}" alt="thumbnail">
                                    </a>
                                    <!-- product links -->
                                    <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                    <!-- product links end-->
                                </div>
                                <div class="product-desc">
                                    <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                            Kaval
                                            Windbreaker Winter Jacket</a></h3>
                                    <div class="star-rating my-10">
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star"></span>
                                        <span class="ion-ios-star de-selected"></span>
                                    </div>
                                    <h6 class="product-price">$11.90</h6>
                                </div>
                            </div>
                        </div>
                        <!-- product-list End -->
                    </div>
                </div>
            </div>
            <!-- second tab-pane -->
            <div class="tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row grid-view-list theme1">
                    <div class="col-12 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column flex-sm-row">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-left">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="{{URL::asset('resources/assets/img/product/1.jpg')}}" alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                         <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body ps-4 mt-30 mt-sm-0">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                    Men's Slim Fit Shirt Short Sleeve...</a></h3>
                                            <div class="star-rating mb-10 mt-10">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <h6 class="product-price">$11.90</h6>
                                        </div>
                                        <div class="availability-list pb-30 mt-20 border-bottom">
                                            <p>Availability: <span>1200 In Stock</span></p>
                                        </div>
                                        <ul class="product-list-des">
                                            <li>
                                                Block out the haters with the fresh adidas® Originals Kaval Windbreaker
                                                Jacket.
                                            </li>
                                            <li>
                                                Part of the Kaval Collection.
                                            </li>
                                            <li>
                                                Regular fit is eased, but not sloppy, and perfect for any activity.
                                            </li>
                                            <li>
                                                Plain-woven jacket specifically constructed for freedom of movement.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product-list End -->
                    </div>
                    <div class="col-12 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column flex-sm-row">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-success top-left">-10%</span>
                                        <span class="badge badge-danger top-left">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="{{URL::asset('resources/assets/img/product/6.jpg')}}" alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                         <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body ps-4 mt-30 mt-sm-0">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                                    Running Arishi trainers in triple</a></h3>
                                            <div class="star-rating mb-10 mt-10">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <h6 class="product-price"><del class="del">$23.90</del>
                                                <span class="onsale">$21.51</span></h6>
                                        </div>
                                        <div class="availability-list pb-30 mt-20 border-bottom">
                                            <p>Availability: <span>1200 In Stock</span></p>
                                        </div>
                                        <ul class="product-list-des">
                                            <li>
                                                Block out the haters with the fresh adidas® Originals Kaval Windbreaker
                                                Jacket.
                                            </li>
                                            <li>
                                                Part of the Kaval Collection.
                                            </li>
                                            <li>
                                                Regular fit is eased, but not sloppy, and perfect for any activity.
                                            </li>
                                            <li>
                                                Plain-woven jacket specifically constructed for freedom of movement.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product-list End -->
                    </div>
                    <div class="col-12 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column flex-sm-row">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-left">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="{{URL::asset('resources/assets/img/product/2.jpg')}}" alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                         <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body ps-4 mt-30 mt-sm-0">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                                    Fresh Foam Kaymin from new zeland</a></h3>
                                            <div class="star-rating mb-10 mt-10">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <h6 class="product-price">$11.90</h6>

                                        </div>
                                        <div class="availability-list pb-30 mt-20 border-bottom">
                                            <p>Availability: <span>1200 In Stock</span></p>
                                        </div>
                                        <ul class="product-list-des">
                                            <li>
                                                Block out the haters with the fresh adidas® Originals Kaval Windbreaker
                                                Jacket.
                                            </li>
                                            <li>
                                                Part of the Kaval Collection.
                                            </li>
                                            <li>
                                                Regular fit is eased, but not sloppy, and perfect for any activity.
                                            </li>
                                            <li>
                                                Plain-woven jacket specifically constructed for freedom of movement.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product-list End -->
                    </div>
                    <div class="col-12 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column flex-sm-row">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-left">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="{{URL::asset('resources/assets/img/product/7.jpg')}}" alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                         <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body ps-4 mt-30 mt-sm-0">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Balance
                                                    Running Fuel Cell trainers</a></h3>
                                            <div class="star-rating mb-10 mt-10">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <h6 class="product-price">$11.90</h6>

                                        </div>
                                        <div class="availability-list pb-30 mt-20 border-bottom">
                                            <p>Availability: <span>1200 In Stock</span></p>
                                        </div>
                                        <ul class="product-list-des">
                                            <li>
                                                Block out the haters with the fresh adidas® Originals Kaval Windbreaker
                                                Jacket.
                                            </li>
                                            <li>
                                                Part of the Kaval Collection.
                                            </li>
                                            <li>
                                                Regular fit is eased, but not sloppy, and perfect for any activity.
                                            </li>
                                            <li>
                                                Plain-woven jacket specifically constructed for freedom of movement.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column flex-sm-row">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-left">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="{{URL::asset('resources/assets/img/product/3.jpg')}}" alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                         <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body ps-4 mt-30 mt-sm-0">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                                    Couture
                                                    Tricot Logo Stripe Jacket</a></h3>
                                            <div class="star-rating mb-10 mt-10">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <h6 class="product-price"> $21.51</h6>

                                        </div>
                                        <div class="availability-list pb-30 mt-20 border-bottom">
                                            <p>Availability: <span>1200 In Stock</span></p>
                                        </div>
                                        <ul class="product-list-des">
                                            <li>
                                                Block out the haters with the fresh adidas® Originals Kaval Windbreaker
                                                Jacket.
                                            </li>
                                            <li>
                                                Part of the Kaval Collection.
                                            </li>
                                            <li>
                                                Regular fit is eased, but not sloppy, and perfect for any activity.
                                            </li>
                                            <li>
                                                Plain-woven jacket specifically constructed for freedom of movement.
                                            </li>
                                        </ul>
                                       
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column flex-sm-row">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-left">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="{{URL::asset('resources/assets/img/product/8.jpg')}}" alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                         <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body ps-4 mt-30 mt-sm-0">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                                    Kaval
                                                    Windbreaker Winter Jacket</a></h3>
                                            <div class="star-rating mb-10 mt-10">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <h6 class="product-price">$11.90</h6>

                                        </div>
                                        <div class="availability-list pb-30 mt-20 border-bottom">
                                            <p>Availability: <span>1200 In Stock</span></p>
                                        </div>
                                        <ul class="product-list-des">
                                            <li>
                                                Block out the haters with the fresh adidas® Originals Kaval Windbreaker
                                                Jacket.
                                            </li>
                                            <li>
                                                Part of the Kaval Collection.
                                            </li>
                                            <li>
                                                Regular fit is eased, but not sloppy, and perfect for any activity.
                                            </li>
                                            <li>
                                                Plain-woven jacket specifically constructed for freedom of movement.
                                            </li>
                                        </ul>
                                       
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product-list End -->
                    </div>
                    <div class="col-12 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column flex-sm-row">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-left">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="{{URL::asset('resources/assets/img/product/4.jpg')}}" alt="thumbnail">
                                            <img class="second-img" src="{{URL::asset('resources/assets/img/product/4.1.jpg')}}" alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                         <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body ps-4 mt-30 mt-sm-0">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">Juicy
                                                    Couture
                                                    Tricot Logo Stripe Jacket</a></h3>
                                            <div class="star-rating mb-10 mt-10">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <h6 class="product-price"><del class="del">$23.90</del>
                                                <span class="onsale">$21.51</span></h6>

                                        </div>
                                        <div class="availability-list pb-30 mt-20 border-bottom">
                                            <p>Availability: <span>1200 In Stock</span></p>
                                        </div>
                                        <ul class="product-list-des">
                                            <li>
                                                Block out the haters with the fresh adidas® Originals Kaval Windbreaker
                                                Jacket.
                                            </li>
                                            <li>
                                                Part of the Kaval Collection.
                                            </li>
                                            <li>
                                                Regular fit is eased, but not sloppy, and perfect for any activity.
                                            </li>
                                            <li>
                                                Plain-woven jacket specifically constructed for freedom of movement.
                                            </li>
                                        </ul>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product-list End -->
                    </div>
                    <div class="col-12 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column flex-sm-row">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-left">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="{{URL::asset('resources/assets/img/product/7.jpg')}}" alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                         <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body ps-4 mt-30 mt-sm-0">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                                    Kaval
                                                    Windbreaker Winter Jacket</a></h3>
                                            <div class="star-rating mb-10 mt-10">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <h6 class="product-price">$11.90</h6>

                                        </div>
                                        <div class="availability-list pb-30 mt-20 border-bottom">
                                            <p>Availability: <span>1200 In Stock</span></p>
                                        </div>
                                        <ul class="product-list-des">
                                            <li>
                                                Block out the haters with the fresh adidas® Originals Kaval Windbreaker
                                                Jacket.
                                            </li>
                                            <li>
                                                Part of the Kaval Collection.
                                            </li>
                                            <li>
                                                Regular fit is eased, but not sloppy, and perfect for any activity.
                                            </li>
                                            <li>
                                                Plain-woven jacket specifically constructed for freedom of movement.
                                            </li>
                                        </ul>
                                       
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product-list End -->
                    </div>
                    <div class="col-12 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column flex-sm-row">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-left">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="{{URL::asset('resources/assets/img/product/5.jpg')}}" alt="thumbnail">
                                            <img class="second-img" src="{{URL::asset('resources/assets/img/product/6.jpg')}}" alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                         <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body ps-4 mt-30 mt-sm-0">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                    Men's
                                                    Slim Fit Shirt Short Sleeve...</a></h3>
                                            <div class="star-rating mb-10 mt-10">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <h6 class="product-price">$11.90</h6>

                                        </div>
                                        <div class="availability-list pb-30 mt-20 border-bottom">
                                            <p>Availability: <span>1200 In Stock</span></p>
                                        </div>
                                        <ul class="product-list-des">
                                            <li>
                                                Block out the haters with the fresh adidas® Originals Kaval Windbreaker
                                                Jacket.
                                            </li>
                                            <li>
                                                Part of the Kaval Collection.
                                            </li>
                                            <li>
                                                Regular fit is eased, but not sloppy, and perfect for any activity.
                                            </li>
                                            <li>
                                                Plain-woven jacket specifically constructed for freedom of movement.
                                            </li>
                                        </ul>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product-list End -->
                    </div>
                    <div class="col-12 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column flex-sm-row">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-left">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="{{URL::asset('resources/assets/img/product/4.jpg')}}" alt="thumbnail">
                                            <img class="second-img" src="{{URL::asset('resources/assets/img/product/5.jpg')}}" alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                         <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body ps-4 mt-30 mt-sm-0">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                                    Kaval
                                                    Windbreaker Winter Jacket</a></h3>
                                            <div class="star-rating mb-10 mt-10">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <h6 class="product-price">$11.90</h6>

                                        </div>
                                        <div class="availability-list pb-30 mt-20 border-bottom">
                                            <p>Availability: <span>1200 In Stock</span></p>
                                        </div>
                                        <ul class="product-list-des">
                                            <li>
                                                Block out the haters with the fresh adidas® Originals Kaval Windbreaker
                                                Jacket.
                                            </li>
                                            <li>
                                                Part of the Kaval Collection.
                                            </li>
                                            <li>
                                                Regular fit is eased, but not sloppy, and perfect for any activity.
                                            </li>
                                            <li>
                                                Plain-woven jacket specifically constructed for freedom of movement.
                                            </li>
                                        </ul>
                                       
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product-list End -->
                    </div>
                    <div class="col-12 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column flex-sm-row">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-left">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="{{URL::asset('resources/assets/img/product/7.jpg')}}" alt="thumbnail">
                                            <img class="second-img" src="{{URL::asset('resources/assets/img/product/8.jpg')}}" alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                         <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body ps-4 mt-30 mt-sm-0">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">New Luxury
                                                    Men's
                                                    Slim Fit Shirt Short Sleeve...</a></h3>
                                            <div class="star-rating mb-10 mt-10">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <h6 class="product-price"><del class="del">$23.90</del>
                                                <span class="onsale">$21.51</span></h6>

                                        </div>
                                        <div class="availability-list pb-30 mt-20 border-bottom">
                                            <p>Availability: <span>1200 In Stock</span></p>
                                        </div>
                                        <ul class="product-list-des">
                                            <li>
                                                Block out the haters with the fresh adidas® Originals Kaval Windbreaker
                                                Jacket.
                                            </li>
                                            <li>
                                                Part of the Kaval Collection.
                                            </li>
                                            <li>
                                                Regular fit is eased, but not sloppy, and perfect for any activity.
                                            </li>
                                            <li>
                                                Plain-woven jacket specifically constructed for freedom of movement.
                                            </li>
                                        </ul>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product-list End -->
                    </div>
                    <div class="col-12 mb-30">
                        <div class="card product-card">
                            <div class="card-body p-0">
                                <div class="media flex-column flex-sm-row">
                                    <div class="product-thumbnail position-relative">
                                        <span class="badge badge-danger top-left">New</span>
                                        <a href="single-product.html">
                                            <img class="first-img" src="{{URL::asset('resources/assets/img/product/8.jpg')}}" alt="thumbnail">
                                            <img class="second-img" src="{{URL::asset('resources/assets/img/product/5.jpg')}}" alt="thumbnail">
                                        </a>
                                        <!-- product links -->
                                         <div class="product-links d-flex d-flex justify-content-between">
                                            <button class="pro-btn" data-bs-toggle="modal" data-bs-target="#add-to-cart" tabindex="0">Add
                                                to cart</button>
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-search-strong" data-original-title="Quick view"></span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#compare" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-ios-shuffle-strong" data-original-title="Add to compare"></span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tabindex="0">
                                                        <span data-bs-toggle="tooltip" data-placement="bottom" title="" class="ion-android-favorite-outline" data-original-title="add to wishlist"> </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- product links end-->
                                        </div>
                                        <!-- product links end-->
                                    </div>
                                    <div class="media-body ps-4 mt-30 mt-sm-0">
                                        <div class="product-desc">
                                            <h3 class="title"><a href="shop-grid-4-column.html">orginal
                                                    Kaval
                                                    Windbreaker Winter Jacket</a></h3>
                                            <div class="star-rating mb-10 mt-10">
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star"></span>
                                                <span class="ion-ios-star de-selected"></span>
                                            </div>
                                            <h6 class="product-price">$11.90</h6>

                                        </div>
                                        <div class="availability-list pb-30 mt-20 border-bottom">
                                            <p>Availability: <span>1200 In Stock</span></p>
                                        </div>
                                        <ul class="product-list-des">
                                            <li>
                                                Block out the haters with the fresh adidas® Originals Kaval Windbreaker
                                                Jacket.
                                            </li>
                                            <li>
                                                Part of the Kaval Collection.
                                            </li>
                                            <li>
                                                Regular fit is eased, but not sloppy, and perfect for any activity.
                                            </li>
                                            <li>
                                                Plain-woven jacket specifically constructed for freedom of movement.
                                            </li>
                                        </ul>
                                       
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product-list End -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <nav class="pagination-section mt-30">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <ul class="pagination justify-content-center">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="ion-chevron-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- product tab end -->
@stop