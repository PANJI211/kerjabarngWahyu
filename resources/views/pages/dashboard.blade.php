@extends('layout.layout_dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold">Dashboard Kantin Sekolah</h1>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-white rounded-lg shadow p-4 text-center">
            <span class="text-3xl font-bold"></span>
            <p class="text-gray-600">Categories</p>
        </div>

        <div class="bg-white rounded-lg shadow p-4 text-center">
            <span class="text-3xl font-bold"></span>
            <p class="text-gray-600">Food Items</p>
        </div>

        <div class="bg-white rounded-lg shadow p-4 text-center">
            <span class="text-3xl font-bold"></span>
            <p class="text-gray-600">Total Orders</p>
        </div>
    </div>
</div>
@endsection
