<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GraduatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('graduates')->count() == 0) {
            DB::table('graduates')->insert([
                [
                    'name' => 'Xuất Sắc',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Giỏi',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Khá',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Trung Bình Khá',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Trung Bình',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]);
        }
    }
}
