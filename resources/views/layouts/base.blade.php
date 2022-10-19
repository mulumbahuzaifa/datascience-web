<!--=========================================================
    Item Name: Ekka - Ecommerce HTML Template.
    Author: ashishmaraviya
    Version: 3.2
    Copyright 2021-2022
	Author URI: https://themeforest.net/user/ashishmaraviya
 ============================================================-->
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

     <title>BEGOS</title>

     <!-- site Favicon -->
     <link rel="icon" href="{{ asset('assets/images/favicon/favicon.png') }}" sizes="32x32" />
     <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon/favicon.png') }}" />
     <meta name="msapplication-TileImage" content="{{ asset('assets/images/favicon/favicon.png') }}" />

     <!-- css Icon Font -->
     <link rel="stylesheet" href="{{ asset('assets/css/vendor/ecicons.min.css') }}" />

     <!-- css All Plugins Files -->
     {{-- <link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome.min.css') }}" /> --}}
     <script src="https://kit.fontawesome.com/86e5e7a048.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}" />
     {{-- <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}" /> --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.0.0/swiper-bundle.min.css" integrity="sha512-iuCmdl3Ah5ZCKGW+PqgeeEj6mdSDhqthxZ+9KGy70oCd2OgUvPl2SHhpk0usx2iqcJnzDh5/uGGM7I6pwfvsGA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.min.css') }}" />
     <link rel="stylesheet" href="{{ asset('assets/css/plugins/countdownTimer.css') }}" />
     <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.min.css') }}" />
     <link rel="stylesheet" href="{{ asset('assets/css/plugins/nouislider.css') }}" />
     <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.css') }}" />
     @stack('css')
     <!-- Main Style -->
     <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
     <link rel="stylesheet" href="{{ asset('assets/css/demo1.css') }}" />
     <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />

     <!-- Background css -->
     <link rel="stylesheet" id="bg-switcher-css" href="{{ asset('assets/css/backgrounds/bg-4.css') }}">
     @vite(['resources/js/app.js'])
     @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
 </head>

 <body>
     {{-- <div id="ec-overlay"><span class="loader_img"></span></div> --}}
     @livewire('header-component')

    {{ $slot }}

    @livewire('footer-component')

     <!-- Vendor JS -->
     <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
     <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
     <script src="{{ asset('assets/js/vendor/jquery.notify.min.js') }}"></script>
     <script src="{{ asset('assets/js/vendor/jquery.bundle.notify.min.js') }}"></script>

     <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
     <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
     <script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
     <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>

     <!--Plugins JS-->
     {{-- <script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script> --}}
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.0.0/swiper-bundle.min.js" integrity="sha512-nfTMywTuPQr/IAYeoMo3Yt/bMvHSwHZqNDy9nDkGBssthLnWhQLxJjjqhGdxTzyZBf+EQ9AcfDqYGLIZze8DbA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="{{ asset('assets/js/plugins/nouislider.js') }}"></script>
     <script src="{{ asset('assets/js/plugins/countdownTimer.min.js') }}"></script>
     <script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
     <script src="{{ asset('assets/js/plugins/jquery.zoom.min.js') }}"></script>
     <script src="{{ asset('assets/js/plugins/slick.min.js') }}"></script>
     <script src="{{ asset('assets/js/plugins/infiniteslidev2.js') }}"></script>
     <script src="{{ asset('assets/js/vendor/jquery.magnific-popup.min.js') }}"></script>
     <script src="{{ asset('assets/js/plugins/jquery.sticky-sidebar.js') }}"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/sticky-sidebar/3.3.1/jquery.sticky-sidebar.js" integrity="sha512-XBRntoPzeh041SmlWBG7igRMVz/DFAEoW1bQWhpGMSV0yB5/eEODM5K3bix3LHrkZhfF1z4B1mMzkJDXEZnKSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script src="{{ asset('assets/js/plugins/product-360.js') }}"></script>
     <!-- Google translate Js -->
     <script src="{{ asset('assets/js/vendor/google-translate.js') }}"></script>
     <script>
         function googleTranslateElementInit() {
             new google.translate.TranslateElement({
                 pageLanguage: 'en'
             }, 'google_translate_element');
         }
     </script>
     <!-- Main Js -->
     <script src="{{ asset('assets/js/vendor/index.js') }}"></script>
     <script src="{{ asset('assets/js/main.js') }}"></script>
     @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    @stack('scripts')

 </body>

 </html>
