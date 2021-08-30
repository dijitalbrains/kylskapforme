<!DOCTYPE html>
<html lang="{{ \App::getLocale() }}">

<head>
    <base href="{{ url('/') }}/" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/css/app.css" rel="stylesheet">
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
    <script src="{{ mix('js/app.js') }}" defer></script>
    <title>Kylskap For Me @yield('title')</title>
</head>

<body x-data="{ isSidebarOpen: false }" :class="{'overflow-y-hidden' : isSidebarOpen }">

    {{-- Container --}}
    <div class="container mx-auto px-4">

        {{-- Header --}}
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
                <a href="javascript:void(0)"
                    class="ml-4 xl:ml-8 xl:mr-12 border-b-2 border-lime-350 pb-1 uppercase font-bold hover:border-black">
                    Logga in / Registrera Dig
                </a>
            </div>

        </header>

        {{-- All Filter --}}
        <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-3 gap-y-3 sm:gap-y-4 xl:gap-y-6 items-center uppercase font-bold mb-14">

            <div>
                <button
                    class="bg-black rounded-full text-white pl-6 pr-5 py-1.5 xl:py-2 uppercase font-medium hover:shadow-lg"
                    @click="isSidebarOpen = true">
                    <span class="relative top-px">Alla filter</span>
                    <x-svg-chevron direction="down" class="h-6 w-6 inline-block ml-3 text-lime-350"></x-svg-chevron>
                </button>
            </div>

            <div>
                <a href="{{url('search')}}" class="border-lime-350 filter-preset-link">
                    <span class="truncate">Fristående kylskåP</span>
                    <span class="filter-preset-count">250 st</span>
                </a>
            </div>

            @for ($i = 1; $i <= 8; $i++) <div>
                <a href="{{url('search')}}" class="border-white inline-flex filter-preset-link filter-preset-max-w">
                    <span class="truncate flex-1">Kombinerad kyl och frysa</span>
                    <span class="filter-preset-count">250 st</span>
                </a>
        </div>
        @endfor
    </div>

    {{-- Breadcrumb --}}
    @if ( Request::path() !== '/')
    <x-breadcrumb class="my-10"></x-breadcrumb>
    @endif

    {{$slot}}

    {{-- Sidebar --}}
    <div x-cloak>

        {{-- Backdrop --}}
        <div x-show="isSidebarOpen" @click="isSidebarOpen = false" class="fixed inset-0 z-10 bg-black opacity-50">
        </div>

        <aside x-show="isSidebarOpen" class="fixed inset-y-0 left-0 bg-trueGray-250 w-96 z-10 overflow-hidden"
            x-transition:enter="transition-all transform duration-200 ease-in-out"
            x-transition:enter-start="-translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
            x-transition:leave="transition-all transform duration-200 ease-in-out"
            x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="-translate-x-full opacity-0">

            {{-- Header --}}
            <div class="flex justify-between bg-black text-white font-bold p-3">
                <span class="mt-0.5">Rensa</span>
                <span class="uppercase mt-0.5">Alla filter</span>

                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" @click="isSidebarOpen = false">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>

            <nav aria-label="Main"
                class="fixed top-12 bottom-0 w-inherit pl-3 pr-1 py-4 space-y-3 overscroll-contain overflow-y-scroll">

                {{-- Section: Type --}}
                <div x-data="{ open: true}" class="px-2">
                    <div @click="open = !open" class="flex items-center text-black" role="button" aria-haspopup="true"
                        :aria-expanded="open ? 'true' : 'false'">
                        <span class="font-bold">TYP AV KYLSKÅP</span>
                        <span class="ml-auto" aria-hidden="true">
                            <x-svg-chevron direction="down" class="w-5 h-5 transition-transform transform -mr-1"
                                ::class="{ 'rotate-180': open }"></x-svg-chevron>
                        </span>
                    </div>
                    <div role="menu" x-show="open" class="mt-4 mb-8 space-y-2.5 text-xs">
                        <label class="block">
                            <input type="radio" name="type" checked class="form-radio" />
                            <span>Fristående kylskåp</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="type" class="form-radio" />
                            <span>Små kylskåp</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="type" class="form-radio" />
                            <span>Integrerade kylskåp</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="type" class="form-radio" />
                            <span>Kombinerad kyl och frys</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="type" class="form-radio" />
                            <span>Side by side kylskåp</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="type" class="form-radio" />
                            <span>French Door kylskåp/frys?</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="type" class="form-radio" />
                            <span>Lyxig kylskåp med extra funktioner t.ex. ismaskin</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="type" class="form-radio" />
                            <span>Husvagnskylskåp</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="type" class="form-radio" />
                            <span>Båtkylskåp</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="type" class="form-radio" />
                            <span>Bilkylskåp</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="type" class="form-radio" />
                            <span>Husbilskylskåp</span>
                        </label>
                    </div>
                </div>

                {{-- Section: Price --}}
                <div x-data="{ open: false}" class="px-2">
                    <div @click="open = !open" class="flex items-center text-black" role="button" aria-haspopup="true"
                        :aria-expanded="open ? 'true' : 'false'">
                        <span class="font-bold">PRIS</span>
                        <span class="ml-auto" aria-hidden="true">
                            <x-svg-chevron direction="down" class="w-5 h-5 transition-transform transform -mr-1"
                                ::class="{ 'rotate-180': open }"></x-svg-chevron>
                        </span>
                    </div>
                    <div role="menu" x-show="open" class="mt-4 mb-8 space-y-2 text-xs">

                        <x-range-slider :range-min="0" :range-max="100000" :min="0" :max="100000"></x-range-slider>

                    </div>
                </div>

                {{-- Section: Sale --}}
                <div x-data="{ open: false}" class="px-2">
                    <div @click="open = !open" class="flex items-center text-black" role="button" aria-haspopup="true"
                        :aria-expanded="open ? 'true' : 'false'">
                        <span class="font-bold">REA</span>
                        <span class="ml-auto" aria-hidden="true">
                            <x-svg-chevron direction="down" class="w-5 h-5 transition-transform transform -mr-1"
                                ::class="{ 'rotate-180': open }"></x-svg-chevron>
                        </span>
                    </div>
                    <div role="menu" x-show="open" class="mt-4 mb-8 space-y-2.5 text-xs">
                        <label class="block">
                            <input type="radio" name="sale" checked class="form-radio" />
                            <span>50% eller mer</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="sale" class="form-radio" />
                            <span>25% eller mer</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="sale" class="form-radio" />
                            <span>10% eller mer</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="sale" class="form-radio" />
                            <span>5% eller mer</span>
                        </label>
                    </div>
                </div>

                {{-- Section: Stock Status --}}
                <div x-data="{ open: false}" class="px-2">
                    <div @click="open = !open" class="flex items-center text-black" role="button" aria-haspopup="true"
                        :aria-expanded="open ? 'true' : 'false'">
                        <span class="font-bold">LAGERSTATUS</span>
                        <span class="ml-auto" aria-hidden="true">
                            <x-svg-chevron direction="down" class="w-5 h-5 transition-transform transform -mr-1"
                                ::class="{ 'rotate-180': open }"></x-svg-chevron>
                        </span>
                    </div>
                    <div role="menu" x-show="open" class="mt-4 mb-8 space-y-2.5 text-xs">
                        <label class="block">
                            <input type="radio" name="stock_status" checked class="form-radio" />
                            <span>i lager</span>
                        </label>
                    </div>
                </div>

                {{-- Section: Style --}}
                <div x-data="{ open: false}" class="px-2">
                    <div @click="open = !open" class="flex items-center text-black" role="button" aria-haspopup="true"
                        :aria-expanded="open ? 'true' : 'false'">
                        <span class="font-bold">STIL</span>
                        <span class="ml-auto" aria-hidden="true">
                            <x-svg-chevron direction="down" class="w-5 h-5 transition-transform transform -mr-1"
                                ::class="{ 'rotate-180': open }"></x-svg-chevron>
                        </span>
                    </div>
                    <div role="menu" x-show="open" class="mt-4 mb-8 space-y-2.5 text-xs">
                        <label class="block">
                            <input type="radio" name="style" checked class="form-radio" />
                            <span>Bäst i test kylskåp</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="style" class="form-radio" />
                            <span>Lantligt kylskåp</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="style" class="form-radio" />
                            <span>Modernt kylskåp</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="style" class="form-radio" />
                            <span>Retro kylskåp</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="style" class="form-radio" />
                            <span>Klassiskt kylskåp</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="style" class="form-radio" />
                            <span>Sekelskifte kylskåp</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="style" class="form-radio" />
                            <span>Italiensk kylskåp</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="style" class="form-radio" />
                            <span>Lyxigt/High-end kylskåp</span>
                        </label>
                    </div>
                </div>

                {{-- Section: Dimensions --}}
                <div x-data="{ open: false}" class="px-2">
                    <div @click="open = !open" class="flex items-center text-black" role="button" aria-haspopup="true"
                        :aria-expanded="open ? 'true' : 'false'">
                        <span class="font-bold">MÅTT</span>
                        <span class="ml-auto" aria-hidden="true">
                            <x-svg-chevron direction="down" class="w-5 h-5 transition-transform transform -mr-1"
                                ::class="{ 'rotate-180': open }"></x-svg-chevron>
                        </span>
                    </div>

                    {{-- Height --}}
                    <div x-show="open" class="font-bold mt-4 text-coolGray-600">Höjd</div>
                    <div role="menu" x-show="open" class="mt-2 mb-8 space-y-2 text-xs">

                        <x-range-slider :range-min="0" :range-max="200" :min="0" :max="200" class="mb-5">
                        </x-range-slider>

                        <div class="space-y-2">
                            <label class="block">
                                <input type="radio" name="height" checked class="form-radio" />
                                <span>Upp till 85 cm</span>
                            </label>
                            <label class="block">
                                <input type="radio" name="height" class="form-radio" />
                                <span>85 cm - 185 cm</span>
                            </label>
                            <label class="block">
                                <input type="radio" name="height" class="form-radio" />
                                <span>Minst 185 cm</span>
                            </label>
                        </div>

                    </div>

                    {{-- Width --}}
                    <div x-show="open" class="font-bold mt-4 text-coolGray-600">Bredd</div>
                    <div role="menu" x-show="open" class="mt-2 mb-8 space-y-2 text-xs">

                        <x-range-slider :range-min="10" :range-max="110" :min="10" :max="110" class="mb-5">
                        </x-range-slider>

                        <div class="space-y-2">
                            <label class="block">
                                <input type="radio" name="width" checked class="form-radio" />
                                <span>Upp till 54 cm</span>
                            </label>
                            <label class="block">
                                <input type="radio" name="width" class="form-radio" />
                                <span>54 cm - 60 cm</span>
                            </label>
                            <label class="block">
                                <input type="radio" name="width" class="form-radio" />
                                <span>Minst 60 cm</span>
                            </label>
                        </div>

                    </div>

                    {{-- Depth --}}
                    <div x-show="open" class="font-bold mt-4 text-coolGray-600">Djup</div>
                    <div role="menu" x-show="open" class="mt-2 mb-8 space-y-2 text-xs">

                        <x-range-slider :range-min="0" :range-max="780" :min="0" :max="70" class="mb-5">
                        </x-range-slider>

                        <div class="space-y-2">
                            <label class="block">
                                <input type="radio" name="depth" checked class="form-radio" />
                                <span>Upp till 55 cm</span>
                            </label>
                            <label class="block">
                                <input type="radio" name="depth" class="form-radio" />
                                <span>55 cm - 65 cm</span>
                            </label>
                            <label class="block">
                                <input type="radio" name="depth" class="form-radio" />
                                <span>Minst 65 cm</span>
                            </label>
                        </div>

                    </div>

                    {{-- Weight --}}
                    <div x-show="open" class="font-bold mt-4 text-coolGray-600">Vikt</div>
                    <div role="menu" x-show="open" class="mt-2 mb-8 space-y-2 text-xs">

                        <x-range-slider :range-min="0" :range-max="200" :min="0" :max="200" class="mb-5">
                        </x-range-slider>

                        <div class="space-y-2">
                            <label class="block">
                                <input type="radio" name="weight" checked class="form-radio" />
                                <span>Upp till 32 kg</span>
                            </label>
                            <label class="block">
                                <input type="radio" name="weight" class="form-radio" />
                                <span>32 kg - 73 kg</span>
                            </label>
                            <label class="block">
                                <input type="radio" name="weight" class="form-radio" />
                                <span>Minst 73 kg</span>
                            </label>
                        </div>

                    </div>

                </div>

                {{-- Section: Color --}}
                <div x-data="{ open: false}" class="px-2">
                    <div @click="open = !open" class="flex items-center text-black" role="button" aria-haspopup="true"
                        :aria-expanded="open ? 'true' : 'false'">
                        <span class="font-bold">FÄRG</span>
                        <span class="ml-auto" aria-hidden="true">
                            <x-svg-chevron direction="down" class="w-5 h-5 transition-transform transform -mr-1"
                                ::class="{ 'rotate-180': open }"></x-svg-chevron>
                        </span>
                    </div>
                    <div role="menu" x-show="open" class="mt-4 mb-8 space-y-2.5 text-xs">
                        <label class="block">
                            <input type="radio" name="color" checked class="form-radio" />
                            <span>Beige</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="color" class="form-radio" />
                            <span>Blå</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="color" class="form-radio" />
                            <span>Brun</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="color" class="form-radio" />
                            <span>Creme</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="color" class="form-radio" />
                            <span>Grå/Antracit</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="color" class="form-radio" />
                            <span>Gul</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="color" class="form-radio" />
                            <span>Koppar</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="color" class="form-radio" />
                            <span>Orange</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="color" class="form-radio" />
                            <span>Rosa</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="color" class="form-radio" />
                            <span>Rostfri/krom</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="color" class="form-radio" />
                            <span>Röd</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="color" class="form-radio" />
                            <span>Silver</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="color" class="form-radio" />
                            <span>Svart</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="color" class="form-radio" />
                            <span>Svart</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="color" class="form-radio" />
                            <span>Svart</span>
                        </label>
                    </div>
                </div>

                {{-- Section: Household To Volume --}}
                <div x-data="{ open: false}" class="px-2">
                    <div @click="open = !open" class="flex items-center text-black" role="button" aria-haspopup="true"
                        :aria-expanded="open ? 'true' : 'false'">
                        <span class="font-bold">ANTAL PERSONER I HUSHÅLLET / VOLYM</span>
                        <span class="ml-auto" aria-hidden="true">
                            <x-svg-chevron direction="down" class="w-5 h-5 transition-transform transform -mr-1"
                                ::class="{ 'rotate-180': open }"></x-svg-chevron>
                        </span>
                    </div>
                    <div role="menu" x-show="open" class="mt-4 mb-8 space-y-2.5 text-xs">
                        <label class="block">
                            <input type="radio" name="household_to_volume" checked class="form-radio" />
                            <span>1 person - 100 liter</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="household_to_volume" class="form-radio" />
                            <span>2 personer - 150 – 200 liter</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="household_to_volume" class="form-radio" />
                            <span>3 personer - 200 – 250 liter</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="household_to_volume" class="form-radio" />
                            <span>4 personer - 250 – 300 liter</span>
                        </label>
                    </div>
                </div>

                <div class="text-center">
                    <a href="search" class="btn-round-black inline-block text-white px-20">
                        Visa xxxxxxx resultat
                    </a>
                </div>

            </nav>
        </aside>
    </div>

    </div>

    <div class="container mx-auto sm:px-4">
        {{-- Footer --}}
        <footer>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-y-10 gap-x-10 xl:gap-x-20 uppercase text-white">
                <div>
                    <div class="font-bold mb-4">FORME</div>

                    <ul>
                        <li><a href="info" class="font-normal text-lime-350">Om forme</a></li>
                        <li><a href="info" class="font-normal">Press och annonsering</a></li>
                    </ul>
                </div>
                <div>
                    <div class="font-bold mb-4">KONTAKT OCH HJÄLP</div>

                    <ul>
                        <li><a href="info" class="font-normal">Kontakta oss</a></li>
                        <li><a href="info" class="font-normal">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <div class="font-bold mb-4">INFORMATION</div>
                </div>

                <a href="/" class="max-w-xs w-3/4 sm:w-full">
                    <img src="{{asset('/images/logo-white.svg')}}">
                </a>
            </div>
        </footer>
    </div>

    <script>
        function rangeSlider(rangeMin, rangeMax, min, max) {
            return {
                range: rangeMax - rangeMin,
                rangeMin,
                rangeMax,
                min,
                max,
                dragLeft: false,
                dragRight: false,

                handleThumbMouseMove: function(e) {
                    if (!this.dragLeft && !this.dragRight) return;

                    const thumbEl = this.dragLeft ? this.$refs.minThumb : this.$refs.maxThumb;

                    const sliderRect = this.$refs.sliderEl.getBoundingClientRect();

                    let r = ((e.type == 'touchmove' ? e.touches[0].clientX : e.clientX) - sliderRect.left) / sliderRect.width;
                    r = Math.max(0, Math.min(r, 1));
                    const value = Math.floor(r * this.range + this.rangeMin);

                    if (this.dragLeft) {
                        this.min = value;
                        this.max = Math.max(this.min, this.max);
                    } else {
                        this.max = value;
                        this.min = Math.min(this.min, this.max);
                    }
                }
            };
        }
    </script>
</body>

</html>
