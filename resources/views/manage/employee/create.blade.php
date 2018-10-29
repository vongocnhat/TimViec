@extends('manage.layout')
@section('title', __('employee.title'))
@section('content')
<div class="col-12">
    <div class="card">
        {!! Form::open(['route' => 'employee.store']) !!}
            <div class="card-header">@lang('common.create') @lang('employee.employee')</div>
            <div class="card-body">
                
                    <div class="row">    
                        <div class="col-6">
                            <div class="form-group">
                                {{ Form::label('first_name', __('employee.first_name'), ['class' => 'mb-1']) }}
                                {{ Form::text('first_name', null, ['class' => 'form-control']) }}
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                {{ Form::label('last_name', __('employee.last_name'), ['class' => 'mb-1']) }}
                                {{ Form::text('last_name', null, ['class' => 'form-control']) }}
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('email', __('employee.email'), ['class' => 'mb-1']) }}
                        {{ Form::email('email', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('phone', __('employee.phone'), ['class' => 'mb-1']) }}
                        {{ Form::tel('phone', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('password', __('employee.password'), ['class' => 'mb-1']) }}
                        {{ Form::password('password', ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('birthday', __('employee.birthday'), ['class' => 'mb-1']) }}
                        {{ Form::date('birthday', null, ['class' => 'form-control no-spin']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('province_id', __('employee.province'), ['class' => 'mb-1']) }}
                        {{ Form::text('province_id', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('district_id', __('employee.district'), ['class' => 'mb-1']) }}
                        {{ Form::text('district_id', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('ward_id', __('employee.ward'), ['class' => 'mb-1']) }}
                        {{ Form::text('ward_id', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('address', __('employee.address'), ['class' => 'mb-1']) }}
                        {{ Form::text('address', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('gender', __('employee.gender'), ['class' => 'mb-1']) }}
                        {{ Form::text('gender', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('married', __('employee.married'), ['class' => 'mb-1']) }}
                        {{ Form::text('married', null, ['class' => 'form-control']) }}
                    </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fas fa-save"></i> @lang('common.save')
                </button>
                <a href="{{ route('employee.index') }}" 
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