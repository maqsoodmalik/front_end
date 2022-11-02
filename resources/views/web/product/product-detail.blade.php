@extends('layouts.web_layout')

@section('content')

<style>

    .img-container {
    border: 1px solid #ccc;
    width: 100%;
    max-width:640px;
    margin: 0 auto;
    padding:0;
    cursor: ew-resize;
}

.img360 {
    width: 100%;
    margin: 0;
    padding: 0;
    line-height: 0;
}

img {
    width: 100%;
    margin: 0;
    padding: 0;
}

#preload-imgs {
    display:none;
}

p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
body {
    background: var(--body-background-color);
    font: 400 14px/24px var(--primary-font);
    letter-spacing: 1px;
    color: var(--body-text-color);
    height: 100%;
}


/*--------------------------*/
/* .qty-container{
  display: flex;
  align-items: center;
  justify-content: center;
}
.qty-container .input-qty{
  text-align: center;
  padding: 6px 10px;
  border: 1px solid #d4d4d4;
  max-width: 80px;
}
.qty-container .qty-btn-minus,
.qty-container .qty-btn-plus{
  border: 1px solid #d4d4d4;
  padding: 10px 13px;
  font-size: 10px;
  height: 38px;
  width: 38px;
  transition: 0.3s;
}
.qty-container .qty-btn-plus{
  margin-left: -1px;
}
.qty-container .qty-btn-minus{
  margin-right: -1px;
}
.btn-primary{
    background: var(--primary-bg-color);
    border: none;
}
#form1 {

  display: none;
}
#formButton{
    background: var(--secondary-bg-color);
    color: white;
    padding: 9px;
}
.input_field{
    border-left: none;
    border-right: none;
    border-top: none;
    outline: none;
}
.custom_span{
    font-weight: bold;
    margin-bottom: 50px;
}
.product-name{
   margin: 0px;
    padding: 0px;
}
.checkbox label, .radio label{
    font-weight: bold !important;
}
.checkbox label, .radio label{
    font-weight: 100 !important;
}
.checkbox .active{
    background-color: red;
} */
/* for images setting */
.checkbox:hover{
cursor: pointer;
}

/* body{ background:#333; color:#fff;} */

</style>
    <div id="product-product" class="container product-product" style="margin-top: 120px">

        <div class="row">

            <div id="content" class="col-sm-12 Cwidth left-column" style="width: 100%;">


                <!-- Product row START -->
                <div class="row">
                    <div class="product-block">
                        <div class="col-xs-12 col-sm-12 col-md-6 product-images">
                            <!-- Product Image thumbnails START -->
                            <div class="thumbnails">
                                <div class="product-image">
                                        {{-- <a class="thumbnail">
                                            <img src="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/demo/product/01-1-620x806.jpg"
                                                title="Clean Silk Puff-Sleeve Shirt"
                                                data-zoom-image="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/demo/product/01-1-870x1131.jpg"
                                                alt="Clean Silk Puff-Sleeve Shirt">
                                        </a> --}}
                                </div>
                                <div class="">
                                    <div class="img-container">
                                        <div class="img360">
                                            <img id="myImg" src="{{ Storage::url('storage/app/'. $product->images->count() ? $product->images[0]->thumbnail : '') }}" />
                                        </div>
                                    </div>
                                    <div class="caption">

                                    </div>
                                    <div id="preload-imgs"></div>
                                </div>
                                {{-- <div class="additional-images-container">
                                    <div class="additional-images">
                                        <div class="image-additional">
                                            <img src="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/demo/product/01-2-570x741.jpg"
                                                title="Clean Silk Puff-Sleeve Shirt"
                                                data-image="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/demo/product/01-2-620x806.jpg"
                                                data-zoom-image="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/demo/product/01-2-870x1131.jpg"
                                                alt="Clean Silk Puff-Sleeve Shirt">
                                        </div>
                                        <div class="image-additional">
                                            <img src="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/demo/product/01-3-570x741.jpg"
                                                title="Clean Silk Puff-Sleeve Shirt"
                                                data-image="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/demo/product/01-3-620x806.jpg"
                                                data-zoom-image="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/demo/product/01-3-870x1131.jpg"
                                                alt="Clean Silk Puff-Sleeve Shirt">
                                        </div>
                                        <div class="image-additional">
                                            <img src="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/demo/product/01-4-570x741.jpg"
                                                title="Clean Silk Puff-Sleeve Shirt"
                                                data-image="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/demo/product/01-4-620x806.jpg"
                                                data-zoom-image="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/demo/product/01-4-870x1131.jpg"
                                                alt="Clean Silk Puff-Sleeve Shirt">
                                        </div>
                                        <div class="image-additional">
                                            <img src="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/demo/product/01-570x741.jpg"
                                                title="Clean Silk Puff-Sleeve Shirt"
                                                data-image="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/demo/product/01-620x806.jpg"
                                                data-zoom-image="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/demo/product/01-870x1131.jpg"
                                                alt="Clean Silk Puff-Sleeve Shirt">
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- Product Image thumbnails END -->
                            </div>



                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 product-details" >
                            <div class="fixed-product-block" style="max-width: 600px; min-height: 0px;">
                                <h1 class="product-name">{{ $product->prod_title }}</h1>

                                <table class="product-info">
                                    <tbody>
                                        <tr>
                                            <td>Brand:</td>
                                            <td class="product-info-value"><a
                                                    href="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/index.php?route=product/manufacturer/info&amp;manufacturer_id=8">Apple</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Product Code:</td>
                                            <td class="product-info-value">Product 15</td>
                                        </tr>
                                        <tr>
                                            <td>Reward Points:</td>
                                            <td class="product-info-value"><span class="get-reward-live"
                                                    style="display: inline;">200</span></td>
                                        </tr>
                                        <tr>
                                            <td>Availability:</td>
                                            <td class="product-info-value">In Stock</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Product Rating START -->
                                {{-- <div class="rating">
                                    <div class="product-rating">
                                        <span class="fa fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa fa-stack"><i class="material-icons star_off">star_border</i></span>
                                    </div>
                                    <a class="product-total-review" href=""
                                        onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">
                                        <i class="material-icons mode-comment">mode_comment</i>1 reviews</a>
                                    <a class="product-write-review" href=""
                                        onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">
                                        <i class="material-icons mode-edit">edit</i>Write a review</a>
                                </div> --}}
                                <!-- Product Rating END -->

                                <ul class="list-unstyled product-price">
                                    <li>
                                        <h2><span class="price-old-live" style="display: inline;">$244.00</span></h2>
                                    </li>
                                    <li class="product-tax">Ex Tax: <span class="price-tax-live"
                                            style="display: inline;">$200.00</span></li>

                                    <li class="product-reward-points">Price in reward points: <span
                                            class="spend-points-live" style="display: inline;">800</span></li>


                                </ul>
                                {{-- <div class="product-discounts">
                                    <ul>
                                        <li>10 or more $107.60</li>
                                        <li>20 or more $94.40</li>
                                        <li>30 or more $81.20</li>
                                    </ul>
                                </div> --}}
                                <!-- Product Options START -->
                                <div id="product" class="product-options">


                                    {{-- <div class="cosi"> --}}
                                        {{-- <div class="form-group Color  required ">
                                            <label class="control-label">Color</label>
                                            <div id="input-option227">
                                                <div class="checkbox">
                                                    <label>
                                                        <span data-toggle="tooltip" data-original-title="Black (+$132.00)">
                                                            <span class="checkbox-wrapper"><input type="checkbox"
                                                                    name="option[227][]" value="17"
                                                                    class="checkboxid"></span>

                                                            <img src="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/color/black-30x30.jpg"
                                                                alt="Black   $132.00 " class="img-thumbnail">

                                                            Black
                                                            <!--											($132.00)
                                              -->
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <span data-toggle="tooltip" data-original-title="Blue (+$144.00)">
                                                            <span class="checkbox-wrapper"><input type="checkbox"
                                                                    name="option[227][]" value="18"
                                                                    class="checkboxid"></span>

                                                            <img src="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/color/blue-30x30.jpg"
                                                                alt="Blue   $144.00 " class="img-thumbnail">

                                                            Blue
                                                            <!--											($144.00)
                                              -->
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <span data-toggle="tooltip"
                                                            data-original-title="Fuchsia (+$156.00)">
                                                            <span class="checkbox-wrapper"><input type="checkbox"
                                                                    name="option[227][]" value="19"
                                                                    class="checkboxid"></span>

                                                            <img src="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/color/fuchsia-30x30.jpg"
                                                                alt="Fuchsia   $156.00 " class="img-thumbnail">

                                                            Fuchsia
                                                            <!--											($156.00)
                                              -->
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <span data-toggle="tooltip" data-original-title="Grey (+$108.00)">
                                                            <span class="checkbox-wrapper"><input type="checkbox"
                                                                    name="option[227][]" value="21"
                                                                    class="checkboxid"></span>

                                                            <img src="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/color/gray-30x30.jpg"
                                                                alt="Grey   $108.00 " class="img-thumbnail">

                                                            Grey
                                                            <!--											($108.00)
                                              -->
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <span data-toggle="tooltip"
                                                            data-original-title="Green (+$168.00)">
                                                            <span class="checkbox-wrapper"><input type="checkbox"
                                                                    name="option[227][]" value="20"
                                                                    class="checkboxid"></span>

                                                            <img src="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/color/green-30x30.jpg"
                                                                alt="Green   $168.00 " class="img-thumbnail">

                                                            Green
                                                            <!--											($168.00)
                                              -->
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <span data-toggle="tooltip"
                                                            data-original-title="Khaki (+$150.00)">
                                                            <span class="checkbox-wrapper"><input type="checkbox"
                                                                    name="option[227][]" value="22"
                                                                    class="checkboxid"></span>

                                                            <img src="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/color/khaki-30x30.jpg"
                                                                alt="Khaki   $150.00 " class="img-thumbnail">

                                                            Khaki
                                                            <!--											($150.00)
                                              -->
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <span data-toggle="tooltip"
                                                            data-original-title="Navy-blue (+$162.00)">
                                                            <span class="checkbox-wrapper"><input type="checkbox"
                                                                    name="option[227][]" value="23"
                                                                    class="checkboxid"></span>

                                                            <img src="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/color/navy-blue-30x30.jpg"
                                                                alt="Navy-blue   $162.00 " class="img-thumbnail">

                                                            Navy-blue
                                                            <!--											($162.00)
                                              -->
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <span data-toggle="tooltip" data-original-title="Red (+$174.00)">
                                                            <span class="checkbox-wrapper"><input type="checkbox"
                                                                    name="option[227][]" value="24"
                                                                    class="checkboxid"></span>

                                                            <img src="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/color/red-30x30.jpg"
                                                                alt="Red   $174.00 " class="img-thumbnail">

                                                            Red
                                                            <!--											($174.00)
                                              -->
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <span data-toggle="tooltip"
                                                            data-original-title="White (+$186.00)">
                                                            <span class="checkbox-wrapper"><input type="checkbox"
                                                                    name="option[227][]" value="25"
                                                                    class="checkboxid"></span>

                                                            <img src="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/color/white-30x30.jpg"
                                                                alt="White   $186.00 " class="img-thumbnail">

                                                            White
                                                            <!--											($186.00)
                                              -->
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <span data-toggle="tooltip"
                                                            data-original-title="Yellow (+$192.00)">
                                                            <span class="checkbox-wrapper"><input type="checkbox"
                                                                    name="option[227][]" value="26"
                                                                    class="checkboxid"></span>

                                                            <img src="https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/image/cache/catalog/color/yellow-30x30.jpg"
                                                                alt="Yellow   $192.00 " class="img-thumbnail">

                                                            Yellow
                                                            <!--											($192.00)
                                              -->
                                                        </span>
                                                    </label>
                                                </div>

                                            </div>
                                        </div> --}}
                                        <div class="form-group Size  required ">
                                            <label class="control-label">Size</label>
                                            <div id="input-option228">
                                                <div class="checkbox">



                                                            <label>

                                                                <span data-toggle="tooltip"   data-original-title="XS (+$108.00)">

                                                                    <span class="checkbox-wrapper"><input type="checkbox"
                                                                            name="option[228][]" value="27"
                                                                            class="checkboxid"></span>
                                                                            <!-- ($108.00) -->
                                                                </span>
                                                            </label>XS



                                                </div>
                                                <div  class="checkbox">


                                                    <label>
                                                        <span data-toggle="tooltip" data-original-title="S (+$138.00)">
                                                            <span class="checkbox-wrapper"><input type="checkbox"
                                                                    name="option[228][]" value="28"
                                                                    class="checkboxid"></span>


                                                            <!--											($138.00)
                                              -->
                                                        </span>
                                                    </label>S


                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <span data-toggle="tooltip" data-original-title="M (+$144.00)">
                                                            <span class="checkbox-wrapper"><input type="checkbox"
                                                                    name="option[228][]" value="29"
                                                                    class="checkboxid"></span>


                                                            <!--											($144.00)
                                              -->
                                                        </span>
                                                    </label>M
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <span data-toggle="tooltip" data-original-title="XL (+$156.00)">
                                                            <span class="checkbox-wrapper"><input type="checkbox"
                                                                    name="option[228][]" value="31"
                                                                    class="checkboxid"></span>


                                                            <!--											($156.00)
                                              -->
                                                        </span>
                                                    </label>XL
                                                </div>
                                                <div  class="checkbox">
                                                    <label>
                                                        <span data-toggle="tooltip" data-original-title="XXL (+$162.00)">
                                                            <span class="checkbox-wrapper"><input type="checkbox"
                                                                    name="option[228][]" value="32"
                                                                    class="checkboxid"></span>


                                                            <!--											($162.00)
                                              -->
                                                        </span>
                                                    </label>XXL
                                                </div>

                                            </div>
                                        </div>
                                    {{-- </div> --}}


                                       <!-- Order now  <form action="" id="form1"> click form  -->

                                    <form action="" id="form1">
                                        <h1 class="product-name">Shirts</h1>
                                        <span class="custom_span" >Please provide your exact size for Custom Order</span>
                                        <div class="container">

                                           <div class="row">

                                                   <div class="row">
                                                       <div class="col-sm-4">
                                                   <div class="form-group">
                                                       {{-- <label for="exampleInputEmail1">Length:</label> --}}
                                                       <input type="number" class="input_field" class="form-control" name="length" placeholder="Enter Length">
                                                     </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                     <div class="form-group">
                                                       {{-- <label for="exampleInputEmail1">Shoulder:</label> --}}
                                                       <input type="number" class="input_field" class="form-control" name="shoulder" placeholder="Enter Shoulder">
                                                     </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                     <div class="form-group">
                                                       {{-- <label for="exampleInputEmail1">Sleeve:</label> --}}
                                                       <input type="number" class="input_field" class="form-control" name="sleeve" placeholder="Enter Sleeve">
                                                     </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                     <div class="form-group">
                                                       {{-- <label for="exampleInputEmail1">Arm hole:</label> --}}
                                                       <input type="number" class="input_field" class="form-control" name="arm_hole" placeholder="Enter Arm hole">
                                                     </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                     <div class="form-group">
                                                       {{-- <label for="exampleInputEmail1">Bust:</label> --}}
                                                       <input type="number" class="input_field" class="form-control" name="bust" placeholder="Enter Bust">
                                                     </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                     <div class="form-group">
                                                       {{-- <label for="exampleInputEmail1">Waist:</label> --}}
                                                       <input type="number" class="input_field" class="form-control" name="waist" placeholder="Enter Waist">
                                                     </div>
                                                   </div>
                                                   <div class="col-sm-4">
                                                     <div class="form-group">
                                                       {{-- <label for="exampleInputEmail1">Hip:</label> --}}
                                                       <input type="number" class="input_field" class="form-control" name="hip" placeholder="Enter Hip">
                                                     </div>
                                                   </div>
                                                   <div class="col-sm-12">
                                                    <div class="form-group">
                                                        {{-- <label for="exampleInputEmail1">Other Details:</label> --}}
                                                        <textarea type="text" class="input_field" cols="80" class="form-control"  name="detail" placeholder="Enter Details"></textarea>
                                                      </div>
                                                </div>
                                               </div>


                                               {{-- <div class="col-md-5">
                                                   <img src="{{ asset('web_asset/img/shirts.jpg') }}" class="img-responsive" class="img-rounded" alt="Responsive image">
                                               </div> --}}

                                           </div>
                                        </div>



                                        <div class="container" style="margin-bottom:50px;">
                                            <h1 class="product-name">Trouser / Shalwar</h1>
                                            <div class="radio">
                                            <label class="radio-inline">
                                                <input type="radio" class="radio_btn"  name="inlineRadioOptions" id="inlineRadio1" value="option1"> Trouser
                                              </label>
                                              <label class="radio-inline">
                                                <input type="radio" class="radio_btn" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Shalwar
                                              </label>
                                            </div>
                                            <div class="row">
                                                {{-- <div class="col-sm-4">
                                                      <img src="{{ asset('web_asset/img/shalwar.jpg') }}" class="img-responsive" class="img-rounded" alt="Responsive image">
                                                </div> --}}

                                                    <div class="row">
                                                     <div class="col-sm-4">
                                                    <div class="form-group">
                                                        {{-- <label for="exampleInputEmail1">Length:</label> --}}
                                                        <input type="number" class="input_field" class="form-control" name="length" placeholder="Enter Length">
                                                      </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                      <div class="form-group">
                                                        {{-- <label for="exampleInputEmail1">Waist:</label> --}}
                                                        <input type="number" class="input_field" class="form-control" name="waist" placeholder="Enter Waist">
                                                      </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                      <div class="form-group">
                                                        {{-- <label for="exampleInputEmail1">Hip:</label> --}}
                                                        <input type="number" class="input_field" class="form-control" name="hip" placeholder="Enter Hip">
                                                      </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                      <div class="form-group">
                                                        {{-- <label for="exampleInputEmail1">Bottom</label> --}}
                                                        <input type="number" class="input_field" class="form-control" name="bottom" placeholder="Enter Bottom">
                                                      </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                {{-- <label for="exampleInputEmail1">Other details:</label> --}}
                                                                <textarea type="text" class="input_field" class="form-control" cols="80" name="detail" placeholder="Enter Details"></textarea>
                                                              </div>
                                                        </div>

                                                </div>




                                            </div>
                                         </div>


                                       </form>

                                    {{-- code for buttons --}}
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12 col-md-6 col-xl-4 pb-3">
                                                <div class="qty-container">
                                                    <button class="qty-btn-minus btn-light" type="button"><i class="fa fa-minus"></i></button>
                                                    <input type="text" name="qty" value="0" class="input-qty"/>
                                                    <button class="qty-btn-plus btn-light" type="button"><i class="fa fa-plus"></i></button>
                                                </div>



                                    {{-- <div class="form-group product-quantity">
                                        <span class="input-group btn-block"><input type="button" id="minuse"
                                                value="-"></span>
                                        <input type="text" name="quantity" value="2" size="1"
                                            id="input-quantity" readonly="">
                                        <span class="input-group btn-block"><input type="button" id="pluse"
                                                value="+"></span>
                                        <input type="hidden" name="product_id" size="1" value="42">
                                    </div> --}}
                                </div>
                                    <div class="col-sm-6 col-xs-12 col-md-6 col-xl-4">
                                    <button type="button" id="button-cart" data-loading-text="Loading..."
                                        class="btn  btn-primary  btn-lg btn-block">
                                        Buy Now </button>
                                    </div>
                                    <div class="col-sm-6 col-xs-12 col-md-6 col-xl-4">
                                    <button type="button" id="formButton" data-loading-text="Loading..."
                                        class="btn  btn-default  btn-lg btn-block">Custom Order</button>
                                    </div>

                                </div>
                            </div>







                                    <!-- Product Wishlist Compare START -->

                                    <div class="btn-group">
                                        <div class="whatsapp-chat">
                                            <a
                                                href="https://api.whatsapp.com/send?phone=123456789&amp;text=i want buy. Clean Silk Puff-Sleeve Shirt - Product 15 https://demo.mangozy.com/Opencart/OPC01/OPC001_cozy/OPC02/index.php?route=product/product&amp;product_id=42">
                                                <span>
                                                    <img src="{{ asset('web_asset/img/whatsapp.png') }}" style="width: 21%" >
                                                    Ask Question
                                                </span>
                                            </a>
                                        </div>
                                    </div>



                                    <!-- Product Wishlist Compare END -->
                                    @if ($product->prod_qty <= 2)
                                        <div class="alert alert-info"><i class="material-icons info-circle">info</i> This
                                            product has left minimum quantity of 2</div>
                                    @endif

                                </div>
                                <!-- Product Options END -->

                                <!-- AddThis Button BEGIN -->
                                <div class="share">
                                    <script type="text/javascript"
                                        src="//platform-api.sharethis.com/js/sharethis.js#property=5cd6b9471aa38a0012c07e1b&amp;product="
                                        inline-share-buttons''="" async="async"></script>
                                    <div class="sharethis-inline-share-buttons st-left  st-inline-share-buttons st-animated"
                                        id="st-1">
                                        <div class="st-total st-hidden">
                                            <span class="st-label"></span>
                                            <span class="st-shares">
                                                Shares
                                            </span>
                                        </div>
                                        <div class="st-btn st-first" data-network="facebook"
                                            style="display: inline-block;">
                                            <img alt="facebook sharing button"
                                                src="https://platform-cdn.sharethis.com/img/facebook.svg">

                                        </div>
                                        <div class="st-btn" data-network="twitter" style="display: inline-block;">
                                            <img alt="twitter sharing button"
                                                src="https://platform-cdn.sharethis.com/img/twitter.svg">

                                        </div>
                                        <div class="st-btn" data-network="pinterest" style="display: inline-block;">
                                            <img alt="pinterest sharing button"
                                                src="https://platform-cdn.sharethis.com/img/pinterest.svg">

                                        </div>
                                        <div class="st-btn" data-network="linkedin" style="display: inline-block;">
                                            <img alt="linkedin sharing button"
                                                src="https://platform-cdn.sharethis.com/img/linkedin.svg">

                                        </div>
                                        <div class="st-btn" data-network="sharethis" style="display: inline-block;">
                                            <img alt="sharethis sharing button"
                                                src="https://platform-cdn.sharethis.com/img/sharethis.svg">

                                        </div>
                                        <div class="st-btn st-last" data-network="googlebookmarks"
                                            style="display: inline-block;">
                                            <img alt="googlebookmarks sharing button"
                                                src="https://platform-cdn.sharethis.com/img/googlebookmarks.svg">

                                        </div>
                                    </div>
                                </div>
                                <!-- AddThis Button END -->
                            </div>
                        </div>
                        <!-- Product option details END -->
                    </div>










                    <!-- Product nav Tabs START -->
                    <div class="col-sm-12 product-tabs">
                        <div class="tab-inner">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
                                <li><a href="#tabcustom0" data-toggle="tab">Size-Chart</a></li>
                                <li><a href="#tab-specification" data-toggle="tab">Specification</a></li>
                                <li class="li-tab-review"><a href="#tab-review" data-toggle="tab">Reviews (1)</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-description">
                                    <p>
                                        <font face="helvetica,geneva,arial" size="2">
                                            <font face="Helvetica" size="2">The 30-inch Apple Cinema HD Display
                                                delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for
                                                the creative professional, this display provides more space for easier
                                                access to all the tools and palettes needed to edit, format and composite
                                                your work. Combine this display with a Mac Pro, MacBook Pro, or PowerMac G5
                                                and there's no limit to what you can achieve. <br>
                                                <br>
                                            </font>
                                            <font face="Helvetica" size="2">The Cinema HD features an active-matrix
                                                liquid crystal display that produces flicker-free images that deliver twice
                                                the brightness, twice the sharpness and twice the contrast ratio of a
                                                typical CRT display. Unlike other flat panels, it's designed with a pure
                                                digital interface to deliver distortion-free images that never need
                                                adjusting. With over 4 million digital pixels, the display is uniquely
                                                suited for scientific and technical applications such as visualizing
                                                molecular structures or analyzing geological data. <br>
                                                <br>
                                            </font>
                                            <font face="Helvetica" size="2">Offering accurate, brilliant color
                                                performance, the Cinema HD delivers up to 16.7 million colors across a wide
                                                gamut allowing you to see subtle nuances between colors from soft pastels to
                                                rich jewel tones. A wide viewing angle ensures uniform color from edge to
                                                edge. Apple's ColorSync technology allows you to create custom profiles to
                                                maintain consistent color onscreen and in print. The result: You can
                                                confidently use this display in all your color-critical applications. <br>
                                                <br>
                                            </font>
                                            <font face="Helvetica" size="2">Housed in a new aluminum design, the
                                                display has a very thin bezel that enhances visual accuracy. Each display
                                                features two FireWire 400 ports and two USB 2.0 ports, making attachment of
                                                desktop peripherals, such as iSight, iPod, digital and still cameras, hard
                                                drives, printers and scanners, even more accessible and convenient. Taking
                                                advantage of the much thinner and lighter footprint of an LCD, the new
                                                displays support the VESA (Video Electronics Standards Association) mounting
                                                interface standard. Customers with the optional Cinema Display VESA Mount
                                                Adapter kit gain the flexibility to mount their display in locations most
                                                appropriate for their work environment. <br>
                                                <br>
                                            </font>
                                            <font face="Helvetica" size="2">The Cinema HD features a single cable
                                                design with elegant breakout for the USB 2.0, FireWire 400 and a pure
                                                digital connection using the industry standard Digital Video Interface (DVI)
                                                interface. The DVI connection allows for a direct pure-digital
                                                connection.<br>
                                            </font>
                                        </font>
                                    </p>
                                    <h3>
                                        Features:</h3>
                                    <p>
                                        Unrivaled display performance</p>
                                    <ul>
                                        <li>
                                            30-inch (viewable) active-matrix liquid crystal display provides breathtaking
                                            image quality and vivid, richly saturated color.</li>
                                        <li>
                                            Support for 2560-by-1600 pixel resolution for display of high definition still
                                            and video imagery.</li>
                                        <li>
                                            Wide-format design for simultaneous display of two full pages of text and
                                            graphics.</li>
                                        <li>
                                            Industry standard DVI connector for direct attachment to Mac- and Windows-based
                                            desktops and notebooks</li>
                                        <li>
                                            Incredibly wide (170 degree) horizontal and vertical viewing angle for maximum
                                            visibility and color performance.</li>
                                        <li>
                                            Lightning-fast pixel response for full-motion digital video playback.</li>
                                        <li>
                                            Support for 16.7 million saturated colors, for use in all graphics-intensive
                                            applications.</li>
                                    </ul>
                                    <p>
                                        Simple setup and operation</p>
                                    <ul>
                                        <li>
                                            Single cable with elegant breakout for connection to DVI, USB and FireWire ports
                                        </li>
                                        <li>
                                            Built-in two-port USB 2.0 hub for easy connection of desktop peripheral devices.
                                        </li>
                                        <li>
                                            Two FireWire 400 ports to support iSight and other desktop peripherals</li>
                                    </ul>
                                    <p>
                                        Sleek, elegant design</p>
                                    <ul>
                                        <li>
                                            Huge virtual workspace, very small footprint.</li>
                                        <li>
                                            Narrow Bezel design to minimize visual impact of using dual displays</li>
                                        <li>
                                            Unique hinge design for effortless adjustment</li>
                                        <li>
                                            Support for VESA mounting solutions (Apple Cinema Display VESA Mount Adapter
                                            sold separately)</li>
                                    </ul>
                                    <h3>
                                        Technical specifications</h3>
                                    <p>
                                        <b>Screen size (diagonal viewable image size)</b>
                                    </p>
                                    <ul>
                                        <li>
                                            Apple Cinema HD Display: 30 inches (29.7-inch viewable)</li>
                                    </ul>
                                    <p>
                                        <b>Screen type</b>
                                    </p>
                                    <ul>
                                        <li>
                                            Thin film transistor (TFT) active-matrix liquid crystal display (AMLCD)</li>
                                    </ul>
                                    <p>
                                        <b>Resolutions</b>
                                    </p>
                                    <ul>
                                        <li>
                                            2560 x 1600 pixels (optimum resolution)</li>
                                        <li>
                                            2048 x 1280</li>
                                        <li>
                                            1920 x 1200</li>
                                        <li>
                                            1280 x 800</li>
                                        <li>
                                            1024 x 640</li>
                                    </ul>
                                    <p>
                                        <b>Display colors (maximum)</b>
                                    </p>
                                    <ul>
                                        <li>
                                            16.7 million</li>
                                    </ul>
                                    <p>
                                        <b>Viewing angle (typical)</b>
                                    </p>
                                    <ul>
                                        <li>
                                            170° horizontal; 170° vertical</li>
                                    </ul>
                                    <p>
                                        <b>Brightness (typical)</b>
                                    </p>
                                    <ul>
                                        <li>
                                            30-inch Cinema HD Display: 400 cd/m2</li>
                                    </ul>
                                    <p>
                                        <b>Contrast ratio (typical)</b>
                                    </p>
                                    <ul>
                                        <li>
                                            700:1</li>
                                    </ul>
                                    <p>
                                        <b>Response time (typical)</b>
                                    </p>
                                    <ul>
                                        <li>
                                            16 ms</li>
                                    </ul>
                                    <p>
                                        <b>Pixel pitch</b>
                                    </p>
                                    <ul>
                                        <li>
                                            30-inch Cinema HD Display: 0.250 mm</li>
                                    </ul>
                                    <p>
                                        <b>Screen treatment</b>
                                    </p>
                                    <ul>
                                        <li>
                                            Antiglare hardcoat</li>
                                    </ul>
                                    <p>
                                        <b>User controls (hardware and software)</b>
                                    </p>
                                    <ul>
                                        <li>
                                            Display Power,</li>
                                        <li>
                                            System sleep, wake</li>
                                        <li>
                                            Brightness</li>
                                        <li>
                                            Monitor tilt</li>
                                    </ul>
                                    <p>
                                        <b>Connectors and cables</b><br>
                                        Cable
                                    </p>
                                    <ul>
                                        <li>
                                            DVI (Digital Visual Interface)</li>
                                        <li>
                                            FireWire 400</li>
                                        <li>
                                            USB 2.0</li>
                                        <li>
                                            DC power (24 V)</li>
                                    </ul>
                                    <p>
                                        Connectors</p>
                                    <ul>
                                        <li>
                                            Two-port, self-powered USB 2.0 hub</li>
                                        <li>
                                            Two FireWire 400 ports</li>
                                        <li>
                                            Kensington security port</li>
                                    </ul>
                                    <p>
                                        <b>VESA mount adapter</b><br>
                                        Requires optional Cinema Display VESA Mount Adapter (M9649G/A)
                                    </p>
                                    <ul>
                                        <li>
                                            Compatible with VESA FDMI (MIS-D, 100, C) compliant mounting solutions</li>
                                    </ul>
                                    <p>
                                        <b>Electrical requirements</b>
                                    </p>
                                    <ul>
                                        <li>
                                            Input voltage: 100-240 VAC 50-60Hz</li>
                                        <li>
                                            Maximum power when operating: 150W</li>
                                        <li>
                                            Energy saver mode: 3W or less</li>
                                    </ul>
                                    <p>
                                        <b>Environmental requirements</b>
                                    </p>
                                    <ul>
                                        <li>
                                            Operating temperature: 50° to 95° F (10° to 35° C)</li>
                                        <li>
                                            Storage temperature: -40° to 116° F (-40° to 47° C)</li>
                                        <li>
                                            Operating humidity: 20% to 80% noncondensing</li>
                                        <li>
                                            Maximum operating altitude: 10,000 feet</li>
                                    </ul>
                                    <p>
                                        <b>Agency approvals</b>
                                    </p>
                                    <ul>
                                        <li>
                                            FCC Part 15 Class B</li>
                                        <li>
                                            EN55022 Class B</li>
                                        <li>
                                            EN55024</li>
                                        <li>
                                            VCCI Class B</li>
                                        <li>
                                            AS/NZS 3548 Class B</li>
                                        <li>
                                            CNS 13438 Class B</li>
                                        <li>
                                            ICES-003 Class B</li>
                                        <li>
                                            ISO 13406 part 2</li>
                                        <li>
                                            MPR II</li>
                                        <li>
                                            IEC 60950</li>
                                        <li>
                                            UL 60950</li>
                                        <li>
                                            CSA 60950</li>
                                        <li>
                                            EN60950</li>
                                        <li>
                                            ENERGY STAR</li>
                                        <li>
                                            TCO '03</li>
                                    </ul>
                                    <p>
                                        <b>Size and weight</b><br>
                                        30-inch Apple Cinema HD Display
                                    </p>
                                    <ul>
                                        <li>
                                            Height: 21.3 inches (54.3 cm)</li>
                                        <li>
                                            Width: 27.2 inches (68.8 cm)</li>
                                        <li>
                                            Depth: 8.46 inches (21.5 cm)</li>
                                        <li>
                                            Weight: 27.5 pounds (12.5 kg)</li>
                                    </ul>
                                    <p>
                                        <b>System Requirements</b>
                                    </p>
                                    <ul>
                                        <li>
                                            Mac Pro, all graphic options</li>
                                        <li>
                                            MacBook Pro</li>
                                        <li>
                                            Power Mac G5 (PCI-X) with ATI Radeon 9650 or better or NVIDIA GeForce 6800 GT
                                            DDL or better</li>
                                        <li>
                                            Power Mac G5 (PCI Express), all graphics options</li>
                                        <li>
                                            PowerBook G4 with dual-link DVI support</li>
                                        <li>
                                            Windows PC and graphics card that supports DVI ports with dual-link digital
                                            bandwidth and VESA DDC standard for plug-and-play setup</li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="tabcustom0">
                                    <div class="table-responsive size-chart-table">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="bold">Clothing</th>
                                                    <td>XS</td>
                                                    <td>S</td>
                                                    <td>M</td>
                                                    <td>L</td>
                                                    <td>XL</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="bold">UK</th>
                                                    <td>6</td>
                                                    <td>6</td>
                                                    <td>6</td>
                                                    <td>6</td>
                                                    <td>6</td>
                                                </tr>
                                                <tr>
                                                    <th class="bold">EU</th>
                                                    <td>34</td>
                                                    <td>34</td>
                                                    <td>34</td>
                                                    <td>34</td>
                                                    <td>34</td>
                                                </tr>
                                                <tr>
                                                    <th class="bold">Chest / Bust (cm)</th>
                                                    <td>79</td>
                                                    <td>79</td>
                                                    <td>79</td>
                                                    <td>79</td>
                                                    <td>79</td>
                                                </tr>
                                                <tr>
                                                    <th class="bold">Waist (cm)</th>
                                                    <td>63</td>
                                                    <td>63</td>
                                                    <td>63</td>
                                                    <td>63</td>
                                                    <td>63</td>
                                                </tr>
                                                <tr>
                                                    <th class="bold">Lower chip (cm)</th>
                                                    <td>87</td>
                                                    <td>87</td>
                                                    <td>87</td>
                                                    <td>87</td>
                                                    <td>87</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-specification">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <td colspan="2"><strong>Processor</strong></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Clockspeed</td>
                                                <td>100mhz</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane" id="tab-review">
                                    <form class="form-horizontal" id="form-review">
                                        <div id="review">
                                            <table class="table table-striped table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 50%;"><strong>test</strong></td>
                                                        <td class="text-right">06/09/2021</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <p>testtesttesttesttesttesttest</p>
                                                            <span class="fa fa-stack"><i
                                                                    class="material-icons star_on">star</i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="material-icons star_on">star</i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="material-icons star_on">star</i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="material-icons star_on">star</i></span>

                                                            <span class="fa fa-stack"><i
                                                                    class="material-icons star_off">star_border</i></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="text-right"></div>
                                        </div>
                                        <h2>Write a review</h2>
                                        <div class="form-group required">
                                            <div class="col-sm-12">
                                                <label class="control-label" for="input-name">Your Name</label>
                                                <input type="text" name="name" value="" id="input-name"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <div class="col-sm-12">
                                                <label class="control-label" for="input-review">Your Review</label>
                                                <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                                <div class="help-block"><span class="text-danger">Note:</span> HTML is not
                                                    translated!</div>
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <div class="col-sm-12">
                                                <label class="control-label">Rating</label>
                                                &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                <span class="radio-wrapper"><input type="radio" name="rating"
                                                        value="1" class="radioid"></span>
                                                &nbsp;
                                                <span class="radio-wrapper"><input type="radio" name="rating"
                                                        value="2" class="radioid"></span>
                                                &nbsp;
                                                <span class="radio-wrapper"><input type="radio" name="rating"
                                                        value="3" class="radioid"></span>
                                                &nbsp;
                                                <span class="radio-wrapper"><input type="radio" name="rating"
                                                        value="4" class="radioid"></span>
                                                &nbsp;
                                                <span class="radio-wrapper"><input type="radio" name="rating"
                                                        value="5" class="radioid"></span>
                                                &nbsp;Good
                                            </div>
                                        </div>

                                        <div class="buttons clearfix">
                                            <div class="pull-right">
                                                <button type="button" id="button-review" data-loading-text="Loading..."
                                                    class="btn btn-primary">Continue</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product tab END -->
                </div> <!-- Product row END -->

            </div> <!-- id content END -->



        </div>
    </div>

    @include('web.product.js.product-detail')
@endsection


