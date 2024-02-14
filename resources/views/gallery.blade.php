@extends('layouts/layout')
@section('content')
    <div class="">
        <div class="px-6 sm:px-28 mt-5">
            <div class="p-5 flex flex-col">
                {{-- <span class="mont text-sm text-gray-600">Gallery</span> --}}
                <span class="mont font-bold text-xl text-gray-700 text-center">Our Gallery</span>
            </div>
            {{-- <div id="photoGallery"></div> --}}
            <div id="photoGallery">
                @for ($i = 1; $i <= 49; $i++)
                    <img src="{{ asset('images/placeholder.jpg') }}" data-src="{{ asset('assets/images/' . $i . '.jpg') }}"
                        alt="Photo {{ $i }}" loading="lazy">
                @endfor
            </div>
        </div>
    </div>
@endsection
