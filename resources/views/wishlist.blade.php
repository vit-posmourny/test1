<x-layouts.app>
    
    <h1 class="font-bold text-gray-800 text-4xl mb-8">{{$wishlist->title}}</h1>

    <div class="space-y-4">
        @foreach ($wishlist->wishes as $wish)

            <x-wish title="{{$wish->title}}" url="{{$wish->url}}" price="{{$wish->price}}"></x-wish>

        @endforeach
    </div>
</x-layouts.app>