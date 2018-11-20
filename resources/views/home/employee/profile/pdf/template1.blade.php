<!DOCTYPE html>
<html style="margin: 0">
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
<body class="m-auto" style="outline: 1px solid red">
<style>
	*, *::before, *::after {
		box-sizing: initial;
	}
	body {
		width: 794px;
		color: white;
		font-size: 90%;
		line-height: 15px;
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
	}

	.content-right {
		width: 215px;
		background-color: #414142;
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
	}
</style>
	<div class="container-n">
		<div class="text-right header p-1">
			<h2 class="mb-0">
				{{ $profile->employee->name }}
			</h2>
			<h6 class="m-0">
				{{ $profile->career->name }}
			</h6>
		</div>
		<div class="content-left float-left" style="line-height: 15px;">
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
			@endforeach
			<hr class="line" />
			<div>
				<div class="mb-2 title1-n font-weight-bold">Kinh Nghiệm</div>
				<div class="mb-2 title2-n font-weight-bold">Kinh Nghiệm</div>
				<span>
					Áp dụng những kinh nghiệm và kỹ năng cá nhân vào công việc để 
					trở thành một kỹ sư công nghệ thông tin hoàn chỉnh về mọi mặt
					. Từ đó giúp Công ty tăng số lượng doanh thu và ngày càng phát triển..
				</span>
			</div>
		</div>
		<div class="content-right float-left">
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
		</div>
		<div class="clearfix"></div>
	</div>
</body>
</html>