<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header>
        <h1>this is header section</h1>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer class="bg-amber-50">
        <h1 class="text-3xl text-amber-400">this is footer section</h1>
    </footer>
</body>

</html>
