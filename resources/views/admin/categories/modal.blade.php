<!-- The Modal -->

<style>
    .select2-selection--multiple {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    min-height: 50px!important;
    user-select: none;
    -webkit-user-select: none;
    background-color:#1b2e4b!important;
}

</style>
<div class="modal" id="createCategoryModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add New Category</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data"
                    id="StoreCategoryForm">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="">Category Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="col-sm-12">
                            <label for="">Slug</label>
                            <input type="text" class="form-control" name="slug">
                        </div>
                        <div class="col-sm-12">
                            <label for="">Meta Tags</label>
                            <select class="form-select form-control multiOptionstags" name="meta_tags[]" multiple="multiple">
                                <option>--Select Tags --</option>
                            </select>
                        </div>


                        <div class="col-sm-12">
                            <label for="">Meta Description</label>
                            <input type="text" class="form-control" name="meta_description">
                        </div>
                        <div class="col-sm-12">
                            <label for="">Select Parent</label>
                            <select class="form-select form-control" id="parent_id" name="parent_id"
                                aria-label="Default select example">
                                <option value="0">--select parent--</option>
                            </select>
                        </div>
                        <div class="col-12 text-center mt-3 mb-5">
                            <button type="submit" class="btn btn-primary btn-block">Save</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<div class="modal" id="updateCategoryModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit Category</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data"
                    id="UpdateCategoryForm">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id">
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="">Category Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="col-sm-12">
                            <label for="">Slug</label>
                            <input type="text" class="form-control" name="slug">
                        </div>
                        <div class="col-sm-12">
                            <label for="">Meta Tags</label>
                            <select class="form-select form-control multiOptionstags" name="meta_tags[]" multiple="multiple">
                                <option>--Select Tags --</option>
                            </select>
                        </div>
                        <div class="col-sm-12">
                            <label for="">Meta Description</label>
                            <input type="text" class="form-control" name="meta_description">
                        </div>
                        <div class="col-sm-12">
                            <label for="">Select Parent</label>
                            <select class="form-select form-control" id="parent_id" name="parent_id"
                                aria-label="Default select example">
                                <option value="0">--select parent--</option>
                            </select>
                        </div>
                        <div class="col-12 text-center mt-3 mb-5">
                            <button type="submit" class="btn btn-primary btn-block">Save</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
