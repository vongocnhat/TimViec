<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('job_list.text1')</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
</head>

<body class="format_index1">
    <!-- header include -->
    <header class="tmp_header index1">
        <div class="container clearfix">
            <div class="box_logo">
                <a class="logo" href="#"></a>
            </div>
            <ul class="box_menu">
                <li class="menu_list">
                    <a class="list_manager active" href="{{ route('jobList.manager') }}" title="@lang('job_list.text2')">@lang('job_list.text3')</a>
                </li>
                <li class="menu_list">
                    <a class="list_specialize" href="{{ route('jobList.specialize') }}" title="@lang('job_list.text4')">@lang('job_list.text5')</a>
                </li>
                <li class="menu_list">
                    <a class="list_labor" href="{{ route('jobList.labor') }}" title="@lang('job_list.text6')">@lang('job_list.text7')</a>
                </li>
                <li class="menu_list">
                    <a class="list_student" href="{{ route('jobList.student') }}" title="@lang('job_list.text8')">@lang('job_list.text9')</a>
                </li>
                <li class="menu_list">
                    <a class="list_employer" href="#index1" title="@lang('job_list.text10')">@lang('job_list.text11')</a>
                </li>
                <li class="menu_list">
                    <a class="list_home" href="#index1" title="@lang('job_list.text12')"></a>
                </li>
                <li class="menu_list">
                    <a class="list_save" href="#index1" title="@lang('job_list.text13')"></a>
                </li>
                <li class="menu_list">
                    <a class="list_seach" href="#index1" title="@lang('job_list.text14')"></a>
                </li>
                <li class="menu_list">
                    <a class="list_notification" href="#index1" title="@lang('job_list.text15')"></a>
                </li>
                <li class="menu_list">
                    <a class="list_user" href="#index1" title="@lang('job_list.text16')"> Nguyễn Hoài Sơn</a>
                </li>
            </ul>
            <ul>

            </ul>
        </div>
    </header>
    <div class="box_pakuzu">
        <div class="container">
            <a class="paku_maner" href="">@lang('job_list.text17')</a>
            <span>@lang('job_list.text18')</span>
        </div>
    </div>
    <div class="seation_search container">
        {!! Form::open(['route' => 'jobList.searchAjax', 'method' => 'post', 'class' => 'form_seach']) !!}
            <ul class="box_form">
                <li class="list_occupation">
                    {{ Form::select('carrer_id', $careers, null, ['class' => 'select_input', 'placeholder' => __('job_list.text19')]) }}
                </li>
                <li class="list_salary">
                    {{ Form::select('salary', $salaries, null, ['class' => 'select_input', 'placeholder' => __('job_list.text20')]) }}
                </li>
                <li class="list_exper">
                    {{ Form::select('experience', $experiences, null, ['class' => 'select_input', 'placeholder' => __('job_list.text21')]) }}
                </li>
                <li class="list_province">
                    {{ Form::select('province_id', $provinces, null, ['class' => 'select_input', 'placeholder' => __('job_list.text22')]) }}
                </li>
            </ul>
            {{ Form::text('inp_search', null, ['class' => 'inp_search', 'placeholder' => __('job_list.text23')]) }}
            {{ Form::submit(__('job_list.text24'), ['class' => 'btn_seach']) }}
        {!! Form::close() !!}
    </div>
    <!-- /header include -->
    <div class="content">   
        <div class="container">
            <div class="section_cnt">
                <div class="title">
                    <h1 class="title_manna">@lang('job_list.text25')</h1>
                    <h2 class="title_h2">@lang('job_list.text26')</h2>
                </div>
                <div class="box_cnt">
                    <div class="cnt_title_man">
                        <p>@lang('job_list.text27')</p>
                        <a class="latest btn btn-success rounded-0 text-white" href="#">@lang('job_list.text28')</a>
                        <a class="deadline btn btn-danger rounded-0 text-white" href="#">@lang('job_list.text29')</a>
                    </div>
                    <ul class="box_list_items">
                        @foreach($jobs as $job)
                        <li class="list_items">
                            <div class="favorite">
                                <a class="item_favorite" href="#"></a>
                            </div>
                            <div class="item_ttl_man">
                            <a class="items_name" href="{{ route('jobDetail.index', $job->employer_id) }}">{{ $job->name }}</a>
                                <a class="items_cty" href="">{{ $job->employer->company_name }}</a>
                            </div>
                            <div class="item_value">
                                <p class="items_price">{{ number_format($job->wage_from, null, null, '.') }} – {{number_format($job->wage_to, null, null, '.') }} @lang('common.million')</p>
                                <p class="items_place">{{ $job->employer->province->name }}</p>
                                <p class="items_day">{{ $job->deadline->format('d/m/Y') }}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="section_interesting">
                <div class="title">
                    <h1 class="title_manna">@lang('job_list.text32')</h1>
                    <h2 class="title_h2">@lang('job_list.text33')</h2>
                </div>
                <div class="box_cnt">
                    <ul class="box_list_items">
                        <li class="list_items">
                            <div class="item_ttl_man">
                                <a class="items_name" href="">Đối Tác Quản Lý Kinh Doanh Độc Lập Công Ty Hanwha Life Việt Nam</a>
                                <a class="items_cty" href="">Công Ty Cổ Phần Gió Nhẹ Miền Nam</a>
                            </div>
                        </li>
                        <li class="list_items">
                            <div class="item_ttl_man">
                                <a class="items_name" href="">Sale Kiêm Marketing Leader</a>
                                <a class="items_cty" href="">Chi Nhánh Thành Phố Hồ Chí Minh - Công Ty TNHH Dios Investment Vina</a>
                            </div>
                        </li>
                        <li class="list_items">
                            <div class="item_ttl_man">
                                <a class="items_name" href="">Đối Tác Quản Lý Kinh Doanh Độc Lập Công Ty Hanwha Life Việt Nam</a>
                                <a class="items_cty" href="">Công Ty Cổ Phần Gió Nhẹ Miền Nam</a>
                            </div>
                        </li>
                        <li class="list_items">
                            <div class="item_ttl_man">
                                <a class="items_name" href="">Sale Kiêm Marketing Leader</a>
                                <a class="items_cty" href="">Chi Nhánh Thành Phố Hồ Chí Minh - Công Ty TNHH Dios Investment Vina</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--
            <div class="follow_industry">
                <div class="title">
                    <h2 class="title_h2">@lang('job_list.text34')</h2>
                </div>
                <div class="box_cnt">
                    <ul class="box_list_items">
                        <li class="list_items">
                            <div class="item_ttl_man">
                                <a class="items_name" href="">Quản trị kinh doanh</a>
                            </div>
                        </li>
                        <li class="list_items">
                            <div class="item_ttl_man">
                                <a class="items_name" href="">Khách sạn-Nhà hàng</a>
                            </div>
                        </li>
                        <li class="list_items">
                            <div class="item_ttl_man">
                                <a class="items_name" href="">Marketing-PR</a>
                            </div>
                        </li>
                        <li class="list_items">
                            <div class="item_ttl_man">
                                <a class="items_name" href="">Nhân sự</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            -->
        </div>
    </div>
    <!-- include footer -->
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
    <!-- /include footer -->
    <script type="text/javascript " src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="bootstrap4/js/bootstrap.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>