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

<body>

    {{-- Container --}}
    <div class="container mx-auto" x-data="{ isSidebarOpen: false }">

        {{-- Header --}}
        <div
            class="bg-header py-12 bg-contain bg-no-repeat bg-right-top flex justify-between content-center items-center">
            <img src="{{asset('/images/logo.svg')}}" class="w-1/6">

            {{-- Search Bar --}}
            <div class="bg-black rounded-full text-white p-1 pl-3 mr-64 w-1/3 flex items-center font-light">
                <div class="flex justify-between flex-grow mr-3">
                    <span>Sök ditt kylskåp:</span>
                    <input type="text" class="flex-grow mx-2 bg-transparent focus:outline-none">
                    <span>5899 kylskåp</span>
                </div>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 fill-current text-lime-350"
                        viewBox="0 0 20 20">
                        <path d="M9 9a2 2 0 114 0 2 2 0 01-4 0z" />
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a4 4 0 00-3.446 6.032l-2.261 2.26a1 1 0 101.414 1.415l2.261-2.261A4 4 0 1011 5z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </div>

            {{-- Login/Register --}}
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 fill-current text-lime-350" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                        clip-rule="evenodd" />
                </svg>
                <a href="javascript:void(0)" class="ml-8 mr-12 border-b-2 border-lime-350">
                    Logga in / Registrera Dig
                </a>
            </div>

        </div>

        {{-- All Filter --}}
        <div class="grid grid-cols-5 gap-x-3 gap-y-6 items-center uppercase font-bold mb-14">

            <div>
                <button class="bg-black rounded-full text-white pl-6 pr-5 py-2 uppercase font-medium hover:shadow-lg"
                    @click="isSidebarOpen = true">
                    Alla filter
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block ml-3 text-lime-350" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
            </div>

            <div>
                <a href="javascript:void(0)" class="border-b-2 border-lime-350">
                    Fristående kylskåP
                    <span>250 st</span>
                </a>
            </div>

            @for ($i = 1; $i <= 8; $i++) <div>
                <a href="javascript:void(0)">
                    Kombinerad kyl och frysa
                    <span>250 st</span>
                </a>
        </div>
        @endfor
    </div>

    {{$slot}}

    {{-- Footer --}}
    <div class="bg-footer bg-black px-12 py-16 bg-contain bg-no-repeat bg-left-top mt-20">
        <div class="grid grid-cols-4 gap-x-20 uppercase text-white">
            <div>
                <div class="font-bold mb-4">FORME</div>

                <ul>
                    <li><a href="javascript:void(0)" class="font-normal text-lime-350">Om forme</a></li>
                    <li><a href="javascript:void(0)" class="font-normal">Press och annonsering</a></li>
                </ul>
            </div>
            <div>
                <div class="font-bold mb-4">KONTAKT OCH HJÄLP</div>

                <ul>
                    <li><a href="javascript:void(0)" class="font-normal">Kontakta oss</a></li>
                    <li><a href="javascript:void(0)" class="font-normal">FAQ</a></li>
                </ul>
            </div>
            <div>
                <div class="font-bold mb-4">INFORMATION</div>
            </div>
            <img src="{{asset('/images/logo-white.svg')}}">
        </div>
    </div>


    {{-- Sidebar --}}
    <div x-cloak>

        {{-- Backdrop --}}
        <div x-show="isSidebarOpen" @click="isSidebarOpen = false" class="fixed inset-0 z-10 bg-black opacity-50">
        </div>

        <aside x-show="isSidebarOpen" class="fixed inset-y-0 left-0 bg-trueGray-250 w-96 z-10"
            x-transition:enter="transition-all transform duration-200 ease-in-out"
            x-transition:enter-start="-translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-100"
            x-transition:leave="transition-all transform duration-200 ease-in-out"
            x-transition:leave-start="translate-x-0 opacity-100" x-transition:leave-end="-translate-x-full opacity-0">

            {{-- Header --}}
            <div class="flex justify-between bg-black text-white font-bold p-3">
                <span>Rensa</span>
                <span class="uppercase">Alla filter</span>

                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" @click="isSidebarOpen = false">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>

            <nav aria-label="Main" class="px-3 py-4 space-y-2 overflow-y-hidden hover:overflow-y-auto">

                {{-- Section: Type --}}
                <div x-data="{ open: true}" class="p-2">
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
                    <div role="menu" x-show="open" class="mt-4 space-y-2 text-xs">
                        <input type="radio" name="option" />Fristående kylskåp<br>
                        <input type="radio" name="option" />Små kylskåp<br>
                        <input type="radio" name="option" />Integrerade kylskåp<br>
                        <input type="radio" name="option" />Kombinerad kyl och frys<br>
                        <input type="radio" name="option" />Side by side kylskåp<br>
                        <input type="radio" name="option" />French Door kylskåp/frys?<br>
                        <input type="radio" name="option" />Lyxig kylskåp med extra funktioner t.ex. ismaskin<br>
                        <input type="radio" name="option" />Husvagnskylskåp<br>
                        <input type="radio" name="option" />Båtkylskåp<br>
                        <input type="radio" name="option" />Bilkylskåp<br>
                        <input type="radio" name="option" />Husbilskylskåp<br>
                    </div>
                </div>

                {{-- Section: Price --}}
                <div x-data="{ open: false}" class="p-2">
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
                    <div role="menu" x-show="open" class="mt-4 space-y-2 text-xs">

                        <div class="flex flex-col items-center" x-data="rangeSlider(0, 100000, 0, 100000)">
                            <input class="absolute opacity-0 pointer-events-none" type="range" name="age_min" min="0"
                                max="100000" x-model="min" class="px-3 py-2 rounded" step="100">
                            <input class="absolute opacity-0 pointer-events-none" type="range" name="age_max" min="0"
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

                            <div class="flex justify-between w-full mt-7">
                                <input type="number" min="0" max="100000" x-model="min"
                                    class="px-3 py-2 rounded w-36 font-bold">
                                <span class="leading-8 font-bold">&ndash;</span>
                                <input type="number" min="0" max="100000" x-model="max"
                                    class="px-3 py-2 rounded w-36 font-bold">
                            </div>
                        </div>

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
