<x-layouts.guest>

    <form action="/login" method="POST" class="flex flex-wrap content-center flex-col gap-2 py-8">

        @csrf
        <x-input type="email" placeholder="E-mail" name="email"/>
        <x-input type="password" placeholder="Heslo" name="password"/>
    
        <x-primary-button type="submit">Přihlásit se</x-primary-button>

    </form>

</x-layouts.guest>