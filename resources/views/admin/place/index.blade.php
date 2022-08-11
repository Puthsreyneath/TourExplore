<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Place') }} {{ Auth::guard('admin')->user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="pb-8 flex justify-end w-[90%]">
            <a href="{{url('place.create')}}" class="px-3 py-1 text-white bg-blue-600 rounded-full hover:opacity-80">
                Create New
            </a>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <x-success-status class="mb-4" :status="session('message')" />
                    <div class="overflow-x-auto relative">
                        <table class="overflow-x-auto shadow-lg bg-white w-full border-collapse rounded-xl">

                            <tr style="background-color:rgb(70, 153, 236)"
                                class="text-xs font-bold text-gray-900 uppercase dark:text-gray-400">
                                <th scope="col" class="text-left px-6 py-4">ID</th>
                                <th scope="col" class="text-left px-6 py-4">Name</th>
                                <th scope="col" class="text-left px-6 py-4">Highlight</th>
                                <th scope="col" class="text-left px-6 py-4">Description</th>
                                <th scope="col" class="text-left px-6 py-4">category</th>
                                <th scope="col" class="text-left px-6 py-4">rate</th>
                                <th scope="col" class="text-left px-6 py-4">location_id</th>
                                <th scope="col" class="text-left px-6 py-4">image</th>
                                <th scope="col" class="text-left px-6 py-4">Action</th>
                            </tr>

                            @php ($i = 0)
                            @forelse ($places as $place)
                            @php ($i++)
                            <tr>
                                <td class="border text-center">{{ $i }}</td>
                                <td class="border px-6 py-4">{{ $place->name }}</td>
                                <td class="border px-6 py-4">{{ $place->highlight }}</td>
                                <td class="border px-6 py-4">{{ $place->description }}</td>
                                <td class="border px-6 py-4">{{ $place->category }}</td>
                                <td class="border px-6 py-4">{{ $place->rate }}</td>
                                <td class="border px-6 py-4">{{ $place->location_id }}</td>
                                <td class="border px-6 py-4">
                                    <img src="/images/{{ $place->image }}" width="50" height="50">
                                </td>
                                <td class="border px-6 py-4 ">
                                    <div class="flex justify-around">
                                        <a href="{{url('/place.edit/'.$place->id)}}"><i
                                                class="fa-solid fa-pen-to-square text-green-600"></i></a>
                                        <a href="{{url('/place.delete/'.$place->id)}}"
                                            onclick="return confirm('Are you sure?');">
                                            <i class="fa-solid fa-trash text-red-600"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6">No Record</td>
                            </tr>
                            @endforelse


                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>