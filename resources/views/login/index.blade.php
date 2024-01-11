<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class=" flex items-center justify-center h-screen overflow-hidden relative" style="background-color: #590000">
    <img src="{{ asset('assets/vector_left.png') }}" class="absolute left-0 top-1/2 transform -translate-y-1/2" />
    <div class="max-w-full relative">
        <span class="text-white font-semibold text-4xl absolute ml-32 mt-20">WELCOME</span>
        <img src="{{ asset('assets/kelap.png') }}" class="mb-80" />
        <div class="-translate-x-56 font-semibold">
            <span class="text-white absolute bottom-64 left-1/2 transform  text-3xl ">Login</span>
            <span class="text-white absolute bottom-52 left-1/2 whitespace-nowrap">Please fill your information
                below</span>
            <div class="flex absolute bottom-36 left-1/2 w-80 h-12">
                <span
                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-e-0  rounded-s-md ">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                    </svg>
                </span>
                <input type="text" id=""
                    class="rounded-none rounded-e-lg bg-gray-50  flex-1 w-full text-sm p-2.5" placeholder="Name">

            </div>


            <div class="flex absolute bottom-20 left-1/2 w-80 h-12">
                <span
                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-e-0  rounded-s-md ">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                        <path
                            d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                        <path
                            d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                    </svg>
                </span>
                <input type="text" id=""
                    class="rounded-none rounded-e-lg bg-gray-50  flex-1 w-full text-sm p-2.5"
                    placeholder="Email Address">

            </div>
        </div>
    </div>
    <img src="{{ asset('assets/vector_right.png') }}" class="absolute right-0 top-1/2 transform -translate-y-1/2" />
</body>

</html>
