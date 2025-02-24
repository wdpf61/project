<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Multipurpose, super flexible, powerful, clean modern responsive bootstrap 5 admin template">
    <meta name="keywords"
        content="admin template, ra-admin admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="la-themes">
    <link rel="icon" href="{{ asset('assets') }}/images/logo/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/logo/favicon.png" type="image/x-icon">
    <title> @yield('title' , 'Dashboard')  </title>

    <!-- Animation css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/animation/animate.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">

    <!-- wheather icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendor/weather/weather-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendor/weather/weather-icons-wind.css">

    <!--flag Icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendor/flag-icons-master/flag-icon.css">

    <!-- tabler icons-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendor/tabler-icons/tabler-icons.css">

    <!-- prism css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendor/prism/prism.min.css">

    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendor/apexcharts/apexcharts.css">

    <!-- glight css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/glightbox/glightbox.min.css">

    <!-- slick css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/slick/slick.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/slick/slick-theme.css">

    <!-- Data Table css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendor/datatable/jquery.dataTables.min.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendor/bootstrap/bootstrap.min.css">

    <!-- vector map css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/vector-map/jquery-jvectormap.css">

    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendor/apexcharts/apexcharts.css">

    <!-- simplebar css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/vendor/simplebar/simplebar.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/style.css">

    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/responsive.css">
    @yield('css')
</head>

<body>
    <div class="app-wrapper">

        {{-- <div class="loader-wrapper">
            <div class="loader_16"></div>
        </div> --}}

        <!-- Menu Navigation starts -->

        @include('layout.erp.sidebar')
        <!-- Menu Navigation ends -->

        <div class="app-content">
            <div class="">

                <!-- Header Section starts -->
                @include('layout.erp.header')
                <!-- Header Section ends -->

                <!-- Body main section starts -->
                <main>
                    <div class="container-fluid">
                         @yield('page')
                    </div>
                </main>
            </div>
        </div>
        <!-- Body main section ends -->


        <!-- tap on top -->
        <div class="go-top">
            <span class="progress-value">
                <i class="ti ti-arrow-up"></i>
            </span>
        </div>

        <!-- Footer Section starts-->
        @include('layout.erp.footer')
        <!-- Footer Section ends-->
    </div>

    <!-- modal -->

    {{-- <div class="modal" tabindex="-1" id="welcomeCard" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content welcome-card">

                <div class="modal-body p-0">
                    <div class="text-center position-relative welcome-card-content z-1 p-3">
                        <div class="text-end">
                            <i class="ti ti-x fs-5 text-dark f-w-600" data-bs-dismiss="modal"></i>
                        </div>
                        <h2 class="f-w-600"><span>Welcome !</span>👋 </h2>
                        <h6 class="f-s-15 text-dark f-w-500 mx-0 mx-sm-5"> Start Multipurpose, clean modern responsive
                            bootstrap 5 admin template </h6>

                        <div>
                            <img src="{{ asset('assets') }}/images/modals/welcome-1.png" alt="img"
                                class=" img-fluid">
                        </div>
                        <div class="mt-3 mb-4">
                            <button type="button" class="btn btn-primary text-white btn-lg"
                                data-bs-dismiss="modal">Let's
                                Started <i class="ti ti-chevrons-right"></i> </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}

    <!--customizer-->
    <div id="customizer"></div>
    

    <!-- latest jquery-->
    <script src="{{ asset('assets') }}/js/jquery-3.6.3.min.js"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('assets') }}/vendor/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- Simple bar js-->
    <script src="{{ asset('assets') }}/vendor/simplebar/simplebar.js"></script>

    <!-- phosphor js -->
    <script src="{{ asset('assets') }}/vendor/phosphor/phosphor.js"></script>

    <!-- vector map plugin js -->
    <script src="{{ asset('assets') }}/vendor/vector-map/jquery-jvectormap-2.0.5.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/vector-map/jquery-jvectormap-world-mill.js"></script>

    <!-- slick-file -->
    <script src="{{ asset('assets') }}/vendor/slick/slick.min.js"></script>

    <!--cleave js  -->
    <script src="{{ asset('assets') }}/vendor/cleavejs/cleave.min.js"></script>

    <!-- apexcharts-->
    <script src="{{ asset('assets') }}/vendor/apexcharts/apexcharts.min.js"></script>

    <!-- data table js-->
    <script src="{{ asset('assets') }}/vendor/datatable/jquery.dataTables.min.js"></script>

    <!-- Glight js -->
    <script src="{{ asset('assets') }}/vendor/glightbox/glightbox.min.js"></script>

    <!-- Customizer js-->
    <script src="{{ asset('assets') }}/js/customizer.js"></script>

    <!-- Ecommerce js-->
    <script src="{{ asset('assets') }}/js/ecommerce_dashboard.js"></script>

    <!-- prism js-->
    <script src="{{ asset('assets') }}/vendor/prism/prism.min.js"></script>

    <!-- App js-->
    <script src="{{ asset('assets') }}/js/script.js"></script>
     @yield('script')
</body>

</html>
