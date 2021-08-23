<x-app-layout>
    <nav class="my-5">
        <ul class="flex text-coolGray-350">
            <li class="cursor-pointer">Startsida</li>
            <li><span class="mx-2">/</span></li>
            <li class="cursor-pointer">Fristående kylskåp</li>
        </ul>
    </nav>

    <h1>FRISTÅENDE KYLSKÅP</h1>

    <p>Ett fristående kylskåp kräver egentligen bara ett eluttag, och eventuellt en slang för vattentillförsel, och du kan placera det ungefär var som<br>
        helst. De är därför oftast billigare än inbyggda modeller, dock lite mindre stilrena till utseendet.</p>

    <div class="uppercase font-bold">Fördelar med fristående Kylskåp</div>
    <p>Enkla och snabba att installera<br>
        De kan placeras nästan var som helst<br>
        De är billigare än motsvarande integrerbara modeller</p>

    <div class="uppercase font-bold">Nackdelar med fristående kylskåp</div>
    <p>Designen är mindre stilren vilket påverkar helhetsintrycket av ditt kök.<br>
        De kan vara svåra att passa in i ett mindre kök<br>
        Integrerbara eller inbyggda kylskåp - snygg och mångsidig lösning</p>

    <p>Att få inbyggda kyl- och frysskåp på plats i köket kräver både lite mer tid och en något större arbetsinsats. Du har dock mer spelrum för din<br>
        personliga smak, ditt kök kan se ut precis som du själv väljer. Du är inte heller låst vid en enhetlig lösning, eftersom du kan dela upp vitvarorna.<br>
        Det innebär att du exempelvis kan välja att ha en liten kyl eller en liten frys installerad under en köksbänk, eller någon annan lösning som<br>
        lämpar sig för just dina behov.</p>

    <div class="uppercase font-bold">Fördelar med inbyggt kylskåp</div>
    <p>Du kan ge ditt kök en mer personlig prägel<br>
        Du får ett stilrent kök med rena linjer<br>
        Större flexibilitet än med fristående kombolösningar</p>

    <div class="uppercase font-bold">Nackdelar med ett inbyggt kylskåp</div>
    <p>Det är oftast dyrare än en fristående modell med samma specifikationer<br>
        Krångligare installation<br>
        Viktigt att vara mycket uppmärksam på måtten<br>
        Om du behöver byta ut kylskåpet i framtiden, det är till exempel inte säkert att din köksleverantör har samma luckor i sitt sortiment</p>

    {{-- Example Of Independent Refrigerators --}}
    <div class="section">
        <div class="section-header-lime">
            EXEMPEL PÅ FRISTÅENDE KYLSKÅP
        </div>
        {{-- Products Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-16 mt-14">

            {{-- Product Card --}}
            @for ($i = 0; $i < 3; $i++) <x-product-card>
                </x-product-card>
                @endfor
        </div>

        <div class="flex justify-center mt-14">
            <div class="rounded-full p-2 mx-2 hover:border-0 bg-lime-350 cursor-pointer"></div>
            <div class="rounded-full p-2 mx-2 hover:border-0 bg-lime-100 cursor-pointer"></div>
            <div class="rounded-full p-2 mx-2 hover:border-0 bg-lime-100 cursor-pointer"></div>
            <div class="rounded-full p-2 mx-2 hover:border-0 bg-lime-100 cursor-pointer"></div>
        </div>
    </div>
</x-app-layout>
