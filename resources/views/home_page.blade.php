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
        <div class="bg-black/50 p-4 w-[30%] flex flex-col items-center">
          <h1 class="text-white text-xl text-center break-words">Angkor Wat Temple is the most amazing place
            to visit!</h1>
          <button
            class="p-2 bg-green-800 text-white mt-5 rounded hover:bg-white hover:text-green-700 border-transparent hover:border-2 hover:border-green-700 dark:bg-gray-700 dark:hover:bg-gray-50 dark:hover:text-gray-700 dark:hover:border-gray-800">see
            more</button>
        </div>
      </div>
      <div
        class="swiper-slide w-full h-full bg-no-repeat bg-cover bg-left bg-fixed flex flex-col items-center justify-center"
        style="background-image: url('https://www.gildshire.com/wp-content/uploads/2017/04/angkor-wat.jpg')">
        <div class="bg-black/50 p-4 w-[30%] flex flex-col items-center">
        <h1 class="text-white text-xl text-center">Angkor Wat Temple is the most amazing place
          to visit!</h1>
        <button
          class="p-2 bg-green-800 text-white mt-5 rounded hover:bg-white hover:text-green-700 border-transparent hover:border-2 hover:border-green-700 dark:bg-gray-700 dark:hover:bg-gray-50 dark:hover:text-gray-700 dark:hover:border-gray-800">see
          more</button>
        </div>
      </div>
      <div
        class="swiper-slide w-full h-full bg-no-repeat bg-cover bg-left bg-fixed flex flex-col items-center justify-center"
        style="background-image: url('https://whc.unesco.org/uploads/thumbs/site_1224_0017-1200-630-20130711145029.jpg')">
        <div class="bg-black/50 p-4 w-[30%] flex flex-col items-center">
        <h1 class="text-white text-xl text-center">Preah Vihear in Cambodia is a very impressive hindu temple situated on top of a 547 meter high hill in the Dangrek Mountain range in the northeast of Cambodia!</h1>
        <button
          class="p-2 bg-green-800 text-white mt-5 rounded hover:bg-white hover:text-green-700 border-transparent hover:border-2 hover:border-green-700 dark:bg-gray-700 dark:hover:bg-gray-50 dark:hover:text-gray-700 dark:hover:border-gray-800">see
          more</button>
        </div>
      </div>
      <div
        class="swiper-slide w-full h-full bg-no-repeat bg-cover bg-left bg-fixed flex flex-col items-center justify-center"
        style="background-image: url('https://angkorfocus.com/backoffice/uploads/thumbs/new-Bokor-Mountain.jpg')">
        <div class="bg-black/50 p-4 w-[30%] flex flex-col items-center">
        <h1 class="text-white text-xl text-center">Bokor National Park is one of Cambodia's most beautiful and most mystical national parks.
          </h1>
        <button
          class="p-2 bg-green-800 text-white mt-5 rounded hover:bg-white hover:text-green-700 border-transparent hover:border-2 hover:border-green-700 dark:bg-gray-700 dark:hover:bg-gray-50 dark:hover:text-gray-700 dark:hover:border-gray-800">see
          more</button>
        </div>
      </div>
      <div
        class="swiper-slide w-full h-full bg-no-repeat bg-cover bg-left bg-fixed flex flex-col items-center justify-center"
        style="background-image: url('https://construction-property.com/wp-content/uploads/2020/06/KKKrao-01.jpg')">
        <div class="bg-black/50 p-4 w-[30%] flex flex-col items-center">
        <h1 class="text-white text-xl text-center">Koh Kong is the most southwestern province of Cambodia.</h1>
        <button
          class="p-2 bg-green-800 text-white mt-5 rounded hover:bg-white hover:text-green-700 border-transparent hover:border-2 hover:border-green-700 dark:bg-gray-700 dark:hover:bg-gray-50 dark:hover:text-gray-700 dark:hover:border-gray-800">see
          more</button>
        </div>
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
        <img class="w-full h-80 object-fill rounded"
          src="https://images.pexels.com/photos/2662116/pexels-photo-2662116.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
          alt="">
      </div>
      <div class="mld:ml-20 mt-10 mld:w-1/2 flex flex-col items-center">
        <h1 class="mld:text-2xl text-xl text-center dark:text-white">We are specialize in capture information and
          provide you a good impression on each place you want to visit.</h1>
        <a href="{{url('/about_us')}}"
          class="text-white py-2 px-3 bg-green-600 mt-5 rounded-full hover:shadow-lg hover:shadow-green-400 dark:bg-gray-400">know
          us more</a>
      </div>
    </div>
  </div>
</section>
{{-- Promising section --}}

{{-- Recommend section --}}
<section>
  <div>
    <h1 class="mld:text-3xl text-2xl font-extrabold text-center dark:text-white">Recommendation Top Destination</h1>
  </div>

  <div class="flex items-center justify-center min-h-screen container mx-auto my-10">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3  gap-8 w-4/5">
      {{-- card 1 --}}
      <div class="flex flex-col rounded-xl shadow-lg bg-white">
        <div class="rounded-t-xl  overflow-hidden">
          <img class="w-full h-full object-fill"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjSP39RzMJLLdbkvjfbiVwYw2gozVcaYd6HA&usqp=CAU"
            alt="Angkor Wat">
        </div>
        <div class="p-5 flex-1 text-center">
          <h5 class="text-2xl md:text-3xl font-medium mt-3">Angkor Wat</h5>
          <p class="text-lg text-slate-500 mt-3">Lorem ipsum dolor sit,sum doloripsum dolor sit,su si aorem ipsum
            dolor sit, amet conmet consectetur adipisicing elit. Sequi id consequuntur nostrum beatae?</p>
        </div>

        <div class="flex items-center justify-center">
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
        </div>

        <a href="{{url('/explore')}}"
          class="py-2 m-5 text-center bg-green-400 text-white rounded-full font-medium hover:bg-slate-500 dark:bg-gray-700 dark:hover:bg-gray-400">Explore</a>
      </div>

      {{-- card 2 --}}
      <div class="flex flex-col rounded-xl shadow-lg bg-white">
        <div class="rounded-t-xl  overflow-hidden">
          <img class="w-full h-full object-fill"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjSP39RzMJLLdbkvjfbiVwYw2gozVcaYd6HA&usqp=CAU"
            alt="Angkor Wat">
        </div>
        <div class="p-5 flex-1 text-center">
          <h5 class="text-2xl md:text-3xl font-medium mt-3">Angkor Wat</h5>
          <p class="text-lg text-slate-500 mt-3">Lorem ipsum dolor sit,sum doloripsum dolor sit,su si aorem ipsum
            dolor sit, amet conmet consectetur aquuntur nostrum beatae?</p>
        </div>

        <div class="flex items-center justify-center">
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
        </div>

        <a href="#"
          class="py-2 m-5 text-center bg-green-400 text-white rounded-full font-medium hover:bg-slate-500 dark:bg-gray-700 dark:hover:bg-gray-400">Explore</a>
      </div>

      {{-- card 3 --}}
      <div class="flex flex-col rounded-xl shadow-lg bg-white">
        <div class="rounded-t-xl  overflow-hidden">
          <img class="w-full h-full object-fill"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjSP39RzMJLLdbkvjfbiVwYw2gozVcaYd6HA&usqp=CAU"
            alt="Angkor Wat">
        </div>
        <div class="p-5 flex-1 text-center">
          <h5 class="text-2xl md:text-3xl font-medium mt-3">Angkor Wat</h5>
          <p class="text-lg text-slate-500 mt-3">Lorem ipsum dolor sit,sum doloripsum dolor sit,su si aorem ipsum
            dolor sit, amet conmet Lorem consectetur adipisicing elit. Sequi id consequuntur nostrum beatae?</p>
        </div>

        <div class="flex items-center justify-center">
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
        </div>

        <a href="#"
          class="py-2 m-5 text-center bg-green-400 text-white rounded-full font-medium hover:bg-slate-500 dark:bg-gray-700 dark:hover:bg-gray-400">Explore</a>
      </div>

      {{-- card 4 --}}
      <div class="flex flex-col rounded-xl shadow-lg bg-white">
        <div class="rounded-t-xl  overflow-hidden">
          <img class="w-full h-full object-fill"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjSP39RzMJLLdbkvjfbiVwYw2gozVcaYd6HA&usqp=CAU"
            alt="Angkor Wat">
        </div>
        <div class="p-5 flex-1 text-center">
          <h5 class="text-2xl md:text-3xl font-medium mt-3">Angkor Wat</h5>
          <p class="text-lg text-slate-500 mt-3">Lorem ipsum dolor sit,sum doloripsum dolor sit,su si aorem ipsum
            dolor sit, amet conmet consectetur Lorem ipsum dolor sit.adipisicing elit. Sequi id consequuntur nostrum
            beatae?</p>
        </div>

        <div class="flex items-center justify-center">
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
        </div>

        <a href="#"
          class="py-2 m-5 text-center bg-green-400 text-white rounded-full font-medium hover:bg-slate-500 dark:bg-gray-700 dark:hover:bg-gray-400">Explore</a>
      </div>

      {{-- card 5 --}}
      <div class="flex flex-col rounded-xl shadow-lg bg-white">
        <div class="rounded-t-xl overflow-hidden">
          <img class="w-full h-full object-fill"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjSP39RzMJLLdbkvjfbiVwYw2gozVcaYd6HA&usqp=CAU"
            alt="Angkor Wat">
        </div>
        <div class="p-5 flex-1 text-center">
          <h5 class="text-2xl md:text-3xl font-medium mt-3">Angkor Wat</h5>
          <p class="text-lg text-slate-500 mt-3">Lorem ipsum dolor sit,sum doloripsum dolor sit,su si aorem ipsum
            dolor sit, antur nostrum beatae?</p>
        </div>

        <div class="flex items-center justify-center">
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
        </div>

        <a href="#"
          class="py-2 m-5 text-center bg-green-400 text-white rounded-full font-medium hover:bg-slate-500 dark:bg-gray-700 dark:hover:bg-gray-400">Explore</a>
      </div>

      {{-- card 6 --}}
      <div class="flex flex-col rounded-xl shadow-lg bg-white">
        <div class="rounded-t-xl  overflow-hidden">
          <img class="w-full h-full object-fill"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjSP39RzMJLLdbkvjfbiVwYw2gozVcaYd6HA&usqp=CAU"
            alt="Angkor Wat">
        </div>
        <div class="p-5 flex-1 text-center">
          <h5 class="text-2xl md:text-3xl font-medium mt-3">Angkor Wat</h5>
          <p class="text-lg text-slate-500 mt-3">Lorem ipsum dolor sit,sum doloripsum dolor sit,su si aorem ipsum
            dolor sit, amet conmet Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat, sed. Minima, est.
            consectetur adipisicing elit. Sequi id consequuntur nostrum beatae?</p>
        </div>

        <div class="flex items-center justify-center">
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
          <i class="fa-solid fa-star text-yellow-400"></i>
        </div>

        <a href="#"
          class="m-5 py-2 text-center bg-green-400 text-white rounded-full font-medium hover:bg-slate-500 dark:bg-gray-700 dark:hover:bg-gray-400">Explore</a>
      </div>

    </div>
  </div>
</section>
{{-- Recommend section --}}

{{-- Service section --}}
<section>
  <div>
    <h1 class="mld:text-3xl text-2xl font-extrabold text-center dark:text-white">Our Service</h1>
  </div>  

  <div class="mx-auto container my-10 flex justify-center items-center">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4  gap-8 w-[7/10]">
    <a href="" class="flex justify-around text-white bg-green-300 hover:bg-green-700 rounded-lg  px-5 py-2 items-center  dark:bg-gray-500 dark:hover:bg-gray-800">
      <i class="fa-solid fa-hotel text-xl"></i><span class="text-xl font-semibold">Hotel</span>
    </a>
    <a href="" class="flex justify-around text-white bg-green-300 hover:bg-green-700 rounded-lg  px-5 py-2 items-center  dark:bg-gray-500 dark:hover:bg-gray-800">
      <i class="fa-solid fa-bus-simple text-xl pr-2"></i><span class="text-xl font-semibold">Transport</span>
    </a>
    <a href="" class="flex justify-around text-white bg-green-300 hover:bg-green-700 rounded-lg  px-5 py-2 items-center  dark:bg-gray-500 dark:hover:bg-gray-800">
      <i class="fa-solid fa-suitcase text-xl"></i><span class="text-xl font-semibold">Tour</span>
    </a>
    <a href="" class="flex justify-around text-white bg-green-300 hover:bg-green-700 rounded-lg  px-5 py-2 items-center  dark:bg-gray-500 dark:hover:bg-gray-800">
      <i class="fa-solid fa-cart-shopping text-xl"></i><span class="text-xl font-semibold">Shop</span>
    </a>
    </div>
  </div>
</section>
{{-- Service section --}}

{{-- Review section --}}
<section>
  <div>
    <h1 class="mld:text-3xl text-2xl font-extrabold text-center dark:text-white">Reviews</h1>
  </div>  

  <div class="flex items-center justify-center my-10 container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4  gap-8 w-4/5"> 
      <div class="flex flex-col rounded-xl shadow-lg bg-green-700 text-white dark:bg-gray-800">
        <div class="flex flex-row items-center justify-around mt-2">
          <img class="w-10 h-10 rounded-[50%] object-fill" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
          <div class="flex flex-col items-start space-y-1">
            <h4>Aria Smith</h4>
            <div class="flex items-center justify-center">
              <i class="fa-solid fa-star text-yellow-400"></i>
              <i class="fa-solid fa-star text-yellow-400"></i>
              <i class="fa-solid fa-star text-yellow-400"></i>
              <i class="fa-solid fa-star text-yellow-400"></i>
              <i class="fa-solid fa-star text-yellow-400"></i>
            </div>
          </div>
        </div>
        <p class="m-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit aliquam, nulla minus voluptatum esse enim.</p>
      </div>

      <div class="flex flex-col rounded-xl shadow-lg bg-green-700 text-white dark:bg-gray-800">
        <div class="flex flex-row items-center justify-around mt-2">
          <img class="w-10 h-10 rounded-[50%] object-fill" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
          <div class="flex flex-col items-start space-y-1">
            <h4>Aria Smith</h4>
            <div class="flex items-center justify-center">
              <i class="fa-solid fa-star text-yellow-400"></i>
              <i class="fa-solid fa-star text-yellow-400"></i>
              <i class="fa-solid fa-star text-yellow-400"></i>
              <i class="fa-solid fa-star text-yellow-400"></i>
              <i class="fa-solid fa-star text-yellow-400"></i>
            </div>
          </div>
        </div>
        <p class="m-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit aliquam, nulla minus voluptatum esse enim.</p>
      </div>

      <div class="flex flex-col rounded-xl shadow-lg bg-green-700 text-white dark:bg-gray-800">
        <div class="flex flex-row items-center justify-around mt-2">
          <img class="w-10 h-10 rounded-[50%] object-fill" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
          <div class="flex flex-col items-start space-y-1">
            <h4>Aria Smith</h4>
            <div class="flex items-center justify-center">
              <i class="fa-solid fa-star text-yellow-400"></i>
              <i class="fa-solid fa-star text-yellow-400"></i>
              <i class="fa-solid fa-star text-yellow-400"></i>
              <i class="fa-solid fa-star text-yellow-400"></i>
              <i class="fa-solid fa-star text-yellow-400"></i>
            </div>
          </div>
        </div>
        <p class="m-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit aliquam, nulla minus voluptatum esse enim.</p>
      </div>

      <div class="flex flex-col rounded-xl shadow-lg bg-green-700 text-white dark:bg-gray-800">
        <div class="flex flex-row items-center justify-around mt-2">
          <img class="w-10 h-10 rounded-[50%] object-fill" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
          <div class="flex flex-col items-start space-y-1">
            <h4>Aria Smith</h4>
            <div class="flex items-center justify-center">
              <i class="fa-solid fa-star text-yellow-400"></i>
              <i class="fa-solid fa-star text-yellow-400"></i>
              <i class="fa-solid fa-star text-yellow-400"></i>
              <i class="fa-solid fa-star text-yellow-400"></i>
              <i class="fa-solid fa-star text-yellow-400"></i>
            </div>
          </div>
        </div>
        <p class="m-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit aliquam, nulla minus voluptatum esse enim.</p>
      </div>

    </div>
  </div> 
</section>
{{-- Review section --}}
@endsection