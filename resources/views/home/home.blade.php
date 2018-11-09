<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('home.text1')</title>
    {{-- <base href="file:///D:/NhatVN1/DoAn/TimViecCongTy/public/" /> --}}
    <base href="{{ asset('/') }}">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="css/common.css">
</head>

<body class="format_index1">
    <header class="tmp_header">
        <div class="container clearfix">
            <div class="box_logo">
                <a class="logo" href="{{ route('home') }}"></a>
            </div>
            <div class="box_login_re">
                <ul class="box_item">
                    @if(!Auth::guard('employee')->check())
                    <li class="item_login">
                        <a class="login" href="{{ route('employeeHome.signInView') }}">@lang('home.text2')</a>
                    </li>
                    <li class="item_login">
                        <a class="registration" href="{{ route('employeeHome.create') }}">@lang('home.text3')</a>
                    </li>
                    @else
                    <li class="list_user">
                        {{-- <div class="btn-group"> --}}
                            <a class="btn btn-primary dropdown-toggle rounded-0 list_user text-white c-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               {{ Auth::guard('employee')->user()->last_name }}
                            </a>
                            <div class="dropdown-menu rounded-0">
                                <a href="{{ route('employeeHome.edit') }}" class="dropdown-item">@lang('home.account_manage')</a>
                                <a href="{{ route('employeeHome.profile.index') }}" class="dropdown-item">@lang('home.profiles_manage')</a>
                                <a href="{{ route('employeeHome.signOut') }}" class="dropdown-item">@lang('home.sign_out')</a>
                            </div>
                        {{-- </div> --}}
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </header>
    <nav class="nav_menu">
        <div class="container">
            <div class="job_seekers">
                <div class="box_title">
                    <p>@lang('home.text4')</p>
                </div>
                <ul class="list_item">
                    <li class="item">
                        <a class="manage" href="{{ route('jobList.manager') }}">@lang('home.text5')</a>
                    </li>
                    <li class="item">
                        <a class="specialize" href="{{ route('jobList.specialize') }}">@lang('home.text6')</a>
                    </li>
                    <li class="item">
                        <a class="labor" href="{{ route('jobList.labor') }}">@lang('home.text7')</a>
                    </li>
                    <li class="item">
                        <a class="student" href="{{ route('jobList.student') }}">@lang('home.text8')</a>
                    </li>
                </ul>
            </div>
            <div class="job_employer">
                <div class="box_title">
                    <p>@lang('home.text9')</p>
                </div>
                <ul class="list_item">
                    <li class="item">
                        <a class="employer" href="#">@lang('home.text10')</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="box_intro">
        <p class="text1">@lang('home.text11')</p>
        <p class="text2">@lang('home.text12', ['para1' => $jobsReady, 'para2' => $profilesReady])</p>
    </div>
    <div id="tmp_content">
        <div class="container">
            <div class="salient_features wow fadeInDown">
                <h1>@lang('home.text13')</h1>
            </div>
            <div class="box_cnt col maneger wow slideInLeft">
                <h2>@lang('home.text14')</h2>
                <ul class="list_item">
                    <li class="item">
                        <span>@lang('home.text15')</span>
                    </li>
                    <li class="item">
                        <span>@lang('home.text16')</span>
                    </li>
                    <li class="item">
                        <span>@lang('home.text17')</span>
                    </li>
                </ul>
                <div class="part_link">
                    <a class="box_link" href="{{ route('jobList.manager') }}">@lang('home.text18')</a>
                </div>
            </div>
            <div class="box_cnt col specialize wow slideInRight">
                <h2>@lang('home.text19')</h2>
                <ul class="list_item">
                    <li class="item">
                        <span>@lang('home.text20')</span>
                    </li>
                    <li class="item">
                        <span>@lang('home.text21')</span>
                    </li>
                    <li class="item">
                        <span>@lang('home.text22')</span>
                    </li>
                </ul>
                <div class="part_link">
                    <a class="box_link" href="{{ route('jobList.specialize') }}">@lang('home.text18')</a>
                </div>
            </div>
            <div class="box_cnt col labor wow slideInLeft">
                <h2>@lang('home.text24')</h2>
                <ul class="list_item">
                    <li class="item">
                        <span>@lang('home.text25')</span>
                    </li>
                    <li class="item">
                        <span>@lang('home.text26')</span>
                    </li>
                    <li class="item">
                        <span>@lang('home.text27')</span>
                    </li>
                </ul>
                <div class="part_link">
                    <a class="box_link" href="{{ route('jobList.labor') }}">@lang('home.text18')</a>
                </div>
            </div>
            <div class="box_cnt col student wow slideInRight">
                <h2>@lang('home.text29')</h2>
                <ul class="list_item">
                    <li class="item">
                        <span>@lang('home.text30')</span>
                    </li>
                    <li class="item">
                        <span>@lang('home.text31')</span>
                    </li>
                    <li class="item">
                        <span>@lang('home.text32')</span>
                    </li>
                </ul>
                <div class="part_link">
                    <a class="box_link" href="{{ route('jobList.student') }}">@lang('home.text18')</a>
                </div>
            </div>
            <div class="box_cnt col employer wow slideInLeft m-b-40">
                <h2>@lang('home.text34')</h2>
                <ul class="list_item">
                    <li class="item">
                        <span>@lang('home.text35', ['para1' => $profilesReady, 'para2' => $profilesReady])</span>
                    </li>
                </ul>
                <div class="part_link">
                    <a class="box_link" href="">@lang('home.text36')</a>
                </div>
            </div>
        </div>
    </div>
    <div class="tmp_advisory ">
        <div class="container">
            <div class="advisory_inner wow bounceInUp box_cnt">
                <div class="advisory_title">
                    <p>@lang('home.text37')</p>
                </div>
                <ul class="advisory_cnt">
                    <li>
                        <a class="item_mane" href="#">@lang('home.text38')</a>
                    </li>
                    <li>
                        <a class="item_seeker" href="#">@lang('home.text39')</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="hot_line box_cnt">
            <div class="hot_line_ttl">
                <h4>@lang('home.text40')</h4>
            </div>
            <div class="hot_line_cnt">
                <h5>@lang('home.text41')</h5>
                <p class="northern">@lang('home.text42', ['para1' => '
                    <span>(024) 7309 2424</span>'])</p>
                <p class="southern">@lang('home.text43', ['para1' => '
                    <span>(028) 7309 2424</span>'])</p>
            </div>
        </div>
    </div>
    <footer id="tmp_footer">
        <div class="container">
            <div class="footer_title">
                <a href="">
                    <p>@lang('home.text44')</p>
                </a>
            </div>
            <div class="footer_cnt">
                <p>@lang('home.text45')</p>
                <span>@lang('home.text46', ['para1' => '17343/SLĐTBXH do Sở Lao Động Thương Binh & Xã Hội TP.DN cấp'])</span>
                <ul>
                    <li>
                        <p>@lang('home.text47', ['para1' => '
                            <span>33 Xô viết nghệ tỉnh- Quận Hải Châu- TP Đà Nẵng</span>'])</p>
                        <p>@lang('home.text48', ['para1' => '
                            <span>0967874384</span>'])</p>
                        <p>@lang('home.text49', ['para1' => '
                            <span>Lennuihaiche@gmail.com</span>'])</p>
                    </li>
                    <li>
                        <p>@lang('home.text50', ['para1' => '
                            <span>33 Xô viết nghệ tỉnh- Quận Hải Châu- TP Đà Nẵng</span>'])</p>
                        <p>@lang('home.text51', ['para1' => '
                            <span>0967874384</span>'])</p>
                        <p>@lang('home.text52', ['para1' => '
                            <span>Lennuihaiche@gmail.com</span>'])</p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="pagetop">
        <a class="page_top" href="#"></a>
    </div>
    <script type="text/javascript " src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="bootstrap4/js/bootstrap.bundle.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>
