<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manage Cashiers') }}
        </h2>
    </x-slot>

    <div class="container mx-auto p-6">

        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow">
                + Add New Cashier
            </button>
        </div>

        <!-- Table -->
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-x-auto">
            <table class="w-full table-auto">
                <thead class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left">#</th>
                        <th class="px-6 py-3 text-left">Name</th>
                        <th class="px-6 py-3 text-left">Email</th>
                        <th class="px-6 py-3 text-left">Status</th>
                        <th class="px-6 py-3 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 dark:text-gray-300">
                    <!-- Sample Row -->
                    <tr class="border-t border-gray-200 dark:border-gray-700">
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">John Doe</td>
                        <td class="px-6 py-4">john@example.com</td>
                        <td class="px-6 py-4">
                            <span class="inline-block px-2 py-1 text-sm rounded bg-green-100 dark:bg-green-800 text-green-800 dark:text-green-200">Active</span>
                        </td>
                        <td class="px-6 py-4 space-x-2">
                            <button class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded">Edit</button>
                            <button class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded">Delete</button>
                        </td>
                    </tr>

                    <!-- Additional rows can be added here -->
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>