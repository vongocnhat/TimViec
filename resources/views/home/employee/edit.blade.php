@extends('home.layouts.job_layout')
@section('content')
<div class="container">
    <div class="box_cnt">
        {!! Form::model($employee, ['route' => ['employeeHome.update', $employee->id], 'method' => 'PUT']) !!}
            <div class="card-header">@lang('common.update') @lang('employee_home.employee')</div>
            <div class="card-body max-width-500">
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
                    {{ Form::select('province_id', $provinces, null, ['class' => 'form-control',
                                    'placeholder' => __('employee.province_select')]) }}
                </div>
                <div class="form-group">
                    {{ Form::label('district_id', __('employee.district'), ['class' => 'mb-1']) }}
                    {{ Form::select('district_id', $districts, null, ['class' => 'form-control',
                                    'placeholder' => __('employee.district_select')]) }}
                </div>
                <div class="form-group">
                    {{ Form::label('ward_id', __('employee.ward'), ['class' => 'mb-1']) }}
                    {{ Form::select('ward_id', $wards, null, ['class' => 'form-control',
                                    'placeholder' => __('employee.ward_select')]) }}
                </div>
                <div class="form-group">
                    {{ Form::label('address', __('employee.address'), ['class' => 'mb-1']) }}
                    {{ Form::text('address', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-check-inline form-check d-block">
                    {{ Form::label('gender', __('employee.gender'), ['class' => 'mb-1']) }}:
                    <label class="form-check-label mr-4">
                        {{ Form::radio('gender', __('employee.male'), null, ['class' => 'form-check-input', 'id' => 'gender_male']) }}
                        @lang('employee.male')
                    </label>
                    <label class="form-check-label">
                        {{ Form::radio('gender', __('employee.female'), null, ['class' => 'form-check-input', 'id' => 'gender_female']) }}
                        @lang('employee.female')
                    </label>
                </div>
                <div class="form-check-inline form-check d-block">
                    {{ Form::label('married', __('employee.married'), ['class' => 'mb-1']) }}:
                    <label class="form-check-label mr-4">
                        {{ Form::radio('married', 0, null, ['class' => 'form-check-input', 'id' => 'married_false']) }}
                        @lang('employee.married_false')
                    </label>
                    <label class="form-check-label">
                        {{ Form::radio('married', 1, null, ['class' => 'form-check-input', 'id' => 'married_true']) }}
                        @lang('employee.married_true')
                    </label>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fas fa-save"></i> @lang('common.update')
                </button>
                {{-- <a href="javascript: history.back()" 
                    class="btn btn-danger btn-sm btnCancel" 
                    data-message-confirm="@lang('common.cancel_message_edit')">
                    <i class="fa fa-ban"></i> @lang('common.cancel')
                </a> --}}
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