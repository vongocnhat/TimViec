<?php

use Carbon\Carbon;
use App\Models\Profile;
use App\Models\Certificate;
use Illuminate\Database\Seeder;
use App\Models\ExperienceOfProfile;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profile =  Profile::create([
            'employee_id' => 1,
            'name' => 'name' . 'Võ Ngọc Nhật',
            'career_id' => 33,
            'degree_id' => 6,
            'type_of_work_id' => 1,
            'experience_id' => 2,
            'office_id' => 2,
            'desired_job' => 'Lập trình website',
            'desire_minimum_wage' => '8000000',
            'currency' => 0,
            'career_goals' => 'Trở thành chuyên gia trong lĩnh vực làm website.',
            'word' => 3,
            'excel' => 4,
            'power_point' => 2,
            'other_soft' => 'Visual Code',
            'profile_img' => 'anh.jpg',
            'public' => 1,
            'receive_email' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // $profile->jobs()->attach(188);
        $profile->languages()->attach([
            188 => [
            'listening' => rand(1, 4),
            'speaking' => rand(1, 4),
            'reading' => rand(1, 4),
            'writing' => rand(1, 4)],
        ]);

        ExperienceOfProfile::create([
            'profile_id' => 1,
            'company_name' => 'FSOFT',
            'office_id' => 1,
            'start_at' => '07/07/2017',
            'ended_at' => '08/08/2017',
            'job_description' => 'Lập trình web bằng java',
            'achievement' => 'Biết được thêm kiến thức về java và framework struts 1.3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Certificate::create([
            'profile_id' => 1,
            'graduate_id' => 2,
            'name' => 'Bằng tốt nghiệp đại học',
            'school' => 'Đại Học Đông Á',
            'start_at' => '2014',
            'ended_at' => '2018',
            'major' => 'Công nghệ thông tin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
