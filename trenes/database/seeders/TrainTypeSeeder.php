<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TrainTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("train_type")->insert([
            ["type"=>"Cercania"],
            ["type"=>"Media Distancia"],
            ["type"=>"Alta Velocidad"]
        ]);
    }
}
