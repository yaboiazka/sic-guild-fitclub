@extends('layouts.user')

@section('title', 'User Detail')

@section('content')
    <div class="bg-fitclub-grey gap-6 py-18 pl-11 flex items-center rounded-[40px] mx-12 my-8">
        <div class="">
            <img src="{{ $userDetail['profile'] }}" alt="" class="rounded-full size-50">
        </div>
        <div class="flex flex-col">
            <h1 class="text-[40px]">{{ $userDetail['username'] }}</h1>
            <h1>{{ $userDetail['email'] }}</h1>
            <h1>{{ $userDetail['phoneNumber'] }}</h1>
        </div>
    </div>
    <div class="bg-fitclub-grey gap-6 py-10 px-20 flex flex-col rounded-[40px] mx-12 my-8">
        <h1 class="text-[36px]">Articles</h1>
        @for ($i = 0; $i < 5; $i++)
            <x-list-artikel-component/>
        @endfor
    </div>
@endsection