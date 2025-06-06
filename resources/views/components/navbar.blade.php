<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-gray-100">

    <!-- Sticky Navbar -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 w-full h- shadow-md z-50 m-0 p-0">
    <div class="w-full px-6 py-3 flex items-center bg-gradient-to-r from-orange-500 to-yellow-500 justify-between text-white">
        <!-- Left menu -->
        <div class="flex space-x-6">
            <a href="#home" class="hover:text-blue-200 ">Home</a>
            <a href="#about" class="hover:text-blue-200">About</a>
        </div>

        <!-- Center logo and text -->
        <div class=" flex items-center  ">
            <img src="{{ asset('imgs/white.png') }}" alt="Logo" class="w-9 h-9" />
            <span class="font-semibold  hidden md:inline">Kantin sekolah</span>
        </div>
        

        <!-- Right menu -->
        <div class="flex space-x-6">
            <a href="{{ route('login') }}" class="hover:text-blue-200">Sign In</a>
            <a href="{{ route('Register') }}" class="hover:text-blue-200">Sign Up</a>
        </div>
    </div>
</nav>


    <!-- Dummy Content for Scrolling -->
    <script>
         const navbar = document.getElementById('navbar');

window.addEventListener('scroll', () => {
  if (window.scrollY > 10) {
    navbar.classList.add('bg-white', 'shadow-md');
    navbar.classList.remove('bg-transparent');

    // Ubah warna link jadi hitam saat ada background
    document.querySelectorAll('.nav-link').forEach(link => {
      link.classList.remove('text-white');
      link.classList.add('text-gray-700');
    });
  } else {
    navbar.classList.remove('bg-white', 'shadow-md');
    navbar.classList.add('bg-transparent');

    // Kembalikan warna link ke putih
    document.querySelectorAll('.nav-link').forEach(link => {
      link.classList.remove('text-gray-700');
      link.classList.add('text-white');
    });
  }
});

    </script>
    
</body>
</html>