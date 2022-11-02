<style>
/* .sizes{
    display: flex;
    font-size: 9px;
    justify-content: center;
}
.sizes_icon{
margin-left: 7px;
margin-top: 9px;
}
.main_size{
    margin-top: 50px;
}
.product-thumb h4 a {

    white-space: normal;
} */
</style>
@foreach ($items as $item)
                            <div class="product-layout product-grid col-lg-3 col-md-3 col-sm-3  col-xs-12">
                                <div class="product-thumb row">
                                    <div class="image col-xs-12">

                                        <a
                                            href="{{ url('collection') }}/{{ $item->product->slug }}">

                                            <img class="image_thumb"
                                            src="{{ Storage::url('storage/app/'. $item->product->images->count() ? $item->product->images[0]->thumbnail : '') }}"
                                            title="Clean Silk Puff-Sleeve Shirt" alt="Clean Silk Puff-Sleeve Shirt">


                                           @if (isset($item->product->images[1]->thumbnail))
                                                <img class="image_thumb_swap horizontal_scrolling_left_to_right"
                                                src="{{ Storage::url('storage/app/'. $item->product->images->count() ? $item->product->images[1]->thumbnail : '') }}"
                                                title="Clean Silk Puff-Sleeve Shirt" alt="Clean Silk Puff-Sleeve Shirt">
                                           @endif
                                        </a>


                                        <div class="button-group">

                                            <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('42')">

                                                <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 512 512"
                                                    height="512" viewBox="0 0 512 512" width="512">
                                                    <g>
                                                        <path
                                                            d="m452 120h-60.946c-7.945-67.478-65.477-120-135.054-120s-127.109 52.522-135.054 120h-60.946c-11.046 0-20 8.954-20 20v352c0 11.046 8.954 20 20 20h392c11.046 0 20-8.954 20-20v-352c0-11.046-8.954-20-20-20zm-196-80c47.484 0 87.019 34.655 94.659 80h-189.318c7.64-45.345 47.175-80 94.659-80zm176 432h-352v-312h40v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h192v60c0 11.046 8.954 20 20 20s20-8.954 20-20v-60h40z">
                                                        </path>
                                                    </g>
                                                </svg>

                                                <i class="material-icons shopping-cart">shopping_cart</i> <span
                                                    class="hidden-xs hidden-sm hidden-md">Add to Cart
                                                </span>
                                                <span class="loading"><i class="material-icons">cached</i></span>
                                            </button>
                                        </div>

                                    </div>
                                    <div class="thumb-description col-xs-12 text-center">
                                        <div class="caption">

                                            <h4><a
                                                    href="#">Clean
                                                    {{ $item->product->prod_title }}</a></h4>
                                            <p class="description">The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel
                                                resolution. Designed speci..</p>
                                        </div>
                                        <div class="row main_size">
                                            <div class="col-7">

                                              <div class="sizes">
                                                <div class="sizes_icon" id="sz">
                                                    Sizes
                                                </div>
                                                <div class="sizes_icon" id="one">
                                                    XS
                                                </div>
                                                <div class="sizes_icon" id="two">
                                                    S
                                                </div>
                                                <div class="sizes_icon" id="three">
                                                    M
                                                </div>
                                                <div class="sizes_icon" id="four">
                                                    XL
                                                </div>
                                                <div class="sizes_icon" id="four">
                                                    XXL
                                                </div>
                                              </div>

                                        </div>
                                        <div class="col-5 ">


                                        <div class="price">





                                            RS:{{ $item->product->pkr_price }}
                                        </div>

                                    </div>
                                </div>

                                        <div class="ttcart">

                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
