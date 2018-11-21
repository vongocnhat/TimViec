<!DOCTYPE html>
<html style="margin: 0; padding: 0; border: 0;">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<base href="{{ asset('/') }}" />
	<link rel="stylesheet" href="pdf/base-template.css">
	<link rel="stylesheet" href="pdf/template1.css">
	<link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
	<link href="manage/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
</head>
<body>
<style>
	*, *::before, *::after {
		box-sizing: initial;
	}

	body {
		margin: 0 auto;
		width: 794px;
		height: 1123px;
		color: white;
		font-size: 90%;
		line-height: 15px;
		background-color: #514f50;
	}
	body::before {
		background: #414142;
		content: "";
		position: absolute;
		width: 215px;
		height: 100%;
		z-index: -1;
		bottom: 0;
		right: 0;
	}

	.header {
		background-color: rgb(51, 196, 232);
	}

	.profile-img {
		width: 185px;
		height: 185px;
		margin: 15px;
	}
	
	.profile-img > img {
		width: 100%;
		height: 100%;
	}

	.content-left {
		width: 549px;
		padding: 15px;
		background-color: #514f50;
		line-height: 15px;
	}

	.content-right {
		width: 215px;
		background-color: #414142;
		vertical-align: baseline;
	}

	.profile-info {
		background-color: #514f50;
		margin: 15px;
		font-size: 12px;
	}

	.profile-info > div {
		border-bottom: 1px solid #ddffb0;
		line-height: 18px;
	}

	.title1-n {
		font-size: 120%;
		color: #33c4e8;
	}

	.title2-n {
		font-size: 100%;
	}

	.line {
		border-color: white;
		margin-top: 5px;
		margin-bottom: 5px;
	}

	.first-title {
		color: #e4ff00;
	}

	.title-lang {
		width: 85px;
		float: left;
		white-space: nowrap;
	}

	.box-blog {
		width: 24px;
		height: 8px;
		outline: 1px solid;
		background-color: red;
		float: left;
	}

	.box-word {
		margin: 0 15px 15px 15px;
		line-height: 10px;
		height: 5px;
	}
</style>
	<table class="container-n">
		<tbody>
			<tr class="text-right header p-1">
				<td colspan="2" class="text-right header p-1">
					<h2 class="mb-0">
						{{ $profile->employee->name }}
					</h2>
					<h6 class="m-0">
						{{ $profile->career->name }}
					</h6>
				</td>
			</tr>
			<tr>
				<td class="content-left">
					<div class="mb-2 title1-n font-weight-bold first-title">{{ $profile->career_goals }}</div>
					<hr class="line" />
					<div class="mb-2 title1-n font-weight-bold first-title">@lang('profile_home.text12')</div>
					@foreach($profile->experienceOfProfiles as $experienceOfProfile)
					<div>
						<div class="mb-2 title1-n font-weight-bold">{{ $experienceOfProfile->company_name }}</div>
						<div class="mb-2 title2-n font-weight-bold">
							{{ $experienceOfProfile->office->name }}
							<span class="float-right">
								{{ $experienceOfProfile->start_at }} 
								- 
								{{ $experienceOfProfile->ended_at }}
							</span>
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
						<div class="mb-2 title1-n font-weight-bold">{{ $certificate->name }}</div>
						<div class="mb-2 title2-n font-weight-bold">
							{{ $certificate->graduate->name }}
							<span class="float-right">
								{{ $certificate->start_at }} 
								- 
								{{ $certificate->ended_at }}
							</span>
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
				</td>
				<td class="content-right">
					<div class="profile-img">
						<img src="img/profiles/102.jpg" class="float-right" />
					</div>
					<div class="profile-info">
						<div>{{ $profile->employee->birthdayA }}</div>
						<div>{{ $profile->employee->gender }}</div>
						<div>{{ $profile->employee->phone }}</div>
						<div>{{ $profile->employee->email }}</div>
						<div>{{ $profile->employee->addressA }}</div>
					</div>
					<div class="box-word">
						<div class="mr-1 title-lang">@lang('profile_home.text9')</div>
						@for ($i = 0; $i < 5 - $profile->word; $i++)
						<div class="box-blog {{ $i + 1 === $profile->word ? ' box-blog-last' : null }}"></div>
						@endfor
					</div>
					<div class="box-word">
						<div class="mr-1 title-lang">@lang('profile_home.text10')</div>
						@for ($i = 0; $i < 5 - $profile->excel; $i++)
						<div class="box-blog"></div>
						@endfor
					</div>
					<div class="box-word" title="{{ App\Models\Common::numberToEvaluate($profile->power_point) }}">
						<div class="mr-1 title-lang">@lang('profile_home.text11')</div>
						@for ($i = 0; $i < 5 - $profile->power_point; $i++)
						<div class="box-blog"></div>
						@endfor
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>