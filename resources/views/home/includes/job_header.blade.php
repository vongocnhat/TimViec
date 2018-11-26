<header class="tmp_header index1{{ isset($backgroundColor) ? $backgroundColor : null }}">
    <div class="container clearfix">
        <div class="box_logo">
            <a class="logo" href="{{ route('home') }}"></a>
        </div>
        <ul class="box_menu">
            <li class="menu_list">
                <a class="list_manager active_menu" href="{{ route('jobList.manager') }}" title="@lang('job_list.text2')">@lang('job_list.text3')</a>
            </li>
            <li class="menu_list">
                <a class="list_specialize active_menu" href="{{ route('jobList.specialize') }}" title="@lang('job_list.text4')">@lang('job_list.text5')</a>
            </li>
            <li class="menu_list">
                <a class="list_labor active_menu" href="{{ route('jobList.labor') }}" title="@lang('job_list.text6')">@lang('job_list.text7')</a>
            </li>
            <li class="menu_list">
                <a class="list_student active_menu" href="{{ route('jobList.student') }}" title="@lang('job_list.text8')">@lang('job_list.text9')</a>
            </li>
            <li class="menu_list">
                <a class="list_employer" href="{{ route('employer-home.signInView') }}" title="@lang('job_list.text10')">@lang('job_list.text11')</a>
            </li>
            <li class="menu_list">
                <a class="list_home" title="@lang('job_list.text12')"></a>
            </li>
            <li class="menu_list">
                <a class="list_save" title="@lang('job_list.text13')"></a>
            </li>
            <li class="menu_list">
                <a class="list_seach" title="@lang('job_list.text14')"></a>
            </li>
            <li class="menu_list">
                <a class="list_notification" title="@lang('job_list.text15')"></a>
            </li>
            <li class="menu_list">
                @if(!Auth::guard('employee')->check() && !Auth::guard('employer')->check())
                    <a class="login remove-icon-n" href="{{ route('employeeHome.signInView') }}">@lang('home.text2')</a>
                    <a class="registration remove-icon-n" href="{{ route('employeeHome.create') }}">@lang('home.text3')</a>
                @else
                @if (Auth::guard('employee')->check())
                    <div class="btn-group">
                        <a class="dropdown-toggle rounded-0 list_user text-white c-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::guard('employee')->user()->last_name }}
                        </a>
                        <div class="dropdown-menu width-200px rounded-0">
                            <a href="{{ route('employeeHome.edit') }}" class="dropdown-item width-200px-padding">@lang('home.account_manage')</a>
                            <a href="{{ route('employeeHome.profile.index') }}" class="dropdown-item width-200px-padding">@lang('home.profiles_manage')</a>
                            <a href="{{ route('employeeHome.profile-dynamic.index') }}" class="dropdown-item width-200px-padding">@lang('home.profiles_dynamic')</a>
                            <a href="{{ route('employeeHome.profile-submitted.index') }}" class="dropdown-item width-200px-padding">@lang('home.profiles_manage_submitted')</a>
                            <a href="{{ route('employeeHome.signOut') }}" class="dropdown-item width-200px-padding">@lang('home.sign_out')</a>
                        </div>
                    </div>
                </li>
                @endif
                @endif
                @if(Auth::guard('employer')->check())
                    <div class="btn-group">
                        <a class="dropdown-toggle rounded-0 list_user text-white c-pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::guard('employer')->user()->last_name }}
                        </a>
                        <div class="dropdown-menu width-200px rounded-0">
                            <a href="{{ route('employer-home.job.index') }}" class="dropdown-item width-200px-padding">@lang('job.title')</a>
                            <a href="{{ route('employer-home.signOut') }}" class="dropdown-item width-200px-padding">@lang('home.sign_out')</a>
                        </div>
                    </div>
                </li>
                @endif
            </li>
        </ul>
    </div>
</header>
<div class="box_pakuzu">
    <div class="container">
        {{-- <a class="paku_maner">@lang('job_list.text17')</a>
        <span>@lang('job_list.text18')</span> --}}
    </div>
</div>
