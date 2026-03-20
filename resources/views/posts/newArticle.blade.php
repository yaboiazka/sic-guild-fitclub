@extends('layouts.admin')

@section('content')
    <div class="py-10 px-8">
        <h1 class="font-bold text-[44px] mb-9.5">New Article</h1>
        <div class="mb-2">
            <label for="articleTitle" class="pl-4 font-semibold text-2xl">Article title</label>
            <input type="text" name="articleTitle" id="articleTitle" placeholder="Write your title here...." class="bg-fitclub-grey rounded-4xl w-full h-16 border-2 border-fitclub-dark-grey mb-5 text:mx-20">
        </div>
        <div>
          <label for="category" class="pl-4 font-semibold text-2xl">Category</label>
            <div class="relative">
                <select name="category" id="category" class=" bg-fitclub-grey block w-full mt-2.5 px-5 py-3 border-2 border-fitclub-dark-grey rounded-full mb-2">
                <option value="" disabled>Select Category</option>
                <option value="" selected>Lifestyle</option>
                </select>
            </div>
        </div>
        <div class="mb-2">
            <label for="description" class="pl-4 font-semibold text-2xl">Description</label>
            <textarea name="description" id="description" placeholder="Write your description here...." class="bg-fitclub-grey border-2 border-fitclub-dark-grey w-full rounded-4xl placeholder:pt-20" cols="30" rows="10">
                {{ old('description') }}
            </textarea>
        </div>
        <div class="pt-2 col-span-full">
            <label for="picture" class="pl-4 font-semibold text-2xl">Picture</label>
            <input type="file" name="picture" id="picture" class="h-100 bg-fitclub-grey block w-full mt-2.5 px-3 py-2 border-2 border-fitclub-dark-grey rounded-4xl file:bg-primary file:px-2 file:py-1 file:rounded-lg file:text-white file:mr-3">
        </div>
        {{-- <div class="flex items-center w-full py-4 space-x-4">
            <div class="flex-1 border-t border-gray-300"></div>
            <div class="flex items-center space-x-5">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-8 h-8"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M64 80c-8.8 0-16 7.2-16 16l0 320c0 8.8 7.2 16 16 16l320 0c8.8 0 16-7.2 16-16l0-320c0-8.8-7.2-16-16-16L64 80zM0 96C0 60.7 28.7 32 64 32l320 0c35.3 0 64 28.7 64 64l0 320c0 35.3-28.7 64-64 64L64 480c-35.3 0-64-28.7-64-64L0 96zm128 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm136 72c8.5 0 16.4 4.5 20.7 11.8l80 136c4.4 7.4 4.4 16.6 .1 24.1S352.6 384 344 384l-240 0c-8.9 0-17.2-5-21.3-12.9s-3.5-17.5 1.6-24.8l56-80c4.5-6.4 11.8-10.2 19.7-10.2s15.2 3.8 19.7 10.2l17.2 24.6 46.5-79c4.3-7.3 12.2-11.8 20.7-11.8z"/></svg>
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-8 h-8"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M64 80c-8.8 0-16 7.2-16 16l0 320c0 8.8 7.2 16 16 16l320 0c8.8 0 16-7.2 16-16l0-320c0-8.8-7.2-16-16-16L64 80zM0 96C0 60.7 28.7 32 64 32l320 0c35.3 0 64 28.7 64 64l0 320c0 35.3-28.7 64-64 64L64 480c-35.3 0-64-28.7-64-64L0 96zm128 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm136 72c8.5 0 16.4 4.5 20.7 11.8l80 136c4.4 7.4 4.4 16.6 .1 24.1S352.6 384 344 384l-240 0c-8.9 0-17.2-5-21.3-12.9s-3.5-17.5 1.6-24.8l56-80c4.5-6.4 11.8-10.2 19.7-10.2s15.2 3.8 19.7 10.2l17.2 24.6 46.5-79c4.3-7.3 12.2-11.8 20.7-11.8z"/></svg>
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-8 h-8"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M64 80c-8.8 0-16 7.2-16 16l0 320c0 8.8 7.2 16 16 16l320 0c8.8 0 16-7.2 16-16l0-320c0-8.8-7.2-16-16-16L64 80zM0 96C0 60.7 28.7 32 64 32l320 0c35.3 0 64 28.7 64 64l0 320c0 35.3-28.7 64-64 64L64 480c-35.3 0-64-28.7-64-64L0 96zm128 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm136 72c8.5 0 16.4 4.5 20.7 11.8l80 136c4.4 7.4 4.4 16.6 .1 24.1S352.6 384 344 384l-240 0c-8.9 0-17.2-5-21.3-12.9s-3.5-17.5 1.6-24.8l56-80c4.5-6.4 11.8-10.2 19.7-10.2s15.2 3.8 19.7 10.2l17.2 24.6 46.5-79c4.3-7.3 12.2-11.8 20.7-11.8z"/></svg>
                </a>
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-8 h-8"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M64 80c-8.8 0-16 7.2-16 16l0 320c0 8.8 7.2 16 16 16l320 0c8.8 0 16-7.2 16-16l0-320c0-8.8-7.2-16-16-16L64 80zM0 96C0 60.7 28.7 32 64 32l320 0c35.3 0 64 28.7 64 64l0 320c0 35.3-28.7 64-64 64L64 480c-35.3 0-64-28.7-64-64L0 96zm128 32a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm136 72c8.5 0 16.4 4.5 20.7 11.8l80 136c4.4 7.4 4.4 16.6 .1 24.1S352.6 384 344 384l-240 0c-8.9 0-17.2-5-21.3-12.9s-3.5-17.5 1.6-24.8l56-80c4.5-6.4 11.8-10.2 19.7-10.2s15.2 3.8 19.7 10.2l17.2 24.6 46.5-79c4.3-7.3 12.2-11.8 20.7-11.8z"/></svg>
                </a>
            </div>
        </div> --}}
        <div class="mb-2">
            <label for="content" class="pl-4 font-semibold text-2xl">Content</label>
            <textarea name="content" id="content" placeholder="Write your article here...." class="bg-fitclub-grey border-2 border-fitclub-dark-grey w-full rounded-4xl placeholder:pt-20" cols="30" rows="10">
                {{ old('content') }}
            </textarea>
        </div>
    </div>
@endsection