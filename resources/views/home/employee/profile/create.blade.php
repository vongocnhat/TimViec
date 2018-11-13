@extends('home.layouts.job_layout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="salient_features">
                <h1>@lang('profile_home.text1')</h1>
            </div>
            <div class="container-profile">
                {!! Form::open(['route'=>'employeeHome.profile.store', 'method'=>'POST']) !!}
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
                                <label for="provinces_id" class="label ">@lang('profile_home.provinces->name')<span> *</span></label>
                                {{ Form::select('provinces_id', $provinces, null, ['class' => 'form-control col-sm-4', 'multiple']) }}
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
                                {{ Form::select('currency', $currencies, null, ['class' => 'form-control col-sm-2']) }}
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
                        <div class="form_profile">
                            <button type="submit" class="btn btn-success" >@lang('common.finish')</button>
                            <button type="submit" class="btn btn-secondary">@lang('common.cancel')</button>
                        </div>
                    </div>
                {!! Form::close() !!}
                <div class="section_submit_profile" id="certificates">
                    <div class="title_info">
                        <h2>@lang('profile_home.text19') <span>@lang('profile_home.required_false')</span></h2>
                    </div>
                    <div class="form_profile">
                        {!! Form::open() !!}
                            <div class="form-group row">
                                <label for="inputAddress" class="label" >@lang('profile_home.text21') <span>*</span></label>
                                {{ Form::text('name') }}
                                <input type="text" class="form-control col-sm-7" id="inputAddress" placeholder="Ví dụ: Cử nhân kinh tế, Trung cấp du lịch, Tốt nghiệp THPT...">
                            </div>
                            <div class="form-group row">
                                <label for="inputAddress" class="label " >@lang('profile_home.text22') <span>*</span></label>
                                <input type="text" class="form-control col-sm-7" id="inputAddress">
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
                                    <label for="inputAddress" class="label " >@lang('profile_home.text24') <span>*</span></label>
                                    <input type="text" class="form-control col-sm-7" id="inputAddress">
                                </div>
                                <div class="form-group row">
                                        <label for="rank" class="label ">@lang('profile_home.text25')<span> *</span></label>
                                        <select id="Select" class="form-control select col-sm-7">
                                            <option>Chọn loại tốt nghiệp..</option>
                                            <option>Disabled select</option>
                                            <option>Disabled select</option>
                                        </select>
                                    </div>
                            <button class="btn btn-success" id="btnCertificateSave">@lang('common.save')</button>
                            <button class="btn btn-secondary" id="btnCertificateCancel">@lang('common.cancel')</button>
                        {!! Form::close() !!}
                    </div>
                </div>
                <div class="section_submit_profile" id="experiences">
                    <div class="title_info">
                        <h2>@lang('profile_home.text12') <span>@lang('profile_home.required_false')</span></h2>
                    </div>
                    <div class="form_profile">
                        <form action="#" method="get">
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
                                <label for="rank" class="label ">@lang('profile_home.text17')<span> *</span></label>
                                {{ Form::textarea('job_description', null, ['class'=>'form-control col-sm-8', 'rows'=>3]) }}
                            </div>
                            <div class="form-group row">
                                <label for="rank" class="label ">@lang('profile_home.text18')<span> *</span></label>
                                {{ Form::textarea('achievement', null, ['class'=>'form-control col-sm-8', 'rows'=>3]) }}
                            </div>
                            <button class="btn btn-success" id="btnExperienceSave">@lang('common.save')</button>
                            <button class="btn btn-secondary" id="btnExperienceCancel">@lang('common.cancel')</button>
                        </form>
                    </div>
                </div>
                <div class="section_submit_profile" id="languages">
                    <div class="title_info">
                        <h2>@lang('profile_home.text20') <span>@lang('profile_home.required_false')</span></h2>
                    </div>
                    <div class="form_profile">
                        <div class="form-group row">
                            <label for="rank" class="label ">Ngoại ngữ<span> *</span></label>
                            <select id="Select" class="form-control select col-sm-3">
                                <option>Chọn loại Ngoại ngữ.</option>
                                <option>Tiếng Anh</option>
                                <option>Tiếng Nhật</option>
                                <option>Tiếng Hàn</option>
                            </select>
                        </div>
                        <div class="form-group row">
                                <label for="rank" class="label">Ngoại ngữ</label>
                                <span class="kind">Tốt</span>
                                <span class="kind">Khá</span>
                                <span class="kind">Trung Bình</span>
                                <span class="kind">Kém</span>
                        </div>
                        <div class="form-group langue">
                                <label for="rank" class="label">Nghe</label>
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option1">
                        </div>
                        <div class="form-group langue">
                                <label for="rank" class="label">Nói</label>
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option1">
                        </div>
                        <div class="form-group langue">
                                <label for="rank" class="label">Đọc</label>
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option1">
                        </div>
                        <div class="form-group langue">
                                <label for="rank" class="label">Viết</label>
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option1">
                        </div>
                        <button class="btn btn-success" id="btnLanguageSave" >@lang('common.save')</button>
                        <button class="btn btn-secondary" id="btnLanguageCancel">@lang('common.cancel')</button>
                    </div>
                </div>
            </div>
            <div class="advisory_inner">
                <div class="advisory_title">
                    <p>Để tuyển dụng hoặc tìm việc hiệu quả, vui lòng
                        <span>ĐĂNG KÝ TƯ VẤN</span> để được hỗ trợ ngay</p>
                </div>
                <ul class="advisory_cnt">
                    <li>
                        <a class="item_mane" href="#"> Nhà tuyển dụng đăng ký tư vấn</a>
                    </li>
                    <li>
                        <a class="item_seeker" href="#">Người tìm việc đăng ký tư vấn</a>
                    </li>
                </ul>
            </div>
            <div class="hot_line">
                <div class="hot_line_ttl">
                    <h4>Hotline cho người tìm việc</h4>
                </div>
                <div class="hot_line_cnt">
                    <h5>Giờ hành chính</h5>
                    <p class="northern">Miền Bắc:
                        <span>(024) 7309 2424</span>
                    </p>
                    <p class="southern">Miền Nam:
                        <span>(028) 7309 2424</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
$('#btnCertificateSave').click(function() {
    $('#certificates').find('')
});
<script>
@endsection