@extends('layouts.main')

@section('title', 'Manage article')

@section('content')
    <div class="mt-3.5 mr-14 py-2">
        <div class="font-bold text-center">
            <h1 class="text-[128px]">67</h1>
            <h1 class="text-[64px]">Articles</h1>
        </div>
        @for ($i = 0; $i < 5; $i++)
             <x-list-artikel-component/>
             <div class="mb-4"></div>
        @endfor
    </div>
@endsection