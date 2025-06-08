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
            <div class="slider-container relative w-full h-full overflow-hidden">
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
                
            <div class="min-h-screen flex items-center justify-center mt-10">
                <div class="max-w-4xl w-full">
                    <!-- About Title -->
                    <div class="text-center">
                        <h1 class="inline-block px-6 py-2 bg-gradient-to-b from-orange-500 to-yellow-500 text-white text-3xl font-bold rounded-full">
                        About
                        </h1>
                    </div>

                    <!-- Content -->
                    <div class="flex flex-col lg:flex-row items-center justify-center mt-10">
                        <!-- Text Content (Kiri) -->
                        <div class="relative w-80 lg:w-180 flex-shrink-0 flex justify-center">
                            <img src="{{ asset('imgs/shape.png') }}" alt="bulet" class="w-full h-100 rotate-20">
                            <div class="absolute inset-0 flex items-center justify-center" style="clip-path: circle(50% at 50% 50%);">
                                <div class="text-center text-white px-6">
                                    <p class="text-sm md:text-base leading-relaxed">
                                    Kantin sekolah menyediakan makanan dan minuman sehat <br>
                                     bagi siswa, guru, dan staf untuk mendukung kesehatan dan konsentrasi belajar. <br>
                                      Selain itu, kantin juga menjadi tempat interaksi sosial <br>
                                      yang menciptakan suasana sekolah yang nyaman.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Chef Image (Kanan) -->
                        <div class="flex justify-center flex-shrink-0 w-120">
                            <img src="{{ asset('imgs/chef.png') }}" alt="Chef Kantin Sekolah" class="w-80 object-cover drop-shadow-2xl">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    </body>
    </html>
    
</x-layout>
  



