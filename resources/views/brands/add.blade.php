<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('DODAVANJE BRENDA') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                <form method="POST" action="{{ route('store_brand') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Naziv') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="country" value="{{ __('Drzava') }}" />
                <x-jet-input id="country" class="block mt-1 w-full" type="text" name="country" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="mt-4">
                {{ __('Spremi') }}
</x-jet-button>
</div>
</form>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
