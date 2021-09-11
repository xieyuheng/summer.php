<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::create([
            "name" => "Personal",
            "slug" => "personal",
        ]);

        \App\Models\Category::create([
            "name" => "Work",
            "slug" => "work",
        ]);

        \App\Models\Category::create([
            "name" => "Hobby",
            "slug" => "hobby",
        ]);

        \App\Models\Post::create([
            "title" => "First Post",
            "slug" => "first-post",
            "category_id" => 1,
            "excerpt" =>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit",
            "body" =>
                '<p class="leading-7">' .
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." .
                "</p>",
        ]);

        \App\Models\Post::create([
            "title" => "Second Post",
            "slug" => "second-post",
            "category_id" => 2,
            "excerpt" =>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit",
            "body" =>
                '<p class="leading-7">' .
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." .
                "</p>",
        ]);

        \App\Models\Post::create([
            "title" => "Third Post",
            "slug" => "third-post",
            "category_id" => 3,
            "excerpt" =>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit",
            "body" =>
                '<p class="leading-7">' .
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." .
                "</p>",
        ]);
    }
}
