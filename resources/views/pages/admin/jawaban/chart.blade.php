@extends('layouts.dashboard.start')

@section('content')

    <h1 class="font-semibold text-[32px]">Evaluasi Diri Pendidik</h1>
    <p class="mt-6 font-light text-xs">Jawaban > Evaluasi Diri Pendidik</p>
    <div class="flex flex-row flex-wrap mt-6">
        <img src="{{ asset('DashboardIcon/img/chart1.jpg') }}" alt="chart1" class="mr-[85px] mb-11">
        <div class="bg-white mr-[85px] mb-11">
            <img src="{{ asset('DashboardIcon/img/chart2.png') }}" alt="chart2">
        </div>
        <div class="bg-white mr-[85px] mb-11">
            <img src="{{ asset('DashboardIcon/img/chart3.png') }}" alt="chart3">
        </div>
        <img src="{{ asset('DashboardIcon/img/chart4.jpg') }}" alt="chart4" class="mr-[85px] mb-11">
    </div>

@endsection