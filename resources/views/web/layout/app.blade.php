<!DOCTYPE html>
<html lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/elixir/v3.0.0/homes/header-static.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 14:36:13 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>@yield('title') | Dana Abadi UNIDAYAN</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('web-assets/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('web-assets/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('web-assets/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('web-assets/vendors/overlayscrollbars/OverlayScrollbars.min.js') }}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('web-assets/vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web-assets/vendors/hamburgers/hamburgers.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web-assets/vendors/loaders.css/loaders.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web-assets/assets/css/theme.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('web-assets/assets/css/user.min.css') }}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&amp;family=Open+Sans:wght@300;400;600;700;800&amp;display=swap"
        rel="stylesheet">
    <!-- SweetAlert2 -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

    @stack('addon-style')
</head>

<body>
    <div class="bg-primary py-3 d-none d-sm-block text-white fw-bold">
        <div class="container">
            <div class="row align-items-center gx-4">
                <div class="col-auto d-none d-lg-block fs--1"><span class="fas fa-map-marker-alt text-warning me-2"
                        data-fa-transform="grow-3"></span>Jl. Sultan Dayanu Ikhsanuddin No 124, Kec. Betoambari, Kota Bau-Bau, Sulawesi Tenggara 93724 </div>
                <div class="col-auto ms-md-auto order-md-2 d-none d-sm-flex fs--1 align-items-center"><span
                        class="fas fa-clock text-warning me-2" data-fa-transform="grow-3"></span>Sen-Sab, 07.00-15.00.
                    Minggu TUTUP</div>
                <div class="col-auto"><span class="fas fa-phone-alt text-warning" data-fa-transform="shrink-3"></span><a
                        class="ms-2 fs--1 d-inline text-white fw-bold" href="tel:04022821138">(0402) 2821138</a></div>
            </div>
        </div>
    </div>
	@include('web.include.navbar')

    @yield('banner')
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

        @yield('content')

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



	@include('web.include.footer')

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('web-assets/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('web-assets/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('web-assets/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('web-assets/vendors/bigpicture/BigPicture.js') }}"></script>
    <script src="{{ asset('web-assets/vendors/countup/countUp.umd.js') }}"></script>
    <script src="{{ asset('web-assets/vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('web-assets/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('web-assets/vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('web-assets/vendors/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('web-assets/vendors/gsap/gsap.js') }}"></script>
    <script src="{{ asset('web-assets/vendors/gsap/customEase.js') }}"></script>
    <script src="{{ asset('web-assets/assets/js/theme.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

    @stack('addon-script')

    @if ($message = Session::get('success'))
        <script type="text/javascript">
            $(document).ready(function() {
                Swal.fire({
                    title: "Sukses!",
                    html: "{{ $message }}",
                    buttonsStyling: false,
                    confirmButtonClass: "btn btn-success",
                    icon: "success"
                });
            })
        </script>
    @elseif($message = Session::get('failed'))
        <script type="text/javascript">
            $(document).ready(function() {
                Swal.fire({
                    title: "Gagal!",
                    html: "{{ $message }}",
                    buttonsStyling: false,
                    confirmButtonClass: "btn btn-danger",
                    icon: "error"
                });
            })
        </script>
    @endif
</body>


<!-- Mirrored from prium.github.io/elixir/v3.0.0/homes/header-static.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Nov 2023 14:36:27 GMT -->

</html>
