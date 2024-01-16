@extends('layouts.layout')
@section('content')
    <div class=" flex items-center justify-center h-screen overflow-hidden relative" style="background-color: #590000">
        <img src="{{ asset('assets/vector_left.png') }}" class="absolute left-0 top-1/2 transform -translate-y-1/2 h-full" />

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
                        class="bg-gray-50 border border-gray-50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 pl-12 placeholder:text-gray-400"
                        placeholder="Name">
                </div>


                <div class="flex absolute bottom-20 left-1/2 w-96 h-12">
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
                        class="bg-gray-50 border border-gray-50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 pl-12 placeholder:text-gray-400"
                        placeholder="Name">
                </div>

            </div>
        </form>


        <img src="{{ asset('assets/vector_right.png') }}"
            class="absolute right-0 top-1/2 transform -translate-y-1/2 h-full z-0" />
    </div>
@endsection
