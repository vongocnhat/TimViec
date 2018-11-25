<?php

use Carbon\Carbon;
use App\Models\Job;
use App\Models\Profile;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private $init = -1;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CareersTableSeeder::class,
            DegreesTableSeeder::class,
            OfficesTableSeeder::class,
            TypeOfWorksTableSeeder::class,
            ExperiencesTableSeeder::class,
            SalariesTableSeeder::class,
            LanguagesTableSeeder::class,
            GraduatesTableSeeder::class,
        ]);
        $max = 50;
        $genderArr = [__('employee.male'), __('employee.female')];
        $currency = ['VND', 'USA'];
        for($i = 1 ; $i < $max ; $i++)
        {
            $this->init++;
            DB::table('employees')->insert([
                'first_name'    => 'first_name' .  $i,
                'last_name'     => 'last_name'  .  $i,
                'email'      => 'email'   .  $i .'@gmail.com',
                'phone'      => 'phone'   .  $i,
                                // empty
                'password'      => '$2y$12$OSK5OycQkM3SJyC/YuPh0u.Z99bwyMRh4m6YC4YUGvxOZoaxim5by',
                'birthday'      =>  $this->randomDate(),
                'province_id'  => $i,
                'district_id'  => $i,
                'ward_id'      => $i,
                'address'      => 'address'   .  $i,
                'gender'      => $genderArr[rand(0, 1)],
                'married'     => rand(0,1),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            DB::table('employers')->insert([
                'first_name'=> 'first_name'.$i,
                'last_name' => 'last_name' .$i,
                'email' => 'email' .$i.'@gmail.com',
                'phone' => 'phone' .$i,
                                // empty
                'password'      => '$2y$12$OSK5OycQkM3SJyC/YuPh0u.Z99bwyMRh4m6YC4YUGvxOZoaxim5by',
                'company_name' => 'company_name' .$i,
                'company_size' => $this->initNull('company_size' .$i),
                'landline_phone' => $this->initNull('landline_phone' .$i),
                'about_company' => 'about_company' .$i,
                'province_id' => $i,
                'district_id' => $i,
                'ward_id' => $i,
                'address' => 'address' .$i,
                'website' => $this->initNull('website' .$i),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $job = Job::create([
                'employer_id' => $i,
                'office_id' => rand(1, 6),
                'type_of_work_id' => rand(1, 6),
                'degree_id' => rand(1, 7),
                'experience_id' => rand(1, 8),
                'salary_id' => rand(1, 9),
                'name' => 'name' .$i,
                'deadline' => $this->randomDateDeadLine(),
                'viewed' => $this->initNull(rand(0, 50)),
                'quantity' => $i,
                'probationary_period' => $this->initNull('probationary_period' .$i),
                'gender' => $this->initNull($genderArr[rand(0, 1)]),
                'age_from' => rand(18, 25),
                'age_to' => $this->initNull(rand(26, 60)),
                'job_description' => 'job_description' .$i,
                'benefit' => $this->initNull('benefit' .$i),
                'other_requirements' => $this->initNull('other_requirements' .$i),
                'apply_online' => $this->initNull(rand(0, 1)),
                'contact_person' => 'contact_person' .$i,
                'email' => 'email' .$i.'@gmail.com',
                'phone' => 'phone' .$i,
                'status' => rand(0,1),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            if ($i < 20) {
                $job->provinces()->attach([$i , $i+1, $i+2]);
                $job->careers()->attach([$i , $i+1, $i+2]);
                $job->languages()->attach([$i , $i+1, $i+2]);
            }
        }

        for($i = 1 ; $i < $max ; $i++)
        {
            $profile =  Profile::create([
                'employee_id' => $i,
                'name' => 'name' . $i,
                'career_id' => $i,
                'degree_id' => rand(1, 7),
                'type_of_work_id' => rand(1, 6),
                'experience_id' => rand(1, 8),
                'office_id' => rand(1, 6),
                'desired_job' => $this->initNull('desired_job' . $i),
                'desire_minimum_wage' => $this->initNull(rand(4000000, 8000000)),
                'currency' => $currency[rand(0, 1)],
                'career_goals' => $this->initNull('career_goals' . $i),
                'word' => rand(1, 4),
                'excel' => rand(1, 4),
                'power_point' => rand(1, 4),
                'other_soft' => $i,
                'profile_img' => 'profile_img' . $i . '.jpg',
                'public' => $this->initNull(rand(0, 1)),
                'receive_email' => $this->initNull(rand(0, 1)),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            if ($i < 20) {
                $profile->jobs()->attach([$i , $i+1, $i+2]);
                $profile->languages()->attach([$i => 
                ['listening' => rand(1, 4),
                'speaking' => rand(1, 4),
                'reading' => rand(1, 4),
                'writing' => rand(1, 4)], $i+1 => 
                ['listening' => rand(1, 4),
                'speaking' => rand(1, 4),
                'reading' => rand(1, 4),
                'writing' => rand(1, 4)], $i+2 => 
                ['listening' => rand(1, 4),
                'speaking' => rand(1, 4),
                'reading' => rand(1, 4),
                'writing' => rand(1, 4)]]);
            }
        }
    }

    private function initNull($value)
    {
        if ($this->init > 3) {
            return $value;
        } else {
            return null;
        }
    }

    private function randomDate()
    {
        // Convert to timetamps
        $min = strtotime('1900-1-1');
        $max = strtotime(date("Y-m-d"));

        // Generate random number using above bounds
        $val = rand($min, $max);

        // Convert back to desired date format
        return date('Y-m-d', $val);
    }

    private function randomDateDeadLine()
    {
        $min = strtotime(date("Y-m-d"));
        $max = strtotime(date("Y-m-d", strtotime('+1 year')));
        if ($this->init < 3) {
            // Convert to timetamps
            $min = strtotime('2010-1-1');
            $max = strtotime(date("Y-m-d"));
        }
        // Generate random number using above bounds
        $val = rand($min, $max);

        // Convert back to desired date format
        return date('Y-m-d', $val);
    }
}
