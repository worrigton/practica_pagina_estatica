<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ANKYRA</title>
         <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/fontawesome/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/mdbpro/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/mdbpro/css/mdb.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/mdbpro/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('carousel/owlcarousel/assets/owl.carousel.css') }}">
        <style type="text/css">
            .fixed-top {
                position: fixed;
                top: 0;
                right: 0;
                left: 0;
                z-index: 2!important;
            }
            </style>
        <link rel="icon" href="{{ asset('images/Ankira_FAV.PNG') }}" type="image/x-icon" />
       
    </head>
    <body class="white-skin" style="padding-right: 0 !important">
        <main id="app">
            <div class="pageWrap">
                <!-- /tp-bar -->
                @include('template.header')
                <!-- /main-bar -->
                @yield('content')
                 <!-- Button trigger modal -->                 
                @include('template.footer')
            </div>
        </main>
        <script src="{{asset('js/sweetalert2.all.min.js')}}"></script>
        <script src="{{ asset('assets/mdbpro/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('assets/mdbpro/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/mdbpro/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/mdbpro/js/mdb.min.js') }}"></script>        
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/scripts.js')}}"> </script>
        <script src="{{ asset('carousel/owlcarousel/owl.carousel.js') }}"></script>
        <script src="https://mdbootstrap.com/live/_MDB/js/compiled.min.js"></script>
        <script type="text/javascript">
            $(".button-collapse").sideNav();
            // SideNav Scrollbar Initialization
            var sideNavScrollbar = document.querySelector('.custom-scrollbar');
            Ps.initialize(sideNavScrollbar);
            new WOW().init();
            $( ".wow" ).addClass( "fadeInUp" );
            $('#myModal').modal(options)
            
        </script>
    </body>
</html>
