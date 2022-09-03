@extends('layouts.dashboard.start')

@section('content')

    <div class="h-full w-full py-[71px] px-[33px] flex flex-col flex-nowrap items-start">
        <h1 class="font-semibold text-[32px]">Evaluasi Diri Pendidik</h1>
        <div class="flex flex-col space-y-[30px] mt-9 w-full flex-nowrap">
            <div class="bg-white py-5 px-5 rounded-lg items-center cursor-pointer hover:bg-[#D5E6FB] hover:text-[#0060FF] transition-all ease-in-out duration-500">
                <h1 class="font-semibold text-xl uppercase">I. Kompetensi Akademik (Pedagogi dan Profesional)</h1>
            </div>
            <div class="bg-white py-5 px-5 rounded-lg items-center cursor-pointer hover:bg-[#D5E6FB] hover:text-[#0060FF] transition-all ease-in-out duration-500">
                <h1 class="font-semibold text-xl uppercase">II. Kompetensi Kepribadian dan Sosial</h1>
            </div>
            <div class="bg-white py-5 px-5 rounded-lg items-center cursor-pointer hover:bg-[#D5E6FB] hover:text-[#0060FF] transition-all ease-in-out duration-500">
                <h1 class="font-semibold text-xl uppercase">III. Kompetensi Modal dan Spiritual</h1>
            </div>
        </div>
    </div>

@endsection