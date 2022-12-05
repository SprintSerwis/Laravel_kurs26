<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel - zmienne</title>
    </head>
    <body>
      <p>Witaj {{ $name }}</p>
      <p>Witaj {!! $name !!}</p>
    </body>
</html>
