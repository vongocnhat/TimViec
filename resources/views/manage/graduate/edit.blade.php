@extends('manage.layout')
@section('title', __('graduate.title'))
@section('content')
<div class="col-12">
    <div class="card">
        {!! Form::model($graduate, ['route' => ['graduate.update', $graduate->id], 'method' => 'PUT']) !!}
            <div class="card-header">@lang('common.create') @lang('graduate.graduate')</div>
            <div class="card-body">
                
                <div class="form-group">
                    {{ Form::label('name', __('graduate.name'), ['class' => 'mb-1']) }}
                    {{ Form::text('name', null, ['class' => 'au-input au-input--full']) }}
                </div>
                
                
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fas fa-save"></i> @lang('common.update')
                </button>
                <a href="{{ route('graduate.index') }}" 
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