@extends('layouts.admin_layout')
@section('title', 'Products')

@section('content')
    <style>
        .upload__box {
            padding: 40px;
        }

        .upload__inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .upload__btn {
            display: inline-block;
            font-weight: 600;
            color: #fff;
            text-align: center;
            min-width: 116px;
            padding: 5px;
            transition: all 0.3s ease;
            cursor: pointer;
            border: 2px solid;
            background-color: #4045ba;
            border-color: #4045ba;
            border-radius: 10px;
            line-height: 26px;
            font-size: 14px;
        }

        .upload__btn:hover {
            background-color: unset;
            color: #4045ba;
            transition: all 0.3s ease;
        }

        .upload__btn-box {
            margin-bottom: 10px;
        }

        .upload__img-wrap {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
        }

        .upload__img-box {
            width: 200px;
            padding: 0 10px;
            margin-bottom: 12px;
        }

        .upload__img-close {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 10px;
            right: 10px;
            text-align: center;
            line-height: 24px;
            z-index: 1;
            cursor: pointer;
        }

        .upload__img-close:after {
            content: "✖";
            font-size: 14px;
            color: white;
        }

        .img-bg {
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
            padding-bottom: 100%;
        }
    </style>
    <div class=" mx-auto w-75 mt-5">
        <div class="card shadow">
            <div class="card-header">
                <h3>Create a New product</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data"
                    id="StoreProductForm">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="">Category Name</label>
                            <select name="category_id[]" class="form-control" id="multiOptionstags" multiple="multiple">
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @if ($item->categories->count())
                                        @foreach ($item->categories as $level_one)
                                            <option value="{{ $level_one->id }}">----{{ $level_one->name }}</option>
                                        @endforeach
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="">Product Name</label>
                            <input type="text" class="form-control" value="{{ $product->prod_title }}" name="prod_title">
                        </div>
                        <div class="col-sm-4">
                            <label for="">Product Slug</label>
                            <input type="text" class="form-control" value="{{ $product->slug }}" name="slug">
                        </div>
                        <div class="col-sm-4">
                            <label for="">Product Quantity</label>
                            <input type="number" class="form-control" name="prod_qty" id="prod_qty">
                        </div>
                        <div class="col-sm-4">
                            <label for="">Product Sku</label>
                            <input type="text" class="form-control" name="prod_sku">
                        </div>
                        <div class="col-sm-4">
                            <label for="">Product Fabric</label>
                            <input type="text" class="form-control" name="prod_fabric">
                        </div>
                        <div class="col-sm-4">
                            <label for="">Product Color</label>
                            <input type="text" class="form-control" name="prod_color" id="prod_color">
                        </div>
                        <div class="col-sm-4">
                            <label for="">Product Size</label>
                            <input type="text" class="form-control" name="prod_sizes" id="prod_sizes">
                        </div>
                        <div class="col-sm-4">
                            <label for="">Local Shipping</label>
                            <input type="text" class="form-control" name="local_shipping" id="local_shipping">
                        </div>
                        <div class="col-sm-4">
                            <label for="">International Shipping</label>
                            <input type="text" class="form-control" name="international_shipping" id="international_shipping">
                        </div>
                        <div class="col-sm-4">
                            <label for="">Meta Title</label>
                            <input type="text" class="form-control" name="meta_title" id="meta_title">
                        </div>
                        <div class="col-sm-4">
                            <label for="">Meta Tags</label>
                            <select class="form-select form-control multiOptionstags" name="meta_tags[]"
                                multiple="multiple">
                                <option>--Select Tags --</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="">Meta Description</label>
                            <input type="text" class="form-control" name="meta_description" id="meta_description">
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-sm-3">
                            <label for="">Price in PKR</label> <br>
                            {{-- <span style="position: absolute; margin-left: 1px; margin-top: 1px; padding:10px; background-color: darkslateblue;">PKR</span> --}}
                            <input type="number" class="form-control" name="pkr_price" id="pkr_price">
                        </div>
                        <div class="col-sm-3">
                            <label for="">Price in UAE</label> <br>
                            {{-- <span style="position: absolute; margin-left: 1px; margin-top: 1px; padding:10px; background-color: darkslateblue;">AED</span> --}}
                            <input type="number" class="form-control" name="uae_price" id="uae_price">
                        </div>
                        <div class="col-sm-3">
                            <label for="">Price in Qatri</label> <br>
                            {{-- <span style="position: absolute; margin-left: 1px; margin-top: 1px; padding:10px; background-color: darkslateblue;">QR</span> --}}
                            <input type="number" class="form-control" name="qatari_price" id="qatari_price">
                        </div>
                        <div class="col-sm-3">
                            <label for="">Price in Saudi Arabia</label> <br>
                            {{-- <span style="position: absolute; margin-left: 1px; margin-top: 1px; padding:10px; background-color: darkslateblue;">SR</span> --}}
                            <input type="number" class="form-control" name="saudi_price" id="saudi_price">
                        </div>
                        <div class="col-sm-3">
                            <label for="">Price in EURO</label> <br>
                            {{-- <span style="position: absolute; margin-left: 1px; margin-top: 1px; padding:10px; background-color: darkslateblue;"><i class="fa fa-euro-sign"></i></span> --}}
                            <input type="number" class="form-control" name="euro_price" id="euro_price">
                        </div>
                        <div class="col-sm-3">
                            <label for="">Price in UK</label> <br>
                            {{-- <span style="position: absolute; margin-left: 1px; margin-top: 1px; padding:10px; background-color: darkslateblue;">£</span> --}}
                            <input type="number" class="form-control" name="uk_price" id="uk_price">
                        </div>
                        <div class="col-sm-3">
                            <label for="">Price in US</label> <br>
                            {{-- <span style="position: absolute; margin-left: 1px; margin-top: 1px; padding:10px; background-color: darkslateblue;">$</span> --}}
                            <input type="number" class="form-control" name="us_price" id="us_price">
                        </div>
                        <div class="col-sm-3">
                            <label for="">Price in CAD</label> <br>
                            {{-- <span style="position: absolute; margin-left: 1px; margin-top: 1px; padding:10px; background-color: darkslateblue;">C$</span> --}}
                            <input type="number" class="form-control" name="cad_price" id="cad_price">
                        </div>

                        <div class="col-sm-6">
                            <label for="">Discount</label>
                            <input type="number" class="form-control" name="discount" id="discount" value="90">
                        </div>
                        <div class="col-sm-6">
                            <label for="">Net Price</label>
                            <input type="number" class="form-control" name="net_price" id="net_price">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="">Short Description</label>
                            <textarea class="form-control" rows="3" name="short_description"></textarea>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Desclaimer</label>
                            <textarea class="form-control" rows="3" name="disclaimer"></textarea>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="upload__box">
                                <div class="upload__btn-box">
                                    <label class="upload__btn btn-block">
                                        <p class="pt-2" id="thumbnail">Upload images</p>
                                        <input type="file" multiple="" name="thumbnail[]" id="images" data-max_length="20"
                                            class="upload__inputfile">
                                    </label>
                                </div>
                                <div class="upload__img-wrap"></div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label for="">Long Description</label>
                            @include('admin.editor.editor')
                        </div>
                        <div class="col-sm-12 mt-3">
                            <button type="submit" class="btn btn-primary btn-block">Save</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    @include('admin.products.js.create')
@endsection
