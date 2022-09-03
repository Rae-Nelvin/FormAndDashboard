<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
</head>
<body class="bg-black flex flex-col justify-center items-center h-screen">
    <div class="bg-white rounded-lg py-6 px-12 w-full max-w-[520px]">
        <div class="flex justify-end items-end">
            <img src="{{ asset('DashboardIcon/img/logo-cc-login.svg') }}" alt="logo-cc" class="w-11">
        </div>
        <h1 class="font-bold text-[32px] mt-6">Selamat Datang di<br>
        <span class="text-[#004588]">Kolese Kanisius</span></h1>
        <form action="{{ route('login') }}" method="POST" class="flex flex-col mt-7 w-full">
            @csrf
            <label for="Email" class="font-semibold text-base">Alamat Email</label>
            <div class="flex flex-row mt-2 border-[#000]/20 border-2 rounded-lg w-full py-[2px] px-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36" class="text-[#004588]/50 mr-2">
                    <path fill="currentColor" d="M32.33 6a2 2 0 0 0-.41 0h-28a2 2 0 0 0-.53.08l14.45 14.39Z" class="clr-i-solid clr-i-solid-path-1"/>
                    <path fill="currentColor" d="m33.81 7.39l-14.56 14.5a2 2 0 0 1-2.82 0L2 7.5a2 2 0 0 0-.07.5v20a2 2 0 0 0 2 2h28a2 2 0 0 0 2-2V8a2 2 0 0 0-.12-.61ZM5.3 28H3.91v-1.43l7.27-7.21l1.41 1.41Zm26.61 0h-1.4l-7.29-7.23l1.41-1.41l7.27 7.21Z" class="clr-i-solid clr-i-solid-path-2"/><path fill="none" d="M0 0h36v36H0z"/>
                </svg>
                <input type="email" name="email" placeholder="Masukan email Anda" class="active:bg-white focus:bg-white w-full border-0 ring-0 focus:ring-0 active:ring-0 font-normal text-base">
            </div>
            @if($errors->first('email'))
                <span class="text-xs text-red-500 font-light">Email atau password yang anda masukkan salah</span>
            @endif
            <label for="Email" class="font-semibold text-base mt-4">Password</label>
            <div class="flex flex-row mt-2 border-[#000]/20 border-2 rounded-lg w-full py-[2px] px-2 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" class="text-[#004588]/50 mr-2">
                    <path fill="currentColor" d="M12 2C9.243 2 7 4.243 7 7v3H6a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8a2 2 0 0 0-2-2h-1V7c0-2.757-2.243-5-5-5zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9V7zm4 10.723V20h-2v-2.277a1.993 1.993 0 0 1 .567-3.677A2.001 2.001 0 0 1 14 16a1.99 1.99 0 0 1-1 1.723z"/>
                </svg>
                <input type="password" name="password" placeholder="Masukan password Anda" class="active:bg-white focus:bg-white w-full border-0 ring-0 focus:ring-0 active:ring-0 font-normal text-base">
            </div>
            @if($errors->first('email'))
                <span class="text-xs text-red-500 font-light">Email atau password yang anda masukkan salah</span>
            @endif
            <div class="flex flex-row items-center mt-4">
                <input type="checkbox" name="remember" class="rounded-sm">
                <span class="font-normal text-xs ml-2">Remember Me</span>
            </div>
            <div class="flex justify-center items-center pt-10 pb-12">
                <button type="submit" class="bg-[#004588] py-[6px] px-5 font-bold text-white text-base hover:bg-[#0d3a66] transition-all duration-500 ease-in-out w-[103px] rounded-lg">Masuk</button>
            </div>
        </form>
    </div>
    <div class="flex flex-row items-center mt-6">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024" class="text-white">
            <path fill="currentColor" d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448s448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372s372 166.6 372 372s-166.6 372-372 372zm5.6-532.7c53 0 89 33.8 93 83.4c.3 4.2 3.8 7.4 8 7.4h56.7c2.6 0 4.7-2.1 4.7-4.7c0-86.7-68.4-147.4-162.7-147.4C407.4 290 344 364.2 344 486.8v52.3C344 660.8 407.4 734 517.3 734c94 0 162.7-58.8 162.7-141.4c0-2.6-2.1-4.7-4.7-4.7h-56.8c-4.2 0-7.6 3.2-8 7.3c-4.2 46.1-40.1 77.8-93 77.8c-65.3 0-102.1-47.9-102.1-133.6v-52.6c.1-87 37-135.5 102.2-135.5z"/>
        </svg>
        <h2 class="font-normal text-sm text-white ml-1">2022 Canisius College</h2>
    </div>

</body>
</html>