<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days')->insert([
            [
                'day_id' => 1,
                'day_name' => 'Thứ 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'day_id' => 2,
                'day_name' => 'Thứ 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'day_id' => 3,
                'day_name' => 'Thứ 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'day_id' => 4,
                'day_name' => 'Thứ 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'day_id' => 5,
                'day_name' => 'Thứ 6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'day_id' => 6,
                'day_name' => 'Thứ 7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'day_id' => 7,
                'day_name' => 'Chủ Nhật',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
