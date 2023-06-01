<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            [
                'region_id' => 1,
                'region_name' => 'Miền Nam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'region_id' => 2,
                'region_name' => 'Miền Trung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'region_id' => 3,
                'region_name' => 'Miền Bắc',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more dummy data as needed
        ]);
    }
}