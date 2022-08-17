<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
    </head>
    <body class="bg-gray-100">

        @include('layouts.dashboard.navigation')

        <div class="h-screen flex flex-row flex-nowrap">

            @include('layouts.dashboard.sidebar')

            <main class="w-full">
                @yield('content')
            </main>

        </div>
        
        @include('layouts.dashboard.end')

        