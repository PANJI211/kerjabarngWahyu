<x-layout>
    <section id="home" class="relative w-full min-h-screen overflow-hidden">
        <div class="slider-container relative w-full h-full">
            <!-- Slides -->
            <div class="slides flex transition-transform duration-500 ease-in-out h-full" id="slides">
                <!-- Slide 1 -->
                <div class="slide min-w-full h-full relative">
                    <img src="{{asset('/imgs/burger.jpg')}}" alt="Burger" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                        <div class="text-center text-white">
                        </div>
                    </div>
                </div>
                
                <!-- Slide 2 -->
                 <div class="slide min-w-full h-full relative">
                    <img src="{{asset('/imgs/sate.jpg')}}" alt="Sate" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                        <div class="text-center text-white">
                        </div>
                    </div>
                </div>
                
                <!-- Slide 3 -->
                <div class="slide min-w-full h-full relative">
                    <img src="{{asset('/imgs/sup-ayam.jpeg')}}" alt="Sup" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                        <div class="text-center text-white">
                        </div>
                    </div>
                </div>
                
                <!-- Slide 4 -->
                 <div class="slide min-w-full h-full relative">
                    <img src="{{asset('/imgs/es-teh.jpg')}}" alt="Es Teh" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                        <div class="text-center text-white">
                        </div>
                    </div>
                </div>
                
            </div>
            
            <!-- Dots Indicator -->
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-10">
                <button class="dot w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all duration-200" onclick="currentSlide(1)"></button>
                <button class="dot w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all duration-200" onclick="currentSlide(2)"></button>
                <button class="dot w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all duration-200" onclick="currentSlide(3)"></button>
                <button class="dot w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition-all duration-200" onclick="currentSlide(4)"></button>
            </div>
            
            <!-- Title - Responsive -->
            <div class="judul absolute top-10 sm:top-20 left-4 sm:left-8 text-white z-10">
                <h1 class="font-extrabold text-2xl sm:text-4xl md:text-5xl lg:text-6xl leading-tight">
                    Selamat Datang <br> Di Kantin Sekolah
                </h1>
            </div>
        </div>
    </section>
    
    <section id="Menu" class="min-h-screen px-4 sm:px-8 lg:px-20 text-white py-8">
        <div class="isi flex flex-col justify-center">
            <div class="teks flex flex-col sm:flex-row sm:justify-between sm:items-center pt-16 sm:pt-24 gap-4">
                <h1 class="text-2xl sm:text-3xl text-white font-bold">Special Menu</h1>
                <p class="text-sm sm:text-base">Lihat Selengkapnya</p>
            </div>
            <div class="foto grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 lg:gap-8 mt-8">
                <div class="bg-white w-full aspect-[4/5] rounded-2xl transform hover:scale-105 transition-transform duration-200">
                    <img src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?w=400&h=500&fit=crop" alt="Food 1" class="w-full h-full object-cover rounded-2xl">
                </div>
                <div class="bg-white w-full aspect-[4/5] rounded-2xl transform hover:scale-105 transition-transform duration-200">
                    <img src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?w=400&h=500&fit=crop" alt="Food 2" class="w-full h-full object-cover rounded-2xl">
                </div>
                <div class="bg-white w-full aspect-[4/5] rounded-2xl transform hover:scale-105 transition-transform duration-200">
                    <img src="https://images.unsplash.com/photo-1565958011703-44f9829ba187?w=400&h=500&fit=crop" alt="Food 3" class="w-full h-full object-cover rounded-2xl">
                </div>
                <div class="bg-white w-full aspect-[4/5] rounded-2xl transform hover:scale-105 transition-transform duration-200">
                    <img src="https://images.unsplash.com/photo-1571091718767-18b5b1457add?w=400&h=500&fit=crop" alt="Food 4" class="w-full h-full object-cover rounded-2xl">
                </div>
            </div>
        </div>
        
        <div class="isi flex flex-col justify-center mt-12">
            <div class="teks flex flex-col sm:flex-row sm:justify-between sm:items-center pt-16 sm:pt-24 gap-4">
                <h1 class="text-2xl sm:text-3xl text-white font-bold">Paket Hemat</h1>
                <p class="text-sm sm:text-base">Lihat Selengkapnya</p>
            </div>
            <div class="foto grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 lg:gap-8 mt-8">
                <div class="bg-white w-full aspect-[4/5] rounded-2xl transform hover:scale-105 transition-transform duration-200">
                    <img src="https://images.unsplash.com/photo-1546833999-b9f581a1996d?w=400&h=500&fit=crop" alt="Package 1" class="w-full h-full object-cover rounded-2xl">
                </div>
                <div class="bg-white w-full aspect-[4/5] rounded-2xl transform hover:scale-105 transition-transform duration-200">
                    <img src="https://images.unsplash.com/photo-1559715745-e1b33a271c8f?w=400&h=500&fit=crop" alt="Package 2" class="w-full h-full object-cover rounded-2xl">
                </div>
                <div class="bg-white w-full aspect-[4/5] rounded-2xl transform hover:scale-105 transition-transform duration-200">
                    <img src="https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?w=400&h=500&fit=crop" alt="Package 3" class="w-full h-full object-cover rounded-2xl">
                </div>
                <div class="bg-white w-full aspect-[4/5] rounded-2xl transform hover:scale-105 transition-transform duration-200">
                    <img src="https://images.unsplash.com/photo-1551782450-a2132b4ba21d?w=400&h=500&fit=crop" alt="Package 4" class="w-full h-full object-cover rounded-2xl">
                </div>
            </div>
        </div>
    </section>
    
    <section id="Categories" class="min-h-screen px-4 sm:px-8 lg:px-20 text-white py-8">
        <div class="categories flex justify-center flex-col">
            <div class="teks pt-16 sm:pt-24">
                <h1 class="text-2xl sm:text-3xl text-white font-bold mb-5">Explore From Categories</h1>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 sm:gap-6 lg:gap-8 mt-12">
                <div class="bg-white aspect-square rounded-2xl flex justify-center items-center text-center transform hover:scale-105 transition-transform duration-200">
                    <p class="text-black font-semibold text-sm sm:text-base">POPULER</p>
                </div>
                <div class="bg-white aspect-square rounded-2xl flex justify-center items-center text-center transform hover:scale-105 transition-transform duration-200">
                    <p class="text-black font-semibold text-sm sm:text-base">MAKANAN</p>
                </div>
                <div class="bg-white aspect-square rounded-2xl flex justify-center items-center text-center transform hover:scale-105 transition-transform duration-200">
                    <p class="text-black font-semibold text-sm sm:text-base">MINUMAN</p>
                </div>
                <div class="bg-white aspect-square rounded-2xl flex justify-center items-center text-center transform hover:scale-105 transition-transform duration-200">
                    <p class="text-black font-semibold text-sm sm:text-base">SNACK</p>
                </div>
                <div class="bg-white aspect-square rounded-2xl flex justify-center items-center text-center transform hover:scale-105 transition-transform duration-200">
                    <p class="text-black font-semibold text-sm sm:text-base">PAKET</p>
                </div>
                <div class="bg-white aspect-square rounded-2xl flex justify-center items-center text-center transform hover:scale-105 transition-transform duration-200">
                    <p class="text-black font-semibold text-sm sm:text-base">HEMAT</p>
                </div>
            </div>
        </div>
    </section>
</x-layout>