@extends('layouts.dashboard.start')

@section('content')

    <h1 class="font-semibold text-[32px]">Rekapan EDP</h1>
    <h2>Nama : {{ Auth::user()->name }}</h2>
    <h2>NIY : {{ Auth::user()->userDetail->NIY }}</h2>
    <h2>Golongan : {{ Auth::user()->userDetail->golonganID }}</h2>
    <h2>Jabatan : {{ Auth::user()->userDetail->posisiID }}</h2>
    <h2>Mengajar Kelas/Mapel : {{ Auth::user()->userDetail->kelasID }}</h2>

    {{-- Start of Table --}}
    <div class="overflow-x-auto relative sm:rounded-lg mt-3 w-full">
        <table class="w-full font-light text-base text-left text-[#454B54] bg-white rounded-lg">
            <tbody>
                @foreach ($section as $sections)
                    <tr class="hover:bg-[#D5E6FB] hover:text-[#0060FF] transition-all ease-in-out duration-500">
                        <td class="py-4 px-6 font-bold">
                            {{ $loop->iteration }}
                        </td>
                        <td colspan="3" class="py-4 px-6 font-bold">
                            {{ $sections->name }}
                        </td>
                        <td class="py-4 px-6 font-bold">
                            Score
                        </td>
                    </tr>
                    @foreach ($rekapan as $rekapans)
                        @if($rekapans->questionSectionID == $sections->id)
                            <tr class="hover:bg-[#D5E6FB] hover:text-[#0060FF] transition-all ease-in-out duration-500">
                                <td class="py-4 px-6">
                                </td>
                                <td class="py-4 px-6 font-semibold">
                                    {{ $loop->iteration }}
                                </td>
                                <td colspan="2" class="py-4 px-6 font-semibold">
                                    {{ $rekapans->name }}
                                </td>
                                <td class="py-4 px-6 font-medium">
                                    {{ $rekapans->average }}
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    <tr class="hover:bg-[#D5E6FB] hover:text-[#0060FF] transition-all ease-in-out duration-500">
                        <td colspan="4" class="py-4 px-6 text-center">
                            Rata - rata
                        </td>
                        <td class="py-4 px-6">
                            Text
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
        {{-- <nav class="items-center pt-4" aria-label="Table navigation">
            <ul class="inline-flex items-center space-x-3">
                <li>
                    <a href="#" class="block py-2 px-3 ml-0 leading-tight text-gray-700 bg-white rounded-md border border-gray-300 hover:bg-[#919EAB] hover:text-gray-200 duration-500 transition-all ease-in-out">
                        <span class="sr-only">Previous</span>
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    </a>
                </li>
                <li>
                    <a href="#" class="z-10 py-2 px-3 leading-tight rounded-md text-[#0060FF] bg-white border border-[#0060FF] hover:bg-[#0060FF] hover:text-white duration-500 transition-all ease-in-out">1</a>
                </li>
                <li>
                    <a href="#" class="py-2 px-3 ml-0 leading-tight text-black bg-white rounded-md border border-gray-300 hover:bg-[#919EAB] hover:text-gray-200 duration-500 transition-all ease-in-out">2</a>
                </li>
                <li>
                    <a href="#" class="py-2 px-3 ml-0 leading-tight text-black bg-white rounded-md border border-gray-300 hover:bg-[#919EAB] hover:text-gray-200 duration-500 transition-all ease-in-out">...</a>
                </li>
                <li>
                    <a href="#" class="py-2 px-3 ml-0 leading-tight text-black bg-white rounded-md border border-gray-300 hover:bg-[#919EAB] hover:text-gray-200 duration-500 transition-all ease-in-out">9</a>
                </li>
                <li>
                    <a href="#" class="py-2 px-3 ml-0 leading-tight text-black bg-white rounded-md border border-gray-300 hover:bg-[#919EAB] hover:text-gray-200 duration-500 transition-all ease-in-out">10</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 leading-tight text-gray-700 bg-white rounded-md border border-gray-300 hover:bg-[#919EAB] hover:text-gray-200 duration-500 transition-all ease-in-out">
                        <span class="sr-only">Next</span>
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    </a>
                </li>
            </ul>
        </nav> --}}
    </div>
    {{-- End of Table --}}

@endsection