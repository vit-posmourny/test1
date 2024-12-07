<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="text-xl font-medium">

    <header class="w-full bg-yellow-500 p-4 flex items-center justify-end shadow">

        <img src="https://ui-avatars.com/api/?name={{auth()->user()->name}}" class="rounded-full w-16 h-16" alt="inicialy">

    </header>

    <main class="lg:w-2/3 w-full mx-auto py-12">

        {{$slot}}
        
    </main>

</body>

</html>