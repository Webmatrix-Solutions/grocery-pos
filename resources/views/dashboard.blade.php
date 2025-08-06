<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> -->

    <div class="max-w-7xl mx-auto">

        <!-- First Row -->
        <div class="mt-4 grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            <!-- Total Sales -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-2 text-white">Total Sales</h2>
                <p class="text-3xl font-bold text-white">$25,400</p>
            </div>
            <!-- Total Products -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-2 text-white">Total Products</h2>
                <p class="text-3xl font-bold text-white">324</p>
            </div>
            <!-- Out of Stock Products -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-2 text-white">Out of Stock</h2>
                <p class="text-3xl font-bold text-red-500">18</p>
            </div>
        </div>

        <!-- Second Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Total Customers -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-2 text-white">Total Customers</h2>
                <p class="text-3xl font-bold text-white">1,204</p>
            </div>

            <!-- Today's Sales -->
            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-2 text-white">Today's Sales</h2>
                <p class="text-3xl font-bold text-white">$1,250</p>
            </div>
        </div>
    </div>
</x-app-layout>