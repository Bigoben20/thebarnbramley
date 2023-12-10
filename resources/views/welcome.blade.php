@extends('layouts.general')
@section('content')
    <div class="bg-cover bg-center bg-no-repeat h-[100svh] xl:h-[600px] relative" style="background-image: url({{ asset('images/foods.jpg') }})">
        <div class="bg-black/30 h-full flex justify-center items-start xl:items-center">
            <div class="flex flex-col justify-center items-start w-full max-w-6xl gap-10 mt-24 px-6">
                <span class="text-white text-lg mb-4">DELIGHTFUL EXPERIENCE</span>
                <span class="text-7xl font-bold text-white familyBebas tracking-wider" id="title">WE ARE NOW OPEN!</span>
                <button class="border border-white px-6 py-4 text-center hover:bg-primary w-full sm:w-[250px] hoverEffect text-lg text-white font-bold hover:text-primaryDark">Find Us</button>
            </div>
        </div>
        <div class="-mt-2 sm:-mt-4 md:-mt-6 xl:-mt-10 w-full blur-[1px]">
            <img src="{{ asset('images/divider-2.png') }}" class="w-full h-fit" alt="">
        </div>
    </div>
@endsection
