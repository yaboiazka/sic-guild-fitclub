@extends('layouts.main')

@section('title', 'Articles')

@section('content')
    <x-search-component/>
    <x-sort-filters/>
    <div class="grid grid-cols-1">
        @foreach ($posts as $post)
            @if ($post->draft_status == 0 && $post->approval == 1)
            <x-list-artikel-component
                description="{{ $post->description }}"
                like="{{ $post->like }}"
            />
            <div class="mb-4"></div>
            @endif
        @endforeach
        <x-list-artikel-component/>
    </div>
@endsection