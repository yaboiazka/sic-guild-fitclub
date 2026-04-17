<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <title>Document</title>
</head>
    <div class="flex col-2">
        <div class=" w-1/2 h-screen flex flex-col items-center justify-center">
            <img src="assets/images/green_fitclub.png" alt="FITCLUB" class="absolute top-0 left-0 pl-9 pt-8">
            <h1 class="font-bold text-primary text-6xl mt-[100px] border-b-4 px-[30px]  ">LOGIN</h1>
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div>
                    <input value="{{ old('email') }}" type="text" name="email" id="email" class="mt-[124px] text-gray  border-primary border-b-4 w-full items-center" placeholder="Enter your Email">
                    @error('email')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                    {{-- <input type="email" placeholder="email" class="mt-[124px] ml-[-90px] text-gray  border-primary border-b-4 pr-[200px] items-center"> --}}
                </div>
                <div>
                    <input type="password" name="password" id="password" class="mt-[124px] text-gray border-primary border-b-4 w-full items-center" placeholder="Enter your password">
                    <a href="" class="relative text-gray-400 right-0"> forget password</a>
                </div>
                <button type="submit" class="text-center my-[60px] ml-[249px] px-[30px] py-[15px] border-2 text-1.5xl font-bold bg-primary text-white rounded-2xl">LOGIN</button>
            </form>
        </div>
        <div class="flex flex-col w-1/2 justify-center  bg-cover text-white h-screen pl-[67px]" style="background-image: url('{{ asset('assets/images/background.jpg') }}');background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div>
                <h1 class="text-7xl">WELCOME</h1>
                <h1 class="text-7xl font-bold">BACK!</h1>
            </div>
            <div class="max-w-sm text-base leading-relaxed items-center mt-[43px]">
                <p>"Senang melihatmu kembali! Masuk ke akunmu untuk melanjutkan membaca panduan kesehatan terbaru dan memantau progres gaya hidup sehat yang konsisten."</p>
            </div>
            <div class="mt-20">
                <a href="/register" class="text-center mt-[117px] mx-[219px] px-[30px] py-[15px] border-2 text-1.5xl font-bold bg-white text-primary rounded-2xl">SIGN UP</a>
            </div>
        </div>
    </div>
</body>
</html>
