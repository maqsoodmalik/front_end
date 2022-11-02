@push('scripts')
<script>
     $(document).ready(function(){
        @include('common.jshelper')

        /** Data Table **/


            const ProductTable = $('#productTble').DataTable({
                responsive: true,
                paging: true,
                searching: true,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                },
                ajax: "{{ route('admin.products.index') }}",
                columns: [{
                        "data": "Row_Index_ID"
                    },
                    {
                        "data": "name"
                    },
                    {
                        "data": "sku"
                    },
                    {
                        "data": "size"
                    },
                    {
                        "data": "color"
                    },
                    {
                        "data": "status_html"
                    },
                    {
                        "data": "publish_html"
                    },
                    {
                        "mRender": function(data, type, row) {
                            let url = "{{ route('admin.products.edit', ':id') }}";
                            url = url.replace(':id', row.id);
                            return `
                        <input type="hidden" name="name" value="${row.name}">
                        <input type="hidden" name="sku" value="${row.sku}">
                        <input type="hidden" name="size" value="${row.size}">
                        <input type="hidden" name="color" value="${row.color}">
                        <input type="hidden" name="qty" value="${row.qty}">
                        <a href="${url}" class="badge badge-info edit-category-record" data-id="${row.id}"><i class="fa fa-edit mg-r-10"></i> Edit</a>
                        <button class="badge badge-danger delete-product-record" data-id="${row.id}"><i class="fa fa-trash mg-r-10" ></i> Delete</button>
                        `;
                        }
                    }
                ]
            });


            // changing the Publish status of products
            $('body').delegate('.product-publish-status', 'click', function() {
                const id = $(this).attr('data-id');
                // alert(id);
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to Change the Publish Status!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Change it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        let url = "{{ route('admin.products.publish-update', ':id') }}";
                        url = url.replace(':id', id);
                        $.ajax({
                            url: url,
                            method: "POST",
                            data: {
                                id,
                                _token: "{{ csrf_token() }}",
                                _method: "POST"
                            },
                            success: function(res) {
                                console.log(res);
                                if (res.success == true) {
                                    sweetAlertMessage('success', res.message);
                                    ProductTable.ajax.reload();
                                }
                            },
                            error: function(xhr) {
                                console.log(xhr.responseText);
                            }
                        });
                    }
                })
            });


            // deleting the product
            $('body').delegate('.delete-product-record', 'click', function() {
                const id = $(this).attr('data-id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        let url = "{{ route('admin.products.destroy', ':id') }}";
                        url = url.replace(':id', id);
                        $.ajax({
                            url: url,
                            method: "DELETE",
                            data: {
                                id,
                                _token: "{{ csrf_token() }}",
                                _method: "DELETE"
                            },
                            success: function(res) {
                                if (res.success == true) {
                                    sweetAlertMessage('success', res.message);

                                    ProductTable.ajax.reload();
                                }
                            },
                            error: function(xhr) {
                                console.log(xhr.responseText);
                            }
                        });
                    }
                })
            });


               // changing the status of products
               $('body').delegate('.product-status', 'click', function() {
                const id = $(this).attr('data-id');
                // console.log(id);
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to Change the Status!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Change it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        let url = "{{ route('admin.products.status-update', ':id') }}";
                        url = url.replace(':id', id);
                        $.ajax({
                            url: url,
                            method: "POST",
                            data: {
                                id,
                                _token: "{{ csrf_token() }}",
                                _method: "POST"
                            },
                            success: function(res) {
                                console.log(res);
                                if (res.success == true) {
                                    sweetAlertMessage('success', res.message);
                                    ProductTable.ajax.reload();
                                }
                            },
                            error: function(xhr) {
                                console.log(xhr.responseText);
                            }
                        });
                    }
                })
            });



        });
</script>

@endpush
