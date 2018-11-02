@extends('home.layouts.job_layout')
@section('title', __('job_detail.text1'))
@section('content')
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
                        <a class="items_name" href="{{ route('jobDetail.show', $job->id) }}">{{ $job->name }}</a>
                            <a class="items_cty" href="">{{ $job->employer->company_name }}</a>
                        </div>
                        <div class="item_value">
                            <p class="items_price">{{ number_format($job->wage_from, null, null, '.') }} – {{number_format($job->wage_to, null, null, '.') }} @lang('common.million')</p>
                            <p class="items_place">{{ $job->employer->province->name }}</p>
                            <p class="items_day">{{ $job->deadline }}</p>
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
@endsection