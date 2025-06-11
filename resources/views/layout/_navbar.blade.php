<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>navbar_dashboard</title>
</head>
<body>
  <!-- Main Navbar -->
  <header class="bg-white shadow-md p-4 flex justify-between items-center">
    
    <!-- Hamburger Menu (Mobile Only) -->
    <button n id="menu-toggle" ty class="fixed top-4 left-4 z-50 md:hidden bg-white text-gray-800 border border-gray-300 rounded-full p-2 shadow hover:bg-gray-100 transition duration-300">
        <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!-- Icon Close (hidden by default) -->
          <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
    </button>
    
    <!-- Dashboard Title (Hidden on Mobile) -->
    <h1 class="text-lg font-semibold md:block hidden">
        Dashboard
    </h1>

    <!-- Profile Avatar & Other Elements (Hidden on Mobile) -->
    <div class=" items-center space-x-4 md:block hidden">
        <img src="https://via.placeholder.com/32"  alt="Avatar" class="rounded-full w-8 h-8">
    </div>
</header>