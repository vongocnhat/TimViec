<!DOCTYPE html>
<html style="margin: 0; padding: 0; border: 0;">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<base href="{{ asset('/') }}" />
	<link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
	<link href="manage/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="pdf/template1.css">
</head>
<body style="margin: 0 auto">
	<div class="container-n">
		<div class="text-right header">
			<div class="text-right">
				<h2 class="mb-0">
					{{ $profile->employee->name }}
				</h2>
				<h4 class="m-0">
					{{ $profile->career->name }}
				</h4>
			</div>
		</div>
		<div class="content-left">
			<div class="mb-2 title1-n font-weight-bold first-title">{{ $profile->career_goals }}</div>
			<hr class="line" />
			<div class="mb-2 title1-n font-weight-bold first-title">@lang('profile_home.text12')</div>
			@foreach($profile->experienceOfProfiles as $experienceOfProfile)
			<div>
				<div class="mb-2 title1-n font-weight-bold">
					{{ $experienceOfProfile->company_name }}
					<span class="float-right">
						{{ $experienceOfProfile->start_at }} 
						- 
						{{ $experienceOfProfile->ended_at }}
					</span>
				</div>
				<div class="mb-2 title2-n font-weight-bold">
					{{ $experienceOfProfile->office->name }}
				</div>
				<div>
					{{ $experienceOfProfile->job_description }}
				</div>
				<div>
					{{ $experienceOfProfile->achievement }}
				</div>
			</div>
			<hr class="line" />
			@endforeach
			<div class="mb-2 title1-n font-weight-bold first-title">@lang('profile_home.text19')</div>
			@foreach($profile->certificates as $certificate)
			<div>
				<div class="mb-2 title1-n font-weight-bold">
					{{ $certificate->name }}
					<span class="float-right">
						{{ $certificate->start_at }} 
						- 
						{{ $certificate->ended_at }}
					</span>
				</div>
				<div class="mb-2 title2-n font-weight-bold">
					{{ $certificate->graduate->name }}
				</div>
				<div>
					{{ $certificate->school }}
				</div>
				<div>
					{{ $certificate->major }}
				</div>
			</div>
			<hr class="line" />
			@endforeach
			<div class="mb-2 title1-n font-weight-bold first-title">@lang('profile_home.text20')</div>
			@foreach($profile->languages as $language)
			<div>
				<div class="mb-2 title1-n font-weight-bold">{{ $language->name }}</div>
				<div>
					@lang('language_profile.listening'): {{ App\Models\Common::numberToEvaluate($language->pivot->listening) }}
				</div>
				<div>
					@lang('language_profile.speaking'): {{ App\Models\Common::numberToEvaluate($language->pivot->speaking) }}
				</div>
				<div>
					@lang('language_profile.reading'): {{ App\Models\Common::numberToEvaluate($language->pivot->reading) }}
				</div>
				<div>
					@lang('language_profile.writing'): {{ App\Models\Common::numberToEvaluate($language->pivot->writing) }}
				</div>
			</div>
			<hr class="line" />
			@endforeach
		</div>
		<div class="content-right">
			<div class="profile-img">
				<img src="img/profiles/{{ $profile->profile_img }}" class="float-right" />
			</div>
			<div class="profile-info">
				<div><i class="fa fa-calendar"></i> {{ $profile->employee->birthdayA }}</div>
				<div><i class="fa fa-user"></i> {{ $profile->employee->gender }}</div>
				<div><i class="fa fa-phone"></i> {{ $profile->employee->phone }}</div>
				<div><i class="fa fa-envelope-square"></i> {{ $profile->employee->email }}</div>
				<div><i class="fa fa-map-marker"></i> {{ $profile->employee->addressA }}</div>
			</div>
			<div class="box-word">
				<div class="clearfix">
					<span class="title-lang">@lang('profile_home.text9')</span>
					@for ($i = 0; $i < 5 - $profile->word; $i++)
					<span class="box-blog"></span>
					@endfor
				</div>
			</div>
			<div class="box-word">
				<div class="clearfix">
					<span class="title-lang">@lang('profile_home.text10')</span>
					@for ($i = 0; $i < 5 - $profile->excel; $i++)
					<span class="box-blog"></span>
					@endfor
				</div>
			</div>
			<div class="box-word" title="{{ App\Models\Common::numberToEvaluate($profile->power_point) }}">
				<div class="clearfix">
					<span class="title-lang">@lang('profile_home.text11')</span>
					@for ($i = 0; $i < 5 - $profile->power_point; $i++)
					<span class="box-blog"></span>
					@endfor
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery-1.11.3.min.js"></script>
	<script>
		var $html = $('html');
		// /for edit
		var numberStr = ($html.find('.container-n').outerHeight() / 1416).toString();
		var number = 1;
		if (numberStr.indexOf('.') !== -1) {
			number = parseInt(numberStr.substring(0, numberStr.indexOf('.'))) + 1;
		}
		$html.find('.content-left').outerHeight(number * 1416 - 80);
		$html.find('.content-right').outerHeight(number * 1416 - 80);
	</script>
</body>
</html>