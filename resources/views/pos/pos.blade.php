<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manage POS') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto p-6">
        <!-- Box Container -->
        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg p-6 space-y-6">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- QR Code Scanner -->
                <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg shadow">
                    <h3 class="text-xl font-medium mb-2 text-white">QR Code Scanner</h3>
                    <div class="aspect-video bg-black rounded-lg flex items-center justify-center text-white">
                        <!-- Replace this with actual QR scanner element -->
                        <span class="text-center text-gray-300">[ Camera Stream Here ]</span>
                    </div>
                    <button class="mt-4 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded">
                        Enable Camera
                    </button>
                </div>

                <!-- Product Cart Table -->
                <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg shadow">
                    <h3 class="text-xl font-medium mb-4 text-white">Scanned Products</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm text-left">
                            <thead class="bg-dark-200 dark:bg-dark-600 text-dark-700 dark:text-dark-100">
                                <tr>
                                    <th class="p-2">#</th>
                                    <th class="p-2 text-white">Product</th>
                                    <th class="p-2 text-white">Qty</th>
                                    <th class="p-2 text-white">Billing Note</th>
                                    <th class="p-2 text-white">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                                <!-- Example Row -->
                                <tr>
                                    <td class="p-2 text-white">1</td>
                                    <td class="p-2 text-white">Sample Product</td>
                                    <td class="p-2">
                                        <input type="number" value="1" min="1" class="w-16 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded px-2 py-1 text-gray-900 dark:text-gray-100">
                                    </td>
                                    <td class="p-2">
                                        <input type="text" placeholder="Note..." class="w-full bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded px-2 py-1 text-gray-900 dark:text-gray-100">
                                    </td>
                                    <td class="p-2 flex space-x-2">
                                        <button class="px-3 py-1 bg-yellow-500 hover:bg-yellow-600 text-white rounded">Edit</button>
                                        <button class="px-3 py-1 bg-red-600 hover:bg-red-700 text-white rounded">Delete</button>
                                    </td>
                                </tr>
                                <!-- Add more rows dynamically -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>