<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>jumbotron</title>
</head>
<body>
    <div class=" pt-1">
        <div class="text-center min-h-screen flex flex-col justify-center">
        <img src="{{asset('./imgs/orange.png')}}" alt="Canteen" class="mx-auto w-60 h-60">
        <h1 class="text-xl font-semibold mt-2">Selamat datang di Kantin Sekolah</h1>
        <div class="mt-3 space-x-2">
            <span class="text-gray-600">Lihat</span>
            <a href="#" class="bg-gradient-to-b from-orange-500 to-yellow-500 text-white px-2 py-1 rounded text-sm hover:bg-gradient-to-b hover:from-orange-600 hover:to-yellow-600">Menu</a>
        </div>
    </div>
    </div>
    
</body>
</html>