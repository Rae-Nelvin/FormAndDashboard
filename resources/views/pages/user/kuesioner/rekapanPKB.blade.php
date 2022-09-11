@extends('layouts.dashboard.start')

@section('content')

    <h1 class="font-semibold text-[32px]">Rekapan EDP</h1>
    <h2>Nama : {{ Auth::user()->name }}</h2>
    <h2>NIY : {{ Auth::user()->userDetail->NIY }}</h2>
    <h2>Golongan : {{ Auth::user()->userDetail->golongan->name }}</h2>
    <h2>Jabatan : {{ Auth::user()->userDetail->posisi->name }}</h2>
    <h2>Mengajar Kelas/Mapel : Kelas {{ Auth::user()->userDetail->kelas->name }} /  {{ Auth::user()->userDetail->mataPelajaran->name }}</h2>

    {{-- Start of Table --}}
    <div class="overflow-x-auto relative sm:rounded-lg mt-3 w-full">
        <table class="w-full font-light text-base text-left text-[#454B54] bg-white rounded-lg">
            <tbody>
                <tr>
                    <td colspan="3" class="py-4 px-6 font-bold text-center">
                        KOMPETENSI/SUB KOMPETENSI/INDIKATOR
                    </td>
                    <td colspan="3" class="py-4 px-6 font-bold text-center">
                        Rencana PKB
                    </td>
                    <td class="py-4 px-6 font-bold">
                        Strategi PKB
                    </td>
                </tr>
                @foreach ($section as $sections)
                    <span class="hidden">{{ $average = 0 }}</span>
                    <tr class="hover:bg-[#D5E6FB] hover:text-[#0060FF] transition-all ease-in-out duration-500">
                        <td class="py-4 px-6 font-bold">
                            {{ $loop->iteration }}
                        </td>
                        <td colspan="3" class="py-4 px-6 font-bold">
                            {{ $sections->name }}
                        </td>
                    </tr>
                    @foreach ($answer as $answers)
                        @if($answers->questionSectionID == $sections->id)
                            <tr class="hover:bg-[#D5E6FB] hover:text-[#0060FF] transition-all ease-in-out duration-500">
                                <td class="py-4 px-6">
                                </td>
                                <td class="py-4 px-6 font-light">
                                    {{ $loop->iteration }}
                                </td>
                                @if( $answers->questionID % 2 == 1)
                                    <td class="py-4 px-6 font-light">
                                        {{ $answers->question->question }}
                                    </td>
                                @endif
                                @if( $answers->question->questionType == 'text')
                                    <td class="py-4 px-6 font-light">
                                        {{ $answers->answer }}
                                    </td>
                                @elseif ( $answers->question->questionType == 'checkbox' )
                                    <td class="py-4 px-6 font-light">
                                        {{ $answers->answer }}
                                    </td>
                                @endif
                            </tr>
                        @endif
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- End of Table --}}

    <a href="{{ route('user.renderDashboard') }}">
        <button form="kuesioner-form" type="submit" class="mt-5 py-5 px-7 font-medium text-base text-white text-center bg-[#004588] rounded-2xl shadow-[#000000]/25 shadow-md hover:bg-[#0e3257] hover:text-white transition-all duration-500 ease-in-out">Selesai</button>
    </a>

@endsection