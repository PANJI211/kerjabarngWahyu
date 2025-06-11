<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900 h-screen">

    <div class="flex h-screen overflow-hidden">
        {{-- Sidebar --}}
        @include('layout._sidebar')

        <!-- Main Content Area -->
        <div class="flex flex-col flex-1 overflow-hidden">
            {{-- Navbar --}}
            @include('layout._navbar')

            <!-- Scrollable Content -->
            <main class="flex-1 p-6 bg-gray-100 overflow-y-auto">
                @yield('content')
            </main>
        </div>
    </div>

</body>
</html>