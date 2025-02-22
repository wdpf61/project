<!DOCTYPE html>
<html lang="zxx">


<head>
    <title> Foodzey | Shop </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('asset_restaurant')}}/images/favicon/apple-icon-57x57.png">
                                    
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('asset_restaurant')}}/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('asset_restaurant')}}/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('asset_restaurant')}}/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('asset_restaurant')}}/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('asset_restaurant')}}/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('asset_restaurant')}}/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('asset_restaurant')}}/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('asset_restaurant')}}/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('asset_restaurant')}}/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('asset_restaurant')}}/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('asset_restaurant')}}/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('asset_restaurant')}}/images/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('asset_restaurant')}}/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="{{asset('asset_restaurant')}}/cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- StyleSheet link CSS -->
    <link rel="stylesheet" href="{{asset('asset_restaurant')}}/css/animate.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('asset_restaurant')}}/bootstrap/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('asset_restaurant')}}/css/superclasses.css" type="text/css">
    <link rel="stylesheet" href="{{asset('asset_restaurant')}}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('asset_restaurant')}}/css/owl.theme.default.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('asset_restaurant')}}/css/custom.css" type="text/css">
    <link rel="stylesheet" href="{{asset('asset_restaurant')}}/css/shop.css" type="text/css">
    <link rel="stylesheet" href="{{asset('asset_restaurant')}}/css/responsive.css" type="text/css">
    <link rel="stylesheet" href="{{asset('asset_restaurant')}}/cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    @yield('css')
</head>

<body>
 @include('layout.restaurant.header')


     @yield('banner')


 <!-- bg outer wrapper -->
</div>
<!-- SEARCH BAR -->
<div id="search" class="">
    <span class="close">X</span>
    <form role="search" id="searchform" method="get">
      <input value="" name="q" type="search" placeholder="Type to Search">
    </form>
  </div>


 <!-- SHOP SECTION -->
    @yield('page')
@include('layout.restaurant.footer')
    <!-- Latest compiled JavaScript -->
    <!-- BACK TO TOP BUTTON -->
    <button id="back-to-top-btn" title="Back to Top"></button>
    <script src="{{asset('asset_restaurant')}}/js/jquery.min.js"></script>
    <script src="{{asset('asset_restaurant')}}/js/popper.min.js"></script>
    <script src="{{asset('asset_restaurant')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('asset_restaurant')}}/js/drawer-menu.html"></script>
    <script src="{{asset('asset_restaurant')}}/js/owl.carousel.js"></script>
    <script src="{{asset('asset_restaurant')}}/js/contact-form.js"></script>
    <script src="{{asset('asset_restaurant')}}/js/video-popup.js"></script>
    <script src="{{asset('asset_restaurant')}}/js/video-section.js"></script>
    <script src="{{asset('asset_restaurant')}}/js/jquery.validate.js"></script>
    <script src="{{asset('asset_restaurant')}}/js/wow.js"></script>
    <script src="{{asset('asset_restaurant')}}/js/counter.js"></script>
    <script src="{{asset('asset_restaurant')}}/js/custom.js"></script>
    <script src="{{asset('asset_restaurant')}}/js/search.js"></script>
    <script src="{{asset('asset_restaurant')}}/js/shop.js"></script>
    <script src="{{asset('asset_restaurant')}}/js/remove-product.js"></script>
    <script src="{{asset('asset_restaurant')}}/js/quantity.js"></script>

    @yield('script')
</body>


<!-- Mirrored from html.designingmedia.com/foodzey/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Feb 2025 06:14:59 GMT -->
</html>