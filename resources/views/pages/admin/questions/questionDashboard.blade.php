@extends('layouts.dashboard.start')

@section('content')

        <!-- Alerts -->
        @if (\Session::has('fail'))
        <div id="alert-border-2" class="flex p-4 mb-4 bg-red-100 border-t-4 border-red-500 dark:bg-red-200" role="alert">
            <svg class="flex-shrink-0 w-5 h-5 text-red-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <div class="ml-3 text-sm font-medium text-red-700">
            {!! \Session::get('fail') !!}
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 dark:bg-red-200 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 dark:hover:bg-red-300 inline-flex h-8 w-8"  data-dismiss-target="#alert-border-2" aria-label="Close">
            <span class="sr-only">Dismiss</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        @elseif (\Session::has('success'))
        <div id="alert-border-3" class="flex p-4 mb-4 bg-green-100 border-t-4 border-green-500 dark:bg-green-200" role="alert">
            <svg class="flex-shrink-0 w-5 h-5 text-green-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <div class="ml-3 text-sm font-medium text-green-700">
            {!! \Session::get('success') !!}
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 dark:bg-green-200 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 dark:hover:bg-green-300 inline-flex h-8 w-8"  data-dismiss-target="#alert-border-3" aria-label="Close">
            <span class="sr-only">Dismiss</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        @endif
        <!-- End of Alerts -->

        <div class="h-full w-full py-[43px] px-[33px] flex flex-col flex-nowrap items-start">
            <h1 class="font-semibold text-[32px]">{{ $title->sectionName }}</h1>
            <p class="mt-6 font-light text-xs">Paket Pertanyaan > {{ $title->type }} > {{ $title->sectionName }} > {{ $title->subSectionName }}</p>
            <div class="flex flex-col h-auto justify-between">
                @foreach ($subSection as $subSections)
                    <h1 class="font-semibold text-xl mt-[32px]">{{ $subSections->name }}</h1>
                @endforeach
                <div class="flex flex-col flex-nowrap justify-between space-y-[30px] mt-6 ml-[32px] mr-[120px]">
                    @foreach ($question as $questions)
                        <form action="#" class="space-y-6">
                            <div class="bg-white py-5 px-5 rounded-lg flex flex-col space-y-3">
                                <div class="flex flex-row justify-between">
                                    <p class="font-medium text-xl">{{ $loop->iteration }}. {{ $questions->question }}</p>
                                    <div class="flex flex-row space-x-4">
                                        <button type="button" data-modal-toggle="authentication-modal-{{ $questions->id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" class="text-[#259D07] hover:text-[#63ee41] transition-all duration-500 ease-in-out"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                <path d="m16.474 5.408l2.118 2.117m-.756-3.982L12.109 9.27a2.118 2.118 0 0 0-.58 1.082L11 13l2.648-.53c.41-.082.786-.283 1.082-.579l5.727-5.727a1.853 1.853 0 1 0-2.621-2.621Z"/><path d="M19 15v3a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h3"/></g>
                                            </svg>
                                        </button>
                                        <button type="button" data-modal-toggle="popup-modal-{{ $questions->id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" class="text-[#DE5462] hover:text-[#f1838e] transition-all duration-500 ease-in-out">
                                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M28 6H6l2 24h16l2-24H4m12 6v12m5-12l-1 12m-9-12l1 12m0-18l1-4h6l1 4"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                @if ($questions->minimumScore)
                                    <input type="number" class="border-0 border-b-[1px] border-b-[#5E5E5E]/35 outline-none ring-0 focus:outline-none focus:ring-0 py-3 w-1/4" placeholder="{{ $questions->questionType }}" min="{{ $questions->minimumScore }}" max="{{ $questions->maximumScore }}">
                                @else
                                    <input type="{{ $questions->questionType }}" class="border-0 border-b-[1px] border-b-[#5E5E5E]/35 outline-none ring-0 focus:outline-none focus:ring-0 py-3 w-1/4" placeholder="{{ $questions->questionType }}">
                                @endif
                            </div>
                        </form>

                        <!-- Main Edit modal -->
                        <div id="authentication-modal-{{ $questions->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-[617px] h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal-{{ $questions->id }}">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="py-6 px-8 items-center flex flex-col">
                                        <div class="bg-[#a3ee90] w-20 h-20 p-[10px] rounded-full mt-[6px] items-center justify-center flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" class="text-[#259D07]">
                                                <path fill="currentColor" d="m7 17.013l4.413-.015l9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583l-1.597 1.582l-1.586-1.585l1.594-1.58zM9 13.417l6.03-5.973l1.586 1.586l-6.029 5.971L9 15.006v-1.589z"/><path fill="currentColor" d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01c-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"/>
                                            </svg>
                                        </div>
                                        <form class="space-y-6 w-full" action="{{ route('editQuestion') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="questionID" value="{{ $questions->id }}" />
                                            <div>
                                                <label for="text" class="block mb-2 text-base font-medium text-gray-900 dark:text-gray-300"></label>
                                                <input type="text" name="question" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="{{ $questions->question }}" required>
                                            </div>
                                            <div>
                                                <label for="text" class="block mb-2 text-base font-medium text-gray-900 dark:text-gray-300">Tipe Soal</label>
                                                <select name="tipeQuestion" id="tipe" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                    <option value="{{ $questions->questionType }}" class="capitalize" selected>{{ $questions->questionType }}</option>
                                                    <option value="text" class="capitalize">Text</option>
                                                    <option value="number" class="capitalize">number</option>
                                                    <option value="checkbox" class="capitalize">checkbox</option>
                                                    <option value="radio" class="capitalize">radio</option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for="font-medium text-base block ">Nilai</label>
                                                <div class="flex flex-row flex-nowrap justify-between space-x-4">
                                                    <div>
                                                        <p class="text-xs text-gray-400">Dikosongkan jika tidak perlu <span class="text-red-700">*</span></p>
                                                        <input type="number" name="minimumScore" id="num" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 mt-2" placeholder="Nilai Minimum" />
                                                    </div>
                                                    <div>
                                                        <p class="text-xs text-gray-400">Dikosongkan jika tidak perlu <span class="text-red-700">*</span></p>
                                                        <input type="number" name="maximumScore" id="num" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 mt-2" placeholder="Nilai Maksimum" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex flex-row space-x-[16px] justify-center w-full">
                                                <button type="submit" class="w-full text-white bg-[#0060FF] hover:bg-[#124392] focus:ring-4 focus:outline-none font-normal rounded-full px-[45px] text-base py-5 text-center transition-all duration-500 ease-in-out">Ubah</button>
                                                <button type="reset" class="w-full text-[#23262F] bg-[#F1F1F1] hover:bg-[#bebebe] focus:ring-4 focus:outline-none rounded-full text-base font-normal px-[63px] py-5 focus:z-10 transition-all duration-500 ease-in-out" data-modal-toggle="authentication-modal-{{ $questions->id }}">Batalkan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <!-- End of Edit Modal -->

                        <!-- Start of Delete Modal -->
                        <div id="popup-modal-{{ $questions->id }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-[617px] h-full md:h-auto">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal-{{ $questions->id }}">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="py-6 px-8 text-center items-center flex flex-col">
                                        <img src="{{ asset('DashboardIcon/img/trash-logo.png') }}" alt="trash-logo" class="w-20 h-20">
                                        <h3 class="mb-2 text-2xl font-medium text-[#23262F] mt-4">Apakah anda yakin ingin menghapus item ini?</h3>
                                        <p class="text-base font-medium text-[#87898E]">Tindakan ini tidak dapat dikembalikan</p>
                                        <div class="flex flex-row mt-8 space-x-[16px]">
                                            <a href="/package/section/subsection/question/deleteQuestion/{{ $questions->id }}" data-modal-toggle="popup-modal-{{ $questions->id }}" type="button" class="text-white bg-[#E53535] hover:bg-[#ac2828] focus:ring-4 focus:outline-none focus:ring-red-300 font-normal rounded-full text-base inline-flex items-center px-[92px] py-5 text-center cursor-pointer transition-all duration-500 ease-in-out">
                                                Hapus
                                            </a>
                                            <button data-modal-toggle="popup-modal-{{ $questions->id }}" type="button" class="text-[#23262F] bg-[#F1F1F1] hover:bg-[#bebebe] focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-full text-base font-normal px-[92px] py-5 focus:z-10 transition-all duration-500 ease-in-out">Batalkan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Delete Modal -->

                    @endforeach

                    <!-- Modal New toggle -->
                    <button class="fixed z-90 bottom-32 right-12 w-[45px] h-[45px] text-white text-4xl" type="button" data-modal-toggle="new-modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="57" height="57" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16" class="text-[#0060FF] hover:text-[#0026ff] duration-500 transition-all ease-in-out rounded-full">
                            <path fill="currentColor" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                        </svg>
                    </button>

                    <!-- Main New modal -->
                    <div id="new-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-[617px] h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="new-modal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="py-6 px-8 items-center flex flex-col">
                                    <div class="bg-[#86adec] w-20 h-20 p-[10px] rounded-full mt-[6px] items-center justify-center flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024" class="text-[#124392]">
                                            <path fill="currentColor" d="M854.6 288.6L639.4 73.4c-6-6-14.1-9.4-22.6-9.4H192c-17.7 0-32 14.3-32 32v832c0 17.7 14.3 32 32 32h640c17.7 0 32-14.3 32-32V311.3c0-8.5-3.4-16.7-9.4-22.7zM790.2 326H602V137.8L790.2 326zm1.8 562H232V136h302v216a42 42 0 0 0 42 42h216v494zM544 472c0-4.4-3.6-8-8-8h-48c-4.4 0-8 3.6-8 8v108H372c-4.4 0-8 3.6-8 8v48c0 4.4 3.6 8 8 8h108v108c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8V644h108c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8H544V472z"/>
                                        </svg>
                                    </div>
                                    <form class="space-y-6 w-full" action="{{ route('newQuestion') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="subsectionID" value="{{ $subsectionID }}">
                                        <div>
                                            <label for="text" class="block mb-2 text-base font-medium text-gray-900 dark:text-gray-300">Pertanyaan</label>
                                            <input type="text" name="question" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan pertanyaan" required>
                                        </div>
                                        <div>
                                            <label for="text" class="block mb-2 text-base font-medium text-gray-900 dark:text-gray-300">Tipe Soal</label>
                                            <select name="tipeQuestion" id="tipeQuestion" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                <option value="text" class="capitalize" selected>Text</option>
                                                <option value="number" class="capitalize">number</option>
                                                <option value="checkbox" class="capitalize">checkbox</option>
                                                <option value="radio" class="capitalize">radio</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="font-medium text-base block ">Nilai</label>
                                            <div class="flex flex-row flex-nowrap justify-between space-x-4">
                                                <div>
                                                    <p class="text-xs text-gray-400">Dikosongkan jika tidak perlu <span class="text-red-700">*</span></p>
                                                    <input type="number" name="minimumScore" id="num" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 mt-2" placeholder="Nilai Minimum" />
                                                </div>
                                                <div>
                                                    <p class="text-xs text-gray-400">Dikosongkan jika tidak perlu <span class="text-red-700">*</span></p>
                                                    <input type="number" name="maximumScore" id="num" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 mt-2" placeholder="Nilai Maksimum" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex flex-row space-x-[16px] justify-center w-full">
                                            <button type="submit" class="w-full text-white bg-[#0060FF] hover:bg-[#124392] focus:ring-4 focus:outline-none font-normal rounded-full px-[45px] text-base py-5 text-center transition-all duration-500 ease-in-out">Tambahkan</button>
                                            <button type="reset" class="w-full text-[#23262F] bg-[#F1F1F1] hover:bg-[#bebebe] focus:ring-4 focus:outline-none rounded-full text-base font-normal px-[63px] py-5 focus:z-10 transition-all duration-500 ease-in-out" data-modal-toggle="new-modal">Batalkan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!-- End of New Modal -->

                </div>
            
                <div class="mt-[151px]">
                    <div class="flex flex-row flex-nowrap space-x-[25px]">
                        @if ( ($subsectionID - 1)  >= ($underLimit->subsectionID) )
                            <a href="/package/section/subsection/question/{{ $subsectionID - 1 }}">
                                <button class="py-5 px-7 font-medium text-base text-[#0060FF] text-center bg-white rounded-2xl shadow-[#000000]/25 shadow-md hover:bg-[#0060FF] hover:text-white transition-all duration-500 ease-in-out">Sebelumnya</button>
                            </a>    
                        @else
                            <button type="button" class="py-5 px-7 font-medium text-base bg-[#F1F1F1] rounded-2xl cursor-default shadow-[#000000]/25 shadow-md">Sebelumnya</button>
                        @endif
                        @if ( ($subsectionID + 1) <= ($upperLimit->subsectionID) )
                            <a href="/package/section/subsection/question/{{ $subsectionID + 1 }}">
                                <button type="button" class="py-5 px-7 font-medium text-base text-[#0060FF] text-center bg-white rounded-2xl shadow-[#000000]/25 shadow-md hover:bg-[#0060FF] hover:text-white transition-all duration-500 ease-in-out">Berikutnya</button>
                            </a>
                        @else
                            <button type="button" class="py-5 px-7 font-medium text-base bg-[#F1F1F1] rounded-2xl cursor-default shadow-[#000000]/25 shadow-md">Berikutnya</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>

@endsection