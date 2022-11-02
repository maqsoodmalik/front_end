@extends('layouts.admin_layout')
@section('title','Categories')

@section('content')



<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="ms-panel-header d-flex justify-content-between">
                    <h4>All Categories</h4>
                    <button class="btn btn-primary btn-sm" id="openCreateModalBtn">Add New</button>
                </div>
                <div class="table-responsive mb-4 mt-4">
                <table id="categoryTble" class="table style-3  table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Category</th>
                                <th>Parent Category</th>
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

@include('admin.categories.modal')
@include('admin.categories.js.index')



@endsection
