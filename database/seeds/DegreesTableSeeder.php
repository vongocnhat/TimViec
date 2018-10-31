<?php

use Illuminate\Database\Seeder;

class DegreesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (DB::table('degrees')->count() == 0) {
            DB::table('degrees')->insert([
                [
                    'degree' => 'Không'
                ],
                [
                    'degree' => 'Trung Học Cơ Sở'
                ],
                [
                    'degree' => 'Trung Học Phổ Thông'
                ],
                [
                    'degree' => 'Trung Cấp'
                ],
                [
                    'degree' => 'Cao Đẳng'
                ],
                [
                    'degree' => 'Đại Học'
                ],
                [
                    'degree' => 'Thạc Sĩ'
                ]
            ]);
        }
    }
}
