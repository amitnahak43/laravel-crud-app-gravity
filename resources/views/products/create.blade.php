<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Product
        </h2>
    </x-slot>

    <div class="py-12 bg-blue-100 min-h-screen"> <!-- Background color added here -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form method="POST" action="{{ route('products.store') }}">
                @csrf

                <div class="mb-4">
                    <label>Name:</label>
                    <input type="text" name="name" class="border p-2 w-full" required>
                </div>

                <div class="mb-4">
                    <label>Description:</label>
                    <textarea name="description" class="border p-2 w-full"></textarea>
                </div>

                <div class="mb-4">
                    <label>Price:</label>
                    <input type="number" name="price" class="border p-2 w-full" required>
                </div>

                <div class="mb-4">
                    <label>Stock Quantity:</label>
                    <input type="number" name="stock_quantity" class="border p-2 w-full" required>
                </div>

                <button type="submit" 
                    style="background-color: lightblue; padding: 10px;" 
                    onmouseover="this.style.border='2px solid blue'" 
                    onmouseout="this.style.border='2px solid lightblue'">
                    Create
                </button>
            </form>

        </div>
    </div>
</x-app-layout>
