<x-app-layout>
    {{-- Products Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-16">

        {{-- Product Card --}}
        @foreach ($refrigerators as $refrigerator)
        <x-product-card :refrigerator="$refrigerator"></x-product-card>
        @endforeach

    </div>

    {{-- Popular Products --}}
    <div class="section">
        <div class="section-header-lime">
            POPULÄRA KYLSKÅP
        </div>

        {{-- Product Card Slider (Swiper) --}}
        <div class="swiper product-swiper-with-arrows my-14">
            <div class="swiper-wrapper mb-14">
                @foreach ($refrigerators as $refrigerator)
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

    {{-- We Recommend --}}
    <div class="section">
        <div class="section-header-lime">
            VI REKOMMENDERAR
        </div>

        {{-- Product Card Slider (Swiper) --}}
        <div class="swiper product-swiper-with-arrows my-14">
            <div class="swiper-wrapper mb-14">
                @foreach ($refrigerators as $refrigerator)
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

    {{-- When To Buy --}}
    <div class="section">
        <div class="bg-black text-white text-2xl font-bold uppercase text-center py-2">
            BRA ATT VETA NÄR DU SKA KÖPA KYLSKÅP
        </div>

        {{-- Product Card Slider (Swiper) --}}
        <div class="swiper product-swiper-with-arrows my-14">
            <div class="swiper-wrapper mb-14">

                <div class="swiper-slide">
                    <p class="text-base font-bold">Vilken energiklass ska jag välja?</p>
                    <div>
                        <p>Kylen står för 10–20 procent av hemmets totala elförbrukning. Ännu större skäl att välja en
                            energieffektiv modell.</p>

                        <span class="font-bold">Vilken energiklass ska jag välja? Här är en översikt.</span>
                        <p>A+++ Den högsta effektivitetsklassen. Och det bästa valet om du vill minska dina
                            energikostnader
                            och ditt koldioxidavtryck.</p>

                        <p>A++ Vitvaror i klass A++ är inte längre de mest energieffektiva på marknaden. Investera i en
                            kyl
                            i klass A+++, det lönar sig i längden.</p>

                        <p>A+ Kylar med energieffektivitetsklass A+ kan förbruka upp till dubbelt så mycket el som en i
                            klass A+++.</p>

                        <p>Kategorin kylskåp, frysskåp och kyl/frysar kommer få en ny energideklaration 1 mars 2021. Då
                            försvinner alla "plus-tecken" efter bokstaven som beskriver energieffektivitetsklass och
                            skalan
                            görs om internationellt.</p>
                    </div>
                </div>

                <div class="swiper-slide pb-20">
                    <p class="text-base font-bold">Ett fristående kylskåp eller ett integrerat kylskåp?</p>

                    <p>Det första du måste bestämma dig för när du köper en ny kyl är om du ska ha en fristående modell
                        eller en inbyggnadskyl även kallad integrerad kyl. De har båda sina fördelar:</p>

                    <p>Fristående: Rätt val för större flexibilitet. Mer lättplacerad och ofta större inre volym.
                        Inbyggd: Idealiskt om du vill skapa en ren, sömlös look, integrerad med samma luckor som övriga
                        köket.</p>

                    <p>Oavsett vilken du väljer hittar du den rätta stilen och modellen för dina behov och preferenser
                        hos
                        Bosch. Vi har många sorters kylskåp att välja mellan.</p>
                </div>

                <div class="swiper-slide">
                    <p class="text-base font-bold">Vilken storlek passar i mitt kök?</p>

                    <p>Du måste veta vilket mått (höjd och bredd och djup) på kyl som passar i ditt kök innan du väljer
                        en
                        ny
                        kyl. Det gäller i synnerhet om kylen ska placeras i en nisch eller du ska byta ut ett gammalt
                        kylskåp. Planerar du ett
                        nytt kök? Då har du större frihet.</p>

                    <p>Tips från proffsen: Här kommer några allmänna riktlinjer när det gäller dimensioner:</p>

                    <p>En standardkyl är 60 cm bred.<br>
                        En XXL-modell är 70 cm eller bredare. Kompletterar du ett 70 cm kylskåp med ett köksskåp på 50
                        cm
                        kan du
                        ersätta ett gammalt kylskåp och frysskåp med en total bredd på 120 cm med en sådan lösning om du
                        exvis ska byta ut
                        enbart köksluckorna.<br>
                        Side by side-kyl/frysar kan vara mer än 90 cm breda.</p>
                </div>

            </div>
            <div class="product-swiper-pagination swiper-pagination bullet-gray"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</x-app-layout>
