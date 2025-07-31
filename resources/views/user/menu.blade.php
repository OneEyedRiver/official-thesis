<x-userLayout>


<div class="w-full flex flex-col items-center">
    @foreach ($products as $categoryName => $categoryProducts)
        {{-- Wrapper to center both title and grid --}}
        <div class="w-full mb-8 flex flex-col items-center">
            <h2 class="text-2xl font-bold mb-4 text-gray-800 text-center">{{ $categoryName }}</h2>

<div class="w-[90%] grid  gap-3 grid-cols-2 sm:w-[70%]  sm:gap-4 sm:grid-cols-3 flex items-center sm:m-a   sm:pl-12  "> 
                @foreach ($categoryProducts as $product)
                    <div class="w-full max-w-3xs h-[275px] border border-gray-700 p-3 rounded-md shadow-lg hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-2 relative cursor-pointer">

                        <img src="{{ asset('storage/' . $product->product_image) }}" alt="Product Image" class="w-full h-[60%] object-cover">
                        
                        <div class="grid gap-0 grid-cols-1 mt-1">
                            <div class="flex items-center">
                                <h1 class="font-semibold">{{ $product->product_name }}</h1>

                                @if ($product->is_available)
                                    <div class="ml-2 border border-green-200 rounded-md bg-green-200 px-2">
                                        <p class="text-gray-900 font-medium">Available</p>
                                    </div>
                                @else
                                    <div class="ml-2 border border-red-200 rounded-md bg-red-200 px-2">
                                        <p class="text-gray-900 font-medium">Not Available</p>
                                    </div>
                                @endif
                            </div>

                            <h1 class="font-medium">₱{{ $product->product_price }}</h1>
                            <h1 class="font-medium">Qty: {{ $product->product_qty }}</h1>

                       
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>


</x-userLayout>