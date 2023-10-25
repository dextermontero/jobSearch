<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title !== "Job Search Worldwide" ? $title : $title}}</title>
        
        @if (url()->current() === route('recruiter_post'))
            @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js', 'resources/js/pill.ts'])
        @elseif(url()->current() === route('recruiter_jobpost'))
            @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js'])
            <link href="{{ asset('assets/css/quill.snow.css') }}" rel="stylesheet" />
            <script src="{{ asset('assets/js/quill.min.js') }}"></script>
        @elseif(url()->current() === route('recruiter_createCompany'))
            @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js', 'resources/js/datepicker.js'])
        @else
            @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js'])
        @endif
    </head>
    <body class="m-0 p-0 bg-gray-200">
        <x-r_nav></x-r_nav>