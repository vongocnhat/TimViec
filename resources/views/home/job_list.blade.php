@extends('home.layouts.job_layout')
@section('title', __('job_detail.text1'))
@section('content')
<style>
    .box_form li {
        width: 277.5px;
    }
</style>
<div class="seation_search container">
    {!! Form::open(['route' => ['jobList.searchAjax', $jobType], 'method' => 'post', 'class' => 'form_seach', 'id' => 'form_search']) !!}
        <ul class="box_form">
            <li class="list_occupation">
                {{ Form::select('career_id', $careers, null, ['class' => 'select_input', 'placeholder' => __('job_list.text19')]) }}
            </li>
            <li class="list_salary">
                {{ Form::select('salary_id', $salaries, null, ['class' => 'select_input', 'placeholder' => __('job_list.text20')]) }}
            </li>
            <li class="list_exper">
                {{ Form::select('experience_id', $experiences, null, ['class' => 'select_input', 'placeholder' => __('job_list.text21')]) }}
            </li>
            <li class="list_province">
                {{ Form::select('province_id', $provinces, null, ['class' => 'select_input', 'placeholder' => __('job_list.text22')]) }}
            </li>
        </ul>
        {{ Form::text('inp_search', null, ['class' => 'inp_search', 'placeholder' => __('job_list.text23')]) }}
        {{ Form::submit(__('job_list.text24'), ['class' => 'btn_seach c-pointer' . $backgroundColor]) }}
    {!! Form::close() !!}
</div>
<div class="content">
    <div class="container">
        <div class="section_cnt">
            <div class="title">
                <h1 class="title_manna{{ $color }}">{{ $jobTitle }}</h1>
                <h2 class="title_h2{{ $color }}">@lang('job_list.text26')</h2>
            </div>
            <div class="box_cnt">
                <div class="cnt_title_man">
                    <p>@lang('job_list.text27')</p>
                    <a class="latest btn btn-success rounded-0 text-white" >@lang('job_list.text28')</a>
                    <a class="deadline btn btn-danger rounded-0 text-white" >@lang('job_list.text29')</a>
                </div>
                <ul class="box_list_items" id="job_by_id_ajax_box">
                    @include('home.ajaxs.jobs_by_id')
                </ul>
            </div>
            <div class="mt-3 display-table-m-auto">
                {{ $jobs->links() }}
            </div>
        </div>
        <div class="section_interesting">
            <div class="title">
                <h1 class="title_manna{{ $color }}">@lang('job_list.text32')</h1>
                <h2 class="title_h2">@lang('job_list.text33')</h2>
            </div>
            <div class="box_cnt">
                <ul class="box_list_items">
                    <li class="list_items">
                        <div class="item_ttl_man">
                            <a class="items_name" >Đối Tác Quản Lý Kinh Doanh Độc Lập Công Ty Hanwha Life Việt Nam</a>
                            <a class="items_cty" >Công Ty Cổ Phần Gió Nhẹ Miền Nam</a>
                        </div>
                    </li>
                    <li class="list_items">
                        <div class="item_ttl_man">
                            <a class="items_name" >Sale Kiêm Marketing Leader</a>
                            <a class="items_cty" >Chi Nhánh Thành Phố Hồ Chí Minh - Công Ty TNHH Dios Investment Vina</a>
                        </div>
                    </li>
                    <li class="list_items">
                        <div class="item_ttl_man">
                            <a class="items_name" >Đối Tác Quản Lý Kinh Doanh Độc Lập Công Ty Hanwha Life Việt Nam</a>
                            <a class="items_cty" >Công Ty Cổ Phần Gió Nhẹ Miền Nam</a>
                        </div>
                    </li>
                    <li class="list_items">
                        <div class="item_ttl_man">
                            <a class="items_name" >Sale Kiêm Marketing Leader</a>
                            <a class="items_cty" >Chi Nhánh Thành Phố Hồ Chí Minh - Công Ty TNHH Dios Investment Vina</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        {{-- <div class="follow_industry">
            <div class="title">
                <h2 class="title_h2">@lang('job_list.text34')</h2>
            </div>
            <div class="box_cnt">
                <ul class="box_list_items">
                    <li class="list_items">
                        <div class="item_ttl_man">
                            <a class="items_name" >Quản trị kinh doanh</a>
                        </div>
                    </li>
                    <li class="list_items">
                        <div class="item_ttl_man">
                            <a class="items_name" >Khách sạn-Nhà hàng</a>
                        </div>
                    </li>
                    <li class="list_items">
                        <div class="item_ttl_man">
                            <a class="items_name" >Marketing-PR</a>
                        </div>
                    </li>
                    <li class="list_items">
                        <div class="item_ttl_man">
                            <a class="items_name" >Nhân sự</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div> --}}
    </div>
</div>
@endsection
@section('script')
<script>
    $('#form_search').submit(function(e) {
        e.preventDefault();
        var url = $(this).prop('action');
        var data = $(this).serialize();
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function(data) {
                $('#job_by_id_ajax_box').html(data);
            }
        });
    });
</script>
@endsection