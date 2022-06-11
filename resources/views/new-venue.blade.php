<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Venues') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @livewire('venues-form')
    </div>
</x-app-layout>