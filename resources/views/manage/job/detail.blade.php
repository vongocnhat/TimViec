@extends('manage.layout')
@section('title', __('job.title'))
@section('content')
<div class="col-12">
    <div class="card">
        @foreach($job->toArray() as $key => $value)
        <div class="form-group row m-0">
            <label class="col-sm-3 col-form-label">@lang('job.' . $key): </label>
            <div class="col-sm-9">
        @switch($key)
            @case('employer_id')
                <label>{{ $job->employer->name }}</label>
                @break;
            @case('office_id')
                <label>{{ $job->office->name }}</label>
                @break;
            @case('type_of_work_id')
                <label>{{ $job->typeOfWork->name }}</label>
                @break;
            @case('degree_id')
                <label>{{ $job->degree->name }}</label>
                @break;
            @case('experience_id')
                <label>{{ $job->experience->name }}</label>
                @break;
            @case('salary_id')
                <label>{{ $job->salary->name }}</label>
                @break;
            @case('status')
                <label>{{ $job->statusA }}</label>
                @break;
            @case('apply_online')
                <label>{{ $job->applyA }}</label>
                @break;
            @default
                <label>{{ $value }}</label>
        @endswitch
        </div>
            </div>
            <hr class="m-0">
        @endforeach
        <a href="{{route('job.index')}}" class="btn btn-danger pull-right" >Quay lại</a>
    </div>
</div>
@endsection
@section('css')
    @include('manage.includes.datepicker_css')
@stop
@section('script')
    @include('manage.includes.datepicker_js')
@stop