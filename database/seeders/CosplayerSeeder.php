<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cosplayer;
use DB;

class CosplayerSeeder extends Seeder
{
    public function run()
    {
        $cosplayer = [
            [
                'name' => 'Khaliq',
                'email' => 'khaliq@gmail.com',
                'phone' => '082683670281',
                'address' => 'banjarmasin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rizky',
                'email' => 'rizky@gmail.com',
                'phone' => '082683670281',
                'address' => 'kayutangi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rizal',
                'email' => 'rizal@gmail.com',
                'phone' => '082683670281',
                'address' => 'cemara',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        DB::table('cosplayer')->insert($cosplayer);
    }
}