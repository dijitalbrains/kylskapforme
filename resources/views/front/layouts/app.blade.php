<!DOCTYPE html>
<html lang="{{ \App::getLocale() }}">

<head>
    <base href="{{ url('/') }}/" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/css/app.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>Kylskap For Me @yield('title')</title>
</head>

<body x-data="{ isSidebarOpen: false }" :class="{'overflow-y-hidden' : isSidebarOpen }">

    {{-- Container --}}
    <div class="container mx-auto px-4">

        {{-- Header --}}
        <header>
            <img src="{{asset('/images/logo.svg')}}"
                class="p-2 sm:p-0 bg-white max-w-max w-2/3 sm:w-1/4 lg:w-1/6 relative top-0 sm:top-3 lg:top-0">

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
                <a href="javascript:void(0)" class="ml-4 xl:ml-8 xl:mr-12 border-b-2 border-lime-350">
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
                    <x-svg-chevron-down class="h-6 w-6 inline-block ml-3 text-lime-350"></x-svg-chevron-down>
                </button>
            </div>

            <div>
                <a href="javascript:void(0)" class="border-lime-350">
                    <span class="truncate">Fristående kylskåP</span>
                    <span class="filter-preset-count">250 st</span>
                </a>
            </div>

            @for ($i = 1; $i <= 8; $i++) <div>
                <a href="javascript:void(0)" class="border-white inline-flex filter-preset">
                    <span class="truncate flex-1">Kombinerad kyl och frysa</span>
                    <span class="filter-preset-count">250 st</span>
                </a>
        </div>
        @endfor
    </div>

    {{$slot}}

    {{-- Footer --}}
    <footer>
        <div class="grid grid-cols-4 gap-x-20 uppercase text-white">
            <div>
                <div class="font-bold mb-4">FORME</div>

                <ul>
                    <li><a href="javascript:void(0)" class="font-normal border-black text-lime-350">Om forme</a></li>
                    <li><a href="javascript:void(0)" class="font-normal border-black">Press och annonsering</a></li>
                </ul>
            </div>
            <div>
                <div class="font-bold mb-4">KONTAKT OCH HJÄLP</div>

                <ul>
                    <li><a href="javascript:void(0)" class="font-normal border-black">Kontakta oss</a></li>
                    <li><a href="javascript:void(0)" class="font-normal border-black">FAQ</a></li>
                </ul>
            </div>
            <div>
                <div class="font-bold mb-4">INFORMATION</div>
            </div>
            <img src="{{asset('/images/logo-white.svg')}}">
        </div>
    </footer>


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
                            <svg class="w-5 h-5 transition-transform transform -mr-1" :class="{ 'rotate-180': open }"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
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
                            <svg class="w-5 h-5 transition-transform transform -mr-1" :class="{ 'rotate-180': open }"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </div>
                    <div role="menu" x-show="open" class="mt-4 mb-8 space-y-2 text-xs">

                        <div class="flex flex-col items-center" x-data="rangeSlider(0, 100000, 0, 100000)">
                            <input class="absolute opacity-0 pointer-events-none" type="range" name="price_min" min="0"
                                max="100000" x-model="min" class="px-3 py-2 rounded" step="100">
                            <input class="absolute opacity-0 pointer-events-none" type="range" name="price_max" min="0"
                                max="100000" x-model="max" step="100">

                            <div class="flex items-center relative bg-white w-full h-1.5 mt-4" x-ref="sliderEl"
                                @mouseup.window="dragLeft = dragRight = false"
                                @mousemove.window="handleThumbMouseMove($event)" style="user-select: none">
                                <div class="absolute h-1.5 bg-black"
                                    :style="`left: ${(min - rangeMin) * 100 / range}%; right: ${100 - (max - rangeMin) * 100 / range}%`">
                                </div>

                                <div class="w-6 h-6 -ml-0.5 rounded-full bg-lime-350 absolute cursor-pointer"
                                    @mousedown="dragLeft = true" :style="`left: ${(min - rangeMin) * 100 / range}%`"
                                    x-ref="minThumb">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-3 w-3 ml-1.5 mt-1.5 transform rotate-90" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 8h16M4 16h16" />
                                    </svg>
                                </div>

                                <div class="w-6 h-6 -ml-5 rounded-full bg-lime-350 absolute cursor-pointer"
                                    @mousedown="dragRight = true" :style="`left: ${(max - rangeMin) * 100 / range}%`"
                                    x-ref="maxThumb">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-3 w-3 ml-1.5 mt-1.5 transform rotate-90" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 8h16M4 16h16" />
                                    </svg>
                                </div>
                            </div>

                            <div class="flex justify-between w-full mt-6">
                                <input type="number" min="0" max="100000" x-model="min"
                                    class="px-3 py-2 rounded w-36 font-bold">
                                <span class="leading-8 font-bold">&ndash;</span>
                                <input type="number" min="0" max="100000" x-model="max"
                                    class="px-3 py-2 rounded w-36 font-bold">
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Section: Sale --}}
                <div x-data="{ open: false}" class="px-2">
                    <div @click="open = !open" class="flex items-center text-black" role="button" aria-haspopup="true"
                        :aria-expanded="open ? 'true' : 'false'">
                        <span class="font-bold">REA</span>
                        <span class="ml-auto" aria-hidden="true">
                            <svg class="w-5 h-5 transition-transform transform -mr-1" :class="{ 'rotate-180': open }"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
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
                            <svg class="w-5 h-5 transition-transform transform -mr-1" :class="{ 'rotate-180': open }"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
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
                            <svg class="w-5 h-5 transition-transform transform -mr-1" :class="{ 'rotate-180': open }"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
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
                            <svg class="w-5 h-5 transition-transform transform -mr-1" :class="{ 'rotate-180': open }"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </div>

                    {{-- Height --}}
                    <div x-show="open" class="font-bold mt-4 text-coolGray-600">Höjd</div>
                    <div role="menu" x-show="open" class="mt-2 mb-8 space-y-2 text-xs">

                        <div class="flex flex-col items-center mb-5" x-data="rangeSlider(0, 200, 0, 200)">
                            <input class="absolute opacity-0 pointer-events-none" type="range" name="height_min" min="0"
                                max="200" x-model="min" class="px-3 py-2 rounded" step="1">
                            <input class="absolute opacity-0 pointer-events-none" type="range" name="height_max" min="0"
                                max="200" x-model="max" step="1">

                            <div class="flex items-center relative bg-white w-full h-1.5 mt-4" x-ref="sliderEl"
                                @mouseup.window="dragLeft = dragRight = false"
                                @mousemove.window="handleThumbMouseMove($event)" style="user-select: none">
                                <div class="absolute h-1.5 bg-black"
                                    :style="`left: ${(min - rangeMin) * 100 / range}%; right: ${100 - (max - rangeMin) * 100 / range}%`">
                                </div>

                                <div class="w-6 h-6 -ml-0.5 rounded-full bg-lime-350 absolute cursor-pointer"
                                    @mousedown="dragLeft = true" :style="`left: ${(min - rangeMin) * 100 / range}%`"
                                    x-ref="minThumb">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-3 w-3 ml-1.5 mt-1.5 transform rotate-90" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 8h16M4 16h16" />
                                    </svg>
                                </div>

                                <div class="w-6 h-6 -ml-5 rounded-full bg-lime-350 absolute cursor-pointer"
                                    @mousedown="dragRight = true" :style="`left: ${(max - rangeMin) * 100 / range}%`"
                                    x-ref="maxThumb">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-3 w-3 ml-1.5 mt-1.5 transform rotate-90" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 8h16M4 16h16" />
                                    </svg>
                                </div>
                            </div>

                            <div class="flex justify-between w-full mt-6">
                                <input type="number" min="0" max="200" x-model="min"
                                    class="px-3 py-2 rounded w-36 font-bold">
                                <span class="leading-8 font-bold">&ndash;</span>
                                <input type="number" min="0" max="200" x-model="max"
                                    class="px-3 py-2 rounded w-36 font-bold">
                            </div>
                        </div>

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

                        <div class="flex flex-col items-center mb-5" x-data="rangeSlider(10, 110, 10, 110)">
                            <input class="absolute opacity-0 pointer-events-none" type="range" name="width_min" min="10"
                                max="110" x-model="min" class="px-3 py-2 rounded" step="1">
                            <input class="absolute opacity-0 pointer-events-none" type="range" name="width_max" min="10"
                                max="110" x-model="max" step="1">

                            <div class="flex items-center relative bg-white w-full h-1.5 mt-4" x-ref="sliderEl"
                                @mouseup.window="dragLeft = dragRight = false"
                                @mousemove.window="handleThumbMouseMove($event)" style="user-select: none">
                                <div class="absolute h-1.5 bg-black"
                                    :style="`left: ${(min - rangeMin) * 100 / range}%; right: ${100 - (max - rangeMin) * 100 / range}%`">
                                </div>

                                <div class="w-6 h-6 -ml-0.5 rounded-full bg-lime-350 absolute cursor-pointer"
                                    @mousedown="dragLeft = true" :style="`left: ${(min - rangeMin) * 100 / range}%`"
                                    x-ref="minThumb">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-3 w-3 ml-1.5 mt-1.5 transform rotate-90" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 8h16M4 16h16" />
                                    </svg>
                                </div>

                                <div class="w-6 h-6 -ml-5 rounded-full bg-lime-350 absolute cursor-pointer"
                                    @mousedown="dragRight = true" :style="`left: ${(max - rangeMin) * 100 / range}%`"
                                    x-ref="maxThumb">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-3 w-3 ml-1.5 mt-1.5 transform rotate-90" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 8h16M4 16h16" />
                                    </svg>
                                </div>
                            </div>

                            <div class="flex justify-between w-full mt-6">
                                <input type="number" min="10" max="110" x-model="min"
                                    class="px-3 py-2 rounded w-36 font-bold">
                                <span class="leading-8 font-bold">&ndash;</span>
                                <input type="number" min="10" max="110" x-model="max"
                                    class="px-3 py-2 rounded w-36 font-bold">
                            </div>
                        </div>

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

                        <div class="flex flex-col items-center mb-5" x-data="rangeSlider(0, 70, 0, 70)">
                            <input class="absolute opacity-0 pointer-events-none" type="range" name="depth_min" min="0"
                                max="70" x-model="min" class="px-3 py-2 rounded" step="1">
                            <input class="absolute opacity-0 pointer-events-none" type="range" name="depth_max" min="0"
                                max="70" x-model="max" step="1">

                            <div class="flex items-center relative bg-white w-full h-1.5 mt-4" x-ref="sliderEl"
                                @mouseup.window="dragLeft = dragRight = false"
                                @mousemove.window="handleThumbMouseMove($event)" style="user-select: none">
                                <div class="absolute h-1.5 bg-black"
                                    :style="`left: ${(min - rangeMin) * 100 / range}%; right: ${100 - (max - rangeMin) * 100 / range}%`">
                                </div>

                                <div class="w-6 h-6 -ml-0.5 rounded-full bg-lime-350 absolute cursor-pointer"
                                    @mousedown="dragLeft = true" :style="`left: ${(min - rangeMin) * 100 / range}%`"
                                    x-ref="minThumb">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-3 w-3 ml-1.5 mt-1.5 transform rotate-90" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 8h16M4 16h16" />
                                    </svg>
                                </div>

                                <div class="w-6 h-6 -ml-5 rounded-full bg-lime-350 absolute cursor-pointer"
                                    @mousedown="dragRight = true" :style="`left: ${(max - rangeMin) * 100 / range}%`"
                                    x-ref="maxThumb">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-3 w-3 ml-1.5 mt-1.5 transform rotate-90" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 8h16M4 16h16" />
                                    </svg>
                                </div>
                            </div>

                            <div class="flex justify-between w-full mt-6">
                                <input type="number" min="0" max="70" x-model="min"
                                    class="px-3 py-2 rounded w-36 font-bold">
                                <span class="leading-8 font-bold">&ndash;</span>
                                <input type="number" min="0" max="70" x-model="max"
                                    class="px-3 py-2 rounded w-36 font-bold">
                            </div>
                        </div>

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

                        <div class="flex flex-col items-center mb-5" x-data="rangeSlider(0, 200, 0, 200)">
                            <input class="absolute opacity-0 pointer-events-none" type="range" name="weight_min" min="0"
                                max="200" x-model="min" class="px-3 py-2 rounded" step="1">
                            <input class="absolute opacity-0 pointer-events-none" type="range" name="weight_max" min="0"
                                max="200" x-model="max" step="1">

                            <div class="flex items-center relative bg-white w-full h-1.5 mt-4" x-ref="sliderEl"
                                @mouseup.window="dragLeft = dragRight = false"
                                @mousemove.window="handleThumbMouseMove($event)" style="user-select: none">
                                <div class="absolute h-1.5 bg-black"
                                    :style="`left: ${(min - rangeMin) * 100 / range}%; right: ${100 - (max - rangeMin) * 100 / range}%`">
                                </div>

                                <div class="w-6 h-6 -ml-0.5 rounded-full bg-lime-350 absolute cursor-pointer"
                                    @mousedown="dragLeft = true" :style="`left: ${(min - rangeMin) * 100 / range}%`"
                                    x-ref="minThumb">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-3 w-3 ml-1.5 mt-1.5 transform rotate-90" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 8h16M4 16h16" />
                                    </svg>
                                </div>

                                <div class="w-6 h-6 -ml-5 rounded-full bg-lime-350 absolute cursor-pointer"
                                    @mousedown="dragRight = true" :style="`left: ${(max - rangeMin) * 100 / range}%`"
                                    x-ref="maxThumb">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-3 w-3 ml-1.5 mt-1.5 transform rotate-90" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 8h16M4 16h16" />
                                    </svg>
                                </div>
                            </div>

                            <div class="flex justify-between w-full mt-6">
                                <input type="number" min="0" max="200" x-model="min"
                                    class="px-3 py-2 rounded w-36 font-bold">
                                <span class="leading-8 font-bold">&ndash;</span>
                                <input type="number" min="0" max="200" x-model="max"
                                    class="px-3 py-2 rounded w-36 font-bold">
                            </div>
                        </div>

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
                            <svg class="w-5 h-5 transition-transform transform -mr-1" :class="{ 'rotate-180': open }"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
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
                            <svg class="w-5 h-5 transition-transform transform -mr-1" :class="{ 'rotate-180': open }"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
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

            </nav>
        </aside>
    </div>

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

                    let r = (e.clientX - sliderRect.left) / sliderRect.width;
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
