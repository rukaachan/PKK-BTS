@extends('layouts.layout')
@section('title', 'Kategori Data')
@section('content')
    <section class=" flex items-center justify-center h-screen overflow-hidden relative" style="background-color: #590000">
        <img src="{{ asset('assets/tirai_merah_kiri.png') }}"
            class="absolute left-0 top-1/2 transform -translate-y-1/2 z-20 h-full" />

        <img src="{{ asset('assets/tirai_hitam_kiri.png') }}"
            class="absolute left-0 top-1/2 transform -translate-y-1/2 h-full" />


        <div class="w-full h-full ps-32">
            <div class="grid grid-rows-2 grid-cols-2 w-full h-full">
                <div class="w-96 mt-9 ml-28">
                    <a href="" class="w-full relative ">
                        <img src="{{ asset('assets/kelap2.png') }}" alt="">
                        <span
                            class="absolute text-white font-bold text-4xl top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[90%] text-center">
                            Data Master
                        </span>
                    </a>
                </div>
                <div class="w-96 mt-9 mr-14">
                    <a href="" class="w-full relative ">
                        <img src="{{ asset('assets/kelap2.png') }}" alt="">
                        <span
                            class="absolute text-white font-bold text-4xl top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[90%] text-center">
                            Identitas Siswa, Guru, Staff, DLL.
                        </span>
                    </a>
                </div>
                <div class="w-96 mb-9 ml-28">
                    <a href="" class="w-full relative ">
                        <img src="{{ asset('assets/kelap2.png') }}" alt="">
                        <span
                            class="absolute text-white font-bold text-4xl top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[90%] text-center">
                            Sambutan
                        </span>
                    </a>
                </div>
                <div class="w-96 mb-9 mr-14">
                    <a href="" class="w-full relative ">
                        <img src="{{ asset('assets/kelap2.png') }}" alt="">
                        <span
                            class="absolute text-white font-bold text-4xl top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[90%] text-center">
                            Foto-Foto BTS
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/tirai_merah_kanan.png') }}"
            class="absolute right-0 top-1/2 transform -translate-y-1/2 z-10 h-full" />

        <img src="{{ asset('assets/tirai_hitam_kanan.png') }}"
            class="absolute right-0 top-1/2 transform -translate-y-1/2 h-full z-0" />
    </section>
