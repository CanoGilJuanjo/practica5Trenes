<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * nombre
         * pasajeros
         * año
         * tipo tren
         */
        DB::table("trains")->insert([
            ["name"=>"AVE","passengers"=>340,"year"=>1998,"train_type_id"=>2],
            ["name"=>"Renfe","passengers"=>233  ,"year"=>2001,"train_type_id"=>1]
        ]);
    }
}
