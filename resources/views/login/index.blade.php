@extends('layouts.layout')
@section('content')
    <div class="flex items-center justify-center h-screen overflow-hidden relative" style="background-color: #590000">
        <img src="{{ asset('assets/tirai_merah_kiri.png') }}"
            class="absolute left-0 top-1/2 transform -translate-y-1/2 h-full" />

        <img src="{{ asset('assets/tirai_hitam_kiri.png') }}"
            class="absolute left-0 top-1/2 transform -translate-y-1/2 h-full" />


        <form class="max-w-full relative">
            <span class="text-white font-semibold text-4xl absolute ml-32 mt-20">WELCOME</span>
            <img src="{{ asset('assets/kelap.png') }}" class="mb-80 w-full max-w-lg mx-auto" />
            <div class="-translate-x-56 font-semibold">
                <span class="text-white absolute bottom-64 left-1/2 transform  text-3xl ">Login</span>
                <span class="text-white absolute bottom-52 left-1/2 whitespace-nowrap">Please fill your information
                    below</span>

                <div class="flex absolute bottom-36 left-1/2 w-96 h-12">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="Iconly/Bold/Profile">
                                <g id="Profile">
                                    <path id="Profile_2" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15.3021 7.34254C15.3021 10.3018 13.217 12.7007 10.6448 12.7007C8.07271 12.7007 5.98759 10.3018 5.98759 7.34254C5.98759 4.38331 8.07271 1.98438 10.6448 1.98438C13.217 1.98438 15.3021 4.38331 15.3021 7.34254ZM14.6423 15.7196C16.1231 16.0551 17.0898 16.6024 17.5041 17.4851C17.8153 18.174 17.8153 18.9942 17.5041 19.6831C17.0898 20.5658 16.1614 21.1484 14.6269 21.4486C13.9431 21.6028 13.251 21.7031 12.5553 21.7487C11.9108 21.8281 11.2663 21.8281 10.6142 21.8281H9.44025C9.19473 21.7928 8.95688 21.7752 8.7267 21.7752C8.031 21.7351 7.3387 21.6378 6.6551 21.4839C5.17429 21.1661 4.20755 20.6011 3.79323 19.7184C3.63329 19.3765 3.54896 18.9945 3.54771 18.6062C3.54437 18.2155 3.62614 17.8301 3.78556 17.4851C4.1922 16.6024 5.15895 16.0286 6.6551 15.7196C7.34171 15.5689 8.03638 15.4715 8.73437 15.4283C10.0112 15.3132 11.2939 15.3132 12.5707 15.4283C13.266 15.4737 13.9579 15.571 14.6423 15.7196Z"
                                        fill="#868AA5" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <input type="text" id="email-address-icon"
                        class="bg-gray-50 border border-gray-50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 pl-14 placeholder:text-gray-400"
                        placeholder="Name">
                </div>


                <div class="flex absolute bottom-20 left-1/2 w-96 h-12">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.54163 0C4.22995 0 3.16663 1.06332 3.16663 2.375V16.625C3.16663 17.9367 4.22995 19 5.54163 19H13.4583C14.77 19 15.8333 17.9367 15.8333 16.625V2.375C15.8333 1.06332 14.77 0 13.4583 0H5.54163ZM9.49996 15.8333C9.93718 15.8333 10.2916 15.4789 10.2916 15.0417C10.2916 14.6044 9.93718 14.25 9.49996 14.25C9.06273 14.25 8.70829 14.6044 8.70829 15.0417C8.70829 15.4789 9.06273 15.8333 9.49996 15.8333Z"
                                fill="#868AA5" />
                        </svg>

                    </div>
                    <input type="text" id="email-address-icon"
                        class="bg-gray-50 border border-gray-50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 pl-14 placeholder:text-gray-400"
                        placeholder="Name">
                </div>

                <div class="flex absolute bottom-4 left-1/2 w-96 h-12">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M3.33337 2.5C1.95266 2.5 0.833374 3.61929 0.833374 5V15C0.833374 16.3807 1.95266 17.5 3.33337 17.5H16.6667C18.0474 17.5 19.1667 16.3807 19.1667 15V5C19.1667 3.61929 18.0474 2.5 16.6667 2.5H3.33337ZM5.53355 6.0265C5.17998 5.73187 4.65451 5.77964 4.35988 6.1332C4.06524 6.48676 4.11301 7.01224 4.46657 7.30687L8.3996 10.5844C9.32672 11.357 10.6734 11.357 11.6005 10.5844L15.5335 7.30687C15.8871 7.01224 15.9349 6.48676 15.6402 6.1332C15.3456 5.77964 14.8201 5.73187 14.4666 6.0265L10.5335 9.30402C10.2245 9.56156 9.77561 9.56156 9.46657 9.30403L5.53355 6.0265Z"
                                fill="#868AA5" />
                        </svg>

                    </div>
                    <input type="text" id="email-address-icon"
                        class="bg-gray-50 border border-gray-50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 pl-14 placeholder:text-gray-400"
                        placeholder="Name">
                </div>

                <div class="absolute -bottom-14 -right-1/3 w-1/5 h-12">
                    <img src="{{ asset('assets/login.png') }}">
                </div>

                <div class="absolute -bottom-16 -right-1/3 w-10/12  border border-b"></div>

            </div>
        </form>


        <img src="{{ asset('assets/tirai_merah_kanan.png') }}"
            class="absolute right-0 top-1/2 transform -translate-y-1/2 h-full z-0" />

        <img src="{{ asset('assets/tirai_hitam_kanan.png') }}"
            class="absolute right-0 top-1/2 transform -translate-y-1/2 h-full z-0" />
    </div>
@endsection
