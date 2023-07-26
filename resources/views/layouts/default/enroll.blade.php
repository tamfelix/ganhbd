@extends('welcome')

@section('content')

<div class="w-[80%] mr-5   text-[#2f506c] p-3 pt-0  pb-0 pt-[12px] pl-0 bg-gray-50">
    <a href="{{url('enroll')}}" class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[11px] px-3">
        Enroll
    </a>
    <section class="text-gray-700 font3 m-6 ">{!!  $text[0] !!}

    <form class="m-4" action="{{url('candidateSave')}}" method="POST" >
        <input class="px-2 py-1" id="name" value="student's name">
        <input class="ml-2 px-2 py-1" id="surname" value="surname">
        <x-green-button>submit</x-green-button>
    </form>

    </section>
</div>
@endsection

