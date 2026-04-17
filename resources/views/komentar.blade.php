@extends('layouts.main')

@section('content')
@for ($i = 0; $i < 10; $i++)
    <div class="bg-green-600 w-90 relative rounded-3xl ">
        <div class="flex p-3 text-white">
            <img class="rounded-full size-10" src="/assets/images/profile.jpg" alt="">
            <div class="text-[9px] mb-4">
                <h3 class="font-bold">AndikaW</h3>
                <h4 class="mb-1">Sangat membantu dan memberi informasi baru ke saya 😁👍🔥</h4>
                <div class="flex items-center w-27 gap-1">
                    <div class="flex-1 border-t border-black-300"></div>
                    <h4>Balasan Lainnya</h4>
                    <svg class="size-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M169.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 306.7 54.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
                </div>
            </div>
        </div>
    
@endfor
        <div class="flex py-[10px] px-[23px] bg-gray-300 rounded-4xl absolute bottom-2.5 left-2.5 w-85 h-8 items-center ">
            <h4 class="text-gray-400">Apa pendapatmu tentang ini ?</h4>
        </div>
    </div>
@endsection