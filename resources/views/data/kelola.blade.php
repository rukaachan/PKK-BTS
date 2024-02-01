@extends('layouts.layout')
@section('title', 'Kelola Data')
@section('content')
    <section class="h-screen flex flex-wrap overflow-hidden relative bg-[#590000]">
        <img src="{{ asset('assets/tirai_merah_kiri.png') }}"
            class="absolute left-0 top-1/2 transform -translate-y-1/2 h-full" />

        <img src="{{ asset('assets/tirai_hitam_kiri.png') }}"
            class="absolute left-0 top-1/2 transform -translate-y-1/2 h-full" />

        <div class="w-8/12 mx-auto my-5">
            <h1 class="text-4xl text-white font-bold text-center">Tabel Data Identitas</h1>
            <div class="flex items-center justify-center mt-5">
                <div class="grid grid-cols-4 gap-4">
                    <button
                        class="rounded-full bg-[#B40000] p-2 px-8  mx-2 text-xl text-white border-2 border-[#FFFF00]">Siswa</button>
                    <button
                        class="rounded-full bg-[#B40000] p-2 px-8  mx-2 text-xl text-white border-2 border-[#FFFF00]">Guru</button>
                    <button
                        class="rounded-full bg-[#B40000] p-2 px-8  mx-2 text-xl text-white border-2 border-[#FFFF00]">Staff</button>
                    <button
                        class="rounded-full bg-[#B40000] p-2 px-8  mx-2 text-xl text-white border-2 border-[#FFFF00]">Sekolah</button>
                    <button
                        class="rounded-full bg-[#00D715] p-2 px-8  mx-2 text-xl text-white border-2 border-[#FFFF00]">Tambah</button>
                    <button
                        class="rounded-full bg-[#0091CF] p-2 px-8  mx-2 text-xl text-white border-2 border-[#FFFF00]">Edit</button>

                </div>
            </div>
            <div class="flex items-center justify-center mt-5 text-white">
                <table class="w-10/12 bg-[#B40000] border-[#FFFF00] text-xl overflow-hidden rounded">
                    <thead class="p-56">
                        <tr>
                            <th class="border-2 border-[#FFFF00] w-1/12">No</th>
                            <th class="border-2 border-[#FFFF00]">Nama Siswa</th>
                            <th class="border-2 border-[#FFFF00]">Kelas Siswa</th>
                            <th class="border-2 border-[#FFFF00]">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="padding-td">
                            <td class="border-2 border-[#FFFF00]">a</td>
                            <td class="border-2 border-[#FFFF00]">b</td>
                            <td class="border-2 border-[#FFFF00]">c</td>
                            <td class="border-2 border-[#FFFF00]">d</td>

                        </tr>
                        <tr>
                            <td class="border-2 border-[#FFFF00]">a</td>
                            <td class="border-2 border-[#FFFF00]">b</td>
                            <td class="border-2 border-[#FFFF00]">c</td>
                            <td class="border-2 border-[#FFFF00]">d</td>

                        </tr>
                        <tr>
                            <td class="border-2 border-[#FFFF00]">a</td>
                            <td class="border-2 border-[#FFFF00]">b</td>
                            <td class="border-2 border-[#FFFF00]">c</td>
                            <td class="border-2 border-[#FFFF00]">d</td>

                        </tr>
                        <tr>
                            <td class="border-2 border-[#FFFF00]">a</td>
                            <td class="border-2 border-[#FFFF00]">b</td>
                            <td class="border-2 border-[#FFFF00]">c</td>
                            <td class="border-2 border-[#FFFF00]">d</td>

                        </tr>
                        <tr>
                            <td class="border-2 border-[#FFFF00]">a</td>
                            <td class="border-2 border-[#FFFF00]">b</td>
                            <td class="border-2 border-[#FFFF00]">c</td>
                            <td class="border-2 border-[#FFFF00]">d</td>

                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="flex items-center justify-center mt-5 text-white">
                <table class="w-10/12 bg-[#B40000] border-[#FFFF00] text-xl overflow-hidden rounded">
                    <tbody class="padding-td">
                        <tr>
                            <td class="border-2 border-[#FFFF00]">Nama Sekolah</td>
                            <td class="border-2 border-[#FFFF00] w-1/2"> : Lorem ipsum dolor sit amet.</td>

                        </tr>
                        <tr>
                            <td class="border-2 border-[#FFFF00]">Angkatan</td>
                            <td class="border-2 border-[#FFFF00]"> : Lorem ipsum dolor sit amet.</td>

                        </tr>
                        <tr>
                            <td class="border-2 border-[#FFFF00]">Alamat Sekolah</td>
                            <td class="border-2 border-[#FFFF00]"> : Lorem, ipsum.</td>

                        </tr>
                        <tr>
                            <td class="border-2 border-[#FFFF00]">Tema BTS</td>
                            <td class="border-2 border-[#FFFF00]"> : Lorem ipsum dolor sit amet.</td>

                        </tr>
                        <tr>
                            <td class="border-2 border-[#FFFF00]">Hastag Sekolah</td>
                            <td class="border-2 border-[#FFFF00]"> : Lorem ipsum dolor sit amet.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <img src="{{ asset('assets/tirai_merah_kanan.png') }}"
            class="absolute right-0 top-1/2 transform -translate-y-1/2 h-full" />

        <img src="{{ asset('assets/tirai_hitam_kanan.png') }}"
            class="absolute right-0 top-1/2 transform -translate-y-1/2 h-full z-0" />
    </section>

@endsection
