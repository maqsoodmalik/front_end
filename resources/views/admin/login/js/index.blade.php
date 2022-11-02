
    <script>
        $(document).ready(function(){
            $('#loginForm').validate({
                errorClass: "is-invalid",
                validClass: "is-valid",
                rules: {
                    email: {
                        required: true,
                    },
                    password: {
                        required: true,
                    },
                },
                messages: {
                    email: {
                        required: 'The Email field is required.'
                    },
                    password: {
                        required: 'The Password field is required.'
                    },
                },
                submitHandler: function(form) {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('admin.login') }}",
                        data: $(form).serialize(),
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                            btnDisableHandler('#loginForm .btn-primary', true,
                                'Processing...');
                        },
                        complete: function() {
                            btnDisableHandler('#loginForm .btn-primary', false, 'Sign In');
                        },
                        success: function(res) {
                            //  return console.log(res);
                            if (res.success == true) {
                                console.log(res);
                                sweetAlertMessage('success', res.message);
                                setTimeout(() => {
                                    window.location =
                                        "{{ route('admin.dashboard') }}";
                                }, 1000);
                            } else if (res.success == false) {
                                if (res.response.email) {
                                    sweetAlertMessage('error', res.response.email[0]);
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

