<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('BREDNOVI') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="\add_brand" class="m-2 p-4 text-xl border-2 bg-black text-bold">Dodaj Brend</a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <h1 class="font-xl">BRENDOVI</h1>
                    @foreach($brands as $brand)
                    <p class="p-2"> {{$brand->name}} - {{$brand->country}}</p>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
