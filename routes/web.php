<?php

use App\Http\Controllers\PostController;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [PostController::class, "index"]);

// NOTE Route Model Binding

Route::get("/posts/{post:slug}", [PostController::class, "show"]);

// Route::get("/posts/{post}", function ($slug) {
//     return view("post", [
//         "post" => Post::where("slug", $slug)->firstOrFail(),
//     ]);
// });

Route::get("/categories/{category:slug}", function (Category $category) {
    return view("posts", [
        "posts" => $category->posts,
        "currentCategory" => $category,
        "categories" => Category::all(),
    ]);
});

Route::get("/authors/{author:username}", function (User $author) {
    return view("posts", [
        "posts" => $author->posts,
        "categories" => Category::all(),
    ]);
});
