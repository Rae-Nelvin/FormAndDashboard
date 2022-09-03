@extends('layouts.dashboard.start')

@section('content')

    <h1 class="font-semibold text-[32px]">Jawaban</h1>

        <!-- Cards -->
        <div class="flex flex-row flex-wrap items-start mt-[15px]">

            <!-- Start of Card -->
            <div class="bg-white flex flex-col flex-nowrap items-end p-[23px] rounded-lg w-[272px] h-[149px] space-y-[18px] mr-[45px] mb-[37px]">
                <div class="flex flex-row flex-nowrap justify-between space-x-[16px] items-center">
                    <div class="bg-[#D5E6FB] w-11 h-11 p-[10px] rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" class="text-[#3380FF]">
                            <path fill="currentColor" d="m25.586 8l3-3L30 6.411l-3 3.001zM16 20.5l-5-4.961l1.59-1.57l3.41 3.38L23.41 10L25 11.579L16 20.5z"/><path fill="currentColor" d="M4 28v-2.587L10.414 19L9 17.585l-5 5V2H2v26a2 2 0 0 0 2 2h26v-2Z"/>
                        </svg>
                    </div>
                    <a href="{{ route('renderSectionTable') }}">
                        <h1 class="font-semibold text-base">Evaluasi Diri Pendidik</h1>
                    </a>
                </div>
                <h1 class="font-semibold text-xl"><span class="font-semibold text-3xl mr-[13px]">111</span>Responden</h1>
            </div>
            <!-- End of Card -->

            <!-- Start of Card -->
            <div class="bg-white flex flex-col flex-nowrap items-end p-[23px] rounded-lg w-[272px] h-[149px] space-y-[18px] mr-[45px] mb-[37px]">
                <div class="flex flex-row flex-nowrap justify-between space-x-[16px] items-center">
                    <div class="bg-[#FFE5BD] w-11 h-11 p-[10px] rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 640 512" class="text-[#FF9533]">
                            <path fill="currentColor" d="M208 352c-2.39 0-4.78.35-7.06 1.09C187.98 357.3 174.35 360 160 360c-14.35 0-27.98-2.7-40.95-6.91c-2.28-.74-4.66-1.09-7.05-1.09C49.94 352-.33 402.48 0 464.62C.14 490.88 21.73 512 48 512h224c26.27 0 47.86-21.12 48-47.38c.33-62.14-49.94-112.62-112-112.62zm-48-32c53.02 0 96-42.98 96-96s-42.98-96-96-96s-96 42.98-96 96s42.98 96 96 96zM592 0H208c-26.47 0-48 22.25-48 49.59V96c23.42 0 45.1 6.78 64 17.8V64h352v288h-64v-64H384v64h-76.24c19.1 16.69 33.12 38.73 39.69 64H592c26.47 0 48-22.25 48-49.59V49.59C640 22.25 618.47 0 592 0z"/>
                        </svg>
                    </div>
                    <a href="{{ route('renderSectionChart') }}">
                        <h1 class="font-semibold text-xs">Pengembangan Keprofesian Berkelanjutan</h1>
                    </a>
                </div>
                <h1 class="font-semibold text-xl"><span class="font-semibold text-3xl mr-[13px]">111</span>Responden</h1>
            </div>
            <!-- End of Card -->

            <!-- Start of Card -->
            <div class="bg-white flex flex-col flex-nowrap items-end p-[23px] rounded-lg w-[272px] h-[149px] space-y-[18px] mr-[45px] mb-[37px]">
                <div class="flex flex-row flex-nowrap justify-between space-x-[16px] items-center">
                    <div class="bg-[#EED8FF] w-11 h-11 p-[10px] rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48" class="text-[#6833FF]"><g fill="none">
                            <path stroke="currentColor" stroke-linejoin="round" stroke-miterlimit="2" stroke-width="4" d="M23.889 39.889c8.84 0 16-7.16 16-16s-7.16-16-16-16s-16 7.16-16 16s7.16 16 16 16Z"/><path stroke="currentColor" stroke-linejoin="round" stroke-miterlimit="2" stroke-width="4" d="M23.889 31.889c4.42 0 8-3.58 8-8s-3.58-8-8-8s-8 3.58-8 8s3.58 8 8 8Z"/><path fill="currentColor" d="M23.889 25.889c1.1 0 2-.9 2-2s-.9-2-2-2s-2 .9-2 2s.9 2 2 2Z"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="2" stroke-width="4" d="M23.889 7.889v-4m14 40l-4-7m-20 0l-4 7"/></g>
                        </svg>
                    </div>
                    <a href="{{ route('renderSectionTable') }}">
                        <h1 class="font-semibold text-base">Sasaran Kerja Pegawai</h1>
                    </a>
                </div>
                <h1 class="font-semibold text-xl"><span class="font-semibold text-3xl mr-[13px]">111</span>Responden</h1>
            </div>
            <!-- End of Card -->

            <!-- Start of Card -->
            <div class="bg-white flex flex-col flex-nowrap items-end p-[23px] rounded-lg w-[272px] h-[149px] space-y-[18px] mr-[45px] mb-[37px]">
                <div class="flex flex-row flex-nowrap justify-between space-x-[16px] items-center">
                    <div class="bg-[#FBD5D7] w-11 h-11 p-[10px] rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48" class="text-[#FF6969]"><g fill="none">
                            <path stroke="currentColor" stroke-linejoin="round" stroke-miterlimit="2" stroke-width="4" d="M23.889 39.889c8.84 0 16-7.16 16-16s-7.16-16-16-16s-16 7.16-16 16s7.16 16 16 16Z"/><path stroke="currentColor" stroke-linejoin="round" stroke-miterlimit="2" stroke-width="4" d="M23.889 31.889c4.42 0 8-3.58 8-8s-3.58-8-8-8s-8 3.58-8 8s3.58 8 8 8Z"/><path fill="currentColor" d="M23.889 25.889c1.1 0 2-.9 2-2s-.9-2-2-2s-2 .9-2 2s.9 2 2 2Z"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="2" stroke-width="4" d="M23.889 7.889v-4m14 40l-4-7m-20 0l-4 7"/></g>
                        </svg>
                    </div>
                    <a href="{{ route('renderSectionChart') }}">
                        <h1 class="font-semibold text-xs">Nilai Sasaran Kerja Pegawai</h1>
                    </a>
                </div>
                <h1 class="font-semibold text-xl"><span class="font-semibold text-3xl mr-[13px]">111</span>Responden</h1>
            </div>
            <!-- End of Card -->

            <!-- Start of Card -->
            <div class="bg-white flex flex-col flex-nowrap items-end p-[23px] rounded-lg w-[272px] h-[149px] space-y-[18px] mr-[45px] mb-[37px]">
                <div class="flex flex-row flex-nowrap justify-between space-x-[16px] items-center">
                    <div class="bg-[#FDFFB2] w-11 h-11 p-[10px] rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 640 512" class="text-[#E3DA04]">
                            <path fill="currentColor" d="M208 352c-2.39 0-4.78.35-7.06 1.09C187.98 357.3 174.35 360 160 360c-14.35 0-27.98-2.7-40.95-6.91c-2.28-.74-4.66-1.09-7.05-1.09C49.94 352-.33 402.48 0 464.62C.14 490.88 21.73 512 48 512h224c26.27 0 47.86-21.12 48-47.38c.33-62.14-49.94-112.62-112-112.62zm-48-32c53.02 0 96-42.98 96-96s-42.98-96-96-96s-96 42.98-96 96s42.98 96 96 96zM592 0H208c-26.47 0-48 22.25-48 49.59V96c23.42 0 45.1 6.78 64 17.8V64h352v288h-64v-64H384v64h-76.24c19.1 16.69 33.12 38.73 39.69 64H592c26.47 0 48-22.25 48-49.59V49.59C640 22.25 618.47 0 592 0z"/>
                        </svg>
                    </div>
                    <a href="{{ route('renderSectionTable') }}">
                        <h1 class="font-semibold text-xs">Nilai Pengembangan Keprofesian Berkelanjutan</h1>
                    </a>
                </div>
                <h1 class="font-semibold text-xl"><span class="font-semibold text-3xl mr-[13px]">111</span>Responden</h1>
            </div>
            <!-- End of Card -->

            <!-- Start of Card -->
            <div class="bg-white flex flex-col flex-nowrap items-end p-[23px] rounded-lg w-[272px] h-[149px] space-y-[18px] mr-[45px] mb-[37px]">
                <div class="flex flex-row flex-nowrap justify-between space-x-[16px] items-center">
                    <div class="bg-[#BDD9B6] w-11 h-11 p-[10px] rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" class="text-[#1C7C04]">
                            <path fill="currentColor" d="m30 25l-1.414-1.414L26 26.172V18h-2v8.172l-2.586-2.586L20 25l5 5l5-5z"/><path fill="currentColor" d="M18 28H8V4h8v6a2.006 2.006 0 0 0 2 2h6v3h2v-5a.91.91 0 0 0-.3-.7l-7-7A.909.909 0 0 0 18 2H8a2.006 2.006 0 0 0-2 2v24a2.006 2.006 0 0 0 2 2h10Zm0-23.6l5.6 5.6H18Z"/>
                        </svg>
                    </div>
                    <a href="{{ route('renderSectionChart') }}">
                        <h1 class="font-semibold text-xs">Penilaian Performa Kerja Pendidik</h1>
                    </a>
                </div>
                <h1 class="font-semibold text-xl"><span class="font-semibold text-3xl mr-[13px]">111</span>Responden</h1>
            </div>
            <!-- End of Card -->

        </div>
        <!-- End of Cards -->

@endsection