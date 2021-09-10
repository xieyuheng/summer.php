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

        {{ $slot }}

    </div>

</body>

</html>
