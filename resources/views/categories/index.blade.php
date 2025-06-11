@extends('layout.layout_category')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mt-6">
        <h1 class="text-2xl font-semibold">Categories</h1>
        <a href="{{ route('categories.create') }}"><button class="bg-white px-10 py-2 rounded-md font-semibold">Tambah</button></a>
    </div>

        <div class="grid grid-cols-4 gap-6 mt-6">
            @foreach ($categories as $category)
                <div>
                    <div class="my-2">
                        <p class="text-xl font-semibold">{{ $category->nama_kategori}}</p>
                        <p class="font-light">{{ ($category->deskripsi)}}</p>
                    </div>
                    <a href="{{ route('categories.edit', $category) }}"><button class="bg-white px-10 py-2 w-full rounded-md font-semibold">Edit</button></a>
                </div>
            @endforeach
        </div>
</div>
@endsection