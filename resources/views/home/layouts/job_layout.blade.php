<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('job_list.text1')</title>
    {{-- <base href="file:///D:/NhatVN1/DoAn/TimViecCongTy/public/" /> --}}
    <base href="{{ asset('/') }}">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="select2/css/select2.css">
    <link rel="stylesheet" href="css/select2-edit.css">
    <link rel="stylesheet" href="css/common.css">
    <link href="manage/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    @yield('css')
</head>
<style>

</style>
<body class="format_index1">
    <!-- header include -->
    @include('home.includes.job_header')
    <!-- /header include -->
    @yield('content')
    <!-- include footer -->
    @include('home.includes.job_footer')
    <!-- /include footer -->
    <script type="text/javascript " src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="bootstrap4/js/bootstrap.bundle.min.js"></script>
    <script src="select2/js/select2.min.js"></script>
    <script src="manage/js/common.js"></script>
    <script src="js/common.js"></script>
    <script>
        new WOW().init();
    </script>
    <script>
        $('select').select2();
    </script>
    @yield('script')
</body>

</html>