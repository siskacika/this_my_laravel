@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-6xl px-6 py-10">
        <div class="flex flex-col gap-6 rounded-3xl bg-white p-6 shadow-lg ring-1 ring-slate-200 sm:p-8">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <h1 class="text-2xl font-semibold text-slate-900">Data Masyarakat</h1>
                    <p class="mt-1 text-sm text-slate-600">Kelola data warga yang tersimpan di aplikasi.</p>
                </div>
                <a href="{{ route('Masyarakat.create') }}" class="inline-flex items-center justify-center rounded-full bg-sky-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-sky-500">Tambah Data</a>
            </div>

            @if(session('success'))
                <div class="rounded-3xl bg-emerald-50 p-4 text-sm text-emerald-700 ring-1 ring-emerald-100">{{ session('success') }}</div>
            @endif

            @if($Masyarakat->isEmpty())
                <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6 text-slate-700">Tidak ada data masyarakat saat ini.</div>
            @else
                <div class="overflow-x-auto rounded-3xl border border-slate-200 bg-white">
                    <table class="min-w-full divide-y divide-slate-200 text-sm">
                        <thead class="bg-slate-50 text-slate-700">
                            <tr>
                                <th class="px-4 py-3 text-left font-semibold">#</th>
                                <th class="px-4 py-3 text-left font-semibold">Nomor KK</th>
                                <th class="px-4 py-3 text-left font-semibold">Nomor KTP</th>
                                <th class="px-4 py-3 text-left font-semibold">Nama</th>
                                <th class="px-4 py-3 text-left font-semibold">Alamat</th>
                                <th class="px-4 py-3 text-left font-semibold">Jenis Kelamin</th>
                                <th class="px-4 py-3 text-left font-semibold">Opsi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 bg-white text-slate-700">
                            @foreach ($Masyarakat as $item)
                                <tr>
                                    <td class="px-4 py-4">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-4">{{ $item->nomor_kk }}</td>
                                    <td class="px-4 py-4">{{ $item->nomor_ktp }}</td>
                                    <td class="px-4 py-4">{{ $item->nama }}</td>
                                    <td class="px-4 py-4">{{ $item->alamat }}</td>
                                    <td class="px-4 py-4">{{ $item->jenis_kelamin }}</td>
                                    <td class="px-4 py-4 space-x-2">
                                        <a href="{{ route('Masyarakat.edit', $item->id) }}" class="inline-flex rounded-full bg-slate-900 px-3 py-2 text-xs font-semibold text-white hover:bg-slate-700">Edit</a>
                                        <form action="{{ route('Masyarakat.destroy', $item->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="inline-flex rounded-full bg-rose-600 px-3 py-2 text-xs font-semibold text-white hover:bg-rose-500">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection
        