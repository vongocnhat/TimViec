<header class="tmp_header index1">
    <div class="container clearfix">
        <div class="box_logo">
            <a class="logo" href="{{ route('home') }}"></a>
        </div>
        <ul class="box_menu">
            <li class="menu_list">
                <a class="list_manager active" href="{{ route('jobList.manager') }}" title="@lang('job_list.text2')">@lang('job_list.text3')</a>
            </li>
            <li class="menu_list">
                <a class="list_specialize" href="{{ route('jobList.specialize') }}" title="@lang('job_list.text4')">@lang('job_list.text5')</a>
            </li>
            <li class="menu_list">
                <a class="list_labor" href="{{ route('jobList.labor') }}" title="@lang('job_list.text6')">@lang('job_list.text7')</a>
            </li>
            <li class="menu_list">
                <a class="list_student" href="{{ route('jobList.student') }}" title="@lang('job_list.text8')">@lang('job_list.text9')</a>
            </li>
            <li class="menu_list">
                <a class="list_employer" href="#index1" title="@lang('job_list.text10')">@lang('job_list.text11')</a>
            </li>
            <li class="menu_list">
                <a class="list_home" href="#index1" title="@lang('job_list.text12')"></a>
            </li>
            <li class="menu_list">
                <a class="list_save" href="#index1" title="@lang('job_list.text13')"></a>
            </li>
            <li class="menu_list">
                <a class="list_seach" href="#index1" title="@lang('job_list.text14')"></a>
            </li>
            <li class="menu_list">
                <a class="list_notification" href="#index1" title="@lang('job_list.text15')"></a>
            </li>
            <li class="menu_list">
                @if(!Auth::guard('employee')->check())
                    <a class="login" href="{{ route('employeeHome.signInView') }}">@lang('home.text2')</a>
                    <a class="registration" href="{{ route('employeeHome.create') }}">@lang('home.text3')</a>
                @else
                    <div class="btn-group">
                        <button type="button" class="btn btn-info dropdown-toggle rounded-0 list_user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @lang('home.hello'): {{ Auth::guard('employee')->user()->name }}
                        </button>
                        <div class="dropdown-menu w-100 rounded-0">
                            <a href="{{ route('employeeHome.edit') }}" class="dropdown-item">@lang('home.account_manage')</a>
                            <a href="{{ route('employeeHome.edit') }}" class="dropdown-item">@lang('home.profiles_manage')</a>
                            <a href="{{ route('employeeHome.signOut') }}" class="dropdown-item">@lang('home.sign_out')</a>
                        </div>
                    </div>
                </li>
                @endif
            </li>
        </ul>
        <ul>

        </ul>
    </div>
</header>
<div class="box_pakuzu">
    <div class="container">
        <a class="paku_maner" href="">@lang('job_list.text17')</a>
        <span>@lang('job_list.text18')</span>
    </div>
</div>
<div class="seation_search container">
    {!! Form::open(['route' => 'jobList.searchAjax', 'method' => 'post', 'class' => 'form_seach']) !!}
        <ul class="box_form">
            <li class="list_occupation">
                {{ Form::select('carrer_id', $careers, null, ['class' => 'select_input', 'placeholder' => __('job_list.text19')]) }}
            </li>
            <li class="list_salary">
                {{ Form::select('salary', $salaries, null, ['class' => 'select_input', 'placeholder' => __('job_list.text20')]) }}
            </li>
            <li class="list_exper">
                {{ Form::select('experience', $experiences, null, ['class' => 'select_input', 'placeholder' => __('job_list.text21')]) }}
            </li>
            <li class="list_province">
                {{ Form::select('province_id', $provinces, null, ['class' => 'select_input', 'placeholder' => __('job_list.text22')]) }}
            </li>
        </ul>
        {{ Form::text('inp_search', null, ['class' => 'inp_search', 'placeholder' => __('job_list.text23')]) }}
        {{ Form::submit(__('job_list.text24'), ['class' => 'btn_seach']) }}
    {!! Form::close() !!}
</div>