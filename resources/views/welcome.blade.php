@extends('layouts.general')
@section('content')
    <section id="hero" class="bg-cover bg-center bg-no-repeat h-[100svh] xl:h-[600px] relative" style="background-image: url({{ asset('images/foods.jpg') }})">
        <div class="flex items-start justify-center h-full bg-black/30 xl:items-center">
            <div class="flex flex-col items-start justify-center w-full max-w-6xl gap-10 px-6 mt-24">
                <span class="mb-4 text-lg text-white">DELIGHTFUL EXPERIENCE</span>
                <span class="font-bold tracking-wider text-white text-7xl familyBebas" id="title">THE BARN, GROCERY AND BISTRO NOW OPEN!</span>
                <button class="border border-white px-6 py-4 text-center hover:bg-primary w-full sm:w-[250px] hoverEffect text-lg text-white font-bold hover:text-primaryDark">Find Us</button>
            </div>
        </div>
        <div class="-mt-2 sm:-mt-4 md:-mt-6 xl:-mt-10 w-full blur-[1px]">
            <img src="{{ asset('images/divider-2.png') }}" class="w-full h-fit" alt="">
        </div>
    </section>
    <section id="about" class="flex flex-col items-center w-full px-4 py-24 bg-white">
        <span class="mb-12 text-3xl font-bold tracking-wider uppercase">Welcome To Barn Bramley</span>
        <div class="grid items-center max-w-6xl grid-cols-1 gap-x-6 gap-y-6 md:gap-y-36 md:grid-cols-2">
            <div class="flex flex-col gap-2">
                <span class="text-5xl font-bold">Grocery</span>
                <span class="text-lg leading-7 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed metus aliquam, hendrerit ex ut, fermentum ipsum. Nunc porta ornare semper. Ut sem nibh, aliquet quis lobortis nec, hendrerit lacinia magna. Vivamus a quam lorem. Proin rutrum efficitur sem vulputate posuere. Duis vel eros sit amet massa varius maximus. Maecenas congue eleifend orci sit amet ullamcorper. Donec eget odio in purus mollis dignissim. Morbi sit amet maximus felis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam in scelerisque augue. Ut sed dolor quis justo maximus cursus a ut elit.</span>
            </div>
            <div class="flex justify-center gap-2 mb-6 md:mb-0">
                <div class="w-[220px] h-[324px] md:h-[380px] bg-cover bg-center bg-no-repeat" style="background-image: url({{ asset('images/grocery-1.jpg') }})"></div>
                <div class="w-[220px] h-[324px] md:h-[380px] bg-cover bg-center bg-no-repeat mt-8" style="background-image: url({{ asset('images/grocery-2.jpg') }})"></div>
            </div>

            <div class="flex justify-center w-full row-start-4 gap-2 md:row-start-2">
                <div class="w-[220px] h-[324px] md:h-[380px] bg-cover bg-center bg-no-repeat mt-8" style="background-image: url({{ asset('images/bistro-1.jpg') }})"></div>
                <div class="w-[220px] h-[324px] md:h-[380px] bg-cover bg-center bg-no-repeat" style="background-image: url({{ asset('images/bistro-2.jpg') }})"></div>
            </div>
            <div class="flex flex-col gap-2">
                <span class="text-5xl font-bold">Bistro</span>
                <span class="text-lg leading-7 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed metus aliquam, hendrerit ex ut, fermentum ipsum. Nunc porta ornare semper. Ut sem nibh, aliquet quis lobortis nec, hendrerit lacinia magna. Vivamus a quam lorem. Proin rutrum efficitur sem vulputate posuere. Duis vel eros sit amet massa varius maximus. Maecenas congue eleifend orci sit amet ullamcorper. Donec eget odio in purus mollis dignissim. Morbi sit amet maximus felis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam in scelerisque augue. Ut sed dolor quis justo maximus cursus a ut elit.</span>
            </div>
        </div>
    </section>
@endsection
