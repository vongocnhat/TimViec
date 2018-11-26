<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'first_name'    => 'Võ Ngọc',
            'last_name'     => 'Nhật',
            'email'      => 'email@gmail.com',
            'phone'      => '0763256486',
                            // 123
            'password'      => '$2y$12$UCJNuDiKaUxxPnHFaxIJde2VKwQNoQtR8n.up3LmTBhuKL7hlWOju',
            'birthday'      =>  '1996-06-18',
            'province_id'  => 3,
            'district_id'  => 61,
            'ward_id'      => 437,
            'address'      => 'K982/123 Ngô Quyền',
            'gender'      => 'Nam',
            'married'     => 0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
