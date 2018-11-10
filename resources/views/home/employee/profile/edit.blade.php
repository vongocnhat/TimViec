@extends('home.layouts.job_layout')
@section('content')
<div class="container">
    <div class="box_cnt">
        {!! Form::model($profile, ['route' => ['employeeHome.update', $employee->id], 'method' => 'PUT']) !!}
            <div class="card-header">@lang('common.update') @lang('employee_home.employee')</div>
            <div class="card-body max-width-500">
                <div class="form-group">
                    {{ Form::label('address', __('employee.address'), ['class' => 'mb-1']) }}
                    {{ Form::text('address', null, ['class' => 'form-control']) }}
                </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fas fa-save"></i> @lang('common.update')
                </button>
                <a href="javascript: history.back()" 
                    class="btn btn-danger btn-sm btnCancel" 
                    data-message-confirm="@lang('common.cancel_message')">
                    <i class="fa fa-ban"></i> @lang('common.cancel')
                </a>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection