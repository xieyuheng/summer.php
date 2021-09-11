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
        $xyh = User::factory()->create([
            "name" => "Xie Yuheng",
        ]);

        Post::factory(5)->create([
            "user_id" => $xyh->id,
        ]);

        $hyx = User::factory()->create([
            "name" => "Heng Yuxie",
        ]);

        Post::factory(3)->create([
            "user_id" => $hyx->id,
        ]);
    }
}
