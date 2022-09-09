@extends('layouts.dashboard.start')

@section('content')

    <div class="h-full w-full py-[71px] px-[33px] flex flex-col justify-between flex-nowrap items-start">
        <div class="mb-7">
            <h1 class="font-semibold text-[32px] capitalize">{{ $title->title }}</h1>
            <h4 class="font-light text-xs mt-6">{{ $title->title }} > {{ $title->section->name }} > {{ $subSection->name }}</h4>
            <h3 class="font-medium text-xl mt-8">Silahkan memberikan score pada setiap pertanyaan sesuai dengan penilaian Anda.</h3>
            <p class="mt-2 font-semibold text-base text-red-600">{!! $title->description !!}</p>
            <h2 class="font-semibold text-xl mt-5">{{ $subSection->name }}</h2>
            <div class="w-full mt-6 flex flex-col flex-nowrap space-y-[30px]">
                {{-- Final Form --}}
                @if( ($subSection->id) == ($upperLimit['subsectionID']) )
                    <form class="w-full flex flex-col space-y-6" id="kuesioner-form" action="/user/package/kuesioner/final/{{ $title->id }}/{{ $title->section->id }}/{{ $subSection->id + 1}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @foreach ($question as $questions)
                            <div class="flex flex-col justify-between bg-white py-[25px] px-[22px] rounded-lg">
                                <p class="font-medium text-xl">{{ $loop->iteration }}. {{ $questions->question }}</p>
                                <input type="hidden" name="questionID[]" value="{{ $questions->id }}">
                                @if ($questions->questionType == 'number')
                                    <input type="number" name="answer[]" class="border-0 border-b-[1px] border-b-[#5E5E5E]/35 outline-none ring-0 focus:outline-none focus:ring-0 py-3 w-1/4" placeholder="{{ $questions->questionType }}" min="{{ $questions->minimumScore }}" max="{{ $questions->maximumScore }}" value="{{ $questions->answer }}" required>
                                @elseif ($questions->questionType == 'checkbox')
                                    <div class="flex flex-row flex-nowrap space-x-10">
                                        @for ($i = 1 ; $i <= $questions->maximumScore; $i++)
                                            <div class="flex flex-row flex-nowrap space-x-2 items-center">
                                                <input type="checkbox" name="{{ $i }}" value="{{ $i }}">
                                                <label for="{{ $i }}" class="text-lg">{{ $i }}</label>
                                            </div>
                                        @endfor
                                    </div>
                                @else
                                    <input type="{{ $questions->questionType }}" class="border-0 border-b-[1px] border-b-[#5E5E5E]/35 outline-none ring-0 focus:outline-none focus:ring-0 py-3 w-1/4" placeholder="{{ $questions->questionType }}">
                                @endif
                            </div>
                        @endforeach
                    </form>
                @else
                {{-- If Previous form has been filled --}}
                    <form class="w-full flex flex-col space-y-6" id="kuesioner-form" action="/user/package/kuesioner/{{ $title->id }}/{{ $title->section->id }}/{{ $subSection->id + 1}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @foreach ($question as $questions)
                            <div class="flex flex-col justify-between bg-white py-[25px] px-[22px] rounded-lg ">
                                <p class="font-medium text-xl">{{ $loop->iteration }}. {{ $questions->question }}</p>
                                <input type="hidden" name="questionID[]" value="{{ $questions->id }}">
                                @if(!$answer->isEmpty())
                                    @foreach($answer as $answers)
                                        @if($answers->questionID == $questions->id)
                                            @if ($questions->questionType == 'number')
                                                <input type="number" name="answer[]" class="border-0 border-b-[1px] border-b-[#5E5E5E]/35 outline-none ring-0 focus:outline-none focus:ring-0 py-3 w-1/4" value={{ $answers->answer }}  placeholder="{{ $answers->answer }}" min="{{ $questions->minimumScore }}" max="{{ $questions->maximumScore }}" required>
                                            @elseif ($questions->questionType == 'checkbox')
                                                <div class="flex flex-row flex-nowrap space-x-10">
                                                    @for ($i = 1 ; $i <= $questions->maximumScore; $i++)
                                                        <div class="flex flex-row flex-nowrap space-x-2 questions-center">
                                                            <input type="checkbox" name="{{ $i }}" value="{{ $i }}">
                                                            <label for="{{ $i }}" class="text-lg">{{ $i }}</label>
                                                        </div>
                                                    @endfor
                                                </div>
                                            @else
                                                <input type="{{ $questions->questionType }}" class="border-0 border-b-[1px] border-b-[#5E5E5E]/35 outline-none ring-0 focus:outline-none focus:ring-0 py-3 w-1/4" value={{ $answers->answer }} placeholder="{{ $answers->answer }}">
                                            @endif
                                        @endif
                                    @endforeach
                                @else
                                {{-- If Form hasn't been filled --}}
                                    @if ($questions->questionType == 'number')
                                        <input type="number" name="answer[]" class="border-0 border-b-[1px] border-b-[#5E5E5E]/35 outline-none ring-0 focus:outline-none focus:ring-0 py-3 w-1/4" placeholder="{{ $questions->questionType }}" min="{{ $questions->minimumScore }}" max="{{ $questions->maximumScore }}" required>
                                    @elseif ($questions->questionType == 'checkbox')
                                        <div class="flex flex-row flex-nowrap space-x-10">
                                            @for ($i = 1 ; $i <= $questions->maximumScore; $i++)
                                                <div class="flex flex-row flex-nowrap space-x-2 questions-center">
                                                    <input type="checkbox" name="{{ $i }}" value="{{ $i }}">
                                                    <label for="{{ $i }}" class="text-lg">{{ $i }}</label>
                                                </div>
                                            @endfor
                                        </div>
                                    @else
                                        <input type="{{ $questions->questionType }}" class="border-0 border-b-[1px] border-b-[#5E5E5E]/35 outline-none ring-0 focus:outline-none focus:ring-0 py-3 w-1/4" placeholder="{{ $questions->questionType }}">
                                    @endif
                                @endif
                            </div>
                        @endforeach
                    </form>
                @endif
            </div>
        </div>
        <div>
            <div class="flex flex-row flex-nowrap space-x-[25px]">
                @if (($subSection->id - 1)  >= ($underLimit['subsectionID']))
                    <a href="/user/package/kuesioner/{{ $title->id }}/{{ $title->section->id }}/{{ $subSection->id - 1 }}">
                        <button class="py-5 px-7 font-medium text-base text-[#0060FF] text-center bg-white rounded-2xl shadow-[#000000]/25 shadow-md hover:bg-[#0060FF] hover:text-white transition-all duration-500 ease-in-out">Sebelumnya</button>
                    </a>    
                @else
                    <button type="button" class="py-5 px-7 font-medium text-base bg-[#F1F1F1] rounded-2xl cursor-default shadow-[#000000]/25 shadow-md">Sebelumnya</button>
                @endif
                @if ( ($subSection->id) < ($upperLimit['subsectionID']) )
                    <button form="kuesioner-form" type="submit" class="py-5 px-7 font-medium text-base text-[#0060FF] text-center bg-white rounded-2xl shadow-[#000000]/25 shadow-md hover:bg-[#0060FF] hover:text-white transition-all duration-500 ease-in-out">Berikutnya</button>
                @elseif( ($subSection->id) == ($upperLimit['subsectionID']) )
                    <button form="kuesioner-form" type="submit" class="py-5 px-7 font-medium text-base text-white text-center bg-[#004588] rounded-2xl shadow-[#000000]/25 shadow-md hover:bg-[#0e3257] hover:text-white transition-all duration-500 ease-in-out">Selesai</button>
                @else
                    <button type="button" class="py-5 px-7 font-medium text-base bg-[#F1F1F1] rounded-2xl cursor-default shadow-[#000000]/25 shadow-md">Berikutnya</button>
                @endif
            </div>
        </div>
    </div>

@endsection