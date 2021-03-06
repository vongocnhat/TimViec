@extends('manage.layout')
@section('title', __('experience.title'))
@section('content')
<div class="col-12">
    <div class="card">
        {!! Form::open(['route' => 'experience.store','method' => 'POST']) !!}
            <div class="card-header">@lang('common.create') @lang('experience.experience')</div>
            <div class="card-body">
                
                <div class="form-group">
                    {{ Form::label('name', __('experience.name'), ['class' => 'mb-1']) }}
                    {{ Form::text('name', null, ['class' => 'au-input au-input--full']) }}
                </div>
                
                
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fas fa-save"></i> @lang('common.save')
                </button>
                <a href="{{ route('experience.index') }}" 
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