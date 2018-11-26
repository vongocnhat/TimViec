<div class="dialog-dark" id="dialog_dark">
    <div class="dialog-box">
        <div class="dialog-titlebox">
            <span class="dialog-title">@lang('job_detail.profile_select')</span>
            <button class="btn btn-danger btn-cancel rounded-0">X</button>
        </div>
        <div class="dialog-content box-ajax">
            
        </div>
        <a href="{{ route('employeeHome.profile.create') }}" class="btn btn-success m-3">@lang('job_detail.profile_create')</a>
        <a href="{{ route('employeeHome.profile-dynamic.create') }}" class="btn btn-primary m-3">@lang('job_detail.profile_dynamic_create')</a>
    </div>
</div>