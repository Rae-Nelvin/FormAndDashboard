@extends('layouts.dashboard.start')

@section('content')

    <div class="h-full w-full py-[43px] px-[33px] flex flex-col flex-nowrap items-start">
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
                    <h1 class="font-semibold text-base">Evaluasi Diri Pendidik</h1>
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
                    <h1 class="font-semibold text-xs">Pengembangan Keprofesian Berkelanjutan</h1>
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
                    <h1 class="font-semibold text-base">Sasaran Kerja Pegawai</h1>
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
                    <h1 class="font-semibold text-xs">Nilai Sasaran Kerja Pegawai</h1>
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
                    <h1 class="font-semibold text-xs">Nilai Pengembangan Keprofesian Berkelanjutan</h1>
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
                    <h1 class="font-semibold text-xs">Penilaian Performa Kerja Pendidik</h1>
                </div>
                <h1 class="font-semibold text-xl"><span class="font-semibold text-3xl mr-[13px]">111</span>Responden</h1>
            </div>
            <!-- End of Card -->

        </div>
        <!-- End of Cards -->

        <h1 class="mt-[45px] font-semibold text-[32px]">Paket Pertanyaan</h1>

        <!-- Cards -->
            <div class="flex flex-row flex-wrap items-start mt-[22px]">

            <!-- Start of Card -->
            <div class="bg-[#2B2B2B] flex flex-col flex-nowrap items-start p-[23px] rounded-lg w-[272px] h-[188px] justify-between space-y-[18px] mr-[45px] mb-[37px]">
                    <a href="{{ route('renderSection',1) }}">
                        <div class="flex flex-row flex-nowrap justify-between space-x-[16px] items-center">
                            <div class="bg-[#D5E6FB] w-11 h-11 p-[10px] rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" class="text-[#3380FF]">
                                    <path fill="currentColor" d="m25.586 8l3-3L30 6.411l-3 3.001zM16 20.5l-5-4.961l1.59-1.57l3.41 3.38L23.41 10L25 11.579L16 20.5z"/><path fill="currentColor" d="M4 28v-2.587L10.414 19L9 17.585l-5 5V2H2v26a2 2 0 0 0 2 2h26v-2Z"/>
                                </svg>
                            </div>
                            <h1 class="font-semibold text-xl text-white">Evaluasi Diri Pendidik</h1>
                        </div>
                    </a>
                    <button data-modal-toggle="popup-modal-1">
                        <div class="rounded-full bg-[#E53535] py-[7px] px-[35px] font-normal text-sm text-[#FCFCFD] mb-[11px] hover:bg-[#ac2828] transition-all duration-500 ease-in-out">Hapus</div>
                    </button>
                </div>
            <!-- End of Card -->

            <!-- Start of Card -->
            <div class="bg-[#2B2B2B] flex flex-col flex-nowrap items-start p-[23px] rounded-lg w-[272px] h-[188px] justify-between space-y-[18px] mr-[45px] mb-[37px]">
                    <a href="{{ route('renderSection', 2) }}">
                        <div class="flex flex-row flex-nowrap justify-between space-x-[16px] items-start">
                            <div class="bg-[#FFE5BD] w-11 h-11 p-[10px] rounded-lg mt-[6px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 640 512" class="text-[#FF9533]">
                                    <path fill="currentColor" d="M208 352c-2.39 0-4.78.35-7.06 1.09C187.98 357.3 174.35 360 160 360c-14.35 0-27.98-2.7-40.95-6.91c-2.28-.74-4.66-1.09-7.05-1.09C49.94 352-.33 402.48 0 464.62C.14 490.88 21.73 512 48 512h224c26.27 0 47.86-21.12 48-47.38c.33-62.14-49.94-112.62-112-112.62zm-48-32c53.02 0 96-42.98 96-96s-42.98-96-96-96s-96 42.98-96 96s42.98 96 96 96zM592 0H208c-26.47 0-48 22.25-48 49.59V96c23.42 0 45.1 6.78 64 17.8V64h352v288h-64v-64H384v64h-76.24c19.1 16.69 33.12 38.73 39.69 64H592c26.47 0 48-22.25 48-49.59V49.59C640 22.25 618.47 0 592 0z"/>
                                </svg>
                            </div>
                            <h1 class="font-semibold text-xl text-white ">Pengembangan Keprofesian Berkelanjutan</h1>
                        </div>
                    </a>
                    <button data-modal-toggle="popup-modal-1">
                        <div class="rounded-full bg-[#E53535] py-[7px] px-[35px] font-normal text-sm text-[#FCFCFD] mb-[11px] hover:bg-[#ac2828] transition-all duration-500 ease-in-out">Hapus</div>
                    </button>
                </div>
            <!-- End of Card -->

            <!-- Start of Card -->
            <div class="bg-[#2B2B2B] flex flex-col flex-nowrap items-start p-[23px] rounded-lg w-[272px] h-[188px] justify-between space-y-[18px] mr-[45px] mb-[37px]">
                <a href="{{ route('renderSection',3) }}">
                    <div class="flex flex-row flex-nowrap justify-between space-x-[16px] items-start">
                        <div class="bg-[#EED8FF] w-11 h-11 p-[10px] rounded-lg mt-[6px]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48" class="text-[#6833FF]"><g fill="none">
                                <path stroke="currentColor" stroke-linejoin="round" stroke-miterlimit="2" stroke-width="4" d="M23.889 39.889c8.84 0 16-7.16 16-16s-7.16-16-16-16s-16 7.16-16 16s7.16 16 16 16Z"/><path stroke="currentColor" stroke-linejoin="round" stroke-miterlimit="2" stroke-width="4" d="M23.889 31.889c4.42 0 8-3.58 8-8s-3.58-8-8-8s-8 3.58-8 8s3.58 8 8 8Z"/><path fill="currentColor" d="M23.889 25.889c1.1 0 2-.9 2-2s-.9-2-2-2s-2 .9-2 2s.9 2 2 2Z"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="2" stroke-width="4" d="M23.889 7.889v-4m14 40l-4-7m-20 0l-4 7"/></g>
                            </svg>
                        </div>
                        <h1 class="font-semibold text-xl text-white">Sasaran Kerja Pegawai</h1>
                    </div>
                </a>
                <button data-modal-toggle="popup-modal-1">
                    <div class="rounded-full bg-[#E53535] py-[7px] px-[35px] font-normal text-sm text-[#FCFCFD] mb-[11px] hover:bg-[#ac2828] transition-all duration-500 ease-in-out">Hapus</div>
                </button>
            </div>  
            <!-- End of Card -->

            <!-- Start of Plus Button -->

            <a href="#" class="mt-[46px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="57" height="57" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16" class="text-[#0060FF] hover:text-[#0026ff] duration-500 transition-all ease-in-out">
                    <path fill="currentColor" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                </svg>
            </a>

            <!-- End of Plus Button -->

            </div>
        <!-- End of Cards -->

        <!-- Start of Delete Modal -->
        <div id="popup-modal-1" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-[617px] h-full md:h-auto">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal-1">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="py-6 px-8 text-center items-center flex flex-col">
                        <img src="{{ asset('DashboardIcon/img/trash-logo.png') }}" alt="trash-logo" class="w-20 h-20">
                        <h3 class="mb-2 text-2xl font-medium text-[#23262F] mt-4">Apakah anda yakin ingin menghapus item ini?</h3>
                        <p class="text-base font-medium text-[#87898E]">Tindakan ini tidak dapat dikembalikan</p>
                        <div class="flex flex-row mt-8 space-x-[16px]">
                            <a data-modal-toggle="popup-modal-1" href="#" type="button" class="text-white bg-[#E53535] hover:bg-[#ac2828] focus:ring-4 focus:outline-none focus:ring-red-300 font-normal rounded-full text-base inline-flex items-center px-[92px] py-5 text-center cursor-pointer transition-all duration-500 ease-in-out">
                                Hapus
                            </a>
                            <button data-modal-toggle="popup-modal-1" type="button" class="text-[#23262F] bg-[#F1F1F1] hover:bg-[#bebebe] focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-full text-base font-normal px-[92px] py-5 focus:z-10 transition-all duration-500 ease-in-out">Batalkan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Delete Modal -->

    </div>

@endsection