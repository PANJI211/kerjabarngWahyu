<x-layout>
    <!-- Jumbotron Section -->
    <section id="home" class="min-h-screen  px-5 sm:px-10 lg:px-20  text-white">
        <div class="flex flex-col lg:flex-row items-centern pt-44 ">

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

            <!-- Kanan: Gambar -->
             <div class="flex-1 flex justify-center items-center mb-6 lg:mb-0 order-1 lg:order-2">
      <div class="w-40 h-40 sm:w-60 sm:h-60 lg:w-80 lg:h-80 rounded-full border-4 sm:border-8 border-orange-500 overflow-hidden shadow-xl">
        <img src="{{ asset('imgs/alpukat.jpg') }}" alt="Makanan" class="w-full h-full object-cover" />
      </div>
    </div>
        </div>

    <div class="">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 justify-items-center ">
            <!-- Card Makanan -->
            @for ($i = 0; $i < 4; $i++)
                <div class="bg-gradient-to-b from-[#5E5050] to-[#191919] rounded-xl p-4 shadow-lg text-center w-full sm:w-64">
                    <div class="w-24 h-24 sm:w-32 sm:h-32 rounded-full border-4 border-orange-500 mx-auto -mt-12 overflow-hidden shadow-md">
                        <img src="{{ asset('imgs/es-teh.jpg') }}" alt="Nasi Kuning" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-semibold mt-4 sm:mt-6">Nasi Kuning</h3>
                    <p class="text-sm text-gray-300 mt-2">Cocok untuk sarapan dan mengenyangkan</p>
                    <div class="mt-4 flex items-center justify-between px-4">
                        <span class="bg-white text-black text-xs font-semibold px-3 py-1 rounded-full">Rp 5.000,00</span>
                        <button class="bg-gradient-to-r from-orange-500 to-yellow-500 text-white px-3 py-1 sm:px-4 sm:py-1 rounded-full text-sm shadow-md hover:scale-105 transition duration-300">Order</button>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    </section>
   
    <!-- About Section -->
    <section id="about" class="min-h-screen  text-white px-5 sm:px-10 lg:px-20  flex flex-col lg:flex-row items-center justify-between gap-10">
        <!-- Gambar Chef -->
        <div class="flex justify-center items-center lg:justify-start flex-1">
            <div class="flex items-center justify-center p-2 border-4 border-orange-500 rounded-lg w-full sm:w-xl h-48">
               
                <img src="{{ asset('imgs/chef.png') }}" alt="Chef Kantin" class="relative z-10 w-48 sm:w-64 h-auto rounded-lg object-cover">
             
            </div>
        </div>

        <!-- Teks Tentang Kami -->
        <div class="flex-1 text-center lg:text-left ">
            <h2 class="text-3xl sm:text-4xl font-bold mb-6">Tentang Kami</h2>
            <p class="text-gray-300 text-base sm:text-lg leading-relaxed">
                <span class="text-xl sm:text-2xl font-bold text-white opacity-80">K</span>antin Sekolah kami hadir untuk menyediakan makanan dan minuman yang sehat, lezat, dan bergizi bagi seluruh warga sekolah. Kami berkomitmen menjaga kebersihan, kualitas, serta harga yang terjangkau untuk mendukung gaya hidup sehat dan aktif para siswa.
            </p>
        </div>
    </section>

    {{-- special menu --}}
    <section id="Special Menu" class="min-h-screen flex-1 text-center lg:text-left"> 
          <h1 class="text-center text-3xl text-white font-bold mb-20">Special Menu</h1>
           <div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 justify-items-center ">
                <!-- Card Makanan -->
                @for ($i = 0; $i < 4; $i++)
                    <div class="bg-gradient-to-b from-[#5E5050] to-[#191919] rounded-xl p-4 shadow-lg text-center w-full sm:w-64">
                        <div class="w-24 h-24 sm:w-32 sm:h-32 rounded-full border-4 border-orange-500 mx-auto -mt-12 overflow-hidden shadow-md">
                            <img src="{{ asset('imgs/es-teh.jpg') }}" alt="Nasi Kuning" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-semibold mt-4 sm:mt-6">Nasi Kuning</h3>
                        <p class="text-sm text-gray-300 mt-2">Cocok untuk sarapan dan mengenyangkan</p>
                        <div class="mt-4 flex items-center justify-between px-4">
                            <span class="bg-white text-black text-xs font-semibold px-3 py-1 rounded-full">Rp 5.000,00</span>
                            <button class="bg-gradient-to-r from-orange-500 to-yellow-500 text-white px-3 py-1 sm:px-4 sm:py-1 rounded-full text-sm shadow-md hover:scale-105 transition duration-300">Order</button>
                        </div>
                    </div>
                @endfor
            </div>
           </div>
      
    </section>
</x-layout>