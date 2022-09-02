@extends('layouts.dashboard.start')

@section('content')

    <h1 class="font-semibold text-[32px]">Evaluasi Diri Pendidik</h1>
    <p class="mt-6 font-light text-xs">Jawaban > Evaluasi Diri Pendidik</p>

    {{-- Start of Table --}}
    <div class="overflow-x-auto relative sm:rounded-lg mt-3 w-full">
        <table class="w-full font-light text-base text-left text-[#454B54] bg-white rounded-lg">
            <thead class="text-base text-black font-bold bg-white border-b rounded-lg">
                <tr>
                    <th scope="col" class="p-4">
                        NIP
                    </th>
                    <th scope="col" class="p-4">
                        Nama Lengkap
                    </th>
                    <th scope="col" class="p-4">
                        Golongan
                    </th>
                    <th scope="col" class="p-4">
                        Jabatan
                    </th>
                    <th scope="col" class="p-4">
                        Unit
                    </th>
                    <th scope="col" class="p-4">
                        Kelas
                    </th>
                    <th scope="col" class="p-4">
                        Mata Pelajaran/<br>Area Kerja
                    </th>
                    <th scope="col" class="p-4">
                        
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-[#D5E6FB] hover:text-[#0060FF] transition-all ease-in-out duration-500">
                    <td class="py-4 px-6">
                        Text
                    </td>
                    <td class="py-4 px-6">
                        Text
                    </td>
                    <td class="py-4 px-6">
                        Text
                    </td>
                    <td class="py-4 px-6">
                        Text
                    </td>
                    <td class="py-4 px-6">
                        Text
                    </td>
                    <td class="py-4 px-6">
                        Text
                    </td>
                    <td class="py-4 px-6">
                        Text
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex flex-row space-x-4">
                            <a href="#">
                                <h1 class="text-[#0060FF] text-base font-light underline">View Jawaban</h1>
                            </a>
                            <button type="button" data-modal-toggle="popup-modal-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" class="text-[#DE5462] hover:text-[#f1838e] transition-all duration-500 ease-in-out">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M28 6H6l2 24h16l2-24H4m12 6v12m5-12l-1 12m-9-12l1 12m0-18l1-4h6l1 4"/>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-[#D5E6FB] hover:text-[#0060FF] transition-all ease-in-out duration-500">
                    <td class="py-4 px-6">
                        Text
                    </td>
                    <td class="py-4 px-6">
                        Text
                    </td>
                    <td class="py-4 px-6">
                        Text
                    </td>
                    <td class="py-4 px-6">
                        Text
                    </td>
                    <td class="py-4 px-6">
                        Text
                    </td>
                    <td class="py-4 px-6">
                        Text
                    </td>
                    <td class="py-4 px-6">
                        Text
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex flex-row space-x-4">
                            <a href="#">
                                <h1 class="text-[#0060FF] text-base font-semibold underline">View Jawaban</h1>
                            </a>
                            <button type="button" data-modal-toggle="popup-modal-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" class="text-[#DE5462] hover:text-[#f1838e] transition-all duration-500 ease-in-out">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M28 6H6l2 24h16l2-24H4m12 6v12m5-12l-1 12m-9-12l1 12m0-18l1-4h6l1 4"/>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="hover:bg-[#D5E6FB] hover:text-[#0060FF] transition-all ease-in-out duration-500">
                    <td class="py-4 px-6">
                        Text
                    </td>
                    <td class="py-4 px-6">
                        Text
                    </td>
                    <td class="py-4 px-6">
                        Text
                    </td>
                    <td class="py-4 px-6">
                        Text
                    </td>
                    <td class="py-4 px-6">
                        Text
                    </td>
                    <td class="py-4 px-6">
                        Text
                    </td>
                    <td class="py-4 px-6">
                        Text
                    </td>
                    <td class="py-4 px-6">
                        <div class="flex flex-row space-x-4">
                            <a href="#">
                                <h1 class="text-[#0060FF] text-base font-semibold underline">View Jawaban</h1>
                            </a>
                            <button type="button" data-modal-toggle="popup-modal-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" class="text-[#DE5462] hover:text-[#f1838e] transition-all duration-500 ease-in-out">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M28 6H6l2 24h16l2-24H4m12 6v12m5-12l-1 12m-9-12l1 12m0-18l1-4h6l1 4"/>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <nav class="items-center pt-4" aria-label="Table navigation">
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
        </nav>
    </div>
    {{-- End of Table --}}

@endsection