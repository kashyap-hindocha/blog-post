<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            "name" => "Admin",
            "username" => "admin",
            "email" => "admin@admin.com",
            "role" => 3,
            "password" => "admin",
        ]);        

        \App\Models\Menu::create([
            "header_menu" => json_encode([["href"=>"http://127.0.0.1:8000/","icon"=>"","text"=>"Home","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"AboutUs","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"ContactUs","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"PrivacyPolicy","tooltip"=>"","children"=>[]]]),
            "footer_menu" => json_encode([["href"=>"http://127.0.0.1:8000/","icon"=>"","text"=>"Home","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"AboutUs","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"ContactUs","tooltip"=>"","children"=>[]],["href"=>"#","icon"=>"","text"=>"PrivacyPolicy","tooltip"=>"","children"=>[]]]),
        ]);
    }
}