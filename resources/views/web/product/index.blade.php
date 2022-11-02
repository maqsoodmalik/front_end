@extends('layouts.web_layout')

@section('content')
<style type="text/css">
    .ajax-load{
        background: #e1e1e1;
      padding: 10px 0px;
      width: 100%;
    }
</style>
    <div style="margin-top: 120px">
        <div class="container">
            <div class="col-md-12">
                <div class="category-products grid-default">
                    <div id="load-format-pagination" class="row">
                        <div class="grid-sizer"></div>
                        <div id="post-data">
                            @include('web.product.page')
                        </div>

                    </div>
                </div>
                <div class="ajax-load text-center" style="display:none">
                    <p><img src="https://i.stack.imgur.com/181Qp.gif">Loading More Products</p>
                </div>
            </div>
        </div>
    </div>

    {{-- @include('web.product.js.index') --}}

@endsection
