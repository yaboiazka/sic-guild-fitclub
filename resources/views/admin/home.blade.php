@extends('layouts.admin')

@section('title', 'Articles')

@section('content')
    <x-search-component/>
    <x-sort-filters/>
    <div class="font-bold text-center">
        <h1 class="text-[128px]">67</h1>
        <h1 class="text-[64px]">Articles</h1>
    </div>
    <div class="grid grid-cols-1">
        @for ($i = 0; $i < 10; $i++)
            <x-list-artikel-component/>
            <div class="mb-4"></div>
        @endfor
    </div>
@endsection