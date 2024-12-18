<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-zinc-50">

    <div class="flex h-screen">

        <aside class="bg-red-200 h-full w-2/3 content-center justify-center">
            {{$slot}}
        </aside>

        <main class="h-full w-1/3 flex justify-end">
            
            <img src="images/pani.jpg" class="bg-cover bg-center h-full w-full">

        </main>
        
    </div>  

</body>

</html>