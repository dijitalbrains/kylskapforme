<header>
    <a href="/" class="p-2 sm:p-0 bg-white max-w-max w-2/3 sm:w-1/4 lg:w-1/6 relative top-0 sm:top-3 lg:top-0">
        <img src="{{asset('/images/logo.svg')}}">
    </a>

    {{-- Search Bar --}}
    <div class="search-bar">
        <div class="flex justify-between flex-grow mr-3">
            <span>Sök ditt kylskåp:</span>
            <input type="text" class="flex-grow mx-2 bg-transparent focus:outline-none">
            <span>5899 kylskåp</span>
        </div>
        <span>
            <x-svg-search-circle class="h-8 w-8 fill-current text-lime-350"></x-svg-search-circle>
        </span>
    </div>

    {{-- Login/Register --}}
    <div class="flex items-center bg-white ml-auto mr-5 mt-2 lg:m-0">
        <x-svg-heart class="h-8 w-8 fill-current text-lime-350"></x-svg-heart>
        <a href="{{ route('login') }}"
            class="ml-4 xl:ml-8 xl:mr-12 border-b-2 border-lime-350 pb-1 uppercase font-bold hover:border-black">
            Logga in / Registrera Dig
        </a>
    </div>
</header>
