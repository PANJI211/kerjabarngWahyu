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

  <nav id="navbar" class="fixed top-0 left-0 right-0 w-full shadow-md z-50 bg-[#55504D] text-white">
    <div class="w-full px-6 py-3 flex items-center justify-between bg-[#55504D]">
        <!-- Left Side: Menu for all users -->
        <div class="flex items-center space-x-2">
            @guest
                <a href="#home" class="hover:text-blue-200 transition duration-300">Home</a>
                <a href="#about" class="hover:text-blue-200 transition duration-300">About</a>
                <a href="#Special Menu" class="hover:text-blue-200 transition duration-300">Menu</a>
            @endguest

            @auth
                <a href="{{ route('home') }}" class="hover:text-blue-200 transition duration-300">Home</a>
                <a href="" class="hover:text-blue-200 transition duration-300">Foods</a>
                <a href="" class="hover:text-blue-200 transition duration-300">Categories</a>
               
            @endauth
        </div>

        <!-- Center: Logo (only for guests) -->
        @guest
            <div class="flex items-center justify-center flex-1">
                <img src="{{ asset('imgs/white.png') }}" alt="Logo" class="w-9 h-9" />
                <span class="font-semibold hidden md:inline">Kantin Sekolah</span>
            </div>
        @endguest

        <!-- Right Side: Auth-related links -->
        <div class="flex items-center space-x-0.5 gap-4">
            @guest
                <a href="{{ route('login') }}" class="hover:text-blue-200 transition duration-300">Sign In</a>
                <a href="{{ route('Register') }}" class="hover:text-blue-200 transition duration-300">Sign Up</a>
            @endguest

            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="hover:text-blue-200 transition duration-300">Logout</button>
                </form>
            @endauth
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