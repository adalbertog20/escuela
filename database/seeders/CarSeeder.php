<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 10; $i++) {
            DB::table('cars')->insert([
                'model' => Str::random(10),
                'brand' => Str::random(10),
                'year' => '20' . Str::random(2),
            ]);
        }
    }
}
