@extends('home.layouts.job_layout')
@section('content')
<div class="container">
    <div class="box_cnt">
        {!! Form::model($profile, ['route' => ['employeeHome.update', $profile->id], 'method' => 'PUT']) !!}
            <div class="card-header">@lang('common.create') @lang('profile_home.profile')</div>
            <div class="card-body max-width-500">
                <div class="form-group">
                    {{ Form::label('name', __('profile_home.name'), ['class' => 'mb-1']) }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('career_id', __('profile_home.career_id'), ['class' => '']) }}
                    {{ Form::select('career_id', $careers, null, ['class' => 'form-control', 'placeholder' => __('profile_home.career_id_select')]) }}
                </div>
                <div class="form-group">
                    {{ Form::label('degree_id', __('profile_home.degree_id'), ['class' => 'mb-1']) }}
                    {{ Form::select('degree_id', $degrees, null, ['class' => 'form-control', 'placeholder' => __('profile_home.degree_id_select')]) }}
                </div>
                <div class="form-group">
                    {{ Form::label('type_of_work_id', __('profile_home.type_of_work_id'), ['class' => 'mb-1']) }}
                    {{ Form::select('type_of_work_id', $typeOfWorks, null, ['class' => 'form-control', 'placeholder' => __('profile_home.type_of_work_id_select')]) }}
                </div>
                <div class="form-group">
                    {{ Form::label('desired_job', __('profile_home.desired_job'), ['class' => 'mb-1']) }}
                    {{ Form::text('desired_job', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('desire_minimum_wage', __('profile_home.desire_minimum_wage'), ['class' => 'mb-1']) }}
                    {{ Form::text('desire_minimum_wage', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('career_goals', __('profile_home.career_goals'), ['class' => 'mb-1']) }}
                    {{ Form::text('career_goals', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('school', __('profile_home.school'), ['class' => 'mb-1']) }}
                    {{ Form::text('school', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('type_of_school', __('profile_home.type_of_school'), ['class' => 'mb-1']) }}
                    {{ Form::text('type_of_school', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('start_at', __('profile_home.start_at'), ['class' => 'mb-1']) }}
                    {{ Form::text('start_at', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('ended_at', __('profile_home.ended_at'), ['class' => 'mb-1']) }}
                    {{ Form::text('ended_at', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('major', __('profile_home.major'), ['class' => 'mb-1']) }}
                    {{ Form::text('major', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('graduation_type', __('profile_home.graduation_type'), ['class' => 'mb-1']) }}
                    {{ Form::text('graduation_type', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('word', __('profile_home.word'), ['class' => 'mb-1']) }}
                    {{ Form::text('word', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('excel', __('profile_home.excel'), ['class' => 'mb-1']) }}
                    {{ Form::text('excel', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('power_point', __('profile_home.power_point'), ['class' => 'mb-1']) }}
                    {{ Form::text('power_point', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('profile_img', __('profile_home.profile_img'), ['class' => 'mb-1']) }}
                    {{ Form::text('profile_img', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('public', __('profile_home.public'), ['class' => 'mb-1']) }}
                    {{ Form::text('public', null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('receive_email', __('profile_home.receive_email'), ['class' => 'mb-1']) }}
                    {{ Form::text('receive_email', null, ['class' => 'form-control']) }}
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