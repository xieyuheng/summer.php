<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

class Post
{
    public function __construct(
        public $title,
        public $slug,
        public $excerpt,
        public $date,
        public $body
    ) {
    }

    public static function all()
    {
        return collect(File::files(resource_path("posts")))
            ->map(fn($file) => YamlFrontMatter::parseFile($file))
            ->map(
                fn($document) => new Post(
                    $document->title,
                    $document->slug,
                    $document->excerpt,
                    $document->date,
                    $document->body()
                )
            )
            ->sortByDesc("date");
    }

    public static function find($slug)
    {
        $posts = static::all();
        $post = $posts->firstWhere("slug", $slug);

        if (!$post) {
            throw new ModelNotFoundException();
        }

        return $post;
    }
}
