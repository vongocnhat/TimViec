@extends('manage.layout')
@section('title', __('employer.title'))
@section('content')
<div class="col-12">
    <div class="card">
        @foreach($employer->toArray() as $key => $value)
        @if($key !== 'remember_token')
        <div class="form-group row m-0">
            <label class="col-sm-3 col-form-label">@lang('employer.' . $key): </label>
            <div class="col-sm-9">
        @switch($key)
            @case('province_id')
                <label>{{ $employer->province->name }}</label>
                @break;
            @case('district_id')
                <label>{{ $employer->district->name }}</label>
                @break;
            @case('ward_id')
                <label>{{ $employer->ward->name }}</label>
                @break;
            @default
                <label>{{ $value }}</label>
        @endswitch
        </div>
            </div>
            <hr class="m-0">
        @endif
        @endforeach
        <a href="{{route('employer.index')}}" class="btn btn-danger pull-right" >Quay lại</a>
    </div>
</div>
@endsection
@section('css')
    @include('manage.includes.datepicker_css')
@stop
@section('script')
    @include('manage.includes.datepicker_js')
@stop