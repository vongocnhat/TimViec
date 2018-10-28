<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@yield('title')</title>
    <base href="{{ asset('/') }}">
    <!-- Fontfaces CSS-->
    <link href="manage/css/font-face.css" rel="stylesheet" media="all">
    <link href="manage/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="manage/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="manage/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="manage/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="manage/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="manage/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="manage/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="manage/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="manage/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="manage/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="manage/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="manage/css/theme.css" rel="stylesheet" media="all">
    <link href="manage/css/common.css" rel="stylesheet" media="all">
    @yield('css')
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        @include('manage.includes.header_mobile')
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        @include('manage.includes.menu_sidebar')
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            @include('manage.includes.header_desktop')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content">
                    <div class="container-fluid">
                        <div class="row">
                            @if(Session::has('notify_success'))
                            <div class="col-12">
                                <div class="alert alert-success">
                                    <span class="alert-success">{{ Session::get('notify_success') }}</span>
                                </div>
                            </div>
                            @else
                                @if(Session::has('notify_error'))
                                <div class="col-12">
                                    <div class="alert alert-danger">
                                        <span class="alert-danger">{{ Session::get('notify_error') }}</span>
                                    </div>
                                </div>
                                @endif
                            @endif
                            @if ($errors->any())
                            <div class="col-12">
                                <div class="alert alert-danger">
                                <ol class="m-0">
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ol>
                                </div>
                            </div>
                            @endif
                            @yield('content')
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="manage/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="manage/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="manage/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="manage/vendor/slick/slick.min.js">
    </script>
    <script src="manage/vendor/wow/wow.min.js"></script>
    <script src="manage/vendor/animsition/animsition.min.js"></script>
    <script src="manage/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="manage/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="manage/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="manage/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="manage/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="manage/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="manage/vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="manage/js/main.js"></script>
    <script src="manage/js/common.js"></script>
    @yield('script')
</body>

</html>
<!-- end document-->
