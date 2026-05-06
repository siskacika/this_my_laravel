@extends('layouts.app')

@section('content')
    <div class="relative isolate overflow-hidden bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <p class="text-base font-semibold leading-7 text-sky-600">Welcome to Laravel</p>
            <h1 class="mt-4 text-4xl font-bold tracking-tight text-slate-900 sm:text-6xl">Your application is ready.</h1>
            <p class="mt-6 text-lg leading-8 text-slate-600">Build and manage your data with Laravel. This project now uses the standard Laravel 12 layout and Tailwind-based UI.</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="https://laravel.com/docs" class="rounded-full bg-slate-900 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-slate-700">Docs</a>
                <a href="https://laracasts.com" class="text-sm font-semibold leading-6 text-slate-900">Laracasts <span aria-hidden="true">→</span></a>
            </div>
        </div>
    </div>
@endsection
