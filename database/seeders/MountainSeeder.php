<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Mountain;

class MountainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mountain::factory(10)->create();
        /*DB::table('mountains')->insert([
            "id" => 1,
            "name" => "Everest",
            "height" =>	8848,
            "belogsToRange" => true,
            "firstClimbDate" => "2001-10-10",
            "continent" => "Asia",
        ]);

        DB::table('mountains')->insert([
            "id" => 2,
            "name" => "Lhotse",
            "height" =>	8516,
            "belogsToRange" => false,
            "firstClimbDate" => "2006-09-08",
            "continent" => "Asia",
        ]);

        DB::table('mountains')->insert([
            "id" => 3,
            "name" => "Andes",
            "height" =>6960,
            "belogsToRange" => true,
            "firstClimbDate" => "2002-01-11",
            "continent" => "America",
        ]);

        DB::table('mountains')->insert([
            "id" => 4,
            "name" => "Cordillera de Alaska",
            "height" =>	6191,
            "belogsToRange" => false,
            "firstClimbDate" => "1998-03-12",
            "continent" => "America",
        ]);

        DB::table('mountains')->insert([
            "id" => 5,
            "name" => "Alpes",
            "height" =>	4808,
            "belogsToRange" => true,
            "firstClimbDate" => "2003-08-21",
            "continent" => "Europa",
        ]);*/
    }
}
