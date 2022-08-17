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

        <div class="py-20 px-20 w-full space-y-6">
            <div class="flex flex-col flex-nowrap justify-between space-y-6">
                <div class="bg-white py-5 px-5 rounded-lg flex flex-row flex-nowrap justify-between space-x-10">
                    @foreach ($subSection as $subSections)
                    <h1 class="font-bold text-xl">{{ $subSections->id }}. {{ $subSections->name }}</h1>
                    <button class="block text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 text-center w-1/5 mx-auto transition-all ease-in-out duration-300 font-bold" type="button" data-modal-toggle="new-modal">
                        Tambahkan Soal
                    </button>
                    @endforeach
                </div>
                @foreach ($question as $questions)
                    <form action="#" class="space-y-6">
                        <div class="bg-white py-5 px-5 rounded-lg flex flex-col space-y-3">
                            <div class="flex flex-row justify-between">
                                <p class="text-lg">{{ $loop->iteration }}. {{ $questions->question }}</p>
                                <div class="flex flex-row space-x-4">
                                    <button class="bg-blue-400 py-2 px-4 rounded-lg text-white font-bold hover:bg-blue-500 transition-all duration-300 ease-in-out" type="button" data-modal-toggle="authentication-modal-{{ $questions->id }}">Edit</button>
                                    <button class="bg-red-600 py-2 px-4 rounded-lg text-white font-bold hover:bg-red-700 transition-all duration-300 ease-in-out" type="button" data-modal-toggle="popup-modal-{{ $questions->id }}">Delete</button>
                                </div>
                            </div>
                            @if ($questions->minimumScore)
                                <input type="number" class="bg-gray-300 border-0 rounded-lg focus:bg-white transition-all ease-in-out duration-300 px-5 py-3" placeholder="{{ $questions->questionType }}" min="{{ $questions->minimumScore }}" max="{{ $questions->maximumScore }}">
                            @else
                                <input type="{{ $questions->questionType }}" class="bg-gray-300 border-0 rounded-lg focus:bg-white transition-all ease-in-out duration-300 px-5 py-3" placeholder="{{ $questions->questionType }}">
                            @endif
                        </div>
                    </form>

                    <!-- Main Edit modal -->
                    <div id="authentication-modal-{{ $questions->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal-{{ $questions->id }}">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="py-6 px-6 lg:px-8">
                                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Edit Soal</h3>
                                    <form class="space-y-6" action="{{ route('editQuestion') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="questionID" value="{{ $questions->id }}" />
                                        <div>
                                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"></label>
                                            <input type="text" name="question" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="{{ $questions->question }}" required>
                                        </div>
                                        <div>
                                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tipe Soal</label>
                                            <select name="tipeQuestion" id="tipe" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                                <option value="{{ $questions->questionType }}" class="capitalize" selected>{{ $questions->questionType }}</option>
                                                <option value="text" class="capitalize">Text</option>
                                                <option value="number" class="capitalize">number</option>
                                                <option value="checkbox" class="capitalize">checkbox</option>
                                                <option value="radio" class="capitalize">radio</option>
                                            </select>
                                        </div>
                                        <div class="flex flex-row flex-nowrap space-x-4">
                                            <div>
                                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Minimum Score</label>
                                                <p class="text-xs text-gray-400">Dikosongkan jika tidak perlu <span class="text-red-700">*</span></p>
                                                <input type="number" name="minimumScore" id="num" class="w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 mt-2" />
                                            </div>
                                            <div>
                                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Maximum Score</label>
                                                <p class="text-xs text-gray-400">Dikosongkan jika tidak perlu <span class="text-red-700">*</span></p>  
                                                <input type="number" name="maximumScore" id="num" class="w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 mt-2" />
                                            </div>
                                        </div>
                                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit Soal</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!-- End of Edit Modal -->

                    <!-- Start of Delete Modal -->
                    <div id="popup-modal-{{ $questions->id }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal-{{ $questions->id }}">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="p-6 text-center">
                                    <svg aria-hidden="true" class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah anda yakin ingin menghapus soal ini?</h3>
                                    <a href="/package/section/subsection/question/deleteQuestion/{{ $questions->id }}" data-modal-toggle="popup-modal-{{ $questions->id }}" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                        Ya, saya yakin
                                    </a>
                                    <button data-modal-toggle="popup-modal-{{ $questions->id }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Tidak, batal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Delete Modal -->

                @endforeach

                <!-- Main New modal -->
                <div id="new-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="new-modal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="py-6 px-6 lg:px-8">
                                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">New Soal</h3>
                                <form class="space-y-6" action="{{ route('newQuestion') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="subsectionID" value="{{ $subsectionID }}">
                                    <div>
                                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Soal</label>
                                        <input type="text" name="question" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Name Soal" required>
                                    </div>
                                    <div>
                                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tipe Soal</label>
                                        <select name="tipeQuestion" id="tipeQuestion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                                            <option value="text" class="capitalize" selected>Text</option>
                                            <option value="number" class="capitalize">number</option>
                                            <option value="checkbox" class="capitalize">checkbox</option>
                                            <option value="radio" class="capitalize">radio</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-row flex-nowrap space-x-4">
                                        <div>
                                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Minimum Value</label>
                                            <p class="text-xs text-gray-400">Dikosongkan jika tidak perlu <span class="text-red-700">*</span></p>
                                            <input type="number" name="minimumScore" id="num" class="w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 mt-2" />
                                        </div>
                                        <div>
                                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Maximum Value</label>
                                            <p class="text-xs text-gray-400">Dikosongkan jika tidak perlu <span class="text-red-700">*</span></p>
                                            <input type="number" name="maximumScore" id="num" class="w-40 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 mt-2" />
                                        </div>
                                    </div>
                                    <button type="submit" class="w-full text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">New Soal</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 
                <!-- End of New Modal -->

            </div>
        
            {{-- <div>
                <div class="flex flex-row flex-nowrap justify-between">
                    <button class="py-2.5 bg-blue-700 hover:bg-blue-800 text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-base px-5 text-center transition-all duration-300 ease-in-out">Previous</button>
                    <button class="py-2.5 bg-blue-700 hover:bg-blue-800 text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-base px-5 text-center transition-all duration-300 ease-in-out">Next</button>
                </div>
            </div> --}}
        </div>

    </div>

@endsection