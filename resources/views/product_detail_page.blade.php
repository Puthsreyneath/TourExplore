@extends('layout.master')
@section('title', 'Product Detail')
@section('content')
<section>
    <div>
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">
            Button
          </button>
        <h1>Pidan Silk</h1>
        <img class="w-screen" src="https://www.collinsdictionary.com/images/full/giftshop_400698646_1000.jpg" alt="">
    </div>
    <div>
        <li class="flex">
            <p>Rate:</p>
            <li class="flex">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
            </li>
        </li>
        <li class="flex">
            <p>Type:</p>
            <p>silk</p>
        </li>
        <li class="flex">
            <p>Contact:</p>
            <p>0XX XXX XXXX</p>
        </li>
        <li class="flex">
            <p>location:</p>
            <p>st10, No56, vill, commune, city</p>
        </li>
    </div>
</section>
@endsection
