@extends('layouts.dashboard.user-start')

@section('userContent')

    <div class="h-full w-full py-[71px] px-[33px] flex flex-col justify-between flex-nowrap items-start">
        <div class="mb-7">
            <h1 class="font-semibold text-[32px] capitalize">Kompetensi Akademik (Pedagogi dan Profesional)</h1>
            <h4 class="font-light text-xs mt-6">Evaluasi Diri Pendidik > Kompetensi Akademik > Pengguna dan Penerapan Paradigma Pedagogi Ignatian dalam Mendidik Peserta Didik</h4>
            <h3 class="font-medium text-xl mt-8">Silahkan memberikan score pada setiap pertanyaan sesuai dengan penilaian Anda.</h3>
            <h2 class="font-semibold text-xl mt-2">1. Penguasaan dan Penerapan Paradigma Pedagogi Ignatian dalam Mendidik Peserta Didik</h2>
            <div class="w-full mt-6 flex flex-col flex-nowrap space-y-[30px]">
                <form class="w-full bg-white py-[25px] px-[22px] rounded-lg flex flex-col space-y-3">
                    <div class="flex flex-col justify-between">
                        <p class="font-medium text-xl">1.1 Pendidik dapat mengidentifikasi karakteristik belajar setiap peserta didik di kelasnya.</p>
                        <input type="number" class="mt-2 border-0 border-b-[1px] border-b-[#5E5E5E]/35 outline-none ring-0 focus:outline-none focus:ring-0 py-3 w-1/4" placeholder="Score" min=0 max=100>
                    </div>
                </form>
            </div>
        </div>
        <div>
            <div class="flex flex-row flex-nowrap space-x-[25px]">
                {{-- @if ( ($subsectionID - 1)  >= ($underLimit->subsectionID) )
                    <a href="/package/section/subsection/question/{{ $subsectionID - 1 }}">
                        <button class="py-5 px-7 font-medium text-base text-[#0060FF] text-center bg-white rounded-2xl shadow-[#000000]/25 shadow-md hover:bg-[#0060FF] hover:text-white transition-all duration-500 ease-in-out">Sebelumnya</button>
                    </a>    
                @else --}}
                    <button type="button" class="py-5 px-7 font-medium text-base bg-[#F1F1F1] rounded-2xl cursor-default shadow-[#000000]/25 shadow-md">Sebelumnya</button>
                {{-- @endif --}}
                {{-- @if ( ($subsectionID + 1) <= ($upperLimit->subsectionID) )
                    <a href="/package/section/subsection/question/{{ $subsectionID + 1 }}">
                        <button type="button" class="py-5 px-7 font-medium text-base text-[#0060FF] text-center bg-white rounded-2xl shadow-[#000000]/25 shadow-md hover:bg-[#0060FF] hover:text-white transition-all duration-500 ease-in-out">Berikutnya</button>
                    </a>
                @else --}}
                    <button type="button" class="py-5 px-7 font-medium text-base bg-[#F1F1F1] rounded-2xl cursor-default shadow-[#000000]/25 shadow-md">Berikutnya</button>
                {{-- @endif --}}
            </div>
        </div>
    </div>

@endsection