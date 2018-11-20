@extends('home.layouts.job_layout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="salient_features">
                <h1>@lang('profile_home.text1')</h1>
            </div>
            <div class="container-profile">
                {!! Form::model($profile, ['route'=>['employeeHome.profile.update', $profile->id], 'method'=>'PUT', 'id'=>'formProfile', 'files' => true]) !!}
                    <div class="section_submit_profile">
                        <div class="title_info">
                            <h2>@lang('profile_home.text2') <span>@lang('profile_home.required_true')</span></h2>
                        </div>
                        <div class="form_profile">
                            <div class="form-group row">
                                <label for="name" class="label " >@lang('profile_home.name') <span>*</span></label>
                                {{ Form::text('name', null, ['class' => 'form-control col-sm-4']) }}
                            </div>
                            <div class="form-group row">
                                <label for="desired_job" class="label " >@lang('profile_home.desired_job') <span>*</span></label>
                                {{ Form::text('desired_job', null, ['class' => 'form-control col-sm-8', 'placeholder'=>__('profile_home.desired_job_placeholder')]) }}
                            </div>
                            <div class="form-group row">
                                <label for="office_id" class="label ">@lang('profile_home.office_id')<span> *</span></label>
                                {{ Form::select('office_id', $offices, null, ['class' => 'form-control col-sm-4', 'placeholder' => __('profile_home.office_id')]) }}
                            </div>
                            <div class="form-group row">
                                <label for="career_id" class="label ">@lang('profile_home.career_id')<span> *</span></label>
                                {{ Form::select('career_id', $careers, null, ['class' => 'form-control col-sm-4', 'placeholder' => __('profile_home.career_id')]) }}
                            </div>
                            <div class="form-group row">
                                <label for="degree_id" class="label ">@lang('profile_home.degree_id')<span> *</span></label>
                                {{ Form::select('degree_id', $degrees, null, ['class' => 'form-control col-sm-4', 'placeholder' => __('profile_home.degree_id')]) }}
                            </div>
                            <div class="form-group row">
                                <label for="provinces_id[]" class="label ">@lang('profile_home.provinces->name')<span> *</span></label>
                                {{ Form::select('provinces_id[]', $provinces, $profile->provinces, ['class' => 'form-control col-sm-4', 'multiple']) }}
                            </div>
                            <div class="form-group row">
                                <label for="experience_id" class="label ">@lang('profile_home.experience_id')<span> *</span></label>
                                {{ Form::select('experience_id', $experiences, null, ['class' => 'form-control col-sm-4', 'placeholder' => __('profile_home.experience_id')]) }}
                            </div>
                            <div class="form-group row">
                                <label for="type_of_work_id" class="label ">@lang('profile_home.type_of_work_id')<span> *</span></label>
                                {{ Form::select('type_of_work_id', $typeOfWorks, null, ['class' => 'form-control col-sm-4', 'placeholder' => __('profile_home.type_of_work_id')]) }}
                            </div>
                            <div class="form-group row">
                                <label for="desire_minimum_wage" class="label ">@lang('profile_home.desire_minimum_wage')<span> *</span></label>
                                {{ Form::number('desire_minimum_wage', null, ['class' => 'form-control col-sm-4 no-spin mr-2']) }}
                                {{ Form::select('currency', $currencies, null, ['class' => 'form-control col-sm-4']) }}
                            </div>
                            <div class="form-group row">
                                <label for="career_goals" class="label ">@lang('profile_home.career_goals')<span> *</span></label>
                                {{ Form::textarea('career_goals', null, ['class' => 'form-control col-sm-8', 'rows'=>3]) }}
                            </div>
                            <div class="form-group row">
                                <label for="profile_img" class="label ">@lang('profile_home.profile_img')<span> *</span></label>
                                {{ Form::file('profile_img', ['class' => 'form-control col-sm-4', 'accept'=>'image/*']) }}
                            </div>
                            <div class="form-group">
                                <label for="public" class="label ">@lang('profile_home.public')<span> *</span></label>
                                <label class="d-block mr-4">
                                    {{ Form::radio('public', 1, null, ['class' => 'w-auto', 'id' => 'public_true']) }}
                                    @lang('profile_home.public_true')
                                </label>
                                <label class="d-block">
                                    {{ Form::radio('public', 0, null, ['class' => 'w-auto', 'id' => 'public_false']) }}
                                    @lang('profile_home.public_false')
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="receive_email" class="label ">@lang('profile_home.receive_email')<span> *</span></label>
                                <label class="d-block mr-4">
                                    {{ Form::radio('receive_email', 1, null, ['class' => 'w-auto', 'id' => 'receive_email_true']) }}
                                    @lang('profile_home.receive_email_true')
                                </label>
                                <label class="d-block">
                                    {{ Form::radio('receive_email', 0, null, ['class' => 'w-auto', 'id' => 'receive_email_false']) }}
                                    @lang('profile_home.receive_email_false')
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="section_submit_profile">
                        <div class="title_info">
                            <h2>@lang('profile_home.text3') <span>@lang('profile_home.required_true')</span></h2>
                        </div>
                        <div class="form_profile">
                            <div class="form-group row">
                                    <label class="label">@lang('profile_home.text4')</label>
                                    <span class="kind">@lang('profile_home.text5')</span>
                                    <span class="kind">@lang('profile_home.text6')</span>
                                    <span class="kind">@lang('profile_home.text7')</span>
                                    <span class="kind">@lang('profile_home.text8')</span>
                            </div>
                            <div class="form-group langue">
                                    <label class="label">@lang('profile_home.text9')</label>
                                    {{ Form::radio('word', 1, null, ['class' => 'form-check-input']) }}
                                    {{ Form::radio('word', 2, null, ['class' => 'form-check-input']) }}
                                    {{ Form::radio('word', 3, null, ['class' => 'form-check-input']) }}
                                    {{ Form::radio('word', 4, null, ['class' => 'form-check-input']) }}
                            </div>
                            <div class="form-group langue">
                                    <label for="rank" class="label">@lang('profile_home.text10')</label>
                                    {{ Form::radio('excel', 1, null, ['class' => 'form-check-input']) }}
                                    {{ Form::radio('excel', 2, null, ['class' => 'form-check-input']) }}
                                    {{ Form::radio('excel', 3, null, ['class' => 'form-check-input']) }}
                                    {{ Form::radio('excel', 4, null, ['class' => 'form-check-input']) }}
                            </div>
                            <div class="form-group langue">
                                    <label for="rank" class="label">@lang('profile_home.text11')</label>
                                    {{ Form::radio('power_point', 1, null, ['class' => 'form-check-input']) }}
                                    {{ Form::radio('power_point', 2, null, ['class' => 'form-check-input']) }}
                                    {{ Form::radio('power_point', 3, null, ['class' => 'form-check-input']) }}
                                    {{ Form::radio('power_point', 4, null, ['class' => 'form-check-input']) }}
                            </div>
                            <div class="form-group row">
                                <label class="label ">@lang('profile_home.other_soft')<span></span></label>
                                {{ Form::textarea('other_soft', null, ['class'=>'form-control col-sm-8', 'rows'=>'3']) }}
                            </div>
                        </div>
                    </div>
                    <div class="section_submit_profile finish_box_n">
                        <div class="title_info">
                            <h2>@lang('profile_home.profile_finish')</h2>
                        </div>
                        <div class="form_profile text-right">
                            <button type="submit" class="btn btn-success" >@lang('common.finish')</button>
                        </div>
                    </div>
                {!! Form::close() !!}
                <div class="section_submit_profile" id="certificates">
                    <div class="title_info">
                        <h2>@lang('profile_home.text19') <span>@lang('profile_home.required_false')</span></h2>
                    </div>
                    <div class="form_profile">
                        {!! Form::open(['route'=>'employeeHome.certificate.store', 'id'=>'formCertificate']) !!}
                            <div class="overflow-auto-n" id="listCertificate">
                                <table class="table table-bordered">
                                    <thead>
                                        <th>@lang('certificate.graduate_id')</th>
                                        <th>@lang('certificate.name')</th>
                                        <th>@lang('certificate.school')</th>
                                        <th>@lang('certificate.start_at')</th>
                                        <th>@lang('certificate.ended_at')</th>
                                        <th>@lang('certificate.major')</th>
                                        <th>@lang('common.edit')</th>
                                        <th>@lang('common.delete')</th>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                                <hr />
                            </div>
                            
                            {{ Form::hidden('key') }}
                            <div class="form-group row">
                                <label for="graduate_id" class="label">@lang('profile_home.graduate_id') <span>*</span></label>
                                {{ Form::select('graduate_id', $graduates, null, ['class'=>'form-control col-sm-4', 'placeholder'=>__('profile_home.graduate_id')]) }}
                            </div>
                            <div class="form-group row">
                                <label for="name" class="label">@lang('profile_home.text21') <span>*</span></label>
                                {{ Form::text('name', null, ['class'=>'form-control col-sm-7', 'placeholder'=>__('profile_home.certificate_name')]) }}
                            </div>
                            <div class="form-group row">
                                <label for="school" class="label " >@lang('profile_home.text22') <span>*</span></label>
                                {{ Form::text('school', null, ['class'=>'form-control col-sm-7']) }}
                            </div>
                            <div class="form-group row">
                                <label for="start_month_certificate" class="label ">@lang('profile_home.text23')<span> *</span></label>
                                {{ Form::select('start_month_certificate', $months, null, ['class' => 'form-control col-sm-2', 'placeholder' => __('common.month')]) }}
                                <span class="mr-10px"></span>
                                {{ Form::select('start_year_certificate', $years, null, ['class' => 'form-control col-sm-2', 'placeholder' => __('common.year')]) }}
                                <p class="text_to">@lang('common.to')</p>
                                {{ Form::select('end_month_certificate', $months, null, ['class' => 'form-control col-sm-2', 'placeholder' => __('common.month')]) }}
                                <span class="mr-10px"></span>
                                {{ Form::select('end_year_certificate', $years, null, ['class' => 'form-control col-sm-2', 'placeholder' => __('common.year')]) }}
                            </div>
                            <div class="form-group row">
                                <label for="major" class="label " >@lang('profile_home.text24') <span>*</span></label>
                                {{ Form::text('major', null, ['class'=>'form-control col-sm-7']) }}
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-success" id="btnCertificateSave">@lang('common.save')</button>
                                <button type="reset" class="btn btn-secondary btn-cancel-n">@lang('common.cancel')</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="section_submit_profile" id="experienceOfProfiles">
                    <div class="title_info">
                        <h2>@lang('profile_home.text12') <span>@lang('profile_home.required_false')</span></h2>
                    </div>
                    <div class="form_profile">
                        {!! Form::open(['route'=>'employeeHome.experience-of-profile.store', 'id'=>'formExperienceOfProfile']) !!}
                            <div class="overflow-auto-n" id="listExperienceOfProfile">
                                <table class="table table-bordered">
                                    <thead>
                                        <th>@lang('experience_of_profile.company_name')</th>
                                        <th>@lang('experience_of_profile.office_id')</th>
                                        <th>@lang('experience_of_profile.start_at')</th>
                                        <th>@lang('experience_of_profile.ended_at')</th>
                                        <th>@lang('experience_of_profile.job_description')</th>
                                        <th>@lang('experience_of_profile.achievement')</th>
                                        <th>@lang('common.edit')</th>
                                        <th>@lang('common.delete')</th>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                                <hr />
                            </div>
                            
                            {{ Form::hidden('key') }}
                            <div class="form-group row">
                                <label for="company_name" class="label" >@lang('profile_home.text13')<span>*</span></label>
                                {{ Form::text('company_name', null, ['class'=>'form-control col-sm-7']) }}
                            </div>
                            <div class="form-group row">
                                <label for="inputAddress" class="label" >@lang('profile_home.text14') <span>*</span></label>
                                {{ Form::select('office_id', $offices, null, ['class' => 'form-control col-sm-4', 'placeholder' => __('profile_home.office_id')]) }}
                            </div>
                            <div class="form-group row">
                                <label for="start_month_experience" class="label ">@lang('profile_home.text15')<span> *</span></label>
                                {{ Form::select('start_month_experience', $months, null, ['class' => 'form-control col-sm-2', 'placeholder' => __('common.month')]) }}
                                <span class="mr-10px"></span>
                                {{ Form::select('start_year_experience', $years, null, ['class' => 'form-control col-sm-2', 'placeholder' => __('common.year')]) }}
                                <p class="text_to">@lang('common.to')</p>
                                {{ Form::select('end_month_experience', $months, null, ['class' => 'form-control col-sm-2', 'placeholder' => __('common.month')]) }}
                                <span class="mr-10px"></span>
                                {{ Form::select('end_year_experience', $years, null, ['class' => 'form-control col-sm-2', 'placeholder' => __('common.year')]) }}
                            </div>
                            <div class="form-group row">
                                <label for="job_description" class="label ">@lang('profile_home.text17')<span> *</span></label>
                                {{ Form::textarea('job_description', null, ['class'=>'form-control col-sm-8', 'rows'=>3]) }}
                            </div>
                            <div class="form-group row">
                                <label for="achievement" class="label ">@lang('profile_home.text18')<span> *</span></label>
                                {{ Form::textarea('achievement', null, ['class'=>'form-control col-sm-8', 'rows'=>3]) }}
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-success" id="btnExperienceSave">@lang('common.save')</button>
                                <button type="reset" class="btn btn-secondary btn-cancel-n">@lang('common.cancel')</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="section_submit_profile" id="languages">
                    <div class="title_info">
                        <h2>@lang('profile_home.text20') <span>@lang('profile_home.required_false')</span></h2>
                    </div>
                    <div class="form_profile">
                        {!! Form::open(['id'=>'formLanguage']) !!}
                            <div class="overflow-auto-n" id="listLanguage">
                                <table class="table table-bordered">
                                    <thead>
                                        <th>@lang('language_profile.language_id')</th>
                                        <th>@lang('language_profile.listening')</th>
                                        <th>@lang('language_profile.speaking')</th>
                                        <th>@lang('language_profile.reading')</th>
                                        <th>@lang('language_profile.writing')</th>
                                        <th>@lang('common.edit')</th>
                                        <th>@lang('common.delete')</th>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                                <hr />
                            </div>
                            
                            {{ Form::hidden('key') }}
                            <div class="form-group row">
                                <label for="language_id" class="label ">@lang('profile_home.text26')<span> *</span></label>
                                {{ Form::select('language_id', $languages, null, ['class'=>'form-control select col-sm-4', 'placeholder'=>__('profile_home.text26')]) }}
                            </div>
                            <div class="form-group row">
                                    <label class="label">@lang('profile_home.text27')</label>
                                    <span class="kind">@lang('profile_home.text28')</span>
                                    <span class="kind">@lang('profile_home.text29')</span>
                                    <span class="kind">@lang('profile_home.text30')</span>
                                    <span class="kind">@lang('profile_home.text31')</span>
                            </div>
                            <div class="form-group langue">
                                    <label class="label">@lang('profile_home.text32')</label>
                                    {{ Form::radio('listening', 1, null, ['class' => 'form-check-input']) }}
                                    {{ Form::radio('listening', 2, null, ['class' => 'form-check-input']) }}
                                    {{ Form::radio('listening', 3, null, ['class' => 'form-check-input']) }}
                                    {{ Form::radio('listening', 4, null, ['class' => 'form-check-input']) }}
                            </div>
                            <div class="form-group langue">
                                    <label class="label">@lang('profile_home.text33')</label>
                                    {{ Form::radio('speaking', 1, null, ['class' => 'form-check-input']) }}
                                    {{ Form::radio('speaking', 2, null, ['class' => 'form-check-input']) }}
                                    {{ Form::radio('speaking', 3, null, ['class' => 'form-check-input']) }}
                                    {{ Form::radio('speaking', 4, null, ['class' => 'form-check-input']) }}
                            </div>
                            <div class="form-group langue">
                                    <label class="label">@lang('profile_home.text34')</label>
                                    {{ Form::radio('reading', 1, null, ['class' => 'form-check-input']) }}
                                    {{ Form::radio('reading', 2, null, ['class' => 'form-check-input']) }}
                                    {{ Form::radio('reading', 3, null, ['class' => 'form-check-input']) }}
                                    {{ Form::radio('reading', 4, null, ['class' => 'form-check-input']) }}
                            </div>
                            <div class="form-group langue">
                                    <label class="label">@lang('profile_home.text35')</label>
                                    {{ Form::radio('writing', 1, null, ['class' => 'form-check-input']) }}
                                    {{ Form::radio('writing', 2, null, ['class' => 'form-check-input']) }}
                                    {{ Form::radio('writing', 3, null, ['class' => 'form-check-input']) }}
                                    {{ Form::radio('writing', 4, null, ['class' => 'form-check-input']) }}
                            </div>
                            <div class="text-right">
                                <button class="btn btn-success" id="btnLanguageSave" >@lang('common.save')</button>
                                <button type="reset" class="btn btn-secondary btn-cancel-n">@lang('common.cancel')</button>
                            </div>    
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
    var certificatesPara = {!! $profile->certificates !!};
    var experienceOfProfilesPara = {!! $profile->experienceOfProfiles !!};
    var language_profilePara = {!! $profile->languagesA !!};
    $('#formProfile').submit(function(e) {
        var tempArr = {};
        $.each($(this).serializeArray(), function() {
            tempArr[this.name] = this.value;
        });
        var profileData = $("<input>")
                .attr("type", "hidden")
                .attr("name", "profileData").val(JSON.stringify(tempArr));
        $(this).append(profileData);
        var languagesData = $("<input>")
                .attr("type", "hidden")
                .attr("name", "languagesData").val(formLanguageData());
        $(this).append(languagesData);

        var certificatesData = $("<input>")
                .attr("type", "hidden")
                .attr("name", "certificatesData").val(formCertificateData());
        $(this).append(certificatesData);

        var experienceOfProfilesData = $("<input>")
                .attr("type", "hidden")
                .attr("name", "experienceOfProfilesData").val(formExperienceOfProfileData());
        $(this).append(experienceOfProfilesData);
    });
    $('.btn-cancel-n').click(function() {
        $(this).parent().siblings().find('select').val(null).change();
    });
</script>
<script src="js/certificate-ajax.js"></script>
<script src="js/experience-of-profile-ajax.js"></script>
<script src="js/language-ajax.js"></script>
@endsection