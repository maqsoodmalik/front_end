@extends('layouts.web_layout')
@section('title','Home')

<style>
    /* .service-title{
        font-size: large;
        padding-top: 10px;
    }
    .fa-solid{
        font-size: xx-large;
        padding-top: 20px;
    }
    .service-desc{
        font-size: 13px;
    }
    .service{
        text-align: center;
    } */
    /* .tthome{
        margin-top: 35px;
    }
    .ships_icon{
        margin-top: 30px;
        margin-bottom: 100px;
    } */
    /* @media (max-width: 787px){

header .item .cover .header-content {
    padding: 15px !important;
}
header .item .cover .header-content h2 {
    font-size: 22px !important;
    }
    header .item .cover .header-content h1 {
        font-size: 20px !important;
    }
    header .item .cover .header-content h4{
        font-size: 15px !important;
    }
}
@media (max-width: 900px){

header .item .cover .header-content {
    padding: 15px !important;
}
header .item .cover .header-content h2 {
    font-size: 30px !important;
    }
    header .item .cover .header-content h1 {
        font-size: 25px !important;
    }
    header .item .cover .header-content h4{
        font-size: 18px !important;
    }
} */

</style>
@section('content')
{{--
<header>
    <div class="owl-carousel owl-theme">

        <div class="item">
            <img src="{{ asset('web_asset/img/slider_img/slider-01-1903x750.jpg')}}" alt="images not found">
            <div class="cover">
                <div class="container">
                    <div class="header-content">
                        <div class="line animated bounceInLeft"></div>
                        <h2>Reimagine Digital Experience with</h2>
                        <h1>Intelligent solutions</h1>
                        <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                    </div>
                </div>
             </div>
        </div>
        <div class="item">
            <img src="{{ asset('web_asset/img/slider_img/slider-02-1903x750.jpg')}}" alt="images not found">
            <div class="cover">
                <div class="container">
                    <div class="header-content">
                        <div class="line animated bounceInLeft"></div>
                        <h2>Peimagine Digital Experience with</h2>
                        <h1>Intelligent Solutions</h1>
                        <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                    </div>
                </div>
             </div>
        </div>
    </div>
</header> --}}



<div class="content-top">
    <div class="slideshow-panel">


<section>
    <div class="owl-carousel owl-theme">

        <div class="item">
            <img src="{{ asset('web_asset/img/slider_img/slider-01-1903x750.jpg')}}" alt="images not found">
            <div class="cover">
                <div class="container">
                    <div class="header-content">
                        <div class="line animated bounceInLeft"></div>
                        <h2>Reimagine Digital Experience with</h2>
                        <h1>Intelligent solutions</h1>
                        <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                    </div>
                </div>
             </div>
        </div>
        <div class="item">
            <img src="{{ asset('web_asset/img/slider_img/slider-02-1903x750.jpg')}}" alt="images not found">
            <div class="cover">
                <div class="container">
                    <div class="header-content">
                        <div class="line animated bounceInLeft"></div>
                        <h2>Peimagine Digital Experience with</h2>
                        <h1>Intelligent Solutions</h1>
                        <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                    </div>
                </div>
             </div>
        </div>
    </div>
</section>

        {{-- <div class="ttloading-bg ttloader"></div>
        <div class="swiper-viewport">
            <div id="slideshow0" class="gallery-top slideshow-main swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide text-center">
                        <a href="#">
                            <img src="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/demo/banners/demo2/slider-01-1903x750.jpg"
                                alt="slider-01" class="img-responsive" />
                        </a>
                        <div class="slider-description">
                            <div class="slider-content-wrap left effect_right">
                                <div class="slider-title">Final Clearance Sale Up to 35% OFF</div>
                                <div class="slider-subtitle">The All New Gorgeous Collection of
                                    2022, Shopping With Us!</div>
                                <div class="slider-button">
                                    <div class="slider-btn">
                                        <a href="#" class="btn btn-primary">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide text-center">
                        <a href="#">
                            <img src="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/demo/banners/demo2/slider-02-1903x750.jpg"
                                alt="slider-02" class="img-responsive" />
                        </a>
                        <div class="slider-description">
                            <div class="slider-content-wrap right effect_top">
                                <div class="slider-title">The Cozy Trending Styles Wear</div>
                                <div class="slider-subtitle">The All New Gorgeous Collection of
                                    2022, Shopping With Us!</div>
                                <div class="slider-button">
                                    <div class="slider-btn">
                                        <a href="#" class="btn btn-primary">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination slideshow0"></div>
                <div class="swiper-pager">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div id="slideshow0" class="gallery-thumbs slideshow-main swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide text-center">
                        <a>
                            <img src="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/demo/banners/demo2/slider-01-1903x750.jpg"
                                alt="slider-01" class="img-responsive" />
                        </a>
                    </div>
                    <div class="swiper-slide text-center">
                        <a>
                            <img src="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/demo/banners/demo2/slider-02-1903x750.jpg"
                                alt="slider-02" class="img-responsive" />
                        </a>
                    </div>
                </div>
            </div>
        </div> --}}



     </div>
</div>



 <div class="tthome">

    <div id="content" class="col-sm-12 left-column">
        <div class="html-content">
            <div class="box-content">
                <div class="cms-customtext hb-animate-element bottom-to-top">
                    <div class="container">
                        <div class="customtext-block">
                            <div class="customtext">
                                <div class="title">Big Clearance Sale<br>
                                    Get Up to 70% OFF, Hurry Up!
                                </div>
                                <div class="subtitle">Never before sale, Last chance hurry up don’t miss it!
                                </div>
                                <div class="custom-button">
                                    <a class="custombtn btn btn-primary" href="#">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





                    <div class="container ships_icon">
                            <div class="row">
                            <div class="col-sm-3">
                                <div class="service">
                                    <i class="fa-solid fa-truck-fast"></i>
                                    <div class="content">
                                        <div class="service-title">Free Shipping</div>
                                        <div class="service-desc">world wide</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="service">
                                    <i class="fa-solid fa-bag-shopping"></i>
                                    <div class="content">
                                        <div class="service-title">Secure Checkout</div>
                                        <div class="service-desc">Hustle Free Shop</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="service">
                                    <i class="fa-solid fa-headset"></i>
                                    <div class="content">
                                        <div class="service-title">Live Chat Support</div>
                                        <div class="service-desc">24x7 Online Shop</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="service">
                                    <i class="fa-solid fa-piggy-bank"></i>
                                    <div class="content">
                                        <div class="service-title">Get Big Saving</div>
                                        <div class="service-desc">On Exclusive Items</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



         {{-- <div class="html-content">
            <div class="box-content">
                <div id="ttcmsservices" class="ttservice hb-animate-element bottom-to-top">
                    <div class="container">
                        <div class="row"></div>

                        <div class="block_content owl-carousel">
                            <div class="ttcontent">
                                <div class="service">
                                    <div class="ttshipping_img1 service-icon">
                                    </div>
                                    <div class="content">
                                        <div class="service-title">Free Shipping</div>
                                        <div class="service-desc">world wide</div>
                                    </div>
                                </div>
                            </div>

                            <div class="ttcontent">
                                <div class="service">
                                    <div class="ttshipping_img2 service-icon">
                                    </div>
                                    <div class="content">
                                        <div class="service-title">Secure Checkout</div>
                                        <div class="service-desc">Hustle Free Shop</div>
                                    </div>
                                </div>
                            </div>

                            <div class="ttcontent">
                                <div class="service">
                                    <div class="ttshipping_img3 service-icon">
                                    </div>
                                    <div class="content">
                                        <div class="service-title">Live Chat Support</div>
                                        <div class="service-desc">24x7 Online Shop</div>
                                    </div>
                                </div>
                            </div>

                            <div class="ttcontent">
                                <div class="service">
                                    <div class="ttshipping_img4 service-icon">
                                    </div>
                                    <div class="content">
                                        <div class="service-title">Get Big Saving</div>
                                        <div class="service-desc">On Exclusive Items</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}


     </div>

</div>



@endsection
