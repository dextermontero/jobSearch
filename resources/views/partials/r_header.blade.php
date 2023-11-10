<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title !== "Job Search Worldwide" ? $title : $title}}</title>
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        @if (url()->current() === route('recruiter_post'))
            @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js', 'resources/js/pill.ts'])
        @elseif(url()->current() === route('recruiter_jobpost'))
            @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js', 'public/assets/css/select2.min.css', 'public/assets/js/select2.full.min.js'])
            <script src="{{ asset('assets/js/quill.min.js') }}"></script>
        @elseif(url()->current() === route('recruiter_createCompany'))
            @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js', 'resources/js/datepicker.js'])
        @else
            @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js'])
        @endif
        <link rel="stylesheet" href="{{ asset('assets/css/quill.snow.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/toastr.min.css')}}">
        <script src="{{ asset('assets/js/toastr.min.js') }}"></script>
    </head>
    <body class="m-0 p-0 bg-gray-200 overflow-x-hidden">
        <x-r_nav></x-r_nav>