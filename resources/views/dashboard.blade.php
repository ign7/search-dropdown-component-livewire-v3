<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="">
                    <livewire:search-dropdown :modelClassName="'App\\Models\\User'" :column="'name'"  :search_mode="'user'"/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
