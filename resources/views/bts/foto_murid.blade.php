@extends('layouts.layout')
@section('title', 'Foto Murid')
@section('content')
    <style>
        .hover-box {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .grid-item:hover .hover-box {
            opacity: 1;
        }

        .scroll-container {
            overflow: auto;
            scrollbar-width: thin;
            scrollbar-color: transparent;

        }
    </style>
    <section>
        <div class="grid grid-cols-3 h-full">
            <div class="col-span-1 bg-[#3C0000] relative p-4 outline-none h-screen" style="">
                <img src="{{ asset('assets/tirai_merah_kiri.png') }}"
                    class="absolute left-[-20px] top-1/2 transform -translate-y-1/2 h-full z-0" />
                <img src="{{ asset('assets/tirai_merah_kanan.png') }}"
                    class="absolute right-[-20px] top-1/2 transform -translate-y-1/2 z- h-full " />
                <div class="absolute z-10 left-0 top-24">
                    <h1 class=" ml-16 text-white font-extrabold text-5xl font-[Luckiest Guy] mb-3" style="">CLASS
                        12 RPL B</>
                        <h6 class=" ml-5 mr-6 text-white font-medium text-xs font-[Luckiest Guy] text-center mb-5">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum necessitatibus, iste
                            impedit eligendi excepturi numquam earum praesentium ipsum quam dolor cupiditate?
                            Perspiciatis sequi officiis hic placeat excepturi cum atque maiores rem quis reiciendis,
                            nobis perferendis explicabo quia voluptates numquam eius soluta fuga amet! Provident saepe
                            veniam molestias quia, ab delectus quos unde sunt aperiam itaque mollitia fuga aliquid
                            officiis reprehenderit numquam at aspernatur. Ullam, facilis enim? Culpa, at pariatur. Amet!
                        </h6>
                        <div class="flex items-center justify-center w-full">
                            <img src="{{ asset('assets/Group 113.png') }}" class="w-96" alt="">
                        </div>
                </div>
            </div>
            <div class=" bg-white p-4 z-10 col-span-2 scroll-container">
                <div class="grid grid-cols-8 grid-rows-4 gap-4 grid-flow-col auto-cols-auto text-xs text-center min-w-max">
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center relative overflow-hidden group">
                        <img src="{{ asset('assets/poto pa boan 5.png') }}"
                            class="border-3 border-black w-[85px] h-auto group-hover:opacity-50 transition-opacity"
                            alt="">
                        <span class="">Nama: Lorem ipsum dolor</span>
                        <span>telp: 0812345678</span>
                        <span>@ lorem 123</span>
                        <div
                            class="hover-box opacity-0 group-hover:opacity-100 absolute top-0 left-0 w-full h-full bg-white p-4 text-black transition-opacity">
                            <p>"lorem ipsum"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
