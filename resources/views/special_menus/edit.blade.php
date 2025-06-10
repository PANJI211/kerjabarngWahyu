@extends('layout.layout_specialmenu')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex mt-6">
        <h1 class="text-2xl font-semibold">Edit Menu</h1>
    </div>

    <div class="mt-4">
        <form enctype="multipart/form-data" method="POST" action="{{ route('special_menus.update', $special_menu) }}">
            @csrf
            @method('PUT')

            <div>
            <label class="block font-semibold mb-1" for="Email">Nama</label>
            <input
              id="nama"
              type="text"
              name="nama"
              :value="$special_menu->nama"
              placeholder="Nama"
              class="w-full px-4 py-2 rounded-md text-black bg-white focus:outline-none"
              required
            />

            <label class="block font-semibold mb-1 mt-6" for="Email">Harga</label>
            <input
              id="harga"
              type="text"
              name="harga"
              :value="$special_menu->harga"
              placeholder="Harga"
              class="w-full px-4 py-2 rounded-md text-black bg-white focus:outline-none"
              required
            />

            <label class="block font-semibold mb-1 mt-6" for="Email">Deskripsi</label>
            <input
              id="deskripsi"
              type="text"
              name="deskripsi"
              :value="$special_menu->deskripsi"
              placeholder="Deskripsi"
              class="w-full px-4 py-2 rounded-md text-black bg-white focus:outline-none"
            />
            <label class="block font-semibold mb-1 mt-6" for="Email">Gambar</label>
            <input
              accept="image/*"
              id="gambar"
              type="file"
              name="gambar"
              :value="$special_menu->gambar"
              placeholder="Gambar"
              class="w-full px-4 py-2 rounded-md text-black bg-white focus:outline-none"
            />

            <button
            type="submit"
            class=" bg-gray-800 text-white font-bold px-10 py-2 rounded-md mt-6 justify-center w-full"
          >
            Edit Menu
          </button>
          </div>
        </form>
    </div>

        
</div>
@endsection