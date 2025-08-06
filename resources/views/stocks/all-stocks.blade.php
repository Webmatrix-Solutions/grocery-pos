<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manage Product Stocks') }}
        </h2>
    </x-slot>

    <div class="container mx-auto max-w-4xl"></div>
    <div class="p-4 bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 rounded-lg shadow-md">
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left">
                <thead class="bg-gray-200 dark:bg-gray-700 uppercase text-gray-700 dark:text-gray-200">
                    <tr>
                        <th class="px-4 py-3">#</th>
                        <th class="px-4 py-3">Product Name</th>
                        <th class="px-4 py-3">Barcode</th>
                        <th class="px-4 py-3">Price</th>
                        <th class="px-4 py-3">Stock</th>
                        <th class="px-4 py-3">Category</th>
                        <th class="px-4 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    <tr class="bg-white dark:bg-gray-800">
                        <td class="px-4 py-3">1</td>
                        <td class="px-4 py-3">Apple</td>
                        <td class="px-4 py-3">1234567890</td>
                        <td class="px-4 py-3">₹50.00</td>
                        <td class="px-4 py-3">100</td>
                        <td class="px-4 py-3">Fruits</td>
                        <td class="px-4 py-3 space-x-2">
                            <button class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded-md text-xs">Edit</button>
                            <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-md text-xs">Delete</button>
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <td class="px-4 py-3">2</td>
                        <td class="px-4 py-3">Milk</td>
                        <td class="px-4 py-3">9876543210</td>
                        <td class="px-4 py-3">₹30.00</td>
                        <td class="px-4 py-3">50</td>
                        <td class="px-4 py-3">Dairy</td>
                        <td class="px-4 py-3 space-x-2">
                            <button class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded-md text-xs">Edit</button>
                            <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-md text-xs">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
    



</x-app-layout>