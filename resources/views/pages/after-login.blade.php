<x-layout>
    <section id="home" class="relative min-h-[30vh] mt-10 lg:mt-0 w-full lg:min-h-screen overflow-hidden">
        <div class="slider-container relative w-full h-full">
            <!-- Slides -->
            <div class="slides flex transition-transform duration-500 ease-in-out h-full" id="slides">
                <!-- Slide 1 -->
                <div class="slide min-w-full h-full relative">
                    <img src="{{asset('imgs/burger.jpg')}}" alt="Burger" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                        <div class="text-center text-white">
                        </div>
                    </div>
                </div>
                
                <!-- Slide 2 -->
                 <div class="slide min-w-full h-full relative">
                    <img src="{{asset('imgs/sate.jpg')}}" alt="Sate" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                        <div class="text-center text-white">
                        </div>
                    </div>
                </div>
                
                <!-- Slide 3 -->
                <div class="slide min-w-full h-full relative">
                    <img src="{{asset('imgs/sup-ayam.jpeg')}}" alt="Sup" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                        <div class="text-center text-white">
                        </div>
                    </div>
                </div>
                
                <!-- Slide 4 -->
                 <div class="slide min-w-full h-full relative">
                    <img src="{{asset('imgs/es-teh.jpg')}}" alt="Es Teh" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                        <div class="text-center text-white">
                        </div>
                    </div>
                </div>
                
            </div>
            
            <!-- Dots Indicator -->
            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-3 z-10">
                <button class="dot w-3 h-3 sm:w-4 sm:h-4 rounded-full bg-white/60 hover:bg-white transition-all duration-300 shadow-lg" onclick="currentSlide(1)"></button>
                <button class="dot w-3 h-3 sm:w-4 sm:h-4 rounded-full bg-white/60 hover:bg-white transition-all duration-300 shadow-lg" onclick="currentSlide(2)"></button>
                <button class="dot w-3 h-3 sm:w-4 sm:h-4 rounded-full bg-white/60 hover:bg-white transition-all duration-300 shadow-lg" onclick="currentSlide(3)"></button>
                <button class="dot w-3 h-3 sm:w-4 sm:h-4 rounded-full bg-white/60 hover:bg-white transition-all duration-300 shadow-lg" onclick="currentSlide(4)"></button>
            </div>
            
            <!-- Title - Responsive -->
            <div class="judul absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white z-10 text-center px-4">
                <h1 class="font-extrabold text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl leading-tight drop-shadow-lg">
                    Selamat Datang <br> Di Kantin Sekolah
                </h1>
                <p class="mt-4 text-base sm:text-lg md:text-xl opacity-90 max-w-2xl mx-auto">
                    Nikmati berbagai menu lezat dan bergizi untuk mendukung aktivitas belajarmu
                </p>
            </div>
        </div>
    </section>
    
    <section id="Menu" class="min-h-screen px-4 sm:px-6 md:px-8 lg:px-12 xl:px-20 text-white py-12 sm:py-16">
        <div class="max-w-7xl mx-auto">
            <!-- Special Menu -->
            <div class="isi">
                <div class="teks flex flex-col sm:flex-row sm:justify-between sm:items-end pt-8 sm:pt-12 lg:pt-16 gap-4 mb-8 sm:mb-12">
                    <div>
                        <h1 class="text-2xl sm:text-3xl lg:text-4xl text-white font-bold mb-2">Special Menu</h1>
                        <p class="text-gray-300 text-sm sm:text-base">Menu spesial pilihan terbaik kami</p>
                    </div>
                    <button class="text-orange-400 hover:text-orange-300 text-sm sm:text-base font-medium transition-colors self-start sm:self-end">
                        Lihat Selengkapnya →
                    </button>
                </div>
                
                <div class="foto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 lg:gap-8">
                    <div class="group bg-white rounded-3xl overflow-hidden shadow-xl transform hover:scale-105 hover:shadow-2xl transition-all duration-300">
                        <div class="aspect-[4/5] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?w=400&h=500&fit=crop" alt="Food 1" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="p-4">
                            <h3 class="text-gray-800 font-semibold text-lg">Nasi Ayam Spesial</h3>
                            <p class="text-gray-600 text-sm mt-1">Rp 15.000</p>
                        </div>
                    </div>
                    
                    <div class="group bg-white rounded-3xl overflow-hidden shadow-xl transform hover:scale-105 hover:shadow-2xl transition-all duration-300">
                        <div class="aspect-[4/5] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?w=400&h=500&fit=crop" alt="Food 2" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="p-4">
                            <h3 class="text-gray-800 font-semibold text-lg">Mie Ayam Bakso</h3>
                            <p class="text-gray-600 text-sm mt-1">Rp 12.000</p>
                        </div>
                    </div>
                    
                    <div class="group bg-white rounded-3xl overflow-hidden shadow-xl transform hover:scale-105 hover:shadow-2xl transition-all duration-300">
                        <div class="aspect-[4/5] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1565958011703-44f9829ba187?w=400&h=500&fit=crop" alt="Food 3" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="p-4">
                            <h3 class="text-gray-800 font-semibold text-lg">Pizza Mini</h3>
                            <p class="text-gray-600 text-sm mt-1">Rp 8.000</p>
                        </div>
                    </div>
                    
                    <div class="group bg-white rounded-3xl overflow-hidden shadow-xl transform hover:scale-105 hover:shadow-2xl transition-all duration-300">
                        <div class="aspect-[4/5] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1571091718767-18b5b1457add?w=400&h=500&fit=crop" alt="Food 4" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="p-4">
                            <h3 class="text-gray-800 font-semibold text-lg">Burger Spesial</h3>
                            <p class="text-gray-600 text-sm mt-1">Rp 18.000</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Paket Hemat -->
            <div class="isi mt-16 sm:mt-20 lg:mt-24">
                <div class="teks flex flex-col sm:flex-row sm:justify-between sm:items-end pt-8 sm:pt-12 lg:pt-16 gap-4 mb-8 sm:mb-12">
                    <div>
                        <h1 class="text-2xl sm:text-3xl lg:text-4xl text-white font-bold mb-2">Paket Hemat</h1>
                        <p class="text-gray-300 text-sm sm:text-base">Hemat lebih banyak dengan paket spesial</p>
                    </div>
                    <button class="text-orange-400 hover:text-orange-300 text-sm sm:text-base font-medium transition-colors self-start sm:self-end">
                        Lihat Selengkapnya →
                    </button>
                </div>
                
                <div class="foto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 lg:gap-8">
                    <div class="group bg-white rounded-3xl overflow-hidden shadow-xl transform hover:scale-105 hover:shadow-2xl transition-all duration-300">
                        <div class="aspect-[4/5] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1546833999-b9f581a1996d?w=400&h=500&fit=crop" alt="Package 1" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="p-4">
                            <h3 class="text-gray-800 font-semibold text-lg">Paket Lengkap A</h3>
                            <p class="text-gray-600 text-sm mt-1">Rp 20.000</p>
                        </div>
                    </div>
                    
                    <div class="group bg-white rounded-3xl overflow-hidden shadow-xl transform hover:scale-105 hover:shadow-2xl transition-all duration-300">
                        <div class="aspect-[4/5] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1559715745-e1b33a271c8f?w=400&h=500&fit=crop" alt="Package 2" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="p-4">
                            <h3 class="text-gray-800 font-semibold text-lg">Paket Sehat B</h3>
                            <p class="text-gray-600 text-sm mt-1">Rp 25.000</p>
                        </div>
                    </div>
                    
                    <div class="group bg-white rounded-3xl overflow-hidden shadow-xl transform hover:scale-105 hover:shadow-2xl transition-all duration-300">
                        <div class="aspect-[4/5] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?w=400&h=500&fit=crop" alt="Package 3" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="p-4">
                            <h3 class="text-gray-800 font-semibold text-lg">Paket Hemat C</h3>
                            <p class="text-gray-600 text-sm mt-1">Rp 15.000</p>
                        </div>
                    </div>
                    
                    <div class="group bg-white rounded-3xl overflow-hidden shadow-xl transform hover:scale-105 hover:shadow-2xl transition-all duration-300">
                        <div class="aspect-[4/5] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1551782450-a2132b4ba21d?w=400&h=500&fit=crop" alt="Package 4" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        </div>
                        <div class="p-4">
                            <h3 class="text-gray-800 font-semibold text-lg">Paket Spesial D</h3>
                            <p class="text-gray-600 text-sm mt-1">Rp 30.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="Categories" class="min-h-screen px-4 sm:px-6 md:px-8 lg:px-12 xl:px-20 text-white py-12 sm:py-16">
        <div class="max-w-7xl mx-auto">
            <div class="categories flex justify-center flex-col">
                <div class="teks pt-8 sm:pt-12 lg:pt-16 text-center mb-12">
                    <h1 class="text-2xl sm:text-3xl lg:text-4xl text-white font-bold mb-4">Explore From Categories</h1>
                    <p class="text-gray-300 text-sm sm:text-base max-w-2xl mx-auto">
                        Temukan berbagai kategori makanan dan minuman favorit Anda
                    </p>
                </div>
                
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 sm:gap-6 lg:gap-8 mt-8">
                    <div class="group bg-gradient-to-br from-orange-400 to-orange-500 aspect-square rounded-3xl flex flex-col justify-center items-center text-center transform hover:scale-105 hover:shadow-2xl transition-all duration-300 cursor-pointer">
                        <div class="text-3xl sm:text-4xl mb-2">🔥</div>
                        <p class="text-white font-semibold text-xs sm:text-sm lg:text-base">POPULER</p>
                    </div>
                    
                    <div class="group bg-gradient-to-br from-green-400 to-green-500 aspect-square rounded-3xl flex flex-col justify-center items-center text-center transform hover:scale-105 hover:shadow-2xl transition-all duration-300 cursor-pointer">
                        <div class="text-3xl sm:text-4xl mb-2">🍽️</div>
                        <p class="text-white font-semibold text-xs sm:text-sm lg:text-base">MAKANAN</p>
                    </div>
                    
                    <div class="group bg-gradient-to-br from-blue-400 to-blue-500 aspect-square rounded-3xl flex flex-col justify-center items-center text-center transform hover:scale-105 hover:shadow-2xl transition-all duration-300 cursor-pointer">
                        <div class="text-3xl sm:text-4xl mb-2">🥤</div>
                        <p class="text-white font-semibold text-xs sm:text-sm lg:text-base">MINUMAN</p>
                    </div>
                    
                    <div class="group bg-gradient-to-br from-purple-400 to-purple-500 aspect-square rounded-3xl flex flex-col justify-center items-center text-center transform hover:scale-105 hover:shadow-2xl transition-all duration-300 cursor-pointer">
                        <div class="text-3xl sm:text-4xl mb-2">🍿</div>
                        <p class="text-white font-semibold text-xs sm:text-sm lg:text-base">SNACK</p>
                    </div>
                    
                    <div class="group bg-gradient-to-br from-pink-400 to-pink-500 aspect-square rounded-3xl flex flex-col justify-center items-center text-center transform hover:scale-105 hover:shadow-2xl transition-all duration-300 cursor-pointer">
                        <div class="text-3xl sm:text-4xl mb-2">📦</div>
                        <p class="text-white font-semibold text-xs sm:text-sm lg:text-base">PAKET</p>
                    </div>
                    
                    <div class="group bg-gradient-to-br from-yellow-400 to-yellow-500 aspect-square rounded-3xl flex flex-col justify-center items-center text-center transform hover:scale-105 hover:shadow-2xl transition-all duration-300 cursor-pointer">
                        <div class="text-3xl sm:text-4xl mb-2">💰</div>
                        <p class="text-white font-semibold text-xs sm:text-sm lg:text-base">HEMAT</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>