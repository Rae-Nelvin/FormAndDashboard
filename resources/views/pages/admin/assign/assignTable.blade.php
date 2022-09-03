@extends('layouts.dashboard.start')

@section('content')

    <h1 class="font-semibold text-[32px]">Sasaran Kerja Pegawai</h1>
    <form action="#" method="POST" class="mt-3 w-1/3">
        @csrf
        <label for="Periode" class="font-medium text-xl mt-5">Periode</label>
        <select name="periode" class="flex flex-row w-full border-2 border-[#DFDFE6] rounded-lg py-2 px-4 mt-4 font-medium text-base">
            <option value="A">2021/2021</option>
            <option value="B">2021/2022</option>
            <option value="C">2022/2022</option>
        </select>
    </form>

    {{-- Start of Table --}}
    <div class="overflow-x-auto relative sm:rounded-lg mt-3 w-full">
        <table class="w-full font-light text-base text-left text-[#454B54] bg-white rounded-lg">
            <thead class="text-base text-black font-bold bg-white border-b rounded-lg text-center">
                <tr>
                    <th scope="col" class="p-4">
                        Jabatan Pegawai Yang Dinilai
                    </th>
                    <th scope="col" class="p-4">
                        Diri Sendiri
                    </th>
                    <th scope="col" class="p-4">
                        Penilai 1
                    </th>
                    <th scope="col" class="p-4">
                        Penilai 2
                    </th>
                    <th scope="col" class="p-4">
                        
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="hover:bg-[#D5E6FB] hover:text-[#0060FF] transition-all ease-in-out duration-500">
                    <td class="py-4 px-6">
                        Direktur
                    </td>
                    <td class="py-4 px-6">
                        Diri Sendiri
                    </td>
                    <td class="py-4 px-6">
                        Guru yang ditunjuk
                    </td>
                    <td class="py-4 px-6">
                        Pater Winandoko
                    </td>
                    <td class="py-4 px-6">
                        <a href="{{ route('renderAssignDetail') }}">
                            <h1 class="text-[#0060FF] text-base font-light underline">View More</h1>
                        </a>
                    </td>
                </tr>
                <tr class="hover:bg-[#D5E6FB] hover:text-[#0060FF] transition-all ease-in-out duration-500">
                    <td class="py-4 px-6">
                        Kepala Divisi
                    </td>
                    <td class="py-4 px-6">
                        Diri Sendiri
                    </td>
                    <td class="py-4 px-6">
                        Pegawai administrasi yayasan
                    </td>
                    <td class="py-4 px-6">
                        Pater Hendra
                    </td>
                    <td class="py-4 px-6">
                        <a href="{{ route('renderAssignDetail') }}">
                            <h1 class="text-[#0060FF] text-base font-light underline">View More</h1>
                        </a>
                    </td>
                </tr>
                <tr class="hover:bg-[#D5E6FB] hover:text-[#0060FF] transition-all ease-in-out duration-500">
                    <td class="py-4 px-6">
                        Wakil Direktur
                    </td>
                    <td class="py-4 px-6">
                        Diri Sendiri
                    </td>
                    <td class="py-4 px-6">
                        Guru yang ditunjuk
                    </td>
                    <td class="py-4 px-6">
                        Pater Gandi
                    </td>
                    <td class="py-4 px-6">
                        <a href="{{ route('renderAssignDetail') }}">
                            <h1 class="text-[#0060FF] text-base font-light underline">View More</h1>
                        </a>
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

    <!-- Modal New toggle -->
    <button class="fixed z-90 bottom-32 right-24 w-[45px] h-[45px] text-white text-4xl" type="button" data-modal-toggle="new-modal">
        <svg xmlns="http://www.w3.org/2000/svg" width="57" height="57" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16" class="text-[#0060FF] hover:text-[#0026ff] duration-500 transition-all ease-in-out rounded-full">
            <path fill="currentColor" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
        </svg>
    </button>

    <!-- Main New modal -->
    <div id="new-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-[617px] h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="new-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-8 flex flex-col">
                    <h1 class="font-medium text-2xl">Tambah Jabatan Pegawai</h1>
                    <form class="space-y-[32px] w-full" action="#" method="POST">
                        @csrf
                        <div class="flex flex-col w-full ">
                            <label for="Jabatan" class="font-medium text-base">Nama Jabatan</label>
                            <input type="text" name="jabatan" class="border-2 border-[#DFDFE6] rounded-lg p-4 items-center font-medium text-sm ring-0 active:ring-0 focus:ring-0 focus:border-0 mt-4 " placeholder="Masukkan nama jabatan yang ingin ditambahkan">
                        </div>
                        <div>
                            <label for="Penilai 1" class="font-medium text-base">Penilai 1</label>
                            <select name="penilai1" class="flex flex-row w-full border-2 border-[#DFDFE6] rounded-lg py-2 px-4 mt-4 font-medium text-base">
                                <option value="A">Pater Winandoko</option>
                                <option value="B">Pater Hendra</option>
                                <option value="C">Pater Gandi</option>
                            </select>
                        </div>
                        <div>
                            <label for="Penilai 2" class="font-medium text-base">Penilai 2</label>
                            <select name="penilai2" class="flex flex-row w-full border-2 border-[#DFDFE6] rounded-lg py-2 px-4 mt-4 font-medium text-base">
                                <option value="A">Pater Winandoko</option>
                                <option value="B">Pater Hendra</option>
                                <option value="C">Pater Gandi</option>
                            </select>
                        </div>
                        <div class="flex flex-row mt-4">
                            <div class="flex flex-row items-center mr-4">
                                <input type="checkbox" name="7" class="rounded-sm border-[#87898E]">
                                <span class="font-normal text-base ml-2">Penilaian diisi sendiri</span>
                            </div>
                        </div>
                        <div class="flex flex-row space-x-[16px] justify-center w-full">
                            <button type="submit" class="w-full text-white bg-[#0060FF] hover:bg-[#124392] focus:ring-4 focus:outline-none font-normal rounded-full px-[45px] text-base py-5 text-center transition-all duration-500 ease-in-out">Tambah Jabatan</button>
                            <button type="reset" class="w-full text-[#23262F] bg-[#F1F1F1] hover:bg-[#bebebe] focus:ring-4 focus:outline-none rounded-full text-base font-normal px-[63px] py-5 focus:z-10 transition-all duration-500 ease-in-out" data-modal-toggle="new-modal">Batalkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End of New Modal -->
    
@endsection