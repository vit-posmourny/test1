<x-layouts.app>

    <div class="space-y-4">
        @foreach ($wishlists as $wishlist)
            <a href="" class="block">
                <x-wishlist  title='{{$wishlist->title}}' description='{{$wishlist->uuid}}'/>
            </a>
        @endforeach
    </div>

</x-layouts.app>