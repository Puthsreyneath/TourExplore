<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Table') }} {{ Auth::guard('admin')->user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="shadow-lg text-left bg-white w-full border-collapse rounded-xl">
                        <tr style="background-color: rgb(70, 153, 236)" class="border-b border-gray-200 text-xs font-bold text-gray-900 uppercase">
                            <th scope="col" class="py-3 px-6">
                                Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Link
                            </th>
                        </tr>
                        <tr>
                            <th scope="row"
                                class="py-4 px-6 ">
                                Location
                            </th>
                            <td class="py-4 px-6">
                                <x-nav-link :href="url('admin.location')" :active="request()->routeIs('location')">
                                    {{ __('click here') }}
                                </x-nav-link>
                            </td>

                        </tr>
                        <tr>
                            <th scope="row"
                                class="py-4 px-6 ">
                                Place
                            </th>
                            <td class="py-4 px-6">
                                <x-nav-link :href="url('admin.place')" :active="request()->routeIs('location')">
                                    {{ __('click here') }}
                                </x-nav-link>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>