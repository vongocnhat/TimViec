@extends('home.layouts.job_layout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="salient_features">
                <h1>Tạo hồ sơ tìm việc từng bước</h1>
            </div>
            <div class="section_submit_profile">
                <div class="title_info">
                    <h2>THÔNG TIN TỔNG QUAN <span>(Bắt buộc)</span></h2>
                </div>
                <div class="form_profile">
                    <form action="#" method="get">
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
                            {{ Form::select('career_id', $offices, null, ['class' => 'form-control col-sm-4', 'placeholder' => __('profile_home.career_id')]) }}
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
                            {{ Form::number('desire_minimum_wage', null, ['class' => 'form-control col-sm-4 no-spin']) }}
                        </div>
                        <div class="form-group row">
                            <label for="rank" class="label ">Mục tiêu nghề nghiệp<span> *</span></label>
                            <textarea class="form-control col-sm-8"  rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success" >Lưu</button>
                        <button type="submit" class="btn btn-secondary">Hủy</button>
                    </form>
                </div>
            </div>
            <div class="section_submit_profile">
                <div class="title_info">
                    <h2>KINH NGHIỆM LÀM VIỆC <span>(Bắt buộc)</span></h2>
                </div>
                <div class="form_profile">
                    <form action="#" method="get">
                        <div class="form-group row">
                            <label for="inputAddress" class="label " >Tên Công ty/Tổ chức  <span>*</span></label>
                            <input type="text" class="form-control col-sm-7" id="inputAddress">
                        </div>
                        <div class="form-group row">
                            <label for="inputAddress" class="label " >Chức danh <span>*</span></label>
                            <input type="text" class="form-control col-sm-7" id="inputAddress">
                        </div>
                        <div class="form-group row">
                            <label for="rank" class="label ">Thời Gian làm việc<span> *</span></label>
                            <select id="Select" class="form-control select col-sm-2">
                                <option>Tháng</option>
                                <option>Disabled select</option>
                                <option>Disabled select</option>
                            </select>
                            <select id="Select" class="form-control select col-sm-2">
                                <option>Năm</option>
                                <option>Disabled select</option>
                                <option>Disabled select</option>
                            </select>
                            <p class="text_to">đến</p>
                            <select id="Select" class="form-control select col-sm-2">
                                    <option>Tháng</option>
                                    <option>Disabled select</option>
                                    <option>Disabled select</option>
                                </select>
                                <select id="Select" class="form-control select col-sm-2">
                                    <option>Năm</option>
                                    <option>Disabled select</option>
                                    <option>Disabled select</option>
                                </select>
                        </div>
                        <div class="form-group row">
                            <label for="rank" class="label ">Mức Lương<span> *</span></label>
                            <input type="text" class="form-control col-sm-2" id="input_txt" placeholder="Nhập Số">
                            <select id="Select" class="form-control select col-sm-2">
                                <option>VND</option>
                                <option>USD</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="rank" class="label ">Mô tả Công việc<span> *</span></label>
                            <textarea class="form-control col-sm-8"  rows="3"></textarea>
                        </div>
                        <div class="form-group row">
                            <label for="rank" class="label ">Thành tích đạt được<span> *</span></label>
                            <textarea class="form-control col-sm-8"  rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success" >Lưu</button>
                        <button type="submit" class="btn btn-secondary">Hủy</button>
                    </form>
                </div>
            </div>
            <div class="section_submit_profile">
                <div class="title_info">
                    <h2>TRÌNH ĐỘ & BẰNG CẤP <span>(Bắt buộc)</span></h2>
                </div>
                <div class="form_profile">
                    <form action="#" method="get">
                        <div class="form-group row">
                            <label for="inputAddress" class="label" >Tên Bằng cấp/Chứng chỉ  <span>*</span></label>
                            <input type="text" class="form-control col-sm-7" id="inputAddress" placeholder="Ví dụ: Cử nhân kinh tế, Trung cấp du lịch, Tốt nghiệp THPT...">
                        </div>
                        <div class="form-group row">
                            <label for="inputAddress" class="label " >Trường/Đơn vị đào tạo <span>*</span></label>
                            <input type="text" class="form-control col-sm-7" id="inputAddress">
                        </div>
                        <div class="form-group row">
                            <label for="rank" class="label ">Thời Gian làm việc<span> *</span></label>
                            <select id="Select" class="form-control select col-sm-2">
                                <option>Tháng</option>
                                <option>Disabled select</option>
                                <option>Disabled select</option>
                            </select>
                            <select id="Select" class="form-control select col-sm-2">
                                <option>Năm</option>
                                <option>Disabled select</option>
                                <option>Disabled select</option>
                            </select>
                            <p class="text_to">đến</p>
                            <select id="Select" class="form-control select col-sm-2">
                                    <option>Tháng</option>
                                    <option>Disabled select</option>
                                    <option>Disabled select</option>
                                </select>
                                <select id="Select" class="form-control select col-sm-2">
                                    <option>Năm</option>
                                    <option>Disabled select</option>
                                    <option>Disabled select</option>
                                </select>
                        </div>
                        <div class="form-group row">
                                <label for="inputAddress" class="label " >Chuyên ngành <span>*</span></label>
                                <input type="text" class="form-control col-sm-7" id="inputAddress">
                            </div>
                            <div class="form-group row">
                                    <label for="rank" class="label ">Loại tốt nghiệp<span> *</span></label>
                                    <select id="Select" class="form-control select col-sm-7">
                                        <option>Chọn loại tốt nghiệp..</option>
                                        <option>Disabled select</option>
                                        <option>Disabled select</option>
                                    </select>
                                </div>
                        <button type="submit" class="btn btn-success" >Lưu</button>
                        <button type="submit" class="btn btn-secondary">Hủy</button>
                    </form>
                </div>
            </div>
            <div class="section_submit_profile">
                <div class="title_info">
                    <h2>NGOẠI NGỮ  <span>(Không Bắt buộc)</span></h2>
                </div>
                <div class="form_profile">
                    <form action="#" method="get">
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
                        <button type="submit" class="btn btn-success" >Lưu</button>
                        <button type="submit" class="btn btn-secondary">Hủy</button>
                    </form>
                </div>
            </div>
            <div class="section_submit_profile">
                <div class="title_info">
                    <h2>TRÌNH ĐỘ TIN HỌC <span>(Không Bắt buộc)</span></h2>
                </div>
                <div class="form_profile">
                    <form action="#" method="get">
                        <div class="form-group row">
                                <label for="rank" class="label">Tin học văn phòng</label>
                                <span class="kind">Tốt</span>
                                <span class="kind">Khá</span>
                                <span class="kind">Trung Bình</span>
                                <span class="kind">Kém</span>
                        </div>
                        <div class="form-group langue">
                                <label for="rank" class="label">MS Word</label>
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option1">
                        </div>
                        <div class="form-group langue">
                                <label for="rank" class="label">MS Excel</label>
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option1">
                        </div>
                        <div class="form-group langue">
                                <label for="rank" class="label">MS Power Point</label>
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option1">
                        </div>
                        <div class="form-group langue">
                                <label for="rank" class="label">MS Outlook</label>
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option1">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option1">
                        </div>
                        <div class="form-group row">
                            <label for="rank" class="label ">Phần mềm khác<span></span></label>
                            <textarea class="form-control col-sm-8"  rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success" >Lưu</button>
                        <button type="submit" class="btn btn-secondary">Hủy</button>
                    </form>
                </div>
            </div>
            <div class="section_submit_profile">
                <div class="title_info">
                    <h2>KỸ NĂNG SỞ TRƯỜNG <span>(Không Bắt buộc)</span></h2>
                </div>
                <div class="form_profile">
                    <form action="#" method="get">
                        <div class="form-group row">
                            <label for="rank" class="label ">Kỹ năng chính<span></span></label>
                            <textarea class="form-control col-sm-8"  rows="3"></textarea>
                        </div>

                        <div class="form-check form-check-inline">
                                <label for="rank" class="label ">Kỹ năng chính<span></span></label>
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Lãnh đạo</label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Giao tiếp và tạo lập quan hệ</label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option3">
                                <label class="form-check-label" for="inlineCheckbox2">Đàm phán thuyết phục</label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option4">
                                <label class="form-check-label" for="inlineCheckbox2">Làm việc nhóm</label>
                        </div>
                        <div class="form-check form-check-inline">
                                <label for="rank" class="label "><span></span></label>
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option6">
                                <label class="form-check-label" for="inlineCheckbox2"> Học và tự học</label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option7">
                                <label class="form-check-label" for="inlineCheckbox2"> Tổ chức công việc hiệu quả</label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option8">
                                <label class="form-check-label" for="inlineCheckbox2"> Giải quyết vấn đề</label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option9">
                                <label class="form-check-label" for="inlineCheckbox2"> Tư duy sáng tạo</label>
                        </div>
                        <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option10">
                                <label class="form-check-label" for="inlineCheckbox2"> Tư duy sáng tạo</label>
                        </div>
                        <div class="form-group row">
                            <label for="rank" class="label ">Phần mềm khác<span></span></label>
                            <textarea class="form-control col-sm-8"  rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success" >Lưu</button>
                        <button type="submit" class="btn btn-secondary">Hủy</button>
                    </form>
                </div>
            </div>
            <div class="section_submit_profile">
                    <div class="title_info">
                        <h2>NGƯỜI THAM KHẢO<span>(Không Bắt buộc)</span></h2>
                    </div>
                    <div class="form_profile">
                        <form action="#" method="get">
                            <div class="form-group row">
                                <label for="inputAddress" class="label " >Họ và tên <span>*</span></label>
                                <input type="text" class="form-control col-sm-7" id="inputAddress">
                            </div>
                            <div class="form-group row">
                                <label for="inputAddress" class="label " >Công ty/Tổ chức <span>*</span></label>
                                <input type="text" class="form-control col-sm-7" id="inputAddress">
                            </div>
                            <div class="form-group row">
                                <label for="inputAddress" class="label " >Số điện thoại  <span>*</span></label>
                                <input type="text" class="form-control col-sm-7" id="inputAddress">
                            </div>
                            <div class="form-group row">
                                <label for="inputAddress" class="label " >Chức vụ  <span>*</span></label>
                                <input type="text" class="form-control col-sm-7" id="inputAddress">
                            </div>
                            <button type="submit" class="btn btn-success" >Lưu</button>
                            <button type="submit" class="btn btn-secondary">Hủy</button>
                        </form>
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