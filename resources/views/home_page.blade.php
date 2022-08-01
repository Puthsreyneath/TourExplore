@extends('layout.master')

@section('title', 'Home Page')

@section('content')

<!-- Slider main container -->
<section>
  <div class="swiper w-full lg:h-[800px] mld:h-[580px] h-[400px]">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div
        class="swiper-slide w-full h-full bg-no-repeat bg-cover bg-left bg-fixed flex flex-col items-center justify-center"
        style="background-image: url('https://cambodiatravel.com/images/2020/12/Bayons-face-towers-angkor-thom-cambodia-2.jpg')">
        <h1 class="text-white text-xl text-center">Angkor Wat Temple is the most <br> amazing place
          to visit!</h1>
        <button
          class="p-2 bg-green-800 text-white mt-5 rounded hover:bg-white hover:text-green-700 border-transparent hover:border-2 hover:border-green-700 dark:bg-gray-700 dark:hover:bg-gray-50 dark:hover:text-gray-700 dark:hover:border-gray-800">see
          more</button>
      </div>
      <div
        class="swiper-slide w-full h-full bg-no-repeat bg-cover bg-left bg-fixed flex flex-col items-center justify-center"
        style="background-image: url('https://www.gildshire.com/wp-content/uploads/2017/04/angkor-wat.jpg')">
        <h1 class="text-white text-xl text-center">Angkor Wat Temple is the most <br> amazing place
          to visit!</h1>
        <button
          class="p-2 bg-green-800 text-white mt-5 rounded hover:bg-white hover:text-green-700 border-transparent hover:border-2 hover:border-green-700 dark:bg-gray-700 dark:hover:bg-gray-50 dark:hover:text-gray-700 dark:hover:border-gray-800">see
          more</button>
      </div>
      <div
        class="swiper-slide w-full h-full bg-no-repeat bg-cover bg-left bg-fixed flex flex-col items-center justify-center"
        style="background-image: url('https://whc.unesco.org/uploads/thumbs/site_1224_0017-1200-630-20130711145029.jpg')">
        <h1 class="text-white text-xl text-center">Angkor Wat Temple is the most <br> amazing place
          to visit!</h1>
        <button
          class="p-2 bg-green-800 text-white mt-5 rounded hover:bg-white hover:text-green-700 border-transparent hover:border-2 hover:border-green-700 dark:bg-gray-700 dark:hover:bg-gray-50 dark:hover:text-gray-700 dark:hover:border-gray-800">see
          more</button>
      </div>
      <div
        class="swiper-slide w-full h-full bg-no-repeat bg-cover bg-left bg-fixed flex flex-col items-center justify-center"
        style="background-image: url('https://angkorfocus.com/backoffice/uploads/thumbs/new-Bokor-Mountain.jpg')">
        <h1 class="text-white text-xl text-center">Angkor Wat Temple is the most <br> amazing place
          to visit!</h1>
        <button
          class="p-2 bg-green-800 text-white mt-5 rounded hover:bg-white hover:text-green-700 border-transparent hover:border-2 hover:border-green-700 dark:bg-gray-700 dark:hover:bg-gray-50 dark:hover:text-gray-700 dark:hover:border-gray-800">see
          more</button>
      </div>
      <div
        class="swiper-slide w-full h-full bg-no-repeat bg-cover bg-left bg-fixed flex flex-col items-center justify-center"
        style="background-image: url('https://construction-property.com/wp-content/uploads/2020/06/KKKrao-01.jpg')">
        <h1 class="text-white text-xl text-center">Angkor Wat Temple is the most <br> amazing place
          to visit!</h1>
        <button
          class="p-2 bg-green-800 text-white mt-5 rounded hover:bg-white hover:text-green-700 border-transparent hover:border-2 hover:border-green-700 dark:bg-gray-700 dark:hover:bg-gray-50 dark:hover:text-gray-700 dark:hover:border-gray-800">see
          more</button>
      </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev text-green-600 dark:text-gray-800"></div>
    <div class="swiper-button-next text-green-600 dark:text-gray-800"></div>

  </div>
</section>
<!-- Slider main container -->

{{-- Promising section --}}
<section>
  <div class="mld:flex mld:justify-center mld:items-center">
    <div class="w-10/12 mld:flex mld:items-center my-10 mx-auto">
      <div class="w-full">
        <img class="w-full h-80 object-fill rounded" src="https://images.pexels.com/photos/2662116/pexels-photo-2662116.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
      </div>
      <div class="mld:ml-20 mt-10 mld:w-1/2 flex flex-col items-center">
        <h1 class="mld:text-2xl text-xl text-center dark:text-white">We are specialize in capture information and provide you a good impression on each place you want to visit.</h1>
        <button class="text-white py-2 px-3 bg-green-600 mt-5 rounded-full hover:shadow-lg hover:shadow-green-400 dark:bg-gray-400">know more</button>
      </div>
    </div>
  </div>
</section>
{{-- Promising section --}}


@endsection