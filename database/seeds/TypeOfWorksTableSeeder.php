<?php

use Illuminate\Database\Seeder;

class TypeOfWorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if (DB::table('type_of_works')->count() == 0) {
            DB::table('type_of_works')->insert([
                [
                    'type_of_work' => 'Toàn thời gian cố định'
                ],
                [
                    'type_of_work' => 'Toàn thời gian tạm thời'
                ],
                [
                    'type_of_work' => 'Bán thời gian cố định'
                ],
                [
                    'type_of_work' => 'Bán thời gian tạm thời'
                ],
                [
                    'type_of_work' => 'Theo hợp đồng tư vấn'
                ],
                [
                    'type_of_work' => 'Thực tập'
                ]
            ]);
        }
    }
}
