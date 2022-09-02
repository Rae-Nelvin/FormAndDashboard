@extends('layouts.dashboard.start')

@section('content')

    <h1 class="font-semibold text-[32px]">Assign People</h1>
    <div class="flex flex-col flex-nowrap mt-16 w-full space-y-[30px]">
        <div class="flex flex-row justify-between items-center bg-white w-full py-[22px] px-[23px] rounded-lg cursor-pointer hover:bg-[#D5E6FB] hover:text-[#0060FF] transition-all ease-in-out duration-500">
            <a href="#">
                <h1 class="font-medium text-xl uppercase">Sasaran Kerja Pegawai</h1>
            </a>
            <div class="flex flex-row space-x-4">
                <button type="button" data-modal-toggle="authentication-modal-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" class="text-[#259D07] hover:text-[#63ee41] transition-all duration-500 ease-in-out"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path d="m16.474 5.408l2.118 2.117m-.756-3.982L12.109 9.27a2.118 2.118 0 0 0-.58 1.082L11 13l2.648-.53c.41-.082.786-.283 1.082-.579l5.727-5.727a1.853 1.853 0 1 0-2.621-2.621Z"/><path d="M19 15v3a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h3"/></g>
                    </svg>
                </button>
                <button type="button" data-modal-toggle="popup-modal-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" class="text-[#DE5462] hover:text-[#f1838e] transition-all duration-500 ease-in-out">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M28 6H6l2 24h16l2-24H4m12 6v12m5-12l-1 12m-9-12l1 12m0-18l1-4h6l1 4"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="flex flex-row justify-between items-center bg-white w-full py-[22px] px-[23px] rounded-lg cursor-pointer hover:bg-[#D5E6FB] hover:text-[#0060FF] transition-all ease-in-out duration-500">
            <a href="#">
                <h1 class="font-medium text-xl uppercase">Perilaku Kerja Pegawai</h1>
            </a>
            <div class="flex flex-row space-x-4">
                <button type="button" data-modal-toggle="authentication-modal-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" class="text-[#259D07] hover:text-[#63ee41] transition-all duration-500 ease-in-out"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path d="m16.474 5.408l2.118 2.117m-.756-3.982L12.109 9.27a2.118 2.118 0 0 0-.58 1.082L11 13l2.648-.53c.41-.082.786-.283 1.082-.579l5.727-5.727a1.853 1.853 0 1 0-2.621-2.621Z"/><path d="M19 15v3a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h3"/></g>
                    </svg>
                </button>
                <button type="button" data-modal-toggle="popup-modal-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" class="text-[#DE5462] hover:text-[#f1838e] transition-all duration-500 ease-in-out">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M28 6H6l2 24h16l2-24H4m12 6v12m5-12l-1 12m-9-12l1 12m0-18l1-4h6l1 4"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="flex flex-row justify-between items-center bg-white w-full py-[22px] px-[23px] rounded-lg cursor-pointer hover:bg-[#D5E6FB] hover:text-[#0060FF] transition-all ease-in-out duration-500">
            <a href="#">
                <h1 class="font-medium text-xl uppercase">Peningkatan Kompetensi Berkelanjutan</h1>
            </a>
            <div class="flex flex-row space-x-4">
                <button type="button" data-modal-toggle="authentication-modal-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" class="text-[#259D07] hover:text-[#63ee41] transition-all duration-500 ease-in-out"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                        <path d="m16.474 5.408l2.118 2.117m-.756-3.982L12.109 9.27a2.118 2.118 0 0 0-.58 1.082L11 13l2.648-.53c.41-.082.786-.283 1.082-.579l5.727-5.727a1.853 1.853 0 1 0-2.621-2.621Z"/><path d="M19 15v3a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h3"/></g>
                    </svg>
                </button>
                <button type="button" data-modal-toggle="popup-modal-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" class="text-[#DE5462] hover:text-[#f1838e] transition-all duration-500 ease-in-out">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M28 6H6l2 24h16l2-24H4m12 6v12m5-12l-1 12m-9-12l1 12m0-18l1-4h6l1 4"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

@endsection