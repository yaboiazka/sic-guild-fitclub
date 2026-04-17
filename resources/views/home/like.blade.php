@extends('layouts.main')

@section('title', 'Manage Users')

@section('content')
    <section class="flex flex-col">
        <x-search-component/>
        <x-sort-filters/>
         <div class="flex flex-col gap-4 w-full max-w-8xl mt-8">
            @for ($i = 0; $i < 10; $i++)
                <x-list-artikel-component/>
            @endfor
        </div>
    </section>
@endsection