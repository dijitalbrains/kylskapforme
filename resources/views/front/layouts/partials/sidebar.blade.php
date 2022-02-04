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
            <span class="mt-0.5" @click="clearAll()">Rensa</span>
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

                    <x-range-slider filter="price"></x-range-slider>

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

                    <x-range-slider filter="height"></x-range-slider>

                    <div class="space-y-2">
                        <label class="block">
                            <input type="radio" name="height" class="form-radio" @click="setRangSliderMax('height', 85)" />
                            <span>Upp till 85 cm</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="height" class="form-radio" @click="setRangSliderMinMax('height', 85, 185)" />
                            <span>85 cm - 185 cm</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="height" class="form-radio" @click="setRangSliderMin('height', 185)" />
                            <span>Minst 185 cm</span>
                        </label>
                    </div>

                </div>

                {{-- Width --}}
                <div x-show="open" class="font-bold mt-4 text-coolGray-600">Bredd</div>
                <div role="menu" x-show="open" class="mt-2 mb-8 space-y-2 text-xs">

                    <x-range-slider filter="width"></x-range-slider>

                    <div class="space-y-2">
                        <label class="block">
                            <input type="radio" name="width" class="form-radio" @click="setRangSliderMax('width', 54)" />
                            <span>Upp till 54 cm</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="width" class="form-radio" @click="setRangSliderMinMax('width', 54, 60)" />
                            <span>54 cm - 60 cm</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="width" class="form-radio" @click="setRangSliderMin('width', 60)" />
                            <span>Minst 60 cm</span>
                        </label>
                    </div>

                </div>

                {{-- Depth --}}
                <div x-show="open" class="font-bold mt-4 text-coolGray-600">Djup</div>
                <div role="menu" x-show="open" class="mt-2 mb-8 space-y-2 text-xs">

                    <x-range-slider filter="depth"></x-range-slider>

                    <div class="space-y-2">
                        <label class="block">
                            <input type="radio" name="depth" class="form-radio" @click="setRangSliderMax('depth', 55)" />
                            <span>Upp till 55 cm</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="depth" class="form-radio" @click="setRangSliderMinMax('depth', 55, 65)" />
                            <span>55 cm - 65 cm</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="depth" class="form-radio" @click="setRangSliderMin('depth', 65)" />
                            <span>Minst 65 cm</span>
                        </label>
                    </div>

                </div>

                {{-- Weight --}}
                <div x-show="open" class="font-bold mt-4 text-coolGray-600">Vikt</div>
                <div role="menu" x-show="open" class="mt-2 mb-8 space-y-2 text-xs">

                    <x-range-slider filter="weight"></x-range-slider>

                    <div class="space-y-2">
                        <label class="block">
                            <input type="radio" name="weight" class="form-radio" @click="setRangSliderMax('weight', 32)" />
                            <span>Upp till 32 kg</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="weight" class="form-radio" @click="setRangSliderMinMax('weight', 32, 73)" />
                            <span>32 kg - 73 kg</span>
                        </label>
                        <label class="block">
                            <input type="radio" name="weight" class="form-radio" @click="setRangSliderMin('weight', 73)" />
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
                        <input type="radio" name="color" class="form-radio" />
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
                <a href="search" class="btn-round-black inline-block  text-white px-20">
                    Visa xxxxxxx resultat
                </a>
            </div>

        </nav>
    </aside>
</div>
