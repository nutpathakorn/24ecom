<!-- offcanvas-overlay start -->
<div class="offcanvas-overlay"></div>
<!-- offcanvas-overlay end -->

<!-- offcanvas-mobile-menu start -->
<div id="offcanvas-mobile-menu" class="offcanvas theme1 offcanvas-mobile-menu">
    <div class="inner">
        <div class="border-bottom mb-4 pb-4 text-end">
            <button class="offcanvas-close">×</button>
        </div>
        <div class="offcanvas-head mb-4">
            <nav class="offcanvas-top-nav">
                <ul class="d-flex justify-content-center align-items-center">
                    <li class="mx-3"><a href="compare.html"><i class="ion-ios-loop-strong"></i> Compare <span>(0)</span>
                        </a></li>
                    <li class="mx-3">
                        <a href="wishlist.html"> <i class="ion-android-favorite-outline"></i> Wishlist
                            <span>(0)</span></a>
                    </li>
                </ul>
            </nav>
        </div>
        <nav class="offcanvas-menu">
            <ul>
                <li><a href="{{URL::to('main')}}"><span class="menu-text">Home</span></a></li>
                <li><a href="{{URL::to('contact')}}">Contact Us</a></li>
            </ul>
        </nav>
        <div class="offcanvas-social py-30">
            <ul>
                <li>
                    <a href="#"><i class="icon-social-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-google"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- offcanvas-mobile-menu end -->

<!-- OffCanvas Wishlist Start -->
<div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist theme1">
    <div class="inner">
        <div class="head d-flex flex-wrap justify-content-between">
            <span class="title">Wishlist</span>
            <button class="offcanvas-close">×</button>
        </div>
        <ul class="minicart-product-list">
            <li>
                <a href="single-product.html" class="image"><img src="{{URL::asset('resources/assets/img/product/4.jpg')}}"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Walnut Cutting Board</a>
                    <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
            <li>
                <a href="single-product.html" class="image"><img src="{{URL::asset('resources/assets/img/product/5.jpg')}}"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                    <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
            <li>
                <a href="single-product.html" class="image"><img src="{{URL::asset('resources/assets/img/product/6.jpg')}}"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Fish Cut Out Set</a>
                    <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
        </ul>
        <a href="wishlist.html" class="btn theme--btn1 btn--lg text-uppercase  d-block d-sm-inline-block mt-30">view
            wishlist</a>
    </div>
</div>
<!-- OffCanvas Wishlist End -->

<!-- OffCanvas Cart Start -->
<div id="offcanvas-cart" class="offcanvas offcanvas-cart theme1">
    <div class="inner">
        <div class="head d-flex flex-wrap justify-content-between">
            <span class="title">Cart</span>
            <button class="offcanvas-close">×</button>
        </div>
        <ul class="minicart-product-list">
            <li>
                <a href="single-product.html" class="image"><img src="{{URL::asset('resources/assets/img/product/1.jpg')}}"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Walnut Cutting Board</a>
                    <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
            <li>
                <a href="single-product.html" class="image"><img src="{{URL::asset('resources/assets/img/product/2.jpg')}}"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                    <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
            <li>
                <a href="single-product.html" class="image"><img src="{{URL::asset('resources/assets/img/product/3.jpg')}}"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Fish Cut Out Set</a>
                    <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
        </ul>
        <div class="sub-total d-flex flex-wrap justify-content-between">
            <strong>Subtotal :</strong>
            <span class="amount">$144.00</span>
        </div>
        <a href="{{URL::to('cart')}}" class="btn theme--btn1 btn--lg text-uppercase  d-block d-sm-inline-block me-sm-2">view
            cart</a>
        <a href="{{URL::to('checkout')}}"
            class="btn theme--btn1 btn--lg text-uppercase  d-block d-sm-inline-block mt-4 mt-sm-0">checkout</a>
        <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
    </div>
</div>
<!-- OffCanvas Cart End -->

<!-- offcanvas-setting Start -->
<div id="offcanvas-setting" class="offcanvas offcanvas-cart theme1">
    <div class="inner">
        <div class="head d-flex justify-content-between">
            <span class="title">Setting</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="content_setting">
            <div class="info_setting">
                <h3 class="title_setting">My account</h3>
                <ul>
                    <li>
                        <a href="myaccount.html">My account</a>
                    </li>
                    <li>
                        <a href="checkout.html">Checkout</a>
                    </li>
                    <li>
                        <a href="login.html">Sign in</a>
                    </li>

                </ul>
            </div>

            <div class="info_setting">
                <h3 class="title_setting">Language</h3>
                <ul>
                    <li class="active">
                        <a href="#">
                            <img src="{{URL::asset('resources/assets/img/logo/france.jpg')}}" alt="img" />
                            English
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{URL::asset('resources/assets/img/logo/us-flag.jpg')}}" alt="img" />Français
                        </a>
                    </li>
                </ul>
            </div>
            <div class="info_setting">
                <div class="title_setting">Currency :</div>
                <ul>
                    <li><a href="#">EUR €</a></li>
                    <li class="active"><a href="#">USD $</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>
<!--offcanvas-setting End -->

<!-- header start -->
<header id="sticky" class="header style2 theme1">
    <!-- header-middle satrt -->
    <div class="header-middle px-xl-4">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-9 col-xl-7 position-xl-relative">
                    <div class="d-flex align-items-center justify-content-lg-between">
                        <div class="logo me-lg-5 me-xl-0">
                            <a href="index.html"><img src="{{URL::asset('resources/assets/img/logo/logo-dark.jpg')}}" alt="logo"></a>
                        </div>
                        <nav class="header-bottom theme1 d-none d-lg-block">
                            <ul class="main-menu d-flex align-items-center">
                                <li class="active">
                                    <a href="{{URL::to('main')}}" class="ps-0">Home</a>
                                </li>
                                <li><a href="{{URL::to('contact')}}">contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-3 col-xl-5">
                    <!-- search-form end -->
                    <div class="d-flex align-items-center justify-content-end">
                        <div class="cart-block-links theme1">
                            <ul class="d-flex align-items-center">
                                <li class="cart-block position-relative d-none d-sm-block">
                                    <a class="offcanvas-toggle" href="#offcanvas-cart">
                                        <i class="ion-bag"></i>
                                        <span class="badge cbdg1">5</span>
                                    </a>
                                </li>
                                <!-- cart block end -->
                            </ul>
                        </div>
                        <div class="mobile-menu-toggle theme1 d-lg-none">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewbox="0 0 800 600">
                                    <path
                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                        id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path
                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                        id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318)">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-middle end -->
</header>
<!-- header end -->

<!-- breadcrumb-section start -->
<nav class="breadcrumb-section theme1 breadcrumb-bg1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-title text-center my-20">
                    <h2 class="title text-dark text-capitalize">Hair Care</h2>
                </div>
            </div>
            <div class="col-12">
                <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Hair Care</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<!-- breadcrumb-section end -->