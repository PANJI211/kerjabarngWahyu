@extends('layout.layout_specialmenu')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mt-6">
        <h1 class="text-2xl font-semibold">Special Menu</h1>
        <a href="{{ route('special_menus.create') }}"><button class="bg-white px-10 py-2 rounded-md font-semibold">Tambah</button></a>
    </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6">
            @foreach ($special_menus as $special_menu)
                <div>
                    <img src="{{ asset('storage/public/' . $special_menu->gambar) }}" class="w-60 h-60 object-cover rounded-xl">
                    <div class="my-2">
                        <p class="text-xl font-light">{{ $special_menu->nama}}</p>
                        <p class="font-semibold">Rp. {{ number_format($special_menu->harga)}}</p>
                    </div>
                    <a href="{{ route('special_menus.edit', $special_menu) }}"><button class="bg-white py-2 w-[60] rounded-md font-semibold">Edit</button></a>
                </div>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $special_menus->links() }}
        </div>
</div>
@endsection