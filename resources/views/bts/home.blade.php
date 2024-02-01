@extends('layouts.layout')
@section('title', 'Home')
@section('content')
    <section class="h-screen flex flex-wrap overflow-hidden relative">
        <img src="{{ asset('assets/tirai_merah_kiri.png') }}"
            class="absolute left-0 top-1/2 transform -translate-y-1/2 z-20 h-full" />

        <div class="relative w-full">

            <div class="bg-opacity-80 absolute top-0 left-0 w-full h-full z-10 bg-red-900"></div>

            <div class="absolute inset-0 flex justify-center items-center">
                <img src="{{ asset('assets/smk1kotabekasi.png') }}" class="w-[65%] z-30">
            </div>

            <img src="{{ asset('assets/movie.png') }}" class="bg-cover w-full h-full object-cover" />

            <img src="{{ asset('assets/lotre_kiri.png') }}"
                class="absolute top-1/2 transform -translate-y-1/2 -translate-x-[15%] h-full z-10" />

            <img src="{{ asset('assets/clapperboard.png') }}"
                class="absolute top-1/2 transform -translate-y-1/2 -translate-x-[15%] h-1/4 z-20" />

            <img src="{{ asset('assets/lampu_kanan.png') }}"
                class="absolute left-0 top-[10%] transform -translate-y-1/2 z-20 h-1/4" />

            <img src="{{ asset('assets/persegiHitam.png') }}"
                class="absolute left-[4%] top-[10%] transform -translate-y-1/2 z-10 h-[10%] w-1/6" />

            <img src="{{ asset('assets/chair.png') }}" class="w-full absolute bottom-0 left-0 z-10" />

            <img src="{{ asset('assets/lotre_kanan.png') }}"
                class="absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-[15%] z-10 h-full" />

            <img src="{{ asset('assets/lampu_kiri.png') }}"
                class="absolute right-0 top-[10%] transform -translate-y-1/2 z-20 h-1/4" />

            <img src="{{ asset('assets/hapy.png') }}"
                class="absolute right-[5%] top-1/2 transform -translate-y-1/2 z-30 h-1/4" />

            <img src="{{ asset('assets/sad.png') }}"
                class="absolute right-0 top-1/2 transform -translate-y-1/2 z-20 h-1/4" />
        </div>

        <img src="{{ asset('assets/tirai_merah_kanan.png') }}"
            class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 h-full" />

    </section>
