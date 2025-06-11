@extends('layout.layout_category')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex mt-6">
        <h1 class="text-2xl font-semibold">Add Category</h1>
    </div>

    <div class="mt-4">
        <form enctype="multipart/form-data" method="POST" action="{{ route('categories.store') }}">
            @csrf

            <div>
            <label class="block font-semibold mb-1" for="nama_kategori">Nama Kategori</label>
            <input
              id="nama_kategori"
              type="text"
              name="nama_kategori"
              placeholder="Nama"
              class="w-full px-4 py-2 rounded-md text-black bg-white focus:outline-none"
              required
            />

            <label class="block font-semibold mb-1 mt-6" for="deskripsi">Deskripsi</label>
            <input
              id="deskripsi"
              type="text"
              name="deskripsi"
              placeholder="Deskripsi"
              class="w-full px-4 py-2 rounded-md text-black bg-white focus:outline-none"
            />

            <button
            type="submit"
            class=" bg-gray-800 text-white font-bold px-10 py-2 rounded-md mt-6 justify-center w-full"
          >
            Tambah Kategori
          </button>
          </div>
        </form>
    </div>

        
</div>
@endsection