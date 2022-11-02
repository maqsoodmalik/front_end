@push('scripts')
    <script>
        $(document).ready(function() {



            @include('common.jshelper')

            // meta Tags
            $(".multiOptionstags").select2({
                tags: true,
                tokenSeparators: [',', ' ']
            })

            // Multiple image upload function calling

            ImgUpload();

            // multiple image upload creating function
            function ImgUpload() {
                var imgWrap = "";
                var imgArray = [];

                $('.upload__inputfile').each(function() {
                    $(this).on('change', function(e) {
                        imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                        var maxLength = $(this).attr('data-max_length');

                        var files = e.target.files;
                        var filesArr = Array.prototype.slice.call(files);
                        var iterator = 0;
                        filesArr.forEach(function(f, index) {

                            if (!f.type.match('image.*')) {
                                return;
                            }

                            if (imgArray.length > maxLength) {
                                return false
                            } else {
                                var len = 0;
                                for (var i = 0; i < imgArray.length; i++) {
                                    if (imgArray[i] !== undefined) {
                                        len++;
                                    }
                                }
                                if (len > maxLength) {
                                    return false;
                                } else {
                                    imgArray.push(f);

                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        var html =
                                            "<div class='upload__img-box'><div style='background-image: url(" +
                                            e.target.result + ")' data-number='" + $(
                                                ".upload__img-close").length +
                                            "' data-file='" + f.name +
                                            "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                        imgWrap.append(html);
                                        iterator++;
                                    }
                                    reader.readAsDataURL(f);
                                }
                            }
                        });
                    });
                });

                $('body').on('click', ".upload__img-close", function(e) {
                    var file = $(this).parent().data("file");
                    for (var i = 0; i < imgArray.length; i++) {
                        if (imgArray[i].name === file) {
                            imgArray.splice(i, 1);
                            break;
                        }
                    }
                    $(this).parent().parent().remove();
                });
            }



            /**Generate Slug*/
            $('input[name="prod_title"]').keyup(function() {
                const title = $(this).val();
                const slug = title.toLowerCase().replace(/ /g, '-').replace(/[-]+/g, '-').replace(
                    /[^\w-]+/g, '');
                $('input[name="slug"]').val(slug);
            });


            /**  Storing the form into database with validation  **/

            $('#StoreProductForm').validate({
                errorClass: "is-invalid",
                validClass: "is-valid",
                rules: {
                    "category_id[]": {
                        required: true,
                    },
                    prod_title: {
                        required: true,
                    },
                    slug: {
                        required: true,
                    },
                    prod_sku: {
                        required: true,
                    },
                    prod_qty: {
                        required: true,
                    },
                    prod_fabric: {
                        required: true,
                    },
                    prod_color: {
                        required: true
                    },
                    prod_sizes: {
                        required: true
                    },
                    local_shipping: {
                        required: true
                    },
                    international_shipping: {
                        required: true
                    },
                    disclaimer: {
                        required: true
                    },
                    short_description: {
                        required: true
                    },
                    pkr_price: {
                        required: true
                    },
                    uae_price: {
                        required: true
                    },
                    qatari_price: {
                        required: true
                    },
                    saudi_price: {
                        required: true
                    },
                    us_price: {
                        required: true
                    },
                    uk_price: {
                        required: true
                    },
                    cad_price: {
                        required: true
                    },
                    euro_price: {
                        required: true
                    },
                },
                messages: {
                    "category_id[]": {
                        required: 'Please select book categories'
                    },
                    prod_title: {
                        required: 'The Product title is required.'
                    },
                    slug: {
                        required: 'The slug field is required.'
                    },
                    prod_sku: {
                        required: 'The product SKU is required.'
                    },
                    prod_qty: {
                        required: 'The Quantity field is required.'
                    },
                    prod_fabric: {
                        required: 'The Product Fabric field is required.'
                    },
                    prod_color: {
                        required: 'The product Color Field field is required.'
                    },
                    prod_sizes: {
                        required: 'The Product Sizes Field field is required.'
                    },
                    local_shipping: {
                        required: 'The Local shipping Field field is required.'
                    },
                    international_shipping: {
                        required: 'The International Shipping Field field is required.'
                    },
                    short_description: {
                        required: 'The Short Description Field field is required.'
                    },
                    pkr_price: {
                        required: 'The PKR Price Field field is required.'
                    },
                    uae_price: {
                        required: 'The USA Price Field field is required.'
                    },
                    qatari_price: {
                        required: 'The QATATI Price Field field is required.'
                    },
                    saudi_price: {
                        required: 'The SAUDI Price Field field is required.'
                    },
                    us_price: {
                        required: 'The US Price Field field is required.'
                    },
                    uk_price: {
                        required: 'The UK Price Field field is required.'
                    },
                    cad_price: {
                        required: 'The CANADA Price Field field is required.'
                    },
                    euro_price: {
                        required: 'The Euro Price Field field is required.'
                    },
                    disclaimer: {
                        required: 'The disclaimer field is required.'
                    }
                },
                submitHandler: function(form) {

                    // const thumbnail = document.getElementById('thumbnail').files[0];
                    // const thumbnail = $('#StoreProductForm input[name="thumbnail[]"]').map(function() {
                    //     return $(this).val();
                    // }).get();

                    // const totalImages = $("#images")[0].files.length;
                    // let images = $("#images")[0];
                    const category_id = $('#StoreProductForm select[name="category_id[]"]').val();
                    const prod_title = $('#StoreProductForm input[name="prod_title"]').val();
                    const slug = $('#StoreProductForm input[name="slug"]').val();
                    const prod_sku = $('#StoreProductForm input[name="prod_sku"]').val();
                    const prod_qty = $('#StoreProductForm #prod_qty').val();
                    const prod_fabric = $('#StoreProductForm input[name="prod_fabric"]').val();
                    const prod_color = $('#StoreProductForm #prod_color').val();
                    const prod_sizes = $('#StoreProductForm #prod_sizes').val();
                    const local_shipping = $('#StoreProductForm #local_shipping').val();
                    const international_shipping = $('#StoreProductForm #international_shipping').val();
                    const disclaimer = $('#StoreProductForm textarea[name="disclaimer"]').val();
                    const short_description = $('#StoreProductForm textarea[name="short_description"]').val();
                    const long_description = $('#StoreProductForm textarea[name="long_description"]').val();
                    const pkr_price = $('#StoreProductForm #pkr_price').val();
                    const uae_price = $('#StoreProductForm #uae_price').val();
                    const qatari_price = $('#StoreProductForm #qatari_price').val();
                    const saudi_price = $('#StoreProductForm #saudi_price').val();
                    const us_price = $('#StoreProductForm #us_price').val();
                    const uk_price = $('#StoreProductForm #uk_price').val();
                    const cad_price = $('#StoreProductForm #cad_price').val();
                    const euro_price = $('#StoreProductForm #euro_price').val();
                    const discount = $('#StoreProductForm #discount').val();
                    const net_price = $('#StoreProductForm #net_price').val();
                    const meta_title = $('#StoreProductForm #meta_title').val();
                    const meta_tags = $('#StoreProductForm select[name="meta_tags[]"]').val();
                    const meta_description = $('#StoreProductForm #meta_description').val();

                    //    return console.log({thumbnail,category_id,category_id,prod_title,slug,prod_sku,prod_qty,prod_fabric,prod_color
                    //     ,prod_sizes,local_shipping,international_shipping,disclaimer,short_description,long_description,pkr_price
                    //     ,uae_price,qatari_price,saudi_price,us_price,uk_price,cad_price,euro_price,discount,net_price,meta_title
                    //     ,meta_tags,meta_description});
                    const formData = new FormData();
                    let TotalImages = $('#images')[0].files.length; //Total Images
                    let images = $('#images')[0];
                    for (let i = 0; i < TotalImages; i++) {
                    formData.append('images' + i, images.files[i]);
                    }
                    formData.append('TotalImages', TotalImages);
                    formData.append('category_id', category_id);
                    formData.append('prod_title', prod_title);
                    formData.append('slug', slug);
                    formData.append('prod_sku', prod_sku);
                    formData.append('prod_qty', prod_qty);
                    formData.append('prod_fabric', prod_fabric);
                    formData.append('prod_color', prod_color);
                    formData.append('prod_sizes', prod_sizes);
                    formData.append('local_shipping', local_shipping);
                    formData.append('international_shipping', international_shipping);
                    formData.append('disclaimer', disclaimer);
                    formData.append('short_description', short_description);
                    formData.append('long_description', long_description);
                    formData.append('pkr_price', pkr_price);
                    formData.append('uae_price', uae_price);
                    formData.append('qatari_price', qatari_price);
                    formData.append('saudi_price', saudi_price);
                    formData.append('us_price', us_price);
                    formData.append('uk_price', uk_price);
                    formData.append('cad_price', cad_price);
                    formData.append('euro_price', euro_price);
                    formData.append('discount', discount);
                    formData.append('net_price', net_price);
                    formData.append('meta_title', meta_title);
                    formData.append('meta_tags', meta_tags);
                    formData.append('meta_description', meta_description);
                    formData.append('_token', _token);
                    formData.append('method', "POST");
                    $.ajax({
                        url: "{{ route('admin.products.store') }}",
                        type: "POST",
                        data: formData,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                            btnDisableHandler('#StoreProductForm .btn-primary', true,
                                'Processing...');
                        },
                        complete: function() {
                            btnDisableHandler('#StoreProductForm .btn-primary', false,
                                'Save');
                        },
                        success: function(res) {
                            // return console.log(res);
                            if (res.success == true) {
                                $('#StoreProductForm')[0].reset();
                                sweetAlertMessage('success', res.message);
                                setTimeout(() => {
                                    window.location =
                                        "{{ route('admin.products.index') }}";
                                }, 1000);
                            } else if (res.success == false) {
                                if (res.response.name) {
                                    sweetAlertMessage('error', res.response.name[0]);
                                }
                                else if (res.response.slug) {
                                    sweetAlertMessage('error', res.response.slug[0]);
                                }
                                else if (res.response.sku) {
                                    sweetAlertMessage('error', res.response.sku[0]);
                                }
                            }
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                }
            });


        });
    </script>
@endpush
