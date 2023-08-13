<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Kamar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('kamars.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="nomor_kamar" class="block text-gray-700 text-sm font-bold mb-2">Nomor Kamar:</label>
                            <input type="text" name="nomor_kamar" id="nomor_kamar" class="form-input w-full @error('nomor_kamar') border-red-500 @enderror" value="{{ old('nomor_kamar') }}" required>
                            @error('nomor_kamar')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="jenis_kamar" class="block text-gray-700 text-sm font-bold mb-2">Jenis Kamar:</label>
                            <input type="text" name="jenis_kamar" id="jenis_kamar" class="form-input w-full @error('jenis_kamar') border-red-500 @enderror" value="{{ old('jenis_kamar') }}" required>
                            @error('jenis_kamar')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
