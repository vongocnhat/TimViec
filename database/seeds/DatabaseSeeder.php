<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private $init = -1;

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
        // Convert to timetamps
        $min = strtotime('2010-1-1');
        $max = strtotime(date("Y-m-d"));
        
        if ($this->init < 3) {
            $min = strtotime(date("Y-m-d"));
            $max = strtotime(date("Y-m-d", strtotime('+1 year')));
        }
        // Generate random number using above bounds
        $val = rand($min, $max);

        // Convert back to desired date format
        return date('Y-m-d', $val);
    }
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        for($i = 1 ; $i < 50 ; $i++)
        {
            $this->init++;
            DB::table('employees')->insert([
                'first_name'    => 'first_name' .  $i,
                'last_name'     => 'last_name'  .  $i,
                'email'      => 'email'   .  $i .'@gmail.com',
                'phone'      => 'phone'   .  $i,
                                // 123456
                'password'      => '$2y$12$LtZHvHbNXazJzwv6CTSWWuOi5lKr7ffHZ6rTkrG2pHd5bpphY0xc.',
                'birthday'      =>  $this->randomDate(),
                'province_id'  => $i,
                'district_id'  => $i,
                'ward_id'      => $i,
                'address'      => 'address'   .  $i,
                'gender'      => 'gender'   .  $i,
                'married'     => rand(0,1)
            ]);

            DB::table('employers')->insert([
                'first_name'=> 'first_name'.$i,
                'last_name' => 'last_name' .$i,
                'email' => 'email' .$i.'@gmail.com',
                'phone' => 'phone' .$i,
                // 123456
                'password'      => '$2y$12$LtZHvHbNXazJzwv6CTSWWuOi5lKr7ffHZ6rTkrG2pHd5bpphY0xc.',
                'company_name' => 'company_name' .$i,
                'company_size' => $this->initNull('company_size' .$i),
                'landline_phone' => $this->initNull('landline_phone' .$i),
                'about_company' => 'about_company' .$i,
                'province_id' => $i,
                'district_id' => $i,
                'ward_id' => $i,
                'address' => 'address' .$i,
                'website' => $this->initNull('website' .$i)
            ]);

            DB::table('offices')->insert([
                'office'=> 'office'.$i
            ]);

            DB::table('type_of_works')->insert([
                'type_of_work'=> 'type_of_work'.$i
            ]);

            DB::table('jobs')->insert([
                'employer_id' => $i,
                'office_id' => $i,
                'type_of_work_id' => $i,
                'career_ids' => $i . ', ' . ($i + 1) . ', ' . ($i + 2),
                'language_ids' => $this->initNull($i . ', ' . ($i + 1) . ', ' . ($i + 2)),
                'name' => 'name' .$i,
                'company_name' => 'company_name' .$i,
                'deadline' => $this->randomDateDeadLine(),
                'viewed' => $this->initNull(rand(0, 50)),
                'wage_from' => $this->initNull(rand(1000000, 2000000)),
                'wage_to' => $this->initNull(rand(4000000, 8000000)),
                'experience' => rand(0, 10),
                'literacy' => 'literacy' .$i,
                'quantity' => $i,
                'probationary_period' => $this->initNull('probationary_period' .$i),
                'gender' => $this->initNull('gender' .$i),
                'age_from' => rand(18, 25),
                'age_to' => $this->initNull(rand(26, 60)),
                'job_description' => 'job_description' .$i,
                'benefit' => $this->initNull('benefit' .$i),
                'other_requirements' => $this->initNull('other_requirements' .$i),
                'apply_online' => $this->initNull(rand(0, 1)),
                'contact_person' => 'contact_person' .$i,
                'email' => 'email' .$i.'@gmail.com',
                'phone' => 'phone' .$i,
                'province_id' => $i,
                'district_id' => $i,
                'ward_id' => $i,
                'address' => 'address' .$i
            ]);
        }
    }
}
