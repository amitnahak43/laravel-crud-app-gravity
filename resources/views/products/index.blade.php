<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Product List
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Success message -->
            @if (session('success'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Search form -->
            <form method="GET" action="{{ route('products.index') }}" class="mb-4">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search..." class="border p-2 rounded">
                 <button type="submit" 
                    style="background-color: lightblue; border: 2px solid blue; padding: 10px;" 
                    onmouseover="this.style.border='2px solid blue'" 
                    onmouseout="this.style.border='2px solid lightblue'">
                    Search
                </button>
            </form>

            <a href="{{ route('products.create') }}" 
                style="background-color: lightblue; border: 2px solid blue; padding: 10px;" 
                onmouseover="this.style.border='2px solid blue'" 
                onmouseout="this.style.border='2px solid lightblue'"
            >Create Product</a>

            <table class="w-full border-collapse border" style="margin-top :20px">
                <thead>
                    <tr>
                        <th class="border p-2">Name</th>
                        <th class="border p-2">Description</th>
                        <th class="border p-2">Price</th>
                        <th class="border p-2">Stock</th>
                        <th class="border p-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="border p-2">{{ $product->name }}</td>
                            <td class="border p-2">{{ $product->description }}</td>
                            <td class="border p-2">{{ $product->price }}</td>
                            <td class="border p-2">{{ $product->stock_quantity }}</td>
                            <td class="border p-2" style="display: flex; justify-content: center; align-items: center; gap: 5px;">
                                <a href="{{ route('products.edit', $product) }}"
                                    style="background-color: lightblue; border: 1px solid blue; padding: 5px 10px; cursor: pointer;"  
                                    onmouseover="this.style.border='2px solid blue'" 
                                    onmouseout="this.style.border='2px solid lightblue'">Edit</a>
                                <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Are you sure?')" 
                                        style="background-color: red; color: white; border: none; padding: 5px 10px; cursor: pointer;"
                                        onmouseover="this.style.border='2px solid red'" 
                                        onmouseout="this.style.border='2px solid lightred'">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-4">
                {{ $products->links() }}
            </div>

        </div>
    </div>
</x-app-layout>
