@extends('layouts.layout')
@section('content')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class=" flex items-center justify-center h-screen overflow-hidden relative" style="background-color: #590000">
    <div class="w-full h-full ps-32">
        <div class="grid grid-rows-2 grid-cols-2 w-full h-full">
            <div class="w-96 mt-9 ml-28">
                <a href="" class="w-full relative ">
                    <img src="{{ asset('assets/kelap2.png') }}" alt="">
                    <span class="absolute text-white font-bold text-4xl top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[90%] text-center">
                        Data Master
                    </span>
                </a>
            </div>
            <div class="w-96 mt-9 mr-14">
                <a href="" class="w-full relative ">
                    <img src="{{ asset('assets/kelap2.png') }}" alt="">
                    <span class="absolute text-white font-bold text-4xl top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[90%] text-center">
                        Identitas Siswa, Guru, Staff, DLL.
                    </span>
                </a>
            </div>
            <div class="w-96 mb-9 ml-28">
                <a href="" class="w-full relative ">
                    <img src="{{ asset('assets/kelap2.png') }}" alt="">
                    <span class="absolute text-white font-bold text-4xl top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[90%] text-center">
                        Sambutan
                    </span>
                </a>
            </div>
            <div class="w-96 mb-9 mr-14">
                <a href="" class="w-full relative ">
                    <img src="{{ asset('assets/kelap2.png') }}" alt="">
                    <span class="absolute text-white font-bold text-4xl top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[90%] text-center">
                        Foto-Foto BTS
                    </span>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
