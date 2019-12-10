<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
     @include('template.css')
</head>




<body>
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            @include('template.sidebar')
        </div>
    </nav>

    <!--header-->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        @include('template.header')
    </header>
    <!--/header-->

        <div class="clearfix"></div>

    <!-- [ Main Content ] start -->
    <!-- <div class="content"> -->
        <section class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
    <!-- </div> -->
    <!-- [ Main Content ] end -->

    <!-- Scripts -->
    <script src="{{ URL::asset('js/vendor-all.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>    
    <script src="{{ URL::asset('js/pcoded.min.js') }}"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    @yield('script')

   
</body>
</html>
