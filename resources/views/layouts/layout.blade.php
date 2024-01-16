<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div data-dial-init class="fixed top-6 start-6 group bg-white border border-darkRed  rounded-full"
        style="z-index: 999999">
        <button type="button" data-dial-toggle="speed-dial-menu-top-left" aria-controls="speed-dial-menu-top-left"
            aria-expanded="false"
            class="flex items-center justify-center text-white bg-darkRed rounded-full w-14 h-14 hover:bg-darkRed dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-non border-yellow-250 border-3">
            <svg class="w-6 h-6 text-white transition-transform group-hover:rotate-45" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
            <span class="sr-only">Open actions menu</span>
        </button>
        <div id="speed-dial-menu-top-left" class="flex-col items-center hidden  mt-4 space-y-2 justify-center">
            <a href="/kategori-data">
                <button type="button" data-tooltip-target="tooltip-data" data-tooltip-placement="left"
                    class="flex justify-center items-center w-[52px] h-[52px]  rounded-full border border-gray-200  shadow-sm bg-darkRed hover:bg-red-900 mb-2">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 18 18">
                        <path
                            d="M18 5H0v11a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5Zm-7.258-2L9.092.8a2.009 2.009 0 0 0-1.6-.8H2.049a2 2 0 0 0-2 2v1h10.693Z" />
                    </svg>
                    <span class="sr-only">Data</span>
                </button>
            </a>
            <div id="tooltip-data" role="tooltip"
                class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Data
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <a href="">
                <button type="button" data-tooltip-target="tooltip-bts" data-tooltip-placement="left"
                    class="flex justify-center items-center w-[52px] h-[52px] bg-darkRed hover:bg-red-900 text-white rounded-full border mb-2">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 18">
                        <path
                            d="M9 1.334C7.06.594 1.646-.84.293.653a1.158 1.158 0 0 0-.293.77v13.973c0 .193.046.383.134.55.088.167.214.306.366.403a.932.932 0 0 0 .5.147c.176 0 .348-.05.5-.147 1.059-.32 6.265.851 7.5 1.65V1.334ZM19.707.653C18.353-.84 12.94.593 11 1.333V18c1.234-.799 6.436-1.968 7.5-1.65a.931.931 0 0 0 .5.147.931.931 0 0 0 .5-.148c.152-.096.279-.235.366-.403.088-.167.134-.357.134-.55V1.423a1.158 1.158 0 0 0-.293-.77Z" />
                    </svg>
                    <span class="sr-only">BTS</span>
                </button>
            </a>
            <div id="tooltip-bts" role="tooltip"
                class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                BTS
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <a href="">
                <button type="button" data-tooltip-target="tooltip-about" data-tooltip-placement="left"
                    class="flex justify-center items-center w-[52px] h-[52px] bg-darkRed hover:bg-red-900 text-white rounded-full border mb-2">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
                    </svg>
                    <span class="sr-only">About</span>
                </button>
                <div id="tooltip-about" role="tooltip"
                    class="absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    About
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </a>

        </div>
    </div>
    @yield('content')
</body>

</html>
