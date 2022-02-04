<header>
    <a href="/" class="p-2 sm:p-0 bg-white max-w-max w-2/3 sm:w-1/4 lg:w-1/6 relative top-0 sm:top-3 lg:top-0">
        <img src="{{ asset('/images/logo.svg') }}">
    </a>

    {{-- Search Bar --}}
    <div class="search-bar">
        <div class="flex justify-between flex-grow mr-3">
            <span>Sök ditt kylskåp:</span>
            <input type="text" class="flex-grow mx-2 bg-transparent focus:outline-none">
            <span>{{ $refrigerators_count }} kylskåp</span>
        </div>
        <span>
            <x-svg-search-circle class="h-8 w-8 fill-current text-lime-350"></x-svg-search-circle>
        </span>
    </div>

    {{-- Login/Register --}}
    <div class="flex items-center bg-white ml-auto mr-5 mt-2 lg:m-0">
        <a href="{{ url('favourite') }}">
            <x-svg-heart class="h-8 w-8 fill-current text-lime-350"></x-svg-heart>
        </a>
        @auth
            <a href="javascript:void(0)" class="login-link"
                @click.prevent="document.getElementById('logout-form').submit()">
                Logga ut
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        @endauth

        @guest
            <a href="{{ route('login') }}" class="login-link">
                Logga in / Registrera Dig
            </a>
        @endguest
    </div>
</header>
