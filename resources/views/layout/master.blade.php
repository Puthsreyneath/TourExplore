<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['./resources/css/app.css', './resources/js/app.js'])
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        [x-cloak] { display: none !important; }
    </style>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
</head>

<body class="bg-[#DEEEE2] dark:bg-gray-700" x-data="{ openMenu: false }"
:class="openMenu ? 'overflow-hidden' : 'overflow-visible' ">

{{-- navigation bar --}}
    <header>
        <nav class="bg-[#6EDE8A] shadow-md dark:bg-gray-800">
            <div class="container m-auto flex justify-between items-center text-white">
                <div class="flex items-center justify-between">
                    <h1 class="pl-8 py-4 text-3xl font-bold uppercase">ntn</h1>
                    <button id="theme-toggle" type="button"
                            class="text-white dark:text-white hover:bg-green-300 dark:hover:bg-gray-700 rounded-full text-sm p-1 mx-4">
                                <svg id="theme-toggle-dark-icon" class="hidden w-[32px] h-[32px]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                                <svg id="theme-toggle-light-icon" class="hidden w-[32px] h-[32px]" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                            </button>
                </div>
                <i class="fa-solid fa-bars text-2xl mld:hidden px-8" @click="openMenu = !openMenu"></i>
                <ul class="hidden mld:flex mld:items-center  text-xl font-semibold cursor-pointer">
                    <li class="capitalize mx-4  border-b-2 border-transparent hover:border-white"><a href="/" class="{{  Request::is('/') ? 'border-b-2 border-b-white' : '' }}">home</a></li>
                    <li class="capitalize mx-4  border-b-2 border-transparent hover:border-white"><a href="/about_us" class="{{ Request::is('about_us') ? 'border-b-2 border-b-white' : '' }}">About</a></li>
                    <li class="capitalize mx-4  border-b-2 border-transparent hover:border-white"><a href="/explore" class="{{  Request::is('explore') ? 'border-b-2 border-b-white' : '' }}">Explore</a></li>
                    <li class="capitalize mx-4  border-b-2 border-transparent hover:border-white"><a href="" class="{{  Request::is('') ? 'border-b-2 border-b-white' : '' }}">Shop</a></li>
                    <li class="capitalize mx-4  border-b-2 border-transparent hover:border-white"><a href="" class="{{  Request::is('') ? 'border-b-2 border-b-white' : '' }}">Service</a></li>
                    <li class="capitalize mx-4  border-b-2 border-transparent hover:border-white mr-10"><a href="" class="{{  Request::is('') ? 'border-b-2 border-b-white' : '' }}">Contact</a></li>
                    <li>@if (Route::has('register'))
                        <div class="  px-6 py-4 block">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                            @else
                                
                                <a href="{{ route('register') }}" ><i class="fa-solid fa-circle-user p-4"></i></a>
                                
                            @endauth
                        </div>
                    @endif</li>
                </ul>
            </div>
        </nav>
    </header>
    {{-- Pop Out Sidebar --}}
    <nav class="fixed top-0 left-0 bottom-0 right-0 z-10"
    :class="openMenu ? 'visible' : 'invisible' " x-cloak>
        <ul class="absolute top-0 right-0 bottom-0 w-3/5 py-8 drop-shadow-2xl bg-[#6EDE8A] dark:bg-gray-800 text-white text-lg transition-all duration-500"
        :class="openMenu ? 'translate-x-0' : 'translate-x-full' ">
            <li class="capitalize hover:bg-green-300  border-b border-white  dark:hover:bg-gray-700"><a href="/" class="block p-4 {{ Request::is('/') ? 'bg-green-300 dark:bg-gray-700' : '' }}">home</a></li>
            <li class="capitalize hover:bg-green-300  border-b border-white  dark:hover:bg-gray-700"><a href="/about_us" class="block p-4 {{ Request::is('about_us') ? 'bg-green-300 dark:bg-gray-700' : '' }}">About</a></li>
            <li class="capitalize hover:bg-green-300  border-b border-white  dark:hover:bg-gray-700"><a href="/explore" class="block p-4 {{ Request::is('explore') ? 'bg-green-300 dark:bg-gray-700' : '' }}">Explore</a></li>
            <li class="capitalize hover:bg-green-300  border-b border-white  dark:hover:bg-gray-700"><a href="" class="block p-4 {{ Request::is('//') ? 'bg-green-300 dark:bg-gray-700' : '' }}">Shop</a></li>
            <li class="capitalize hover:bg-green-300  border-b border-white  dark:hover:bg-gray-700"><a href="" class="block p-4 {{ Request::is('//') ? 'bg-green-300 dark:bg-gray-700' : '' }}">Service</a></li>
            <li class="capitalize hover:bg-green-300  border-b border-white  dark:hover:bg-gray-700"><a href="" class="block p-4 {{ Request::is('//') ? 'bg-green-300 dark:bg-gray-700' : '' }}">Contact</a></li>
            <li>
                    @if (Route::has('register'))
                    <div class="  px-6 py-4 block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            
                            <a href="{{ route('register') }}" ><i class="fa-solid fa-circle-user p-4"></i></a>
                            
                        @endauth
                    </div>
                @endif
                    
            </li>
        </ul>

        <button class="absolute top-0 right-0 bottom-0" @click="openMenu = !openMenu">
            <i class="fa-solid fa-xmark text-white text-lg absolute top-2 right-4"></i>
        </button>
    </nav>
    {{-- Pop Out Sidebar --}}
{{-- navigation bar --}}

{{-- content --}}

    @yield('content')

{{-- content --}}
    
{{-- footer --}}
    <footer class="bg-[#6EDE8A] dark:bg-gray-800 text-white">
        <div class="container px-6 py-4 mx-auto">
            <div class="lg:flex">
                <div class="w-full -mx-6 lg:w-1/2">
                    <div class="px-6">
                        <div>
                            <a href="#" class="text-3xl font-bold uppercase dark:text-white dark:hover:text-gray-300">ntn</a>
                        </div>
                        
                        <p class="max-w-md mt-2 dark:text-gray-400">Bachelor of Computer Science at CADT <br> Laravel Project on Tour Explore</p>
                        
                        <div class="flex mt-4 -mx-2">
                            <a href="#" class="mx-2 text-2xl" aria-label="Facebook">
                                <span class="iconify hover:shadow-lg hover:shadow-gray-900 dark:hover:shadow-black" data-icon="logos:facebook" data-width="28"></span>
                            </a>

                            <a href="#" class="mx-2 text-2xl" aria-label="Twitter">
                                <span class="iconify hover:shadow-lg hover:shadow-gray-900 dark:hover:shadow-black" data-icon="logos:twitter" data-width="32"></span>
                            </a>

                            <a href="#" class="mx-2 text-2xl" aria-label="Youtube">
                                <span class="iconify hover:shadow-lg hover:shadow-gray-900 dark:hover:shadow-black" data-icon="logos:youtube-icon" data-width="32"></span>
                            </a>

                            <a href="#" class="mx-2 text-2xl" aria-label="Gmail">
                                <span class="iconify hover:shadow-lg hover:shadow-gray-900 dark:hover:shadow-black" data-icon="logos:google-gmail" data-width="32"></span>
                            </a>

                            <a href="#" class="mx-2 text-2xl" aria-label="Telegram">
                                <span class="iconify hover:shadow-lg hover:shadow-gray-900 dark:hover:shadow-black " data-icon="logos:telegram" data-width="28"></span>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="mt-6 lg:mt-0 lg:flex-1">
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <h3 class="capitalize font-extrabold text-xl dark:text-white">service</h3>
                            <a href="#" class="capitalize block mt-2 text-sm dark:text-gray-400 hover:underline">service</a>
                            <a href="#" class="capitalize block mt-2 text-sm dark:text-gray-400 hover:underline">shop</a>
                            <a href="#" class="capitalize block mt-2 text-sm dark:text-gray-400 hover:underline">explore</a>
                        </div>

                        <div>
                            <h3 class="capitalize font-extrabold text-xl dark:text-white">term</h3>
                            <a href="#" class="capitalize block mt-2 text-sm dark:text-gray-400 hover:underline">about us</a>
                            <a href="#" class="capitalize block mt-2 text-sm dark:text-gray-400 hover:underline">contact</a>
                            <a href="#" class="capitalize block mt-2 text-sm dark:text-gray-400 hover:underline">store's policy</a>
                            <a href="#" class="capitalize block mt-2 text-sm dark:text-gray-400 hover:underline">FAQ</a>
                        </div>

                    </div>
                </div>
            </div>

            <hr class="h-px my-6 bg-white border-none dark:bg-gray-700">

            <div>
                <p class="text-center font-semibold text-white dark:text-white">&copy; <i>NTN</i> 2022 - All Right Reserved</p>
            </div>
        </div>
    </footer>
{{-- footer --}}
</body>
</html>
