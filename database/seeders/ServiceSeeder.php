<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("services")->insert([
            "icone" => "ios-clock",
            "titre" => "apple",
            "texte" => "Je suis un texte abordant le thème de la marque Appel"
        ]);
    }
}
