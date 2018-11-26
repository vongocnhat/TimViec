@extends('home.layouts.job_layout')
@section('content')
<div class="content">
    <div class="container">
        <div class="container-profile">
            {!! Form::model($job, ['route' => ['employer-home.job.update', $job->id], 'method' => 'PUT']) !!}
            <div class="section_submit_profile">
                <div class="title_info">
                    <h2>@lang('common.create') @lang('job.job') </h2>
                </div>
                <div class="form_profile">
                    <div class="form-group row">
                        {{ Form::label('office_id', __('job.office_id'), ['class'=>'label']) }}
                        {{ Form::select('office_id', $offices, null, ['class' => 'form-control col-sm-4',
                        'placeholder' => __('profile_home.office_id')]) }}
                    </div>
                    <div class="form-group row">
                        {{ Form::label('type_of_work_id', __('job.type_of_work_id'), ['class'=>'label']) }}
                        {{ Form::select('type_of_work_id', $type_of_works, null, ['class' => 'form-control col-sm-4',
                        'placeholder' => __('profile_home.office_id')]) }}
                    </div>
                    <div class="form-group row">
                        {{ Form::label('degree_id', __('job.degree_id'), ['class'=>'label']) }}
                        {{ Form::select('degree_id', $degrees, null, ['class' => 'form-control col-sm-4',
                        'placeholder' => __('profile_home.degree_id')]) }}
                    </div>
                    <div class="form-group row">
                        {{ Form::label('experience_id', __('job.experience_id'), ['class'=>'label']) }}
                        {{ Form::select('experience_id', $experiences, null, ['class' => 'form-control col-sm-4',
                        'placeholder' => __('profile_home.experience_id')]) }}
                    </div>
                    <div class="form-group row">
                        {{ Form::label('salary_id', __('job.salary_id'), ['class'=>'label']) }}
                        {{ Form::select('salary_id', $salaries, null, ['class' => 'form-control col-sm-4',
                        'placeholder' => __('job.salary_id')]) }}
                    </div>
                    <div class="form-group row">
                        {{ Form::label('name', __('job.name'), ['class'=>'label']) }}
                        {{ Form::text('name', null, ['class' => 'form-control col-sm-4']) }}
                    </div>
                    <div class="form-group row">
                        {{ Form::label('deadline', __('job.deadline'), ['class'=>'label']) }}
                        {{ Form::date('deadline', null, ['class' => 'form-control col-sm-4 no-spin']) }}
                    </div>
                    <div class="form-group row">
                        {{ Form::label('quantity', __('job.quantity'), ['class'=>'label']) }}
                        {{ Form::number('quantity', null, ['class' => 'form-control col-sm-4']) }}
                    </div>
                    <div class="form-group row">
                        {{ Form::label('probationary_period', __('job.probationary_period'), ['class'=>'label']) }}
                        {{ Form::text('probationary_period', null, ['class' => 'form-control col-sm-4']) }}
                    </div>
                    <div class="form-group row">
                        {{ Form::label('gender', __('job.gender'), ['class'=>'label']) }}
                        {{ Form::text('gender', null, ['class' => 'form-control col-sm-4']) }}
                    </div>
                    <div class="form-group row">
                        {{ Form::label('age_from', __('job.age_from'), ['class'=>'label']) }}
                        {{ Form::number('age_from', null, ['class' => 'form-control col-sm-4']) }}
                    </div>
                    <div class="form-group row">
                        {{ Form::label('age_to', __('job.age_to'), ['class'=>'label']) }}
                        {{ Form::number('age_to', null, ['class' => 'form-control col-sm-4']) }}
                    </div>
                    <div class="form-group row">
                        {{ Form::label('job_description', __('job.job_description'), ['class'=>'label']) }}
                        {{ Form::text('job_description', null, ['class' => 'form-control col-sm-4']) }}
                    </div>
                    <div class="form-group row">
                        {{ Form::label('benefit', __('job.benefit'), ['class'=>'label']) }}
                        {{ Form::text('benefit', null, ['class' => 'form-control col-sm-4']) }}
                    </div>
                    <div class="form-group row">
                        {{ Form::label('other_requirements', __('job.other_requirements'), ['class'=>'label']) }}
                        {{ Form::text('other_requirements', null, ['class' => 'form-control col-sm-4']) }}
                    </div>
                    <div class="form-group row">
                        {{ Form::label('contact_person', __('job.contact_person'), ['class'=>'label']) }}
                        {{ Form::text('contact_person', null, ['class' => 'form-control col-sm-4']) }}
                    </div>
                    <div class="form-group row">
                        {{ Form::label('email', __('job.email'), ['class'=>'label']) }}
                        {{ Form::text('email', null, ['class' => 'form-control col-sm-4']) }}
                    </div>
                    <div class="form-group row">
                        {{ Form::label('phone', __('job.phone'), ['class'=>'label']) }}
                        {{ Form::text('phone', null, ['class' => 'form-control col-sm-4']) }}
                    </div>
                </div>
            </div>
            <div class="text-right">
                <button class="btn btn-success" id="btnLanguageSave">@lang('common.save')</button>
                <button type="reset" class="btn btn-secondary btn-cancel-n">@lang('common.cancel')</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
@section('css')
    @include('manage.includes.datepicker_css')
@stop
@section('script')
    {{-- <script src="js/test.js"></script> --}}
    @include('manage.includes.datepicker_js')
@stop