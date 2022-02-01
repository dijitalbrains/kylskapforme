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
                    <a href="{{ $store->pivot->product_url }}" class="hover:text-lime-350" target="_blank">
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
            <span class="font-medium">Färg:</span> {{ $refrigerator->color_name }}<br>
            <span class="font-medium">Kylkapacitet:</span> {{ $refrigerator->displayed_volume }}<br>
            <span class="font-medium">Höjd:</span> {{ $refrigerator->height }}<br>
            <span class="font-medium">Bredd:</span> {{ $refrigerator->width }}
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

        <div>
            <div class="font-bold uppercase">PRODUKTEGENSKAPER</div>
            <p class="font-light">
                <span class="font-medium">Produktgrupp:</span> Kylskåp<br>
                <span class="font-medium">Produktnamn:</span> SW8 AM2Y XR 2<br>
                <span class="font-medium">EAN-kod:</span> 8003437614132<br>
                <span class="font-medium">Konstruktion:</span> freestanding<br>
                <span class="font-medium">Installationstyp:</span> Fristående<br>
                <span class="font-medium">Typ av reglage:</span> Elektronisk<br>
                <span class="font-medium">Typ av kontrollinställning och signalenheter:</span> External alarm<br>
                <span class="font-medium">Färg:</span> Rostfri<br>
                <span class="font-medium">Anslutningseffekt:</span> 100<br>
                <span class="font-medium">Ström:</span> 0,7<br>
                <span class="font-medium">Spänning:</span> 220-240<br>
                <span class="font-medium">Frekvens:</span> 50<br>
                <span class="font-medium">Nätkabelns längd:</span> 245<br>
                <span class="font-medium">Elkontakt:</span> Schuko<br>
                <span class="font-medium">Nettovolym, totalt:</span> 364<br>
                <span class="font-medium">Stjärnmärkning:</span> N/A<br>
                <span class="font-medium">Ange antalet fristående kylsystem:</span> 1<br>
                <span class="font-medium">Höjd:</span> 1875<br>
                <span class="font-medium">Bredd:</span> 595<br>
                <span class="font-medium">Djup:</span> 630<br>
                <span class="font-medium">Djup med dörren öppeni 90°:</span> -<br>
                <span class="font-medium">Max höjdjustering:</span> 0<br>
                <span class="font-medium">Nettovikt:</span> 62<br>
                <span class="font-medium">Gångjärn:</span> Höger omhängbar
            </p>
        </div>

        <div>
            <div class="font-bold uppercase">TEKNISKA DATA</div>
            <p class="font-light">
                <span class="font-medium">Reglerbar temperatur:</span> Ja<br>
                <span class="font-medium">Varningssignal / driftfel Ljus + ljud:</span> -<br>
                <span class="font-medium">Avfrostning kyl:</span> Automatisk<br>
                <span class="font-medium">Snabbkylning:</span> Ja<br>
                <span class="font-medium">Fläkt i kylen:</span> Ja<br>
                <span class="font-medium">Finns flaskhylla/-or?:</span> Saknas<br>
                <span class="font-medium">Är dörren låsbar?:</span> -<br>
                <span class="font-medium">Antal hyllor:</span> 6<br>
                <span class="font-medium">Antal flyttbara hyllor:</span> 4<br>
                <span class="font-medium">Material, hyllor:</span> Glas<br>
                <span class="font-medium">Kyltermometer:</span> Analog
            </p>
            <div class="font-bold uppercase">ENERGI & PRESTANDA</div>
            <p class="font-light">
                <span class="font-medium">Temperaturstegringstid:</span> 0<br>
                <span class="font-medium">Klimatklass:</span> SN-T<br>
                <span class="font-medium">Buller:</span> 38<br>
                <span class="font-medium">Automatisk avfrostning:</span> Saknas<br>
                <span class="font-medium">Max omgivande temperatur:</span> 0<br>
                <span class="font-medium">Min omgivande temperatur:</span> 0
            </p>
        </div>

        <div>
            <div class="font-bold uppercase">Specifikationer</div>
            <p class="font-light">
                <span class="font-bold">Förbrukning</span><br>
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
