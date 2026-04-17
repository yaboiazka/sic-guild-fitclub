@extends('layouts.main')

@section('title', 'Articles')

@section('content')
    <x-search-component/>
    <x-sort-filters/>
    <div class="flex flex-col gap-4 max-w-8xl mt-8">
        @foreach ($posts as $post)
            @if ($post->draft_status == 0 && $post->approval == 1)
            <a href="{{ route('dashboard.article.show', $post->id) }}">
                <x-list-artikel-component
                    description="{{ $post->description }}"
                    like="{{ $post->like }}"
                />
            </a>
            @endif
        @endforeach
    </div>
@endsection