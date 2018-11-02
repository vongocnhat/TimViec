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
    <title>Register</title>
    {{-- <base href="file:///D:/NhatVN1/DoAn/TimViecCongTy/public/" /> --}}
    <base href="{{ asset('/') }}" />
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
    <div>
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="manage/images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            {!! Form::open(['route' => 'employeeHome.store', 'method' => 'POST']) !!}
                                <div class="row">    
                                    <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('first_name', __('employee.first_name'), ['class' => 'mb-1']) }}
                                            {{ Form::text('first_name', null, ['class' => 'au-input au-input--full']) }}
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            {{ Form::label('last_name', __('employee.last_name'), ['class' => 'mb-1']) }}
                                            {{ Form::text('last_name', null, ['class' => 'au-input au-input--full']) }}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    {{ Form::label('email', __('employee.email'), ['class' => 'mb-1']) }}
                                    {{ Form::email('email', null, ['class' => 'au-input au-input--full']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('phone', __('employee.phone'), ['class' => 'mb-1']) }}
                                    {{ Form::tel('phone', null, ['class' => 'au-input au-input--full']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('password', __('employee.password'), ['class' => 'mb-1']) }}
                                    {{ Form::password('password', ['class' => 'au-input au-input--full']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('birthday', __('employee.birthday'), ['class' => 'mb-1']) }}
                                    {{ Form::date('birthday', null, ['class' => 'au-input au-input--full no-spin']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('province_id', __('employee.province'), ['class' => 'mb-1']) }}
                                    {{ Form::select('province_id', $provinces, null, ['class' => 'au-input au-input--full',
                                                    'placeholder' => __('employee.province_select')]) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('district_id', __('employee.district'), ['class' => 'mb-1']) }}
                                    {{ Form::select('district_id', $districts, null, ['class' => 'au-input au-input--full',
                                                    'placeholder' => __('employee.district_select')]) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('ward_id', __('employee.ward'), ['class' => 'mb-1']) }}
                                    {{ Form::select('ward_id', $wards, null, ['class' => 'au-input au-input--full',
                                                    'placeholder' => __('employee.ward_select')]) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('address', __('employee.address'), ['class' => 'mb-1']) }}
                                    {{ Form::text('address', null, ['class' => 'au-input au-input--full']) }}
                                </div>
                                <div class="form-check-inline form-check d-block">
                                    {{ Form::label('gender', __('employee.gender'), ['class' => 'mb-1']) }}:
                                    <label class="form-check-label mr-4">
                                        {{ Form::radio('gender', __('employee.male'), null, ['class' => 'form-check-input', 'id' => 'gender_male']) }}
                                        @lang('employee.male')
                                    </label>
                                    <label class="form-check-label">
                                        {{ Form::radio('gender', __('employee.female'), null, ['class' => 'form-check-input', 'id' => 'gender_female']) }}
                                        @lang('employee.female')
                                    </label>
                                </div>
                                <div class="form-check-inline form-check d-block">
                                    {{ Form::label('married', __('employee.married'), ['class' => 'mb-1']) }}:
                                    <label class="form-check-label mr-4">
                                        {{ Form::radio('married', 0, null, ['class' => 'form-check-input', 'id' => 'married_false']) }}
                                        @lang('employee.married_false')
                                    </label>
                                    <label class="form-check-label">
                                        {{ Form::radio('married', 1, null, ['class' => 'form-check-input', 'id' => 'married_true']) }}
                                        @lang('employee.married_true')
                                    </label>
                                </div>
                                {{ Form::submit(__('employee_home.sign_up'), ['class' => 'au-btn au-btn--block au-btn--green m-b-20']) }}
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">@lang('employee_home.facebook')</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">@lang('employee_home.gmail')</button>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="#">Sign In</a>
                                </p>
                            </div>
                        </div>
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