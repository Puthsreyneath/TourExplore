@extends('layout.master')

@section('title', 'Test Page')

@section('content')
    <h1 class="text-cyan-500 text-3xl sniglet_font">Welcome to Laravel Test Page</h1>
    <i class="fa fa-copy"></i>
    <i class="fa fa-save"></i>
    <i class="fa fa-trash"></i>
    <i class="fa fa-home"></i>
    <i class="fa fa-laptop-code"></i>
@endsection

    {{-- <button class="block md:hidden py-3 px-4 mx-2 rounded focus:outline-none hover:bg-green-300 group">
        <div><i class="fa-solid fa-bars text-2xl"></i></div>
        <div
            class="absolute top-0 -right-full opacity-0 h-screen w-8/12 bg-[#6EDE8A] border transform group-focus:right-0 group-focus:opacity-100 transition-all duration-300">
            <ul class="w-full flex flex-col items-center pt-10 text-xl  font-semibold cursor-pointer">
                <li class="capitalize hover:bg-green-300 py-2 px-4 rounded-md w-full">home</li>
                <li class="capitalize hover:bg-green-300 py-2 px-4 rounded-md w-full">About</li>
                <li class="capitalize hover:bg-green-300 py-2 px-4 rounded-md w-full">Explore</li>
                <li class="capitalize hover:bg-green-300 py-2 px-4 rounded-md w-full">Shop</li>
                <li class="capitalize hover:bg-green-300 py-2 px-4 rounded-md w-full">Service</li>
                <li class="capitalize hover:bg-green-300 py-2 px-4 rounded-md w-full">Contact</li>
                <li><i class="fa-solid fa-gear pt-2 pb-6 w-full"></i></li>
                <li><i class="fa-solid fa-circle-user w-full"></i></li>
            </ul>
        </div>
    </button> --}}
