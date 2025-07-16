<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <title>Laravel</title>
        <script src="https://cdn.jsdelivr.net/npm/htmx.org@2.0.6/dist/htmx.js" integrity="sha384-ksKjJrwjL5VxqAkAZAVOPXvMkwAykMaNYegdixAESVr+KqLkKE8XBDoZuwyWVUDv" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        </style>
    </head>
  <body>
    <header class="header">
        <div class="wrap">
            <div class="logo">
                <img src="{{ asset('images/svg/logo.svg') }}" alt="{{ config('app.name', 'tapmenu') }}">
            </div>

            <div class="search">
                <input type="text">
            </div>

            <div class="actions">
                <a href="button" class="btn">button</a>
            </div>
        </div>
    </header>
  </body>
</html>
