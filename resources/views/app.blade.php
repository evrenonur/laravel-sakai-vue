<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link id="theme-css" rel="stylesheet" type="text/css" href="{{asset('themes/lara-light-indigo/theme.css')}}">

    </head>
    @vite('resources/css/app.css')
    <body>
    <div id="app">

    </div>
    @vite('resources/js/app.js')
    </body>
</html>
