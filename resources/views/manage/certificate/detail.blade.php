@extends('manage.layout')
@section('title', __('certificate.title'))
@section('content')
<div class="col-12">
    <div class="card">
        @foreach($certificate->toArray() as $key => $value)
        <div class="form-group row m-0">
            <label class="col-sm-3 col-form-label">@lang('certificate.' . $key): </label>
            <div class="col-sm-9">
        @switch($key)
            @case('profile_id')
                <label>{{ $certificate->profile->name }}</label>
                @break;
            @case('graduate_id')
                <label>{{ $certificate->graduate->name }}</label>
                @break;
            @default
                <label>{{ $value }}</label>
        @endswitch
        </div>
            </div>
            <hr class="m-0">
        @endforeach
        <a href="{{route('certificate.index')}}" class="btn btn-danger pull-right" >Quay lại</a>
    </div>
</div>
@endsection
@section('css')
    @include('manage.includes.datepicker_css')
@stop
@section('script')
    @include('manage.includes.datepicker_js')
@stop