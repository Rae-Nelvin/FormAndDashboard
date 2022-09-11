@extends('layouts.dashboard.start')

@section('content')

    <div class="h-full w-full py-[71px] px-[33px] flex flex-col justify-between flex-nowrap items-start">
        <div class="mb-7">
            <h1 class="font-semibold text-[32px] capitalize">{{ $title->title }}</h1>
            <h4 class="font-light text-xs mt-6">{{ $title->title }} > {{ $subSection->name }}</h4>
            <h3 class="font-medium text-xl mt-8">Silahkan memberikan score pada setiap pertanyaan sesuai dengan penilaian Anda.</h3>
            <p class="mt-2 font-semibold text-base text-red-600">{!! $title->description !!}</p>
            <h2 class="font-semibold text-xl mt-5">{{ $subSection->name }}</h2>
            <div class="w-full mt-6 flex flex-col flex-nowrap space-y-[30px]">
                <form class="w-full rounded-lg bg-white justify-between py-[25px] px-[22px] items-center" id="kuesioner-form" action="/user/package/kuesioner/pkb/{{ $title->id }}/{{ $title->section->id }}/{{ $subSection->id + 1}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <table class="w-full">
                        <tbody id="team-member-fields">
                            <span class="hidden">{{ $j = 0; }}</span>
                            <tr class="w-full">
                                <td class="flex flex-row w-full mb-8">
                                    @foreach ($question as $questions)
                                        <input type="hidden" name="periodeID" value="{{ $periode }}">
                                        <input type="hidden" name="answer[{{$j}}][answers][questionID]" value="{{$questions->id}}">
                                        <input type="hidden" name="final" value="{{ $upperLimit }}">
                                        @if ($questions->questionType == 'checkbox')
                                            <div class="flex flex-col">
                                                <h2 class="font-light text-base mb-2">Strategi PKB</h2>
                                                <div class="flex flex-row flex-nowrap space-x-6">
                                                    @for ($i = 1 ; $i <= $questions->maximumScore; $i++)
                                                        <div class="flex flex-row flex-nowrap space-x-2 items-center">
                                                            <input type="checkbox" name="answer[{{$j}}][answers][answer][]" value="{{ $i }}" class="rounded-sm">
                                                            <label for="{{ $i }}" class="text-lg">{{ $i }}</label>
                                                        </div>
                                                    @endfor
                                                </div>
                                            </div>
                                        @else
                                            <input type="{{ $questions->questionType }}" name="answer[{{$j}}][answers][answer][]" class="border-0 border-b-[1px] border-b-[#5E5E5E]/35 outline-none ring-0 focus:outline-none focus:ring-0 py-3 w-full mr-20" placeholder="Tuliskan Rencana PKB">
                                        @endif
                                        <span class="hidden">{{$j = $j + 1;}}</span>
                                    @endforeach
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <button type="button" id="add-member-fields" class="add-row mt-5 py-5 px-7 font-medium text-base text-[#0060FF] text-center bg-white rounded-2xl shadow-[#000000]/25 shadow-md hover:bg-[#0060FF] hover:text-white transition-all duration-500 ease-in-out">Tambahkan</button>
        </div>
        <div>
            <div class="flex flex-row flex-nowrap space-x-[25px]">
                @if ($underLimit != 0)
                    <a href="/user/package/kuesioner/{{ $title->id }}/{{ $title->section->id }}/{{ $subSection->id - 1 }}">
                        <button class="py-5 px-7 font-medium text-base text-[#0060FF] text-center bg-white rounded-2xl shadow-[#000000]/25 shadow-md hover:bg-[#0060FF] hover:text-white transition-all duration-500 ease-in-out">Sebelumnya</button>
                    </a>    
                @else
                    <button type="button" class="py-5 px-7 font-medium text-base bg-[#F1F1F1] rounded-2xl cursor-default shadow-[#000000]/25 shadow-md">Sebelumnya</button>
                @endif
                @if ( $upperLimit == "true" )
                    <button form="kuesioner-form" type="submit" class="py-5 px-7 font-medium text-base text-[#0060FF] text-center bg-white rounded-2xl shadow-[#000000]/25 shadow-md hover:bg-[#0060FF] hover:text-white transition-all duration-500 ease-in-out">Berikutnya</button>
                @elseif( $underLimit == "false" )
                    <button form="kuesioner-form" type="submit" class="py-5 px-7 font-medium text-base text-white text-center bg-[#004588] rounded-2xl shadow-[#000000]/25 shadow-md hover:bg-[#0e3257] hover:text-white transition-all duration-500 ease-in-out">Selesai</button>
                @else
                    <button type="button" class="py-5 px-7 font-medium text-base bg-[#F1F1F1] rounded-2xl cursor-default shadow-[#000000]/25 shadow-md">Berikutnya</button>
                @endif
            </div>
        </div>
    </div>

<script type="text/javascript">
let i = 0;
jQuery(document).ready(function($) {
  //fadeout selected item and remove
  $(document).on("click", "#remove-member-fields", function(event) {
    event.preventDefault();
    $(this)
      .parent()
      .fadeOut(300, function() {
        $(this).empty();
        return false;
      });
  });
  $('tbody').on('click', '.remove', function(){
    $(this).parent().parent().remove();
  });
  //add input
  $("#add-member-fields").click(function() {
    i++;
    var rows = '<tr class="w-full">' +
                        '<td class="flex flex-row w-full mb-8 justify-center items-end">' + 
                            '@foreach ($question as $questions)' +
                            '<input type="hidden" name="answer[{{$j}}][answers][questionID][{{$questions->id}}]" value="{{$questions->id}}">' +
                                '@if ($questions->questionType == "checkbox")' + 
                                    '<div class="flex flex-col">' +
                                        '<h2 class="font-light text-base mb-2">Strategi PKB</h2>' +
                                        '<div class="flex flex-row flex-nowrap space-x-6">' +
                                            '@for ($i = 1 ; $i <= $questions->maximumScore; $i++)' +
                                                '<div class="flex flex-row flex-nowrap space-x-2 items-center">' +
                                                    '<input type="checkbox" name="answer[{{$j}}][answers][answer][]" value="{{ $i }}" class="rounded-sm">' +
                                                    '<label for="{{ $i }}" class="text-lg">{{ $i }}</label>' +
                                                '</div>' +
                                            '@endfor' +
                                        '</div>' +
                                    '</div>' +
                                '@else' +
                                    '<div class="flex flex-row w-full mr-12 items-center justify-center">' + 
                                        '<input type="{{ $questions->questionType }}" name="answer[{{$j}}][answers][answer][]" class="border-0 border-b-[1px] border-b-[#5E5E5E]/35 outline-none ring-0 focus:outline-none mr-8 focus:ring-0 py-3 w-full" placeholder="Tuliskan Rencana PKB">' +
                                    '</div>' +
                                '@endif' +
                                '<span class="hidden">{{$j = $j + 1;}}</span>' +
                            '@endforeach' +
                            '<img src="{{ asset("DashboardIcon/img/Trash-logo.svg") }}" alt="trash-icon" class="w-6 ml-8 cursor-pointer" id="remove-member-fields">' +
                        '</td>' +
                    '</tr>';
    $(rows)
      .fadeIn("slow")
      .appendTo("#team-member-fields");
    return false;
  });
});
</script>
@endsection