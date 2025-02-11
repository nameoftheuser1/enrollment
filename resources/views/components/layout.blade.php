<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <nav class="bg-blue-800 text-white shadow-lg">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <a href="{{ route('home.index') }}" class="font-bold text-xl"><img src="{{ asset('img/logo.png') }}"
                        alt="Logo" class="h-16 rounded-full"></a>
                <div class="hidden md:flex space-x-6">
                    <a href="{{ route('home.index') }}"
                        class="px-4 py-2 text-white hover:bg-blue-700 rounded-md transition-colors duration-300 ease-in-out {{ request()->routeIs('home.index') ? 'bg-blue-900 font-semibold' : '' }}">
                        Home
                    </a>

                    <a href="{{ route('form.create') }}"
                        class="px-4 py-2 text-white hover:bg-blue-700 rounded-md transition-colors duration-300 ease-in-out {{ request()->routeIs('form.create') ? 'bg-blue-900 font-semibold' : '' }}">
                        Admission
                    </a>
                </div>
            </div>
        </div>
    </nav>
    {{ $slot }}
</body>

</html>
