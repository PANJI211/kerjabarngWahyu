<x-layout>
    <section id="home" class="relative w-full min-h-screen overflow-hidden">
        <div class="slider-container relative w-full h-full">
            <!-- Slides -->
            <div class="slides flex transition-transform duration-500 ease-in-out h-full" id="slides">
                <!-- Slide 1 -->
                <div class="slide min-w-full h-full relative">
                    <img src="{{ asset('imgs/burger.jpg') }}" alt="Burger" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                        <div class="text-center text-white">
                        </div>
                    </div>
                </div>
                
                <!-- Slide 2 -->
                 <div class="slide min-w-full h-full relative">
                    <img src="{{ asset('imgs/sate.jpg') }}" alt="Sate" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                        <div class="text-center text-white">
                        </div>
                    </div>
                </div>
                
                <!-- Slide 3 -->
                <div class="slide min-w-full h-full relative">
                    <img src="{{ asset('imgs/sup-ayam.jpeg') }}" alt="Sup" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                        <div class="text-center text-white">
                        </div>
                    </div>
                </div>
                
                <!-- Slide 4 -->
                 <div class="slide min-w-full h-full relative">
                    <img src="{{ asset('imgs/es-teh.jpg') }}" alt="Es Teh" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                        <div class="text-center text-white">
                        </div>
                    </div>
                </div>
                
            </div>
            
            <!-- Dots Indicator -->
            <div class="absolute bottom-4 left-185 transform -translate-x-1/2 flex space-x-2 z-10">
                <button class="dot w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all duration-200" onclick="currentSlide(1)"></button>
                <button class="dot w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all duration-200" onclick="currentSlide(2)"></button>
                <button class="dot w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all duration-200" onclick="currentSlide(3)"></button>
                <button class="dot w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all duration-200" onclick="currentSlide(4)"></button>
            </div>
            <div class="judul absolute top-30 left-5 text-white text-6xl">
                <h1 class="font-extrabold">Selamat Datang <br> Di Kantin Sekolah</h1>
            </div>
        </div>
    </section>
    <section id="Special Menu" class="min-h-screen  px-5 sm:px-10 lg:px-20 text-white">
        <div class="isi flex flex-col justify-center ">
            <div class="teks flex justify-between pt-24">
                <h1 class="text-3xl text-white font-bold mb-5 ">Special Menu</h1>
                <p>Lihat Selengkapnya</p>
            </div>
            <div class="foto flex justify-center gap-46">
                <div class=" bg-white w-40 h-50 rounded-2xl">
                </div>
                <div class=" bg-white w-40 h-50 rounded-2xl ">
                </div>
                <div class=" bg-white w-40 h-50 rounded-2xl">
                </div>
                <div class=" bg-white w-40 h-50 rounded-2xl">
                </div>
            </div>
        </div>
        <div class="isi flex flex-col justify-center">
            <div class="teks flex justify-between pt-24">
                <h1 class="text-3xl text-white font-bold mb-5 ">Paket Hemat</h1>
                <p>Lihat Selengkapnya</p>
            </div>
            <div class="foto flex justify-center gap-46">
                <div class=" bg-white w-40 h-50 rounded-2xl">
                </div>
                <div class=" bg-white w-40 h-50 rounded-2xl ">
                </div>
                <div class=" bg-white w-40 h-50 rounded-2xl">
                </div>
                <div class=" bg-white w-40 h-50 rounded-2xl">
                </div>
            </div>
        </div>
    </section>
</x-layout>