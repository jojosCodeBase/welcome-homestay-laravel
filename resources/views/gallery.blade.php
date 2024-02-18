@extends('layouts/layout')
@section('content')
    <div class="">
        <div class="px-6 sm:px-28 mt-5">
            <div class="p-5 flex flex-col">
                <span class="mont font-bold text-xl text-center text-teal">Our Gallery</span>
            </div>
            <div id="photoGallery">
                @for ($i = 1; $i <= 49; $i++)
                    <img src="https://media1.tenor.com/images/db85ba00c6073b451a8f05156a66524e/tenor.gif?itemid=9856796" data-src="{{ asset('assets/images/' . $i . '.jpg') }}"
                        alt="Photo {{ $i }}" loading="lazy">
                @endfor
            </div>
        </div>
    </div>
@endsection
