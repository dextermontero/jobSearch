<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title !== "Job Search Worldwide" ? $title : $title}}</title>
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        @if (url()->current() === route('career'))
            @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js', 'public/assets/css/select2.min.css', 'public/assets/js/select2.full.min.js'])
        @else
            @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js', 'public/assets/css/select2.min.css', 'public/assets/js/select2.full.min.js'])
        @endif
    </head>
    <body class="m-0 p-0 bg-gray-200 font-normal bg-cover bg-center bg-opacity-75" >
        <x-subnav></x-subnav>