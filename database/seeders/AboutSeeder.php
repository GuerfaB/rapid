<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("abouts")->insert([
            "titre" => "Odio sed id eos et laboriosam consequatur eos earum soluta.",
            "phrase1" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "phrase2" => "Aut dolor id. Sint aliquam consequatur ex ex labore. Et quis qui dolor nulla dolores neque. Aspernatur consectetur omnis numquam quaerat. Sed fugiat nisi.",
            "skill1" => " Ullamco laboris nisi ut aliquip ex ea commodo consequat.",
            "skill2" => " Duis aute irure dolor in reprehenderit in voluptate velit.",
            "skill2" => " Duis aute irure dolor in reprehenderit in voluptate velit.",
            "skill3" => "Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.",
            "path" => "./blabla/bla"
        ]);
    }
}
