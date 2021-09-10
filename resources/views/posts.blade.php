<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
    <title>Summer Blog</title>
</head>

<body>

    <div class="max-w-xl md:m-auto mx-4">

        @foreach ($posts as $post)

            <article class="py-4">

                <a class="text-sky-700" href="/posts/{{ $post->slug }}">
                    <h1 class="font-bold py-2 text-lg">{{ $post->title }}</h1>
                </a>

                <div>
                    {{ $post->excerpt }}
                </div>

            </article>

        @endforeach

    </div>

</body>

</html>
