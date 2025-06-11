@extends('layout.layout_specialmenu')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex mt-6 justify-between items-center">
        <h1 class="text-2xl font-semibold">Edit Menu</h1>
        
        <!-- Tombol Delete Sederhana -->
        <form id="delete-form" method="POST" action="{{ route('special_menus.destroy', $special_menu->id) }}">
            @csrf
            @method('DELETE')
            <button
                type="button"
                onclick="confirmDelete()"
                class="bg-red-600 text-white px-4 py-2 rounded"
            >
                Hapus Menu
            </button>
        </form>
    </div>

    <div class="mt-4">
        <form enctype="multipart/form-data" method="POST" action="{{ route('special_menus.update', $special_menu->id) }}">
            @csrf
            @method('PUT')

            <div>
                <label class="block font-semibold mb-1" for="nama">Nama</label>
                <input
                  id="nama"
                  type="text"
                  name="nama"
                  value="{{ $special_menu->nama }}"
                  placeholder="Nama"
                  class="w-full px-4 py-2 rounded-md text-black bg-white focus:outline-none"
                  required
                />

                <label class="block font-semibold mb-1 mt-6" for="harga">Harga</label>
                <input
                  id="harga"
                  type="text"
                  name="harga"
                  value="{{ $special_menu->harga }}"
                  placeholder="Harga"
                  class="w-full px-4 py-2 rounded-md text-black bg-white focus:outline-none"
                  required
                />

                <label class="block font-semibold mb-1 mt-6" for="deskripsi">Deskripsi</label>
                <input
                  id="deskripsi"
                  type="text"
                  name="deskripsi"
                  value="{{ $special_menu->deskripsi }}"
                  placeholder="Deskripsi"
                  class="w-full px-4 py-2 rounded-md text-black bg-white focus:outline-none"
                />

                <label class="block font-semibold mb-1 mt-6" for="gambar">Gambar</label>
                <input
                  accept="image/*"
                  id="gambar"
                  type="file"
                  name="gambar"
                  class="w-full px-4 py-2 rounded-md text-black bg-white focus:outline-none"
                />

                @if($special_menu->gambar)
                    <p class="mt-2 text-sm text-gray-600">Gambar saat ini:</p>
                    <img src="{{ asset('storage/' . $special_menu->gambar) }}" alt="Current Image" class="w-32 mt-1 rounded">
                @endif

                <button
                    type="submit"
                    class="bg-gray-800 text-white font-bold px-10 py-2 rounded-md mt-6 w-full"
                >
                    Edit Menu
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function confirmDelete() {
        if (confirm('Yakin ingin menghapus menu ini?')) {
            document.getElementById('delete-form').submit();
        }
    }
</script>
@endsection
