<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Home</title>
</head>

<body>

    <main class="h-screen flex flex-wrap overflow-hidden">
        <img src="{{ asset('assets/vector_left.png') }}"
            class="absolute left-0 top-1/2 transform -translate-y-1/2 z-20 h-full" />

        <div class="relative w-full">

            <div class="bg-opacity-80 absolute top-0 left-0 w-full h-full z-10 bg-red-900"></div>

            <img src="{{ asset('assets/movie.png') }}" class="bg-cover w-full h-full object-cover" />

            <img src="{{ asset('assets/lotre_kiri.png') }}"
                class="absolute left-0 top-1/2 transform -translate-y-1/2 w-full h-full z-10" />

            <img src="{{ asset('assets/chair.png') }}" class="w-full absolute bottom-0 left-0 z-10" />

            <img src="{{ asset('assets/lotre_kanan.png') }}"
                class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 w-full h-full" />
        </div>

        <img src="{{ asset('assets/vector_right.png') }}"
            class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 h-full" />
    </main>

    {{-- <main class="min-h-screen flex flex-wrap min-w-full">

        <div class="bg-opacity-80 absolute top-0 left-0 w-full h-full z-10 bg-red-900"></div>

        <img src="{{ asset('assets/vector_left.png') }}"
            class="absolute left-0 top-1/2 transform -translate-y-1/2 z-20" />

        <div class="relative w-full">
            <img src="{{ asset('assets/movie.png') }}" class="bg-cover w-full h-full object-cover" />

            <img src="{{ asset('assets/lotre_kiri.png') }}"
                class="absolute left-0 top-1/2 transform -translate-y-1/2 w-full z-10" />

            <img src="{{ asset('assets/chair.png') }}" class="w-full absolute bottom-0 left-0 z-10" />

            <img src="{{ asset('assets/lotre_kanan.png') }}"
                class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 w-full" />
        </div>

        <img src="{{ asset('assets/vector_right.png') }}"
            class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10" />
    </main> --}}
</body>

</html>
