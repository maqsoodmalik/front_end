<style>
    /* #cart_btn{
        margin-top: 22px !important;
        margin-right: 15px !important;
    }
@media (max-width :990px){
    #cart_btn{
        margin-top: 27px !important;
        margin-right: 15px !important;
    }
}
@media (max-width :480px){
    #cart_btn{
        margin-top: 5px !important;
        margin-right: 15px !important;
    }
} */
#form-currency ul, #form-language ul{
    right: auto;
}
/* menu.css this class comment for navbar bottom border */
 /* .tt-menu .ul-top-items > li.li-top-item > .a-top-link::before  {
          background-color: #ce465b;
          content: "";
          left: 0;
          right: 0;
          margin: 0 auto;
          position: absolute;
          top: auto;
          bottom: -5px;
          height: 1px;
          -webkit-transition: all .4s ease-in-out 0s;
          -moz-transition: all .4s ease-in-out 0s;
          -ms-transition: all .4s ease-in-out 0s;
          -o-transition: all .4s ease-in-out 0s;
          transition: all .4s ease-in-out 0s;
          width: 0;
      } */
      /* .product-options .form-group.Size .checkbox{
        background-color: red;
      } */
</style>



<div id="header-sticky" class="header-sticky header_sticky_on">
    <div id="header-layout" class="header_style2 header-layout">
        <header>

            <div id="header_sticky_on" class="full-header">
                <div class="container d-flex justify-content-between" style="display: flex; justify-content: end;">
                    <div class="header-left">
                        <div id="logo">
                            <a
                                href="#">
                                <img
                                    src="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/catalog/logo.png"
                                    title="Your Store" alt="Your Store" class="img-responsive" /></a>
                        </div>

                        <div id="mobile-logo">
                            <a
                                href="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/index.php?route=common/home"><img
                                    src="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/catalog/mobile-logo.png"
                                    title="Your Store" alt="Your Store" class="mobile-logo" /></a>
                        </div>
                    </div>

                    <div class="menu-top" style="margin: 12px 0">

                        <div class="header-bottom">
                            <aside id="header-bottom">
                                <div class="main-category-list">
                                    <div class="TT-panel-heading">
                                        <span>menu</span>
                                        <span class="icon"><i class="material-icons icon-menu">menu</i></span>
                                    </div>
                                    <div class="tt-menu horizontal-menu tt-menu-bar" id="tt-menu-2606">
                                        <ul class="ul-top-items">
                                            @foreach ($categories as $item)
                                            {{-- <li class="" style="float: left"> --}}
                                                <li class="li-top-item mega-menu flyout-menu">
                                                    <a class="a-top-link"
                                                        href="{{ url('category') }}/{{ $item->id }}">
                                                        {{ $item->name }}
                                                    </a>
                                                    <!-- Mega Menu -->

                                                    <!-- Flyout Menu -->
                                                    {{-- <div class="flyout-menu-container sub-menu-container">
                                                        <ul class="ul-second-items">
                                                            <li class="li-second-items">
                                                                <a href="https://mangozy.com/Opencart/OPC01/OPC001_cozy/OPC01/"
                                                                    class="a-second-link a-item">
                                                                    <span class="a-second-title">Fashion 1</span>
                                                                </a>
                                                            </li>
                                                            <li class="li-second-items">
                                                                <a href="https://mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/"
                                                                    class="a-second-link a-item">
                                                                    <span class="a-second-title">Fashion 2</span>
                                                                </a>
                                                            </li>
                                                            <li class="li-second-items">
                                                                <a href="https://mangozy.com/Opencart/OPC01/OPC001_cozy/OPC03/"
                                                                    class="a-second-link a-item">
                                                                    <span class="a-second-title">Fashion 3</span>
                                                                </a>
                                                            </li>
                                                            <li class="li-second-items">
                                                                <a href="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC04/"
                                                                    class="a-second-link a-item">
                                                                    <span class="a-second-title">Shoes</span>
                                                                </a>
                                                            </li>
                                                            <li class="li-second-items">
                                                                <a href="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC05/"
                                                                    class="a-second-link a-item">
                                                                    <span class="a-second-title">Lingerie</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div> --}}

                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>

                            </aside>

                        </div>
                    </div>

                    {{-- <div class="search">
                        <div id="search" class="input-group">
                            <span class="ttsearch_button">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt"
                                    height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                                    preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                        stroke="none">
                                        <path
                                            d="M1940 5109 c-357 -37 -713 -177 -1020 -403 -114 -83 -323 -290 -407 -402 -264 -349 -405 -745 -420 -1179 -9 -259 23 -481 103 -723 100 -301 272 -578 500 -806 334 -334 756 -539 1227 -597 127 -15 451 -7 572 15 281 51 531 147 758 289 l87 56 614 -638 c337 -350 627 -649 644 -663 108 -90 294 -65 376 50 42 58 54 96 55 164 2 108 -5 117 -654 790 -324 336 -600 624 -612 639 l-23 27 54 68 c362 465 503 1076 385 1674 -59 299 -214 627 -412 873 -442 550 -1129 837 -1827 766z m410 -543 c649 -87 1163 -562 1300 -1202 28 -127 38 -382 20 -503 -49 -348 -196 -645 -436 -885 -231 -232 -518 -378 -844 -432 -109 -18 -349 -18 -466 0 -422 64 -804 309 -1039 666 -84 127 -129 220 -175 359 -51 151 -71 264 -77 434 -33 853 655 1569 1512 1576 55 0 147 -6 205 -13z">
                                        </path>
                                    </g>
                                </svg>
                                <span class="serach-title">Search</span>
                                <!--<i class="material-icons icon-close">clear</i>-->
                            </span>
                            <div class="ttsearchtoggle">
                                <div class="container">
                                    <span class="close-search"><i class="material-icons icon-close">close</i></span>
                                    <span class="search-text">What Are You Looking For?</span>
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-lg"><i
                                                class="material-icons icon-search">search</i></button>
                                    </span>
                                    <input type="text" name="search" value="" placeholder="Search"
                                        class="form-control input-lg" />

                                </div>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="right-block">
                        <div class="wishlist"><a
                                href="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/index.php?route=account/wishlist"
                                id="wishlist-total" title="0">
                                <i class="material-icons favorite">favorite_border</i> <span
                                    class="hidden-sm hidden-md">0</span></a>
                        </div>

                    </div> --}}
                    <div class="d-flex" style="display: flex">
                        <div class="">
                            <form
                                action="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/index.php?route=common/currency/currency"
                                method="post" enctype="multipart/form-data" id="form-currency">
                                <div class="btn-group">
                                    <button id="cart_btn" class="btn btn-link dropdown-toggle" data-toggle="dropdown"
                                        aria-expanded="false">
                                        <strong>$</strong>
                                        <span>USD <i class="material-icons"></i></span>

                                        <!--<span class="hidden-xs hidden-sm hidden-md">Currency</span>&nbsp;<i class="material-icons"></i>-->
                                    </button>
                                    <ul class="currency-toggle">
                                        <li>
                                            <button class="currency-select btn btn-link btn-block " type="button"
                                                name="EUR">€ Euro</button>
                                        </li>
                                        <li>
                                            <button class="currency-select btn btn-link btn-block " type="button"
                                                name="GBP">£ Pound Sterling</button>
                                        </li>
                                        <li>
                                            <button class="currency-select btn btn-link btn-block selected"
                                                type="button" name="USD">$ US Dollar</button>
                                        </li>
                                    </ul>
                                </div>
                                <input type="hidden" name="code" value="">
                                <input type="hidden" name="redirect"
                                    value="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/index.php?route=common/home">
                            </form>
                        </div>
                        <div class="cart">
                            <div id="cart" class="btn-group">
                                <button type="button" data-loading-text="Loading..."
                                    class="btn btn-inverse btn-block btn-lg dropdown-toggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1"
                                        enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512"
                                        width="512">
                                        <g>
                                            <path
                                                d="m452 120h-60.946c-7.945-67.478-65.477-120-135.054-120s-127.109 52.522-135.054 120h-60.946c-11.046 0-20 8.954-20 20v352c0 11.046 8.954 20 20 20h392c11.046 0 20-8.954 20-20v-352c0-11.046-8.954-20-20-20zm-196-80c47.484 0 87.019 34.655 94.659 80h-189.318c7.64-45.345 47.175-80 94.659-80zm176 432h-352v-312h40v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h192v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h40z">
                                            </path>
                                        </g>
                                    </svg>
                                    <span class="cart-heading">My Cart</span>
                                    <span id="cart-total">0</span></button>
                                <ul class="dropdown-menu pull-right header-cart-toggle">
                                    <li class="mini-cart-heading">Shopping Cart</li>
                                    <li>
                                        <p class="text-center">Your shopping cart is empty!</p>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </header>
    </div>
</div>
<div class="header-content-title">
    <div style="background-image: url('../../OPC001_cozy/OPC02/image/catalog/demo/banners/parallex.jpg'); background-position: 50% 78.1106%;"
        data-source-url="../../OPC001_cozy/OPC02/image/catalog/demo/banners/parallex.jpg" class="parallex">
    </div>
</div>


        {{-- <div class="usd_btn">

            <ul class="currency-toggle" id="dolor">
                <li>
                    <button class="currency-select btn btn-link btn-block " type="button"
                        name="EUR">€ Euro</button>
                </li>
                <li>
                    <button class="currency-select btn btn-link btn-block " type="button"
                        name="GBP">£ Pound Sterling</button>
                </li>
                <li>
                    <button class="currency-select btn btn-link btn-block selected"
                        type="button" name="USD">$ US Dollar</button>
                </li>
            </ul>
        </div> --}}
{{-- <div class="usd">
    <ul>
        <li>
            <button>
                € Euro
            </button>
        </li>
        <li>
            <button>
                £ Pound Sterling
            </button>
        </li>
        <li>
            <button>
                $ US Dollar
            </button>
        </li>
    </ul>
</div> --}}
