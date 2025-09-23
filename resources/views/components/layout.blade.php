<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div><!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="mx-auto mt-10 max-w-2xl text-slate-700 bg-gradient-to-r from-slate-200 to-blue-400">
    {{$slot}}
</body>
</html>
