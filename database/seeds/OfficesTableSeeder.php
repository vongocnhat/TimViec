<?php

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
        //
        if (DB::table('offices')->count() == 0) {
            DB::table('offices')->insert([
                [
                    'office' => 'Nhân Viên'
                ],
                [
                    'office' => 'Quản Lý'
                ]
            ]);
        }
    }
}
