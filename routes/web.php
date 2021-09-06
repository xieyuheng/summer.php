<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\VarDumper\VarDumper;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    return view("posts");
});

Route::get("/posts/{post}", function ($slug) {
    $path = __DIR__ . "/../resources/posts/${slug}.html";

    if (!file_exists($path)) {
        abort(404);
    }

    // $post = cache()->remember(
    //     "posts.{$slug}",
    //     now()->addMinute(30),
    //     fn() => file_get_contents($path)
    // );

    $post = file_get_contents($path);

    return view("post", ["post" => $post]);
})->where("post", "[a-zA-Z_\-]+");
