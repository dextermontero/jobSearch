<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title !== "Job Search Worldwide" ? $title : $title}}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js', 'resources/js/pill.ts'])
    </head>
    <body class="m-0 p-0 bg-gray-200">
        <x-r_nav></x-r_nav>