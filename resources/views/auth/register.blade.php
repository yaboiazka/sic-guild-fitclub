<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @vite(['resources/css/app.css'])
    <title>Signup</title>
</head>
<body>
    <section class="flex flex-row">
        <div class="w-1/2 h-screen flex flex-col items-center justify-center " style="background-image: url('{{ asset('assets/images/background.jpg')}}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div>
                <h1 class=" text-7xl ml-[-150px] text-white">HELLO</h1>
            </div>
            <div>
                <h1 class="  font-bold justify-center text-7xl text-white ">FRIENDS !!</h1>
            </div>
            <div>
                <p class="  max-w-sm text-base leading-relaxed items-center mt-[50px] text-sm text-white">"Investasikan waktu untuk kesehatanmu. Daftar sekarang untuk akses artikel eksklusif, tips kebugaran harian, dan bergabunglah dengan komunitas hidup sehat kami."</p>
            </div>
            <div class="mt-20">
                <a href="/login" class=" mt-27.5 px-7.5 py-3.75 border-2 text-1.5xl font-bold bg-white text-primary rounded-2xl">LOGIN</a>
            </div>
        </div>
        <div class="w-1/2 h-screen justify-center items-center flex flex-col">
            <div>
                <h1 class="mt-[-150px] font-bold text-primary text-6xl border-b-4 px-[50px]">SIGN UP</h1>
            </div>
            <form action="{{ route('register.post') }}" method="POST">
                @csrf
                <div class="flex flex-col w-full max-w-sm gap-8">
                    <div>
                        <label for="name">Name</label>
                        <input value="{{ old('name') }}" type="text" name="name" id="name" class="w-full border-b-4 py-2 border-primary bg-transparent" placeholder="Enter your fullname">
                        @error('name')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input value="{{ old('email') }}" type="text" name="email" id="email" class="w-full border-b-4 py-2 border-primary bg-transparent" placeholder="Enter your email">
                        @error('email')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="w-full border-b-4 py-2 border-primary bg-transparent" placeholder="Enter your password">
                        @error('password')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="password_confirmation">Password Confirmation</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="w-full border-b-4 py-2 border-primary bg-transparent" placeholder="Enter password again">
                    </div>
                    <div>
                        <button type="submit" class="flex mt-[90px] ml-[300px] border-2 bg-primary font-bold px-4 py-3 text-white rounded-2xl w-25">SIGN UP</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>