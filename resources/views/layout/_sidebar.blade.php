<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <aside class="w-64 bg-gray-800 text-white h-screen ">
        <!-- Header -->
        <div class="flex items-center justify-center py-6 border-b border-gray-700">
            <div class="text-center">
                <div class="text-xl font-bold">Kantin Sekolah</div>
                <div class="text-sm text-gray-400 mt-1">
                    {{ auth()->user()->name }}
                </div>
            </div>
        </div>
    
        <!-- Navigation -->
        <nav class="mt-6">
            <a href="/dashboard" class="block py-3 px-6 hover:bg-gray-700 {{ request()->is('dashboard') ? 'bg-gray-700' : '' }}">
                Dashboard
            </a>
            <a href="/users" class="block py-3 px-6 hover:bg-gray-700 {{ request()->is('users') ? 'bg-gray-700' : '' }}">
                Users
            </a>
            <form method="POST" action="">
                @csrf
                <button type="submit" class="w-full text-left py-3 px-6 hover:bg-gray-700">
                    Logout
                </button>
            </form>
        </nav>
    </aside>
    
</body>
</html>