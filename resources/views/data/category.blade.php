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
            <div class="w-96 mt-9 ml-28"><img src="{{ asset('assets/kelap2.png') }}" alt="">
            <a href="" class="w-full"></a></div>
            <div class="w-96 mt-9 mr-14"><img src="{{ asset('assets/kelap2.png') }}" alt=""></div>
            <div class="w-96 mb-9 ml-28"><img src="{{ asset('assets/kelap2.png') }}" alt=""></div>
            <div class="w-96 mb-9 mr-14"><img src="{{ asset('assets/kelap2.png') }}" alt=""></div>
        </div>
    </div>
</body>

</html>
