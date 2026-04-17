@extends('layouts.main')

@section('title', 'Articles')

@section('content')
    <x-search-component/>
    <x-sort-filters/>
    <div class="grid grid-cols-1">
        @for ($i = 0; $i <10; $i++)
        <div class="mb-4"></div>
        @endfor
        <x-list-artikel-component/>
    </div>
@endsection