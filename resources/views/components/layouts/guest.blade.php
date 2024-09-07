<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Short Access Page' }}</title>

        <wireui:scripts />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body>
        <div class="flex flex-col justify-center min-h-screen py-12 bg-neutral-50 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </body>
</html>
