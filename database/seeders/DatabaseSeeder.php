<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        Category::create([
            "name" => "Personal",
            "slug" => "personal",
        ]);

        Category::create([
            "name" => "Work",
            "slug" => "work",
        ]);

        Category::create([
            "name" => "Hobby",
            "slug" => "hobby",
        ]);

        Post::create([
            "title" => "First Post",
            "slug" => "first-post",
            "user_id" => 1,
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

        Post::create([
            "title" => "Second Post",
            "slug" => "second-post",
            "user_id" => 1,
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

        Post::create([
            "title" => "Third Post",
            "slug" => "third-post",
            "user_id" => 2,
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
