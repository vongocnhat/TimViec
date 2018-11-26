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
    <title>Login</title>
    {{-- <base href="file:///D:/NhatVN1/DoAn/TimViecCongTy/public/" /> --}}
    <base href="{{ asset('/') }}"/>
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

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="{{ route('homePage') }}">
                                <img src="img/logo_img.png">
                            </a>
                        </div>
                        <div class="login-form">
                            {!! Form::open(['route' => 'employer-home.signInCheck']) !!}
                                <div class="form-group">
                                    {{ Form::label('account', __('employee_home.account'), ['class' => 'mb-1']) }}
                                    {{ Form::text('account', null, ['class' => 'au-input au-input--full']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('password', __('employee.password'), ['class' => 'mb-1']) }}
                                    {{ Form::password('password', ['class' => 'au-input au-input--full']) }}
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        {{ Form::checkbox('remember') }}@lang('employee_home.remember')
                                    </label>
                                    <label>
                                        <a >Forgotten Password?</a>
                                    </label>
                                </div>
                                @if(Session::has('notify_error'))
                                <div class="col-12">
                                    <div class="alert alert-danger">
                                        <span class="alert-danger">{{ Session::get('notify_error') }}</span>
                                    </div>
                                </div>
                                @endif
                                {{ Form::submit(__('employee_home.sign_in'), ['class' => 'au-btn au-btn--block au-btn--green m-b-20']) }}
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">@lang('employee_home.facebook')</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">@lang('employee_home.gmail')</button>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                            {{-- <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a >Sign Up Here</a>
                                </p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
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
    <script src="manage/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="manage/js/main.js"></script>

</body>

</html>
<!-- end document-->