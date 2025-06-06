<x-layout>
    <!DOCTYPE html>
    <html lang="en" class="scroll-smooth">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        @vite('resources/css/app.css')
    </head>
    <body class="m-0 p-0 scroll-smooth">
    
        <!-- Section Jumbotron -->
        <section id="home" class="min-h-screen flex flex-col justify-center items-center bg-white px-4">
            <img src="{{ asset('imgs/orange.png') }}" alt="Canteen" class="w-60 h-60 object-cover mb-4">
            <h1 class="text-xl font-semibold text-gray-800">Selamat datang di Kantin Sekolah</h1>
            <div class="mt-3 space-x-2">
                <span class="text-gray-600">Lihat</span>
                <a href="#slider" class="bg-gradient-to-b from-orange-500 to-yellow-500 text-white px-2 py-1 rounded text-sm hover:bg-gradient-to-b hover:from-orange-600 hover:to-yellow-600 transition">
                    Menu
                </a>
            </div>
        </section>
        <!-- Section Slide Menu -->
         <section id="slider" class="min-h-screen">
            <div class="slider-container relative w-full h-full">
                <!-- Slides -->
                <div class="slides flex transition-transform duration-500 ease-in-out h-full" id="slides">
                    <!-- Slide 1 -->
                    <div class="slide min-w-full h-full relative">
                        <img src="{{ asset('imgs/burger.jpg') }}" alt="Burger" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                            <div class="text-center text-white">
                                <h2 class="text-4xl font-bold mb-4">Burger</h2>
                                <p class="text-xl">Burger premium dengan daging sapi pilihan</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="slide min-w-full h-full relative">
                        <img src="{{ asset('imgs/sate.jpg') }}" alt="Sate" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                            <div class="text-center text-white">
                                <h2 class="text-4xl font-bold mb-4">Sate Tusuk</h2>
                                <p class="text-xl">Sate dengan daging ayam pilihan</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="slide min-w-full h-full relative">
                        <img src="{{ asset('imgs/sup-ayam.jpeg') }}" alt="Burger" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                            <div class="text-center text-white">
                                <h2 class="text-4xl font-bold mb-4">Sup Ayam</h2>
                                <p class="text-xl">Sup dengan sayur sehat dan daging ayam berkualitas</p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 4 -->
                    <div class="slide min-w-full h-full relative">
                        <img src="{{ asset('imgs/es-teh.jpg') }}" alt="Burger" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                            <div class="text-center text-white">
                                <h2 class="text-4xl font-bold mb-4">Es Teh Manis</h2>
                                <p class="text-xl">Es Teh Manis dengan gula alami</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dots Indicator -->
                <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-10">
                    <button class="dot w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all duration-200" onclick="currentSlide(1)"></button>
                    <button class="dot w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all duration-200" onclick="currentSlide(2)"></button>
                    <button class="dot w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all duration-200" onclick="currentSlide(3)"></button>
                    <button   button class="dot w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all duration-200" onclick="currentSlide(4)"></button>
                </div>
            </div>
    </section>
    
        <!-- Section About -->
        <section id="about" class="min-h-screen flex flex-col justify-center items-center bg-white px-4">
            <h1 class="inline-block px-6 py-2 bg-gradient-to-b from-orange-500 to-yellow-500 text-white text-3xl font-bold rounded-full">
                About
            </h1>
            <p class="mt-4 text-gray-700 max-w-md">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero.
            </p>
        </section>
    
    </body>
    </html>
    
</x-layout>
  



