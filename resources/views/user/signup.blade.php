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
        <div class="w-1/2 h-screen flex flex-col items-center justify-center " style="background-image: url('{{ asset('image/background.png')}}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div>
                <h1 class=" text-7xl ml-[-150px] text-white">HELLO</h1>
            </div>
            <div>
                <h1 class="  font-bold justify-center text-7xl text-white ">FRIENDS !!</h1>
            </div>
            <div>
                <p class="  max-w-sm text-base leading-relaxed items-center mt-[50px] text-sm text-white">"Investasikan waktu untuk kesehatanmu. Daftar sekarang untuk akses artikel eksklusif, tips kebugaran harian, dan bergabunglah dengan komunitas hidup sehat kami."</p>
            </div>
            <div>
                <button class=" mt-[110px] px-[30px] py-[15px] border-2 text-1.5xl font-bold bg-white text-primary rounded-2xl">LOGIN</button>
            </div>
        </div>
        <div class="w-1/2 h-screen justify-center items-center flex flex-col">
            <div>
                <h1 class="mt-[-150px] font-bold text-primary text-6xl border-b-4 px-[50px]">SIGN UP</h1>
            </div>
                <div class="flex flex-col w-full max-w-sm gap-8">
                    <input type="email" placeholder="email" class="w-full border-b-4 py-2 border-primary bg-transparent">
                    <input type="password" placeholder="password" class="w-full border-b-4 py-2  border-primary bg-transparent">
                    <input type="password" placeholder="Confirmation Password" class="w-full border-b-4  py-2  border-primary bg-transparent">
                </div>
                <div>
                    <button class="flex mt-[90px] ml-[300px] border-2 bg-primary font-bold px-4 py-3 text-white rounded-2xl">SIGN UP</button>
                </div>
        </div>
    </section>
</body>
</html>