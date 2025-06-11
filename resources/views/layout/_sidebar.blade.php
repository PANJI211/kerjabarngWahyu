<aside class="w-64 bg-gray-800 text-white h-screen  left-0 top-0 overflow-y-auto">
    <!-- Header -->
    <div class="flex items-center justify-center py-6 border-b border-gray-700">
        <div class="text-center">
            <div class="text-xl font-bold">Kantin Sekolah</div>
            <div class="text-sm text-gray-400 mt-1">
                Halo, {{ auth()->user()->name ?? 'Admin' }}
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="mt-6">
        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}" class="block py-3 px-6 hover:bg-gray-700 {{ request()->is('dashboard') ? 'bg-gray-700' : '' }}">
            Dashboard
        </a>

        <!-- Admin -->
         @if (auth()->user()->role =='admin')
         <a href="admins" class="block py-3 px-6 hover:bg-gray-700 {{ request()->is('admin*') ? 'bg-gray-700' : '' }}">
            Admin
        </a>
         @endif   

      

        <!-- Category -->
        <a href="categories" class="block py-3 px-6 hover:bg-gray-700 {{ request()->is('category*') ? 'bg-gray-700' : '' }}">
            Category
        </a>

        <!-- Paket -->
        <a href="special_menus" class="block py-3 px-6 hover:bg-gray-700 {{ request()->is('food*') ? 'bg-gray-700' : '' }}">
            Special Menu
        </a>

        <!-- Logout -->
        <form method="POST" action="{{ route('logout') }}" class="px-6 w-full flex">
            @csrf
            <button type="submit" class="w-full text-left py-3 hover:bg-gray-700">
                Logout
            </button>
        </form>
    </nav>
</aside>
