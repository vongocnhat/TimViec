@extends('manage.layout')
@section('title', __('profile.title'))
@section('content')
<div class="col-12">
    <div class="card">
        @foreach($profile->toArray() as $key => $value)
        <div class="form-group row m-0">
            <label class="col-sm-3 col-form-label">@lang('profile_home.' . $key): </label>
            <div class="col-sm-9">
        @switch($key)
            @case('employee_id')
                <label>{{ $profile->employee->name }}</label>
                @break;
            @case('career_id')
                <label>{{ $profile->career->name }}</label>
                @break;
            @case('degree_id')
                <label>{{ $profile->degree->name }}</label>
                @break;
            @case('type_of_work_id')
                <label>{{ $profile->typeOfWork->name }}</label>
                @break;
            @case('experience_id')
                <label>{{ $profile->experience->name }}</label>
                @break;
            @case('office_id')
                <label>{{ $profile->office->name }}</label>
                @break;
            @case('word')
                <label>{{ $profile->wordA }}</label>
                @break;
            @case('excel')
                <label>{{ $profile->excelA }}</label>
                @break;
            @case('power_point')
                <label>{{ $profile->powerpointA }}</label>
                @break;
            @case('public')
                <label>{{ $profile->publicA }}</label>
                @break;
            @case('receive_email')
                <label>{{ $profile->receiveemailA }}</label>
                @break;
            @default
                <label>{{ $value }}</label>
        @endswitch
        </div>
            </div>
            <hr class="m-0">
        @endforeach
        <a href="{{route('profile.index')}}" class="btn btn-danger pull-right" >Quay lại</a>
    </div>
</div>
@endsection
@section('css')
    @include('manage.includes.datepicker_css')
@stop
@section('script')
    @include('manage.includes.datepicker_js')
@stop