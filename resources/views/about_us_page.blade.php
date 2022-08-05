@extends('layout.master')
@section('title', 'About Us Page')
@section('content')
<section>
    <div
    class="pl-10 pt-72 pb-36"
    style="background-image: url('https://www.cadt.edu.kh/wp-content/uploads/2021/10/innovation-center-3.jpg')">
      <h3 class="font-black text-5xl text-white">About Us</h3>
      <p class="text-4xl text-white w-[400px] pt-5">We are from Cambodia Academy of Digital Technology.</p>
    </div>
</section>

<section>
  <h1 class="my-16 mx-10 font-black text-4xl text-green-700">Our Team</h1>

    <div class="my-16 mx-10 p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
        <div class="rounded overflow-hidden shadow-lg text-center">
          <div class="flex justify-center items-center">
            <img class="rounded-full" src="https://dummyimage.com/300" alt="Name">
          </div>
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Name</div>
            <p class="text-gray-700 text-base">Email</p>
            <p class="text-gray-700 text-base">phone</p>
          </div>
        </div>
        <div class="rounded overflow-hidden shadow-lg text-center">
          <div class="flex justify-center items-center">
            <img class="rounded-full" src="https://dummyimage.com/300" alt="Name">
          </div>
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Name</div>
            <p class="text-gray-700 text-base">Email</p>
            <p class="text-gray-700 text-base">phone</p>
          </div>
        </div>
        <div class="rounded overflow-hidden shadow-lg text-center">
          <div class="flex justify-center items-center">
            <img class="rounded-full" src="https://dummyimage.com/300" alt="Name">
          </div>
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Name</div>
            <p class="text-gray-700 text-base">Email</p>
            <p class="text-gray-700 text-base">phone</p>
          </div>
        </div>
      </div>
    </div>
</section>

<section>
    <div class="my-16 mx-10">
        <h2 class="font-black text-4xl text-green-700 pb-9">Our Project</h2>
        <div class="bg-slate-300 flex justify-center rounded-3xl mx-56">
          <p class="text-3xl px-5 py-3">Our project is for helping traveler to reduce the burden of where to go and also give more information about the location like culture, food, tradition, what to enjoy there.
            Especially the product, things that the local using there, suvenire, ...etc.</p>
        </div>
        
    </div>
</section>
@endsection