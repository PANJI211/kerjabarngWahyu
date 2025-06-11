<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css') <!-- Or include Tailwind via CDN if not using Vite -->
    <title>@yield('title', 'Dashboard')</title>
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- Mobile Sidebar Backdrop -->
    <div id="overlay" class="fixed inset-0 bg-black/50 hidden z-30"></div>

    <div class="flex">
        <!-- Sidebar -->
        @include('layout._sidebar')

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col "> <!-- Offset for sidebar -->
            <!-- Navbar -->
            @include('layout._navbar')

            <!-- Page Content -->
            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Toggle Script -->
    
</body>
</html>