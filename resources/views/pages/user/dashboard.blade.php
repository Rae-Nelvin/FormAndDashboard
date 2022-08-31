@extends('layouts.dashboard.user-start')

@section('userContent')

    <div class="h-full w-full py-[71px] px-[33px] flex flex-col flex-nowrap justify-between items-end">
        <div class="item-start">
            <h1 class="font-semibold text-[32px]">Hi, Andy!</h1>
            <h2 class="font-normal text-2xl mt-7">Terdapat 3 instrumen dalam Evaluasi Diri Pendidik yaitu, EDP, PKB, dan SKP. Silahkan diisi untuk setiap instrumennya hingga selesai dan di save, agar data tersimpan.</h2>
    
            <div class="flex flex-row flex-nowrap mt-14">
                <!-- Start of Card -->
                <div class="bg-[#2B2B2B] flex flex-col flex-nowrap items-start px-8 py-[23px] rounded-lg w-[272px] h-[149px] justify-between space-y-[18px] mr-[45px] mb-[37px]">
                    <a href="#">
                        <div class="flex flex-row flex-nowrap justify-between space-x-[16px] items-center">
                            <h1 class="font-semibold text-xl text-white">Evaluasi Diri Pendidik</h1>
                        </div>
                    </a>
                </div>
                <!-- End of Card -->
                <!-- Start of Card -->
                <div class="bg-[#2B2B2B] flex flex-col flex-nowrap items-start px-8 py-[23px] rounded-lg w-[272px] h-[149px] justify-between space-y-[18px] mr-[45px] mb-[37px]">
                    <a href="#">
                        <div class="flex flex-row flex-nowrap justify-between space-x-[16px] items-center">
                            <h1 class="font-semibold text-xl text-white">Pengembangan Keprofesian Berkelanjutan</h1>
                        </div>
                    </a>
                </div>
                <!-- End of Card -->
                <!-- Start of Card -->
                <div class="bg-[#2B2B2B] flex flex-col flex-nowrap items-start px-8 py-[23px] rounded-lg w-[272px] h-[149px] justify-between space-y-[18px] mr-[45px] mb-[37px]">
                    <a href="#">
                        <div class="flex flex-row flex-nowrap justify-between space-x-[16px] items-center">
                            <h1 class="font-semibold text-xl text-white">Sasaran Kerja Pegawai</h1>
                        </div>
                    </a>
                </div>
                <!-- End of Card -->
            </div>
        </div>

        <img src="{{ asset('UserDashboardIcon/bro.svg') }}" alt="bro" class="w-[548px] items-end">

    </div>

@endsection