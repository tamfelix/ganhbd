@extends('welcome')

@section('content')

<div class="w-[80%] mr-5   text-[#2f506c] p-3 pt-0  pb-0 pt-[12px] pl-0 bg-gray-50">
    <a href="{{url('contact')}}" class="font3 text-[#2f506c] text-lg border-t-2 border-[#6091ba] pt-[15px] px-3">
        Contact
    </a>
    <section class="text-gray-700 font3 m-6 w-full">

        {!!  $text[0] !!}

        <form class="w-full " action="{{route('messages.store')}}" method="POST" enctype="multipart/form-data">
            @method('POST')
            @CSRF
                @if(session()->has('success'))
                <div class="alert alert-success w-[400px] h-[40px] p-2.5">{{session()->get('success')}}</div>
            @endif


            @error('name')

                <div class="alert alert-primary w-[400px] h-[40px] p-2.5">{{$message}}</div>

            @enderror

            <p class="my-2  "><input id="name" value="name" class="p-2 w-[190px]">
                <input id="surname" value="surname" class="ml-2 p-2 w-[200px]"></p>
            <p class=" my-2  "><input id="email" value="email" class="p-2 w-[400px]"></p>
            <input id="subject" value="subject" class="p-2 w-[400px]">
            <p class=" "><x-textarea class=""></x-textarea></p>
            <button type="submit" ><x-green-button class="" >submit</x-green-button></button>
        </form>

    </section>
</div>
@endsection

