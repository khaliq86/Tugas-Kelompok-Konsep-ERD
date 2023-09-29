<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class RentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rent = [
            [
                'id_outfit' => '1',
                'id_cosplayer' => '1',
                'rental_date' => '2021-09-27',
                'return_date' => '2021-09-30',
                'is_return' => '0',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_outfit' => '2',
                'id_cosplayer' => '2',
                'rental_date' => '2021-09-27',
                'return_date' => '2021-09-30',
                'is_return' => '0',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_outfit' => '3',
                'id_cosplayer' => '3',
                'rental_date' => '2021-09-27',
                'return_date' => '2021-09-30',
                'is_return' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        DB::table('rents')->insert($rent);
    }
}