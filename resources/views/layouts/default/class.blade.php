
@extends('welcome')

@section('content')


    @php $title = __('sections.program'); $link = url('program'); @endphp

    <div class=" pl-8 flex flex-col justify-center mt-8   text-gray-500 w-full h-screen bg-white rounded shadow">
        <a href=" {{  $link }} ">
            <p class="text-center pt-4 text-xl"> {{  $title }} </p>
        </a>



     <img  class="w-[400px] h-auto frame mt-8 ml-24" src="{{ env('APP_URL').'/'.$class[0]['img'] }}">


    </div>
@endsection
