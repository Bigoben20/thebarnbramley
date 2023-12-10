<header class="w-full flex justify-center bg-primaryBg" 
x-data="{ menu: false }"
x-init="$watch('menu', value => console.log(value))">
    <div class="max-w-6xl w-full p-4 flex justify-between items-center">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/logos/the-barn-logo.png') }}" alt="" class="h-10 sm:h-20">
        </a>
        <div class="absolute md:static top-0 left-0 bottom-0 w-[300px] md:w-fit md:h-fit md:translate-x-0 transition-all duration-500 ease-out bg-primaryBg h-full z-20" :class="menu?'':'-translate-x-[100%]'" x-on:click.away="menu = false">
            <div class="flex flex-col md:flex-row gap-6 lg:gap-10 items-start md:items-center justify-between w-full py-20 md:py-0 px-12 md:px-0 text-2xl md:text-lg">
                <a href="{{ route('home') }}" class="navlink">
                    <span>Home</span>
                </a>
                <a href="{{ route('home') }}" class="navlink">
                    <span>About Us</span>
                </a>
                <a href="{{ route('home') }}" class="navlink">
                    <span>Contact Us</span>
                </a>
                <a href="{{ route('home') }}" class="navlink">
                    <span>Menu</span>
                </a>
                <a href="{{ route('home') }}" class="bg-primary text-primaryDark px-6 py-2 rounded-full hoverEffect familyBebas">
                    <span>Order Now</span>
                </a>
            </div>
        </div>

        {{-- Menu button --}}
        <div class="md:hidden">
            <button class="bg-white/0 hover:bg-white/10 active:bg-white/20 rounded-md p-2 flex items-center justify-center" x-on:click.stop="menu = !menu">
                <i class="fa-solid text-2xl text-white transition-all duration-300" :class="menu?'fa-close':'fa-bars'"></i>
            </button>
        </div>
    </div>
</header>