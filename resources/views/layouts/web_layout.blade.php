<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Regalia Fashsion</title>
    <meta name="description" content="My Store" />

    @include('layouts.web_include.header')



</head>

<body class="common-home header_style2 product_btn_style2 load_more  product_sticky_right responsive_style1   ">
    <div id="page">
        <div class="ttloading-bg"></div>
        @include('layouts.web_include.navbar')
        @yield('content')
        @include('layouts.web_include.footer')
    </div>



 

</body>

</html>
