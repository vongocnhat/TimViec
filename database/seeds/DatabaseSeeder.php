<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
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
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        for($i = 1 ; $i < 20 ; $i++)
        {
            DB::table('employees')->insert([
                'first_name'=>	'first_name' .  $i,
                'last_name' =>	'last_name'  .  $i,
                'email' 	=>	'email' 	 .  $i .'@gmail.com',
                'phone' 	=>	'phone' 	 .  $i,
                                // 123456
                'password' 	=>	'$2y$12$LtZHvHbNXazJzwv6CTSWWuOi5lKr7ffHZ6rTkrG2pHd5bpphY0xc.',
                'birthday' 	=>	 $this->randomDate(),
                'province' 	=>	'province' 	 .  $i,
                'district' 	=>	'district' 	 .  $i,
                'ward' 	    =>	'ward' 	     .  $i,
                'address' 	=>	'address' 	 .  $i,
                'gender' 	=>	'gender' 	 .  $i,
                'married'	=>	rand(0,1)
            ]);
        }
    }
}
