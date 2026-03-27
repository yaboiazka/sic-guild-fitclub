@extends('layouts.admin')

@section('content')
    <div>
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
            <textarea name="description" id="description" class="bg-fitclub-grey border-2 border-fitclub-dark-grey w-full rounded-4xl" cols="30" rows="10">
                {{ old('description') }}
            </textarea>
        </div>
        <div class="pt-2 col-span-full mb-2">
            <label for="picture" class="pl-4 font-semibold text-2xl">Article Cover</label>
            <input type="file" name="picture" id="picture" class="h-100 bg-fitclub-grey block w-full mt-2.5 px-3 py-2 border-2 border-fitclub-dark-grey rounded-4xl file:bg-primary file:px-2 file:py-1 file:rounded-lg file:text-white file:mr-3">
        </div>
        <div class="mb-2">
            <label for="content" class="pl-4 font-semibold text-2xl">Article Content</label>
            <textarea name="content" id="content" placeholder="Write your article here...." class="bg-fitclub-grey border-2 border-fitclub-dark-grey w-full rounded-4xl placeholder:pt-20" cols="30" rows="10">
                {{ old('content') }}
            </textarea>
        </div>
    </div>
@endsection