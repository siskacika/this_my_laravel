@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-3xl px-6 py-10">
        <div class="space-y-6 rounded-3xl bg-white p-6 shadow-lg ring-1 ring-slate-200 sm:p-8">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <h1 class="text-2xl font-semibold text-slate-900">Form Data Masyarakat</h1>
                    <p class="mt-1 text-sm text-slate-600">Isi data masyarakat dengan lengkap dan benar.</p>
                </div>
                <a href="{{ route('Masyarakat.index') }}" class="inline-flex items-center justify-center rounded-full bg-slate-900 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-slate-700">Kembali</a>
            </div>

            <form action="{{ route('Masyarakat.store') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="nomor_kk" class="block text-sm font-medium text-slate-700">Nomor KK</label>
                    <input type="text" name="nomor_kk" id="nomor_kk" value="{{ old('nomor_kk') }}" class="mt-2 block w-full rounded-3xl border border-slate-200 bg-white py-3 px-4 text-sm text-slate-900 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-4 focus:ring-sky-100">
                    @error('nomor_kk') <p class="mt-2 text-sm text-rose-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="nomor_ktp" class="block text-sm font-medium text-slate-700">Nomor KTP</label>
                    <input type="text" name="nomor_ktp" id="nomor_ktp" value="{{ old('nomor_ktp') }}" class="mt-2 block w-full rounded-3xl border border-slate-200 bg-white py-3 px-4 text-sm text-slate-900 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-4 focus:ring-sky-100">
                    @error('nomor_ktp') <p class="mt-2 text-sm text-rose-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="nama" class="block text-sm font-medium text-slate-700">Nama</label>
                    <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="mt-2 block w-full rounded-3xl border border-slate-200 bg-white py-3 px-4 text-sm text-slate-900 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-4 focus:ring-sky-100">
                    @error('nama') <p class="mt-2 text-sm text-rose-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="alamat" class="block text-sm font-medium text-slate-700">Alamat</label>
                    <textarea name="alamat" id="alamat" rows="4" class="mt-2 block w-full rounded-3xl border border-slate-200 bg-white py-3 px-4 text-sm text-slate-900 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-4 focus:ring-sky-100">{{ old('alamat') }}</textarea>
                    @error('alamat') <p class="mt-2 text-sm text-rose-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="jenis_kelamin" class="block text-sm font-medium text-slate-700">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="mt-2 block w-full rounded-3xl border border-slate-200 bg-white py-3 px-4 text-sm text-slate-900 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-4 focus:ring-sky-100">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        <option value="Laki-Laki" {{ old('jenis_kelamin') == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                    </select>
                    @error('jenis_kelamin') <p class="mt-2 text-sm text-rose-600">{{ $message }}</p> @enderror
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="inline-flex items-center justify-center rounded-full bg-slate-900 px-5 py-3 text-sm font-semibold text-white shadow-sm hover:bg-slate-700">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection