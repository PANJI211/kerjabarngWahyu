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
    <nav id="navbar" class="fixed top-0 left-0 right-0 w-full shadow-md z-50 m-0 p-0">
    <div class="w-full px-6 py-3 flex items-center bg-gradient-to-r from-orange-500 to-yellow-500 justify-between text-white">
        <!-- Left menu -->
        <div class="flex space-x-6">
            <a href="#" class="hover:text-blue-200">Home</a>
            <a href="#" class="hover:text-blue-200">About</a>
        </div>

        <!-- Center logo and text -->
        <div class="flex items-center space-x-2">
            <img src="https://www.svgrepo.com/show/499939/canteen.svg" alt="Logo" class="w-8 h-8 rounded-full bg-black p-1" />
            <span class="font-semibold">Kantin sekolah</span>
        </div>

        <!-- Right menu -->
        <div class="flex space-x-6">
            <a href="{{ route('login') }}" class="hover:text-blue-200">Sign In</a>
            <a href="{{ route('Register') }}" class="hover:text-blue-200">Sign Up</a>
        </div>
    </div>
</nav>


    <!-- Dummy Content for Scrolling -->
    
</body>
</html>