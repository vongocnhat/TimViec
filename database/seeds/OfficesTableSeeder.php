<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OfficesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('offices')->count() == 0) {
            DB::table('offices')->insert([
                [
                    'name' => 'Cộng tác viên',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Chuyên viên - Nhân viên',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Chuyên gia',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Quản lý nhóm - giám sát',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Quản lý cấp trung',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Quản lý cấp cao',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]);
        }
    }
}
