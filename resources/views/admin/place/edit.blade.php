<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Place') }} {{ Auth::guard('admin')->user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="pb-8 flex justify-end w-[90%]">
            <a href="{{url('admin.place')}}" class="px-3 py-1 text-white bg-blue-600 rounded-full hover:opacity-80">
                Back
            </a>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ url('place.update/'.$places->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-label for="name" :value="__('name')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$places->name" required autofocus />
                        </div>
                        <div>
                            <x-label for="highlight" :value="__('highlight')" />
                            <x-input id="highlight" class="block mt-1 w-full" type="text" name="highlight" :value="$places->highlight" required autofocus />
                        </div>
                        <div>
                            <x-label for="description" :value="__('description')" />
                            <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="$places->description" required autofocus />
                        </div>
                        <div>
                            <x-label for="category" :value="__('category')" />
                            <select required id="type" name="category" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <option selected>Choose a type</option>
                                <option value="Mountain">Mountain</option>
                                <option value="Beach">Beach</option>
                                <option value="Temple">Temple</option>
                                <option value="Popular">Popular</option>
                              </select>
                        </div>
                        <div>
                            <x-label for="rate" :value="__('rate')" />
                            <x-input id="rate" class="block mt-1 w-full" type="number" min="0.0" max="5.0" step="0.1" name="rate" :value="$places->rate" required autofocus />
                        </div>
                        <div>
                            <x-label for="location_id" :value="__('location_id')" />
                            <x-input id="location_id" class="block mt-1 w-full" type="number" name="location_id" :value="$places->location_id" required autofocus />
                        </div>
                        <div>
                            <x-label for="image" :value="__('image')" />
                            <x-input multiple id="image" class="block mt-1 w-full" type="file" name="image"   autofocus />
                            <img src="{{ asset('images/'.$places->image) }}" width="300" >
                        </div>
                        <div>
                            <x-button class="mt-3">
                                {{ __('Update') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>