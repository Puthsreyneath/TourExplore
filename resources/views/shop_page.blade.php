@extends('layout.master')

@section('title', 'Shop Page')

@section('content')

{{-- welcome area --}}
<section class="relative flex justify-center">
    <div class="container w-[90%] flex flex-col-reverse lg:flex-row items-center lg:gap-12 mld:gap-2 gap-8 mt-14 mb-8 lg:my-20">
        <div class="flex flex-1 flex-col items-center lg:items-start">
            <h2 class="text-green-800 dark:text-gray-100 text-3xl md:text-4xl lg:text-6xl text-center lg:text-left mb-6">Find Suvenirs<br>in Locations<br>You're visiting. <br>Here!
            </h2>
            <p class="md:text-lg text-base text-green-500 dark:text-gray-400 text-center lg:text-left mb-6">
                You can find everythings you want. <br>Wherever you go, Wherever you are.
            </p>
        </div>
        <div class="flex justify-center flex-1">
            <img class="md:w-[90%] md:h-[90%] lg:w-full lg:h-full w-full h-full rounded-xl" src="https://www.phnompenhpost.com/sites/default/files/styles/image_780x440/public/field/image/sihanoukvilles_real_estate_market_belies_the_promise_of_robust_growth_tha.jpg?itok=sDYNfEFV" alt="Sihanoukville">
        </div>
    </div>
    <div class="dark:bg-slate-800 hidden mld:block overflow-hidden bg-green-600 rounded-l-full -z-10 h-40 w-1/2 lg:h-1/2 lg:w-2/5 absolute top-6 lg:top-52 right-0"></div>
</section>
{{-- welcome area --}}

{{-- search area --}}
<section>
    <div class="container mx-auto flex flex-col justify-start w-[90%] mb-10">
        <div class="text-2xl dark:text-gray-200 mb-5">
            <h2>Search Products</h2>
        </div>
        <div class="bg-white rounded-lg lg:h-16 flex lg:flex-row lg:justify-between lg:items-center lg:pl-10
        flex-col gap-4 lg:p-0 p-5">
            <div class="lg:w-1/4 w-full h-12">
                <input type="text" placeholder="search..." class="bg-green-300 dark:bg-gray-400 rounded-2xl w-full h-12 px-4 border-none focus:outline-none focus:ring-2 focus:ring-green-600 dark:focus:ring-gray-600">
            </div>
            <div class="lg:w-1/4 w-full h-12">
                <select id="provinces" class="bg-green-300 dark:bg-gray-400 rounded-2xl w-full h-12 px-4 text-black border-none  focus:outline-none focus:ring-2 focus:ring-green-600 dark:focus:ring-gray-600">
                    <option selected>Choose a province</option>
                    <option value="PP">Phnom Penh</option>
                    <option value="SR">Siem Reap</option>
                    <option value="SV">Sihanoukville</option>
                    <option value="KK">Koh Kong</option>
                  </select>
            </div>
            <div class="lg:w-20 w-12 h-12 lg:h-16 rounded-full lg:rounded-l-none lg:rounded-r-lg bg-[#208B3A] hover:bg-green-600 dark:bg-gray-800 hover:dark:bg-gray-500 flex justify-center items-center lg:ml-0 ml-auto">
                <button type="submit"><i class="fa-solid fa-magnifying-glass text-white"></i></button>
            </div>
        </div>
        <div class="flex items-center justify-center min-h-screen container mx-auto my-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3  gap-8 ">
              {{-- card 1 --}}
              <div>
                <a href="/product_detail" class="{{ Request::is('product_detail') ? '' : '' }}">
                  <div class="flex flex-col rounded-xl shadow-lg bg-white">
                    <div class="rounded-t-xl  overflow-hidden">
                      <img class="w-full h-full object-fill"
                        src="https://www.collinsdictionary.com/images/full/giftshop_400698646_1000.jpg"
                        alt="Pidan Silk">
                    </div>
                    <div class="px-8 pt-5 flex-1">
                      <div class="flex flex-row justify-between">
                          <div class="flex flex-col">
                              <h5 class="text-lg text-green-700 md:text-2xl font-bold mt-3">Pidan Silk</h5>
                              <h6>Sihanoukville</h6>
                          </div>
                          <div class="flex items-center justify-center">
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                            <i class="fa-solid fa-star text-yellow-400"></i>
                          </div>
                      </div>
                      <p class="text-lg text-slate-500 mt-3">A pidan is a type of silk cloth used in Cambodian and Khmer weddings, funerals, and Buddhist ceremonies as a canopy or tapestry.</p>
                    </div>
                    <div class="ml-auto flex">
                        <a href="{{url('/detail')}}"
                          class="py-2 px-5 m-5 text-center bg-green-400 text-white rounded-full font-medium hover:bg-slate-500 dark:bg-gray-700 dark:hover:bg-gray-400">Detail</a>
                    </div>
                  </div>
                </a>
              </div>
        
              {{-- card 2 --}}
              <div class="flex flex-col rounded-xl shadow-lg bg-white">
                <div class="rounded-t-xl  overflow-hidden">
                  <img class="w-full h-full object-fill"
                    src="https://a.cdn-hotels.com/gdcs/production99/d1048/41d0d7b0-0059-4340-91bc-feb4ada1c937.jpg?impolicy=fcrop&w=1600&h=1066&q=medium"
                    alt="Sculptured Statue">
                </div>
                <div class="px-8 pt-5 flex-1">
                  <div class="flex flex-row justify-between">
                      <div class="flex flex-col">
                          <h5 class="text-lg text-green-700 md:text-2xl font-bold mt-3">Sculptured Statue</h5>
                          <h6>Koh Kong</h6>
                      </div>
                      <div class="flex items-center justify-center">
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                      </div>
                  </div>
                  <p class="text-lg text-slate-500 mt-3">The intrinsic skill of craftsmen – using the same locally mined stone used to build the ancient temples – produces sculptures.</p>
                </div>
                <div class="ml-auto flex">
                    <a href="#"
                      class="py-2 px-5 m-5 text-center bg-green-400 text-white rounded-full font-medium hover:bg-slate-500 dark:bg-gray-700 dark:hover:bg-gray-400">Detail</a>
                </div>
              </div>
        
              {{-- card 3 --}}
              <div class="flex flex-col rounded-xl shadow-lg bg-white">
                <div class="rounded-t-xl  overflow-hidden">
                  <img class="w-full h-full object-fill"
                    src="https://a.cdn-hotels.com/gdcs/production7/d1251/cfe24dae-c02c-4d44-aa7e-fd51645f5e04.jpg?impolicy=fcrop&w=1600&h=1066&q=medium"
                    alt="Basketry">
                </div>
                <div class="px-8 pt-5 flex-1">
                  <div class="flex flex-row justify-between">
                      <div class="flex flex-col">
                          <h5 class="text-lg text-green-700 md:text-2xl font-bold mt-3">Basketry</h5>
                          <h6>Siem Reap</h6>
                      </div>
                      <div class="flex items-center justify-center">
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                      </div>
                  </div>
                  <p class="text-lg text-slate-500 mt-3">The making of woven basketry in Cambodia is carried out mainly by women, many of whom cultivate and harvest the reeds by themselves.</p>
                </div>
                <div class="ml-auto flex">
                    <a href="#"
                      class="py-2 px-5 m-5 text-center bg-green-400 text-white rounded-full font-medium hover:bg-slate-500 dark:bg-gray-700 dark:hover:bg-gray-400">Detail</a>
                </div>
              </div>
        
              {{-- card 4 --}}
              <div class="flex flex-col rounded-xl shadow-lg bg-white">
                <div class="rounded-t-xl  overflow-hidden">
                  <img class="w-full h-full object-fill"
                    src="https://a.cdn-hotels.com/gdcs/production77/d932/6d391f78-75f1-443a-9d16-80aa89fcc83c.jpg?impolicy=fcrop&w=1600&h=1066&q=medium"
                    alt="Betel nut boxes">
                </div>
                <div class="px-8 pt-5 flex-1">
                  <div class="flex flex-row justify-between">
                      <div class="flex flex-col">
                          <h5 class="text-lg text-green-700 md:text-2xl font-bold mt-3">Betel nut boxes</h5>
                          <h6>Siem Reap</h6>
                      </div>
                      <div class="flex items-center justify-center">
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                      </div>
                  </div>
                  <p class="text-lg text-slate-500 mt-3">These cute containers once reflected their user's status according to its size, design and the material from which it was made.</p>
                </div>
                <div class="ml-auto flex">
                    <a href="#"
                      class="py-2 px-5 m-5 text-center bg-green-400 text-white rounded-full font-medium hover:bg-slate-500 dark:bg-gray-700 dark:hover:bg-gray-400">Detail</a>
                </div>
              </div>
        
              {{-- card 5 --}}
              <div class="flex flex-col rounded-xl shadow-lg bg-white">
                <div class="rounded-t-xl  overflow-hidden">
                  <img class="w-full h-full object-fill"
                    src="https://a.cdn-hotels.com/gdcs/production72/d1537/f4db2324-5a28-470e-a3e9-bfe71cb739ff.jpg?impolicy=fcrop&w=1600&h=1066&q=medium"
                    alt="Gold Ring">
                </div>
                <div class="px-8 pt-5 flex-1">
                  <div class="flex flex-row justify-between">
                      <div class="flex flex-col">
                          <h5 class="text-lg text-green-700 md:text-2xl font-bold mt-3">Gold Ring</h5>
                          <h6>Sihanoukville</h6>
                      </div>
                      <div class="flex items-center justify-center">
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                      </div>
                  </div>
                  <p class="text-lg text-slate-500 mt-3">Jewellery tends to be simple and unsophisticated, and although locally mined precious stones – especially rubies, sapphires and emeralds.</p>
                </div>
                <div class="ml-auto flex">
                    <a href="#"
                      class="py-2 px-5 m-5 text-center bg-green-400 text-white rounded-full font-medium hover:bg-slate-500 dark:bg-gray-700 dark:hover:bg-gray-400">Detail</a>
                </div>
              </div>
        
              {{-- card 6 --}}
              <div class="flex flex-col rounded-xl shadow-lg bg-white">
                <div class="rounded-t-xl  overflow-hidden">
                  <img class="w-full h-full object-fill"
                    src="https://a.cdn-hotels.com/gdcs/production18/d434/f48500d1-1df7-49fc-95d9-ff815634443d.jpg?impolicy=fcrop&w=1600&h=1066&q=medium"
                    alt="Silver Ring">
                </div>
                <div class="px-8 pt-5 flex-1">
                  <div class="flex flex-row justify-between">
                      <div class="flex flex-col">
                          <h5 class="text-lg text-green-700 md:text-2xl font-bold mt-3">Silver Ring</h5>
                          <h6>Koh Kong</h6>
                      </div>
                      <div class="flex items-center justify-center">
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                        <i class="fa-solid fa-star text-yellow-400"></i>
                      </div>
                  </div>
                  <p class="text-lg text-slate-500 mt-3">Silver was prized in the 11th century for religious and ceremonial purposes. With Cambodia's tourism industry expanding.</p>
                </div>
                <div class="ml-auto flex">
                    <a href="#"
                      class="py-2 px-5 m-5 text-center bg-green-400 text-white rounded-full font-medium hover:bg-slate-500 dark:bg-gray-700 dark:hover:bg-gray-400">Detail</a>
                </div>
              </div>
        
            </div>
        </div>
        <div class="flex justify-center">
          <button class="py-2 px-5 bg-green-700 dark:bg-gray-800 hover:bg-gray-600 dark:hover:bg-slate-500 text-white">Load more</button>
        </div>
    </div>
</section>
{{-- search area --}}

@endsection