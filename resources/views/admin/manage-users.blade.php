@extends('layouts.admin')

@section('title', 'Manage Users')

@section('content')
    <x-search-component/>
    <div class="mb-25"></div>
    <div class="grid grid-cols-3 justify-around gap-5">
        @foreach ($users as $user)
            <div class="flex flex-col bg-fitclub-grey items-center align-center rounded-2xl justify-between p-8">
                <img src="{{ $user['profile']}}" alt="Profile Not Found" class="rounded-full shadow-lg">
                <h2 class="text-[40px]">{{ $user['username'] }}</h2>
                <a href="user-detail">
                    <button class="bg-yellow-500 p-2 w-full rounded-lg text-white">Manage</button>
                </a>
            </div>
        @endforeach
    </div>
@endsection