@extends('layout.master')

@section('title', 'Service Page')

@section('content')


<section>
    <section>
    <div class="flex justify-between p-10">
        <h3 class= "text-2xl text-green-400">Service</h3>
        <div class="pr-10">
            <form action="/action_page.php">
            <input type="search" id="catsearch" name="catsearch">
            <input type="search" id="placesearch" name="placesearch">
            <button>Search</button>
            </form>
        </div>
    </div>
    </section >
    <section class="mb-3 border border-green-400">
        <div class="flex justify-between p-10 relative">
            <div class="flex items-center">
                <img class="w-50 h-40" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjSP39RzMJLLdbkvjfbiVwYw2gozVcaYd6HA&usqp=CAU" alt="">
                <div class="ml-10 ">
                    <h2>ANGKOR WAT TEMPLE</h2>
                    <h4>Rate</h4>
                    <h4>bus, quick car , flight</h4>
                    <h4>temple, seim reap</h4>
                </div>
            </div>
            <div class="ml-5 absolute bottom-0 right-0 pb-10 pr-10">
                <a href="http://127.0.0.1:8000/detail"><button class="bg-green-400 ml-5 px-3">Detail</button></a>
                <a href="http://127.0.0.1:8000/book"><button class="bg-green-400 ml-5 px-3">Book</button></a>
                <a href=""><button class="bg-green-400 ml-5 px-3">Explore More</button></a>
            </div>
        </div>
    </section>

</section>

@endsection
