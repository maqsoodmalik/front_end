@extends('layouts.admin_layout')
@section('title','Products')

@section('content')


<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">

            <div class="widget-content widget-content-area br-6">
                <div class="ms-panel-header d-flex justify-content-between">
                    <h4>All Products</h4>
                    <a href="{{ route('admin.products.create') }}"><button class="btn btn-primary btn-sm" >Add New</button></a>
                </div>
                <div class="table-responsive mb-4 mt-4">
                <table id="productTble" class="table table-hover responsive">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>SKU</th>
                                <th>Size</th>
                                <th>Color</th>
                                <th>Status</th>
                                <th>Publish Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.products.js.index')
@endsection
