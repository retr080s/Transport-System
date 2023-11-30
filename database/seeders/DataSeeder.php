<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([ 
            'pickup' => Str::random(10),
            'dropoff' => Str::random(10),
            'date' => Str::random(10),
            'weight' => Str::random(10),
            'price' => Str::random(10),
            'broker' => Str::random(10),
        ]);
    }
}
