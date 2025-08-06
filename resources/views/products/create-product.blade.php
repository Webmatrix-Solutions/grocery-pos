<!-- resources/views/products/create.blade.php -->
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add New Product') }}
        </h2>
    </x-slot>

    <div class="min-h-screen bg-gray-900 px-6 py-12 lg:px-8">
        <div class="mx-auto max-w-xl">

            <form id="addNewProductForm" method="POST" enctype="multipart/form-data" class="space-y-6 bg-gray-800 p-6 rounded-lg shadow-lg">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-white">Product Name</label>
                    <input type="text" name="name" id="name" required class="mt-1 w-full rounded-md bg-gray-700 border border-gray-600 text-black px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                </div>

                <div>
                    <label for="price" class="block text-sm font-medium text-white">Price</label>
                    <input type="number" name="price" id="price" step="0.01" required class="mt-1 w-full rounded-md bg-gray-700 border border-gray-600 text-black px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                </div>

                <div>
                    <label for="stock_quantity" class="block text-sm font-medium text-white">Stock Quantity</label>
                    <input type="number" name="stock_quantity" id="stock_quantity" required class="mt-1 w-full rounded-md bg-gray-700 border border-gray-600 text-black px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                </div>

                <div>
                    <label for="category" class="block text-sm font-medium text-white">Category</label>
                    <input type="text" name="category" id="category" class="mt-1 w-full rounded-md bg-gray-700 border border-gray-600 text-black px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" />
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-white">Description</label>
                    <textarea name="description" id="description" rows="3" class="mt-1 w-full rounded-md bg-gray-700 border border-gray-600 text-black px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
                </div>

                <div class="pt-4">
                    <button class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">
                        Add Product
                    </button>
                </div>
            </form>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function(){
            $form = document.getElementById('addNewProductForm');
            $form.addEventListener('submit', function(event) {
                event.preventDefault();

                fetch('/add-new-product', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        name: $form.name.value,
                        price: $form.price.value,
                        stock_quantity: $form.stock_quantity.value,
                        category: $form.category.value,
                        description: $form.description.value
                    })
                })
                .then(response => response.json())
                .then(data => {
                   if(data.response === 201) {
                       alert('Product added successfully!');
                       $form.reset();
                   } else {
                       alert('Error adding product: ' + data.message);
                   }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        });
    </script>


</x-app-layout>