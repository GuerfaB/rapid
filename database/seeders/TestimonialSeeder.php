<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("testimonials")->insert([
            "path" => "./chien",
            "name" => "Sarah Ben Lamarki",
            "poste" => "Full-Stack Developper",
            "texte" => "Formé à Molengeek, je suis toujours à la recheche de nouveau défis"

        ]);
    }
}
