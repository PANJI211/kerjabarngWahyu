<aside id="sidebar" class="w-64 bg-gray-800 text-white h-screen fixed top-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition-transform duration-300 ease-in-out overflow-y-auto z-40">
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

        @if (auth()->user()->role == 'admin')
            <a href="/admin" class="block py-3 px-6 hover:bg-gray-700 {{ request()->is('admin*') ? 'bg-gray-700' : '' }}">
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

<script>
    
       document.addEventListener('DOMContentLoaded', function () {
        const sidebar = document.getElementById('sidebar');
        const menuToggle = document.getElementById('menu-toggle');
        const overlay = document.getElementById('overlay');

        if (menuToggle) {
            menuToggle.addEventListener('click', () => {
                sidebar.classList.toggle('-translate-x-full');
                sidebar.classList.toggle('translate-x-0');
                overlay.classList.toggle('hidden');
            });
        }

        if (overlay) {
            overlay.addEventListener('click', () => {
                sidebar.classList.add('-translate-x-full');
                sidebar.classList.remove('translate-x-0');
                overlay.classList.add('hidden');
            });
        }
    });
</script>