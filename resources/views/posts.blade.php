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

        <?php foreach ($posts as $post): ?>

        <article class="py-4">

             <!-- <h1 class="font-bold py-2 text-lg">
          <a class="text-sky-700" href="/posts/first-post">
            First Post
          </a>
        </h1> -->

            <?= $post ?>
        </article>

        <?php endforeach; ?>

    </div>


</body>

</html>
