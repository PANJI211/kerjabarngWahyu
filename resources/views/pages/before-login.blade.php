<x-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jumbotron & About</title>
        @vite('resources/css/app.css')
    </head>
    <body class="m-0 p-0">
    
        <!-- Section Jumbotron -->
        <section id="jumbotron" class="min-h-screen flex flex-col justify-center items-center bg-white px-4">
            <img src="{{ asset('imgs/orange.png') }}" alt="Canteen" class="w-60 h-60 object-cover mb-4">
            <h1 class="text-xl font-semibold text-gray-800">Selamat datang di Kantin Sekolah</h1>
            <div class="mt-3 space-x-2">
                <span class="text-gray-600">Lihat</span>
                <a href="#" class="bg-gradient-to-b from-orange-500 to-yellow-500 text-white px-2 py-1 rounded text-sm hover:bg-gradient-to-b hover:from-orange-600 hover:to-yellow-600 transition">
                    Menu
                </a>
            </div>
        </section>
    
        <!-- Section About -->
        <section id="about" class="min-h-screen flex flex-col justify-center items-center px-4">
            <h1 class="inline-block px-6 py-2 bg-orange-500 text-white text-3xl font-bold rounded-full">
                About
            </h1>
            <p class="mt-4 text-gray-700 max-w-md">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.
            </p>
        </section>
    
    </body>
    </html>
    
</x-layout>
  



