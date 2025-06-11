<x-layout>

    <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin Sekolah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');
        
        * {
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            min-height: 100vh;
        }
        
        .floating {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }
        
        .glow {
            box-shadow: 0 0 20px rgba(249, 115, 22, 0.4);
        }
        
        .card-gradient {
            background: linear-gradient(145deg, #5E5050, #4a4040);
        }
    </style>
</head>
<body class="text-white">
    <!-- Jumbotron Section -->
    <section id="home" class="min-h-screen px-4 sm:px-6 md:px-10 lg:px-20 flex items-center">
        <div class="container mx-auto">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-12">
                
                <!-- Teks Content -->
                <div class="flex-1 text-center lg:text-left space-y-6 lg:space-y-8 order-2 lg:order-1">
                    <div class="space-y-4">
                        <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold leading-tight">
                            Selamat Datang
                            <br />
                            Di <span class="text-orange-400 drop-shadow-lg">Kantin Sekolah</span>
                        </h1>
                        <p class="text-gray-200 text-lg sm:text-xl md:text-2xl max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                            Berbelanja di kantin sekolah dengan makanan yang sehat dan bergizi!
                        </p>
                    </div>
             
                </div>

                <!-- Gambar Hero -->
                <div class="flex-1 flex justify-center items-center order-1 lg:order-2">
                    <div class="relative">
                        <div class="w-64 h-64 sm:w-80 sm:h-80 md:w-96 md:h-96 lg:w-[450px] lg:h-[450px] rounded-full border-8 border-orange-500 overflow-hidden shadow-2xl glow floating">
                            <img src="{{ asset('imgs/alpukat.jpg') }}" alt="Makanan" class="w-full h-full object-cover" />
                        </div>
                        <!-- Decorative elements -->
                        <div class="absolute -top-4 -right-4 w-8 h-8 bg-yellow-400 rounded-full animate-pulse"></div>
                        <div class="absolute -bottom-4 -left-4 w-6 h-6 bg-orange-400 rounded-full animate-pulse delay-1000"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!-- About Section -->
    <section id="about" class="min-h-screen px-4 sm:px-6 md:px-10 lg:px-20 flex items-center py-20">
        <div class="container mx-auto">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-16">
                
                <!-- Gambar Chef -->
                <div class="flex-1 flex justify-center order-2 lg:order-1">
                    <div class="relative">
                        <div class="bg-gradient-to-br from-orange-500/20 to-yellow-500/20 p-8 border-4 border-orange-500 rounded-3xl backdrop-blur-sm">
                            <img src="{{ asset('imgs/chef.png') }}" alt="Chef Kantin" class="w-64 sm:w-80 md:w-96 h-auto rounded-2xl object-cover shadow-xl">
                        </div>
                        <!-- Background decoration -->
                        <div class="absolute -z-10 top-4 left-4 w-full h-full bg-gradient-to-br from-orange-600/30 to-yellow-600/30 rounded-3xl"></div>
                    </div>
                </div>

                <!-- Teks Tentang Kami -->
                <div class="flex-1 text-center lg:text-left space-y-6 order-1 lg:order-2">
                    <h2 class="text-4xl sm:text-5xl md:text-6xl font-bold text-orange-400 drop-shadow-xl">
                        Tentang Kami
                    </h2>
                    <div class="space-y-4">
                        <p class="text-gray-200 text-lg sm:text-xl md:text-2xl leading-relaxed max-w-2xl mx-auto lg:mx-0">
                            <span class="text-3xl sm:text-4xl font-bold text-orange-400 float-left  leading-none drop-shadow-lg">K</span>
                            antin Sekolah kami hadir untuk menyediakan makanan dan minuman yang sehat, lezat, dan bergizi bagi seluruh warga sekolah.
                        </p>
                        <p class="text-gray-300 text-base sm:text-lg md:text-xl leading-relaxed max-w-2xl mx-auto lg:mx-0">
                            Kami berkomitmen menjaga kebersihan, kualitas, serta harga yang terjangkau untuk mendukung gaya hidup sehat dan aktif para siswa.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Menu Section -->
    <section id="special-menu" class="min-h-screen py-20 px-4 sm:px-6 md:px-10 lg:px-20">
        <div class="container mx-auto">
            <!-- Header -->
            <div class="text-center mb-16">
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-orange-400 drop-shadow-xl mb-4">
                    Special Menu
                </h1>
                <div class="w-24 h-1 bg-gradient-to-r from-orange-500 to-yellow-500 mx-auto rounded-full"></div>
            </div>
            
            <!-- Menu Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 justify-items-center">
                <!-- Repeat 4 times for menu items -->
                <div class="card-gradient rounded-3xl p-6 shadow-2xl text-center w-full max-w-xs transition-all duration-300 hover:transform hover:scale-105 hover:shadow-orange-500/25 hover:shadow-2xl relative overflow-hidden">
                    <!-- Card background decoration -->
                    <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-orange-500/20 to-yellow-500/20 rounded-bl-full"></div>
                    
                    <!-- Food Image -->
                    <div class="relative -mt-12 mb-6">
                        <div class="w-24 h-24 sm:w-28 sm:h-28 md:w-32 md:h-32 rounded-full border-4 border-orange-500 mx-auto overflow-hidden shadow-xl glow">
                            <img src="{{ asset('imgs/es-teh.jpg') }}" alt="Nasi Kuning" class="w-full h-full object-cover">
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <div class="space-y-4">
                        <h3 class="text-xl sm:text-2xl font-bold text-white">Nasi Kuning</h3>
                        <p class="text-sm sm:text-base text-gray-300 leading-relaxed px-2">
                            Cocok untuk sarapan dan mengenyangkan
                        </p>
                        
                        <!-- Price and Order Button -->
                        <div class="flex items-center justify-between gap-3 pt-4">
                            <span class="bg-white text-gray-800 text-sm sm:text-base font-bold px-4 py-2 rounded-full shadow-md">
                                Rp 5.000,00
                            </span>
                            <a href="{{ route('login') }}" class="bg-gradient-to-r from-orange-500 to-yellow-500 hover:from-orange-600 hover:to-yellow-600 text-white px-6 py-2 rounded-full text-sm sm:text-base font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                                Order
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Duplicate the card 3 more times -->
                <div class="card-gradient rounded-3xl p-6 shadow-2xl text-center w-full max-w-xs transition-all duration-300 hover:transform hover:scale-105 hover:shadow-orange-500/25 hover:shadow-2xl relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-orange-500/20 to-yellow-500/20 rounded-bl-full"></div>
                    <div class="relative -mt-12 mb-6">
                        <div class="w-24 h-24 sm:w-28 sm:h-28 md:w-32 md:h-32 rounded-full border-4 border-orange-500 mx-auto overflow-hidden shadow-xl glow">
                            <img src="{{ asset('imgs/es-teh.jpg') }}" alt="Nasi Kuning" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-xl sm:text-2xl font-bold text-white">Nasi Kuning</h3>
                        <p class="text-sm sm:text-base text-gray-300 leading-relaxed px-2">
                            Cocok untuk sarapan dan mengenyangkan
                        </p>
                        <div class="flex items-center justify-between gap-3 pt-4">
                            <span class="bg-white text-gray-800 text-sm sm:text-base font-bold px-4 py-2 rounded-full shadow-md">
                                Rp 5.000,00
                            </span>
                            <a href="{{ route('login') }}" class="bg-gradient-to-r from-orange-500 to-yellow-500 hover:from-orange-600 hover:to-yellow-600 text-white px-6 py-2 rounded-full text-sm sm:text-base font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                                Order
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="card-gradient rounded-3xl p-6 shadow-2xl text-center w-full max-w-xs transition-all duration-300 hover:transform hover:scale-105 hover:shadow-orange-500/25 hover:shadow-2xl relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-orange-500/20 to-yellow-500/20 rounded-bl-full"></div>
                    <div class="relative -mt-12 mb-6">
                        <div class="w-24 h-24 sm:w-28 sm:h-28 md:w-32 md:h-32 rounded-full border-4 border-orange-500 mx-auto overflow-hidden shadow-xl glow">
                            <img src="{{ asset('imgs/es-teh.jpg') }}" alt="Nasi Kuning" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-xl sm:text-2xl font-bold text-white">Nasi Kuning</h3>
                        <p class="text-sm sm:text-base text-gray-300 leading-relaxed px-2">
                            Cocok untuk sarapan dan mengenyangkan
                        </p>
                        <div class="flex items-center justify-between gap-3 pt-4">
                            <span class="bg-white text-gray-800 text-sm sm:text-base font-bold px-4 py-2 rounded-full shadow-md">
                                Rp 5.000,00
                            </span>
                            <a href="{{ route('login') }}" class="bg-gradient-to-r from-orange-500 to-yellow-500 hover:from-orange-600 hover:to-yellow-600 text-white px-6 py-2 rounded-full text-sm sm:text-base font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                                Order
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="card-gradient rounded-3xl p-6 shadow-2xl text-center w-full max-w-xs transition-all duration-300 hover:transform hover:scale-105 hover:shadow-orange-500/25 hover:shadow-2xl relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-orange-500/20 to-yellow-500/20 rounded-bl-full"></div>
                    <div class="relative -mt-12 mb-6">
                        <div class="w-24 h-24 sm:w-28 sm:h-28 md:w-32 md:h-32 rounded-full border-4 border-orange-500 mx-auto overflow-hidden shadow-xl glow">
                            <img src="{{ asset('imgs/es-teh.jpg') }}" alt="Nasi Kuning" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-xl sm:text-2xl font-bold text-white">Nasi Kuning</h3>
                        <p class="text-sm sm:text-base text-gray-300 leading-relaxed px-2">
                            Cocok untuk sarapan dan mengenyangkan
                        </p>
                        <div class="flex items-center justify-between gap-3 pt-4">
                            <span class="bg-white text-gray-800 text-sm sm:text-base font-bold px-4 py-2 rounded-full shadow-md">
                                Rp 5.000,00
                            </span>
                            <a href="{{ route('login') }}" class="bg-gradient-to-r from-orange-500 to-yellow-500 hover:from-orange-600 hover:to-yellow-600 text-white px-6 py-2 rounded-full text-sm sm:text-base font-semibold shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105">
                                Order
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
</x-layout>
