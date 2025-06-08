<x-layout>
    <!-- Jumbotron Section -->
    <section id="home" class="min-h-screen pt-24 px-5 sm:px-10 lg:px-20  text-white">
        <div class="flex flex-col lg:flex-row items-center mb-30">

            <!-- Kiri: Teks -->
            <div class="flex-1 text-left space-y-4 lg:space-y-6 lg:pr-10 order-2 lg:order-1">
                <h1 class="text-3xl sm:text-4xl lg:text-6xl font-bold leading-snug">
                    Selamat Datang <br />
                    Di <span class="text-white">Kantin Sekolah</span>
                </h1>
                <p class="text-gray-300 text-base sm:text-lg">
                    Berbelanja di kantin sekolah dengan makanan yang sehat dan bergizi!
                </p>
                <div class="flex gap-4 flex-wrap">
                    <button class="bg-gradient-to-r from-[#5E5050] to-[#191919] shadow-sm hover:shadow-gray-200 text-white px-4 py-2 sm:px-5 sm:py-2 rounded-full transition duration-300">
                        Order now
                    </button>
                    <button class="bg-yellow-500 hover:shadow-gray-200 shadow-sm text-white px-4 py-2 sm:px-5 sm:py-2 rounded-full transition duration-300">
                        Order now
                    </button>
                </div>
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
                    <h3 class="text-xl font-semibold mt-4 sm:mt-6">Nasi Kuning</h3>
                    <p class="text-sm text-gray-300 mt-2">Cocok untuk sarapan dan mengenyangkan</p>
                    <div class="mt-4 flex items-center justify-between px-4">
                        <span class="bg-white text-black text-xs font-semibold px-3 py-1 rounded-full">Rp 5.000,00</span>
                        <button class="bg-gradient-to-r from-orange-500 to-yellow-500 text-white px-3 py-1 sm:px-4 sm:py-1 rounded-full text-sm shadow-md hover:scale-105 transition duration-300">Order</button>
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