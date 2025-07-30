<x-userLayout>


<h1>You are in the Main Menu</h1>

<!-- 
<div class="w-full  flex justify-center items-center "></div>
<div class="grid gap-6 grid-cols-4">

 @foreach ($products as $product )

<div class="w-full  max-w-3xs h-[275px] border border-gray-700 p-3  rounded-md shadow-lg  hover:shadow/2xl  transition duration-300 ease-in-out hover:-translate-y-2 relative cursor-pointer ">
    

        <img src="{{ asset('storage/' . $product->product_image) }}" alt="Clickable Image" class="w-full h-[60%]  ">
        <div class="grid gap-0 grid-cols-1 mt-1">

        <div class="flex ">
            <h1 class="font-semibold" name="p_name">{{$product->product_name}}</h1> 

            @if($product->is_available)
            <div class="ml-2 border border-green-200 rounded-md bg-green-200">
             <p class="text-gray-900 font-medium">Available</p>
            </div>
            @else
            <div class="ml-2 border border-red-200 rounded-md bg-red-200">
             <p class="text-gray-900 font-medium">Not Available</p>
            </div>
            @endif



            </div>
            <h1 class="font-medium" name="p_prize">₱{{$product->product_price}}</h1> 
            <h1 class="font-medium" name="p_qty">{{$product->product_qty}}</h1> 

            <div class="flex justify-around">
           <a href="{{route('product.editItems', $product->id)}}">
            <button class=" w-[65px] sm:w-[100px] border border-blue-200 bg-blue-200  rounded-md cursor-pointer hover:shadow/2xl  transition duration-300 ease-in-out hover:-translate-y-1    relative ">edit</button>
             </a>
    <form action="{{ route('product.destroyItems', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this task?')">
    @csrf
    @method('DELETE')
    <button class="w-[65px] sm:w-[100px] border border-red-300 bg-red-300 rounded-md cursor-pointer hover:shadow-2xl transition duration-300 ease-in-out hover:-translate-y-1 relative">
        Delete
    </button>
</form>

            </div>
        </div>

</div>
@endforeach
</div> -->


@foreach ($products as $categoryName => $items)
    <h2>{{ $categoryName }}</h2>

    <ul>
        @foreach ($items as $product)
            <li>{{ $product->product_name }}</li>
        @endforeach
    </ul>
@endforeach


</x-userLayout>