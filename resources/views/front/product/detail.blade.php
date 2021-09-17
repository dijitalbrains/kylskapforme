<x-app-layout>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="col-span-2">
            <div class="p-5">
                {{-- Image Slider (Swiper) --}}
                <div class="swiper image-swiper">
                    <div class="swiper-wrapper">
                        @foreach ($refrigerator->images as $image)
                        <div class="swiper-slide">
                            <img src="{{ $image->path }}" class="m-auto">
                        </div>
                        @endforeach
                    </div>
                    <div class="image-swiper-pagination swiper-pagination bullet-lime"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>

            <div class="flex justify-end space-x-2 my-4">
                <a href="javascript:void(0)">
                    <x-svg-heart-outline class="heart-outline"> </x-svg-heart-outline>
                </a>
                <a href="javascript:void(0)">
                    <x-svg-share class="heart-outline"> </x-svg-share>
                </a>
            </div>

        </div>
        <div class="text-base font-bold uppercase">
            <div class="border-t-2 border-b-2 border-lime-350 py-1 text-lg">
                <span class="ml-4">KÖP HOS:</span>
            </div>
            <div class="grid grid-cols-2 gap-4 gap-y-2 ml-7 mt-7">
                @foreach ($refrigerator->stores as $i => $store)

                <div class="{{ $i == 0 ? 'text-lime-350' : '' }}">
                    @if ($i == 0)
                    <x-svg-chevron direction="right" class="w-4 inline absolute -ml-5 mt-0.5"></x-svg-chevron>
                    @endif
                    <a href="{{ $store->pivot->product_url }}" class="hover:text-lime-350">
                        {{ $store->name }}
                    </a>
                </div>
                <div class="{{ $i == 0 ? 'text-lime-350' : '' }}">{{ $store->pivot->price }} kr</div>
                @endforeach
            </div>
        </div>
    </div>


    <div class="mt-10">
        <h1 class="mt-4 mb-2 leading-5">{{ $refrigerator->name }}</h1>
        <div class="font-bold uppercase">
            SW8 AM2Y XR 2
            <span class="capitalize">Fristående <span class="lowercase">kylskåp</span></span>
        </div>
    </div>

    <div class="border-t-2 border-b-2 border-lime-350 py-2 my-5">
        <div class="ml-1 font-light">
            Färg: {{ $refrigerator->color_name }}<br>
            Kylkapacitet: {{ $refrigerator->displayed_volume }}<br>
            Höjd: {{ $refrigerator->height }}<br>
            Bredd: {{ $refrigerator->width }}
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

        <div>
            <div class="font-bold">PRODUKTEGENSKAPER</div>
            <p class="font-light">
                Produktgrupp: Kylskåp<br>
                Produktnamn: SW8 AM2Y XR 2<br>
                EAN-kod: 8003437614132<br>
                Konstruktion: freestanding<br>
                Installationstyp: Fristående<br>
                Typ av reglage: Elektronisk<br>
                Typ av kontrollinställning och signalenheter: External alarm<br>
                Färg: Rostfri<br>
                Anslutningseffekt: 100<br>
                Ström: 0,7<br>
                Spänning: 220-240<br>
                Frekvens: 50<br>
                Nätkabelns längd: 245<br>
                Elkontakt: Schuko<br>
                Nettovolym, totalt: 364<br>
                Stjärnmärkning: N/A<br>
                Ange antalet fristående kylsystem: 1<br>
                Höjd: 1875<br>
                Bredd: 595<br>
                Djup: 630<br>
                Djup med dörren öppeni 90° -<br>
                Max höjdjustering: 0<br>
                Nettovikt: 62<br>
                Gångjärn: Höger omhängbar
            </p>
        </div>

        <div>
            <div class="font-bold">TEKNISKA DATA</div>
            <p class="font-light">
                Reglerbar temperatur: Ja<br>
                Varningssignal / driftfel Ljus + ljud<br>
                Avfrostning kyl: Automatisk<br>
                Snabbkylning: Ja<br>
                Fläkt i kylen: Ja<br>
                Finns flaskhylla/-or? Saknas<br>
                Är dörren låsbar? -<br>
                Antal hyllor: 6<br>
                Antal flyttbara hyllor: 4<br>
                Material, hyllor: Glas<br>
                Kyltermometer: Analog
            </p>
            <div class="font-bold">ENERGI & PRESTANDA</div>
            <p class="font-light">
                Temperaturstegringstid: 0<br>
                Klimatklass: SN-T<br>
                Buller: 38<br>
                Automatisk avfrostning: Saknas<br>
                Max omgivande temperatur: 0<br>
                Min omgivande temperatur: 0
            </p>
        </div>

        <div>
            <div class="font-bold">Specifikationer</div>
            <p class="font-light">
                Förbrukning<br>
                Energiklass<br>
                E<br>
                Energiklass<br>
                A++<br>
                Årlig energiförbrukning<br>
                114 kWh/år<br>
                Fungerar i temperatur (°C)<br>
                10-43°C (SN-T)
            </p>

            <div class="font-bold">Allmänna egenskaper</div>
            <div class="mb-4 font-light grid grid-cols-2">

                <div>Färg/Material</div>
                <div>Rostfritt stål</div>

                <div>Kylkapacitet</div>
                <div>364 liter</div>

                <div>Ljudnivåklass</div>
                <div>c</div>

                <div>Ljudnivå</div>
                <div>38 dB(A)</div>

                <div>Ventilerad kyl</div>
                <div>kyl Ja</div>

                <div>LED belysning</div>
                <div>Ja</div>

                <div>Vattendispenser</div>
                <div>Nej</div>

                <div>Omhängbar dörr</div>
                <div>Ja</div>

                <div>Höger- eller vänsterhängd dörr</div>
                <div>Högerhängd</div>
            </div>

            <div class="font-bold">Levereras med utrustning/tillbehör</div>
            <div class="mb-4 font-light grid grid-cols-2">
                <div>Elanslutning Jordad</div>
                <div>Jordad stickkontakt - normalstik</div>

                <div>Sladd ingår</div>
                <div>Ja</div>
            </div>

            <div class="font-bold">Mått och vikt</div>
            <div class="mb-4 font-light grid grid-cols-2">
                <div>Höjd</div>
                <div>1875 mm</div>

                <div>Bredd</div>
                <div>595 mm</div>

                <div>Djup</div>
                <div>630 mm</div>
            </div>
        </div>
    </div>

    {{-- SIMILAR REFRIGERATORS --}}
    <div class="section">
        <div class="section-header-lime">
            LIKNANDE KYLSKÅP
        </div>

        {{-- Product Card Slider (Swiper) --}}
        <div class="swiper product-swiper-with-arrows my-14">
            <div class="swiper-wrapper mb-14">
                @foreach ($similar_refrigerators as $refrigerator)
                <div class="swiper-slide">
                    <x-product-card :refrigerator="$refrigerator"></x-product-card>
                </div>
                @endforeach
            </div>
            <div class="product-swiper-pagination swiper-pagination bullet-lime"></div>
            <div class="swiper-button-prev custom-button-prev"></div>
            <div class="swiper-button-next custom-button-next"></div>
        </div>

    </div>

</x-app-layout>
