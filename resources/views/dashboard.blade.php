<x-app-layout>
    <x-slot name="header">
        <h2 class="font-jolly text-xl text-black">
            {{ __('MAS POPULARES...') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
