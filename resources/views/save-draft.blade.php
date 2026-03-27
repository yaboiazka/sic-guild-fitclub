@extends('layouts.user')

@section('content')
    <div class="pr-68 pl-20 pt-10">
        <div class="flex flex-row justify-between">
            <h1 class="font-bold font text-[64px]">Save Draft</h1>
            <svg class=" size-[72px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M463 448.2C440.9 409.8 399.4 384 352 384L288 384C240.6 384 199.1 409.8 177 448.2C212.2 487.4 263.2 512 320 512C376.8 512 427.8 487.3 463 448.2zM64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576C178.6 576 64 461.4 64 320zM320 336C359.8 336 392 303.8 392 264C392 224.2 359.8 192 320 192C280.2 192 248 224.2 248 264C248 303.8 280.2 336 320 336z"/></svg>
        </div>
        @for ($i = 0; $i < 10; $i++)
                <div class="flex mb-4">
                    <div class="flex flex-row ">
                        <img src="/assets/yoga.jpg" alt="">
                        
                        <div class="px-8 bg-fitclub-grey">
                            <h2 class="mt-8 mb-8 text-4xl font-poppins font-semibold">Manfaat yoga di pagi hari untuk Hipertensi, bisa kontrol tekanan darah? Apa benar?</h2>

                            <div class="flex justify-between">
                                <p class="text-fitclub-dark-grey-50">Last edited: 10 January 2026</p>
                                <div class="flex justify-between mb-3 gap-[33px]">
                                    <button class="bg-fitclub-green  py-[7px] px-[21px] rounded-lg text-white">Preview</button>
                                    <button class="bg-fitclub-yellow  py-[7px] px-[21px] rounded-lg text-white">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
             @endfor
    </div>
@endsection