<!-- resources\views\index.blade.php -->
<x-layouts.app>

    <div class="flex-col ">

        <div class="space-y-4">

            @foreach ($wishlists as $wishlist)
                <a href="{{route('wishlist', ['wishlist' => $wishlist->id])}}" class="block">
                    <x-wishlist  title='{{$wishlist->title}}' description='{{$wishlist->uuid}}'/>
                </a>
            @endforeach
            
        </div>
        
        <div class="bg-cover bg-center h-72 w-full">
            <img src="images/icons/vecteezy_africa-safari-compass-100x125.png" class="w-full h-full object-fill" />
        </div>


    </div>

</x-layouts.app>