<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Summer Blog</title>
  </head>
  <body>

    <div class="max-w-xl m-auto">
      <article class="py-4">

        <?= $post ?>

      </article>

      <a class="font-bold" href="/">Go Back</a>
    </div>


  </body>
</html>
