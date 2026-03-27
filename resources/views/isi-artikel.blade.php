@extends('layouts.user')

@section('content')
     <x-detail-artikel/>
     <div class="pl-20">
        <h1 class="text-[48px] font-bold">Recomended</h1>
     </div>
     @for ($i = 0; $i < 10; $i++)
        <x-list-artikel-component/>
         
     @endfor
@endsection