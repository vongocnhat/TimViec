@extends('manage.layout')
@section('title', __('degree.title'))
@section('content')
<div class="col-12">
    <div class="card">
        {!! Form::model($degree, ['route' => ['degree.update', $degree->id], 'method' => 'PUT']) !!}
            <div class="card-header">@lang('common.create') @lang('degree.degree')</div>
            <div class="card-body">
                
                <div class="form-group">
                    {{ Form::label('name', __('degree.name'), ['class' => 'mb-1']) }}
                    {{ Form::text('name', null, ['class' => 'au-input au-input--full']) }}
                </div>
                
                
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fas fa-save"></i> @lang('common.update')
                </button>
                <a href="{{ route('degree.index') }}" 
                    class="btn btn-danger btn-sm btnCancel" 
                    data-message-confirm="@lang('common.cancel_message')">
                    <i class="fa fa-ban"></i> @lang('common.cancel')
                </a>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
@section('css')
    @include('manage.includes.datepicker_css')
@stop
@section('script')
    @include('manage.includes.datepicker_js')
@stop