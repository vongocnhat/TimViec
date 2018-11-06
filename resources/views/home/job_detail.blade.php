@extends('home.layouts.job_layout')
@section('title', __('job_detail.text1'))
@section('content')
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
                            @if (!empty($job->career_to_string))
                            <span>{{ $job->career_to_string }}</span>
                            @else
                            <span>@lang('job_detail.career_no')</span>
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
<!-- dialog -->
@include('home.includes.dialog')
<!-- /dialog -->
@endsection
@section('css')
<link rel="stylesheet" href="css/dialog.css">
@endsection
@section('script')
<script src="js/dialog.js"></script>
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
@endsection