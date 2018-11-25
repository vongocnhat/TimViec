<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <base href="{{ asset('/') }}" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/cv.css">
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    
</head>
<body style="margin: 0">
    <div class="content">
        <div class="box_cv_ttl">
            <h3>@lang('mau_son.text1')</h3>
        </div>
        <div class="col_profile">
            <div class="profile_cnt">
                <h4 class="text-uppercase">@lang('mau_son.text2')</h4>
                <ul class="cnt_info">
                    <li>
                        <span class="info_ttl">@lang('mau_son.text3')</span>
                        <p class="box_des_info">{{ $profile->employee->name }}</p>
                    </li>
                    <li>
                        <span class="info_ttl">@lang('employee.gender'):</span>
                        <p class="box_des_info">{{ $profile->employee->gender }}</p>
                    </li>
                    <li>
                        <span class="info_ttl">@lang('employee.phone'):</span>
                        <p class="box_des_info">{{ $profile->employee->phone }}</p>
                    </li>
                    <li>
                        <span class="info_ttl">@lang('employee.email'):</span>
                        <p class="box_des_info">{{ $profile->employee->email }}</p>
                    </li>
                    <li>
                        <span class="info_ttl">@lang('employee.address'):</span>
                        <p class="box_des_info">{{ $profile->employee->addressA }}</p>
                    </li>
                    <li>
                        <span class="info_ttl">@lang('employee.birthday'):</span>
                        <p class="box_des_info">{{ $profile->employee->birthdayA }}</p>
                    </li>
                </ul>
            </div>
            <div class="profile_img">
                <img src="img/profiles/{{ $profile->profile_img }}" alt="">
            </div>
        </div>
        <div class="technical">
            <h4 class="text-uppercase">@lang('profile_home.career_goals')</h4>
            <p class="txt_des">{{ $profile->career->name }}</p>
        </div>
        <div class="technical">
            <h4 class="text-uppercase">@lang('profile_home.experience_id')</h4>
            @foreach($profile->experienceOfProfiles as $experienceOfProfile)
            <ul class="cnt_info">
                <li>
                    <span class="des_day">
                        {{ $experienceOfProfile->start_at }} 
                        - 
                        {{ $experienceOfProfile->ended_at }}
                    </span>
                    <p class="name_cty">{{ $experienceOfProfile->company_name }}</p>
                    <ul class="box_in">
                        <li>@lang('mau_son.position'): <span> {{ $experienceOfProfile->office->name }}</span></li>
                        <li>@lang('profile_home.text17'): <span> {{ $experienceOfProfile->job_description }}</span></li>
                        <li>@lang('profile_home.text18'): <span> {{ $experienceOfProfile->achievement }}</span></li>
                    </ul>
                </li>
            </ul>
            @endforeach
        </div>
        <div class="technical">
            <h4 class="text-uppercase">@lang('profile_home.text19')</h4>
            @foreach($profile->certificates as $certificate)
            <ul class="cnt_info">
                <li>
                    <span class="des_day">
                        {{ $certificate->start_at }} 
                        - 
                        {{ $certificate->ended_at }}
                    </span>
                    <p class="name_cty">{{ $certificate->name }}</p>
                    <ul class="box_in">
                        <li>@lang('certificate.graduate_id'): <span> {{ $certificate->graduate->name }}</span></li>
                        <li>@lang('certificate.school'): <span> {{ $certificate->school }}</span></li>
                        <li>@lang('certificate.major'): <span> {{ $certificate->major }}</span></li>
                    </ul>
                </li>
            </ul>
            @endforeach
        </div>
        <div class="technical">
            <h4 class="text-uppercase">@lang('mau_son.text4')</h4>
            @foreach($profile->languages as $language)
            <ul class="cnt_info">
                <li>
                    <p class="name_cty">{{ $language->name }}</p>
                    <ul class="box_in">
                        <li>@lang('language_profile.listening'): <span> {{ App\Models\Common::numberToEvaluate($language->pivot->listening) }}</span></li>
                        <li>@lang('language_profile.speaking'): <span> {{ App\Models\Common::numberToEvaluate($language->pivot->speaking) }}</span></li>
                        <li>@lang('language_profile.reading'): <span> {{ App\Models\Common::numberToEvaluate($language->pivot->reading) }}</span></li>
                        <li>@lang('language_profile.writing'): <span> {{ App\Models\Common::numberToEvaluate($language->pivot->writing) }}</span></li>
                    </ul>
                </li>
            </ul>
            @endforeach
        </div>

    </div>
</body>
</html>