@extends('layout.layout_admin')

@section('content')
<div class="container mx-auto py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-700">Daftar Admin</h1>
            <a href="{{ route('admins.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                + Tambah Admin
            </a>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full text-sm">
                <thead class="bg-gray-200 text-gray-600 uppercase text-xs leading-normal">
                    <tr>
                        <th class="py-3 px-6 text-left">No</th>
                        <th class="py-3 px-6 text-left">Nama</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 divide-y divide-gray-200">
                    @forelse($admins as $index => $admin)
                        <tr>
                            <td class="py-3 px-6">{{ $index + 1 }}</td>
                            <td class="py-3 px-6">{{ $admin->name }}</td>
                            <td class="py-3 px-6">{{ $admin->email }}</td>
                            <td class="py-3 px-6 flex space-x-2">
                                <a href="{{ route('admins.edit', $admin->id) }}" class="text-indigo-600 hover:underline">Edit</a>

                                <form action="{{ route('admins.destroy', $admin->id) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="py-3 px-6 text-center text-gray-500">Belum ada data admin.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection