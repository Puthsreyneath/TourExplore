<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Location') }} {{ Auth::guard('admin')->user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="pb-8 flex justify-end w-[90%]">
            <a href="{{url('admin.location')}}" class="px-3 py-1 text-white bg-blue-600 rounded-full hover:opacity-80">
                Back
            </a>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ url('location.update/'.$locations->id)}}">
                        @csrf
                        @method('PUT')
                        <div>
                            <x-label for="province" :value="__('Province')" />
                            <x-input id="province" class="block mt-1 w-full" type="text" name="province" :value="$locations->province"  autofocus />
                        </div>
                        <div>
                            <x-label for="name_code" :value="__('Name_code')" />
                            <x-input id="name_code" class="block mt-1 w-full" type="text" name="name_code" :value="$locations->name_code"  autofocus />
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