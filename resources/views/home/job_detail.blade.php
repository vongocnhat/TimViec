<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('job_detail.text1')</title>
    {{-- <base href="file:///D:/NhatVN1/DoAn/TimViecCongTy/public/" /> --}}
    <base href="{{ asset('/') }}">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="css/dialog.css">
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
            <div class="section_product_details">
                <div class="container">
                    <div class="title_des clearfix">
                        <h2>{{ $job->name }}</h2>
                        <a class="name_cty" href="">
                            <p>{{ $job->employer->company_name }}</p>
                        </a>
                        <div class="title_left">
                            <a class="save_job" href="#">@lang('job_detail.text2')</a>
                            <a class="share" href="">@lang('job_detail.text3')</a>
                            <p class="deadline_submission">@lang('job_detail.text4')
                                <span>{{ $job->deadline }}</span>
                            </p>
                            <p class="view">@lang('job_detail.text5')
                                <span>{{ $job->viewed }} |</span>
                            </p>
                            <p class="day">@lang('job_detail.text6')
                                <span>{{ $job->updated_at }}</span>
                            </p>
                        </div>
                        <div class="btn_profile">
                            @if ($job->apply_online === 1)
                            <a href="{{ route('jobDetail.profileSelect') }}" data-job-id="{{ $job->id }}" class="btn_profile_click">@lang('job_detail.btn_online')</a>
                            @else
                            <a href="" class="btn_profile_disable">@lang('job_detail.btn_offline')</a>
                            @endif
                        </div>
                    </div>
                    <ul class="box_item_des">
                        <li class="list_item">
                            <p class="wage">@lang('job_detail.text8')
                                <span>
                                    {{ $job->wage }} @lang('common.million')
                                </span>
                            </p>
                            <p class="experi">@lang('job_detail.text10')
                                <span>{{ $job->experience }} @lang('common.year')</span>
                            </p>
                            <p class="qualification ">@lang('job_detail.text12')
                                <span>{{ $job->degree->name }}</span>
                            </p>
                            <p class="recruitment">@lang('job_detail.text13')
                                <span>{{ $job->quantity }}</span>
                            </p>
                            <p class="place">@lang('job_detail.text14')
                                <span>{{ $job->employer->province->name }}</span>
                            </p>
                            <p class="position">@lang('job_detail.text15')
                                <span>{{ $job->office->name }}</span>
                            </p>
                            <p class="form">@lang('job_detail.text16')
                                <span>{{ $job->typeOfWork->name }}</span>
                            </p>
                            <p class="time">@lang('job_detail.text17')
                                @if ($job->probationary_period)
                                <span>{{ $job->probationary_period }}</span>
                                @else
                                <span>@lang('job_detail.probationary_period_no')</span>
                                @endif
                            </p>
                            <p class="branch">@lang('job_detail.text18')
                                @if ($job->career)
                                <span>{{ $job->career->name }}</span>
                                @else
                                <span>@lang('job_detail.carrer_no')</span>
                                @endif
                            </p>
                            <p class="gender">@lang('job_detail.text19')
                                @if ($job->gender)
                                <span>{{ $job->gender }}</span>
                                @else
                                <span>@lang('job_detail.gender_no')</span>
                                @endif
                            </p>
                            <p class="age">@lang('job_detail.text20')
                                <span>
                                    {{ $job->age }}
                                    @lang('job_detail.age')
                                </span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="section_product_des">
                <h6>@lang('job_detail.text21')
                    <span>{{ $job->name }}</span>
                </h6>
                <ul class="box_list_des">
                    <li class="list_des">
                        <div class="des_title">
                            <p>@lang('job_detail.text22')</p>
                        </div>
                        <div class="text_des">
                            {!! $job->job_description !!}
                        </div>
                    </li>
                    <li class="list_des">
                        <div class="des_title">
                            <p>@lang('job_detail.text23')</p>
                        </div>
                        <div class="text_des">
                            {!! $job->benefit !!}
                        </div>
                    </li>
                    <li class="list_des">
                        <div class="des_title">
                            <p>@lang('job_detail.text24')</p>
                        </div>
                        <div class="text_des">
                            {!! $job->other_requirements !!}
                        </div>
                    </li>
                    <li class="list_des">
                        <div class="des_title">
                            <p>@lang('job_detail.text25')</p>
                        </div>
                        <div class="text_des">
                            <p>
                                <span>
                                    @if ($job->apply_online === 1)
                                        @lang('job_detail.apply_online')
                                    @else
                                        @lang('job_detail.apply_offline')
                                    @endif
                                </span>
                            </p>
                        </div>
                    </li>
                    <li class="list_des">
                        <div class="des_title">
                            <p></p>
                        </div>
                        <div class="text_des">
                            <p class="deadline_submission">@lang('job_detail.text27')
                                <span>{{ $job->deadline }}</span>
                            </p>
                            <div class="btn_profile">
                                @if ($job->apply_online === 1)
                                    <a href="{{ route('jobDetail.profileSelect') }}" data-job-id="{{ $job->id }}" class="btn_profile_click">@lang('job_detail.btn_online')</a>
                                @else
                                    <a href="" class="btn_profile_disable">@lang('job_detail.btn_offline')</a>
                                @endif
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="section_product_des">
                <h6>@lang('job_detail.text29')</h6>
                <ul class="box_list_des">
                    <li class="list_des">
                        <div class="des_title">
                            <p>@lang('job_detail.text30')</p>
                        </div>
                        <div class="text_des">
                            <p>{{ $job->contact_person }}</p>
                        </div>
                    </li>
                    <li class="list_des">
                        <div class="des_title">
                            <p>@lang('job_detail.text31')</p>
                        </div>
                        <div class="text_des">
                            <p>{{ $job->email }}</p>
                        </div>
                    </li>
                    <li class="list_des">
                        <div class="des_title">
                            <p>@lang('job_detail.text32')</p>
                        </div>
                        <div class="text_des">
                            <p>{{ $job->phone }}</p>
                        </div>
                    </li>
                    <li class="list_des">
                        <div class="des_title">
                            <p>@lang('job_detail.text33')</p>
                        </div>
                        <div class="text_des">
                            <p>
                                {{ $job->address }}
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="section_interesting">
                <div class="title">
                    <h2 class="title_h2">@lang('job_detail.text34')</h2>
                </div>
                <div class="box_cnt">
                    <ul class="box_list_items">
                        <li class="list_items">
                            <div class="item_ttl_man">
                                <a class="items_name" href="">Đối Tác Quản Lý Kinh Doanh Độc Lập Công Ty Hanwha Life
                                    Việt Nam</a>
                                <a class="items_cty" href="">Công Ty Cổ Phần Gió Nhẹ Miền Nam</a>
                            </div>
                        </li>
                        <li class="list_items">
                            <div class="item_ttl_man">
                                <a class="items_name" href="">Sale Kiêm Marketing Leader</a>
                                <a class="items_cty" href="">Chi Nhánh Thành Phố Hồ Chí Minh - Công Ty TNHH Dios
                                    Investment Vina</a>
                            </div>
                        </li>
                        <li class="list_items">
                            <div class="item_ttl_man">
                                <a class="items_name" href="">Đối Tác Quản Lý Kinh Doanh Độc Lập Công Ty Hanwha Life
                                    Việt Nam</a>
                                <a class="items_cty" href="">Công Ty Cổ Phần Gió Nhẹ Miền Nam</a>
                            </div>
                        </li>
                        <li class="list_items">
                            <div class="item_ttl_man">
                                <a class="items_name" href="">Sale Kiêm Marketing Leader</a>
                                <a class="items_cty" href="">Chi Nhánh Thành Phố Hồ Chí Minh - Công Ty TNHH Dios
                                    Investment Vina</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
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
    <!-- dialog -->
    @include('home.includes.dialog')
    <!-- /dialog -->
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="bootstrap4/js/bootstrap.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script type="text/javascript" src="js/dialog.js"></script>
    <script>
        $('.btn_profile_click').click(function(e) {
            e.preventDefault();
            // ignore click body
            e.stopPropagation();
            var url = $(this).prop('href');
            var job_id = $(this).data('jobId');
            $.ajax({
                url: url,
                data: { job_id: job_id },
                success: function(data) {
                    $('#dialog_dark .box-ajax').html(data);
                    $('#dialog_dark').css('display', 'flex');
                }
            });
        });
    </script>
</body>

</html>