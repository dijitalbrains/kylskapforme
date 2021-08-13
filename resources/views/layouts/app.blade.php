<!DOCTYPE html>
<html lang="{{ \App::getLocale() }}">

<head>
    <base href="{{ url('/') }}/" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/css/app.css" rel="stylesheet">
    <title>Kylskap For Me @yield('title')</title>

</head>

<body>

    {{-- Container --}}
    <div class="container mx-auto">

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
        <div class="grid grid-cols-5 gap-x-3 gap-y-6 items-center uppercase font-bold">

            <div>
                <button class="bg-black rounded-full text-white pl-6 pr-5 py-2 uppercase font-medium hover:shadow-lg">
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

    {{-- Products Grid --}}
    <div class="grid grid-cols-3 gap-x-12 gap-y-16 mt-14">

        {{-- Product Card --}}
        @for ($i = 0; $i < 9; $i++) <div class="relative">

            {{-- Favourite --}}
            <a href="javascript:void(0)" class="card-favourite">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current text-lime-350 hover:border-lime-350"
                    viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                        clip-rule="evenodd" />
                </svg>
            </a>

            {{-- Image --}}
            <img src="{{asset('/images/refrigerator-default.png')}}" class="h-72 m-auto mb-4">

            {{-- Description --}}
            <div>
                <div class="text-base font-bold uppercase mb-1">Whirlpool</div>
                <div class="font-bold uppercase">
                    SW8 AM2Y XR 2
                    <span class="lowercase">Fristående kylskåp</span>
                </div>
                <div class="font-light my-4">
                    Färg: Rostfritt<br>
                    Kylkapacitet: 346 liter<br>
                    Höjd: 1860 cm<br>
                    Produktblad: ?
                </div>
            </div>

            {{-- Price --}}
            <div class="border-t-2 border-b-2 border-lime-350 py-2 text-center text-base">
                Från <span class="font-bold ml-3">7 395 kr</span>
            </div>

            {{-- Button --}}
            <div class="text-center">
                <button class="btn-round-black">
                    LÄS MER
                </button>
            </div>
    </div>

    @endfor

    </div>

    {{-- Popular Products --}}
    <div class="section">
        <div class="section-header-lime">
            POPULÄRA KYLSKÅP
        </div>
        {{-- Products Grid --}}
        <div class="grid grid-cols-3 gap-x-12 gap-y-16 mt-14">

            {{-- Product Card --}}
            @for ($i = 0; $i < 3; $i++) <div class="relative">

                {{-- Favourite --}}
                <a href="javascript:void(0)" class="card-favourite">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 fill-current text-lime-350 hover:border-lime-350" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                            clip-rule="evenodd" />
                    </svg>
                </a>

                {{-- Image --}}
                <img src="{{asset('/images/refrigerator-default.png')}}" class="h-72 m-auto mb-4">

                {{-- Description --}}
                <div>
                    <div class="text-base font-bold uppercase mb-1">Whirlpool</div>
                    <div class="font-bold uppercase">
                        SW8 AM2Y XR 2
                        <span class="lowercase">Fristående kylskåp</span>
                    </div>
                    <div class="font-light my-4">
                        Färg: Rostfritt<br>
                        Kylkapacitet: 346 liter<br>
                        Höjd: 1860 cm<br>
                        Produktblad: ?
                    </div>
                </div>

                {{-- Price --}}
                <div class="border-t-2 border-b-2 border-lime-350 py-2 text-center text-base">
                    Från <span class="font-bold ml-3">7 395 kr</span>
                </div>

                {{-- Button --}}
                <div class="text-center">
                    <button class="btn-round-black">
                        LÄS MER
                    </button>
                </div>
        </div>
        @endfor
    </div>

    <div class="flex justify-center mt-14">
        <a href="javascript:void(0)" class="rounded-full p-2 mx-2 hover:border-0 bg-lime-350"></a>
        <a href="javascript:void(0)" class="rounded-full p-2 mx-2 hover:border-0 bg-lime-100"></a>
        <a href="javascript:void(0)" class="rounded-full p-2 mx-2 hover:border-0 bg-lime-100"></a>
        <a href="javascript:void(0)" class="rounded-full p-2 mx-2 hover:border-0 bg-lime-100"></a>
    </div>

    </div>

    {{-- We Recommend --}}
    <div class="section">
        <div class="section-header-lime">
            VI REKOMMENDERAR
        </div>
        {{-- Products Grid --}}
        <div class="grid grid-cols-3 gap-x-12 gap-y-16 mt-14">

            {{-- Product Card --}}
            @for ($i = 0; $i < 3; $i++) <div class="relative">

                {{-- Favourite --}}
                <a href="javascript:void(0)" class="card-favourite">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 fill-current text-lime-350 hover:border-lime-350" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                            clip-rule="evenodd" />
                    </svg>
                </a>

                {{-- Image --}}
                <img src="{{asset('/images/refrigerator-default.png')}}" class="h-72 m-auto mb-4">

                {{-- Description --}}
                <div>
                    <div class="text-base font-bold uppercase mb-1">Whirlpool</div>
                    <div class="font-bold uppercase">
                        SW8 AM2Y XR 2
                        <span class="lowercase">Fristående kylskåp</span>
                    </div>
                    <div class="font-light my-4">
                        Färg: Rostfritt<br>
                        Kylkapacitet: 346 liter<br>
                        Höjd: 1860 cm<br>
                        Produktblad: ?
                    </div>
                </div>

                {{-- Price --}}
                <div class="border-t-2 border-b-2 border-lime-350 py-2 text-center text-base">
                    Från <span class="font-bold ml-3">7 395 kr</span>
                </div>

                {{-- Button --}}
                <div class="text-center">
                    <button class="btn-round-black">
                        LÄS MER
                    </button>
                </div>
        </div>
        @endfor
    </div>

    <div class="flex justify-center mt-14">
        <a href="javascript:void(0)" class="rounded-full p-2 mx-2 hover:border-0 bg-lime-350"></a>
        <a href="javascript:void(0)" class="rounded-full p-2 mx-2 hover:border-0 bg-lime-100"></a>
        <a href="javascript:void(0)" class="rounded-full p-2 mx-2 hover:border-0 bg-lime-100"></a>
        <a href="javascript:void(0)" class="rounded-full p-2 mx-2 hover:border-0 bg-lime-100"></a>
    </div>

    </div>

    {{-- When To Buy --}}
    <div class="section">
        <div class="bg-black text-white text-2xl font-bold uppercase text-center py-2">
            BRA ATT VETA NÄR DU SKA KÖPA KYLSKÅP
        </div>

        <div class="grid grid-cols-3 pt-14">
            <div class="pr-10">
                <p class="text-base font-bold">Vilken energiklass ska jag välja?</p>
                <div>
                    <p>Kylen står för 10–20 procent av hemmets totala elförbrukning. Ännu större skäl att välja en
                        energieffektiv modell.</p>

                    <span class="font-bold">Vilken energiklass ska jag välja? Här är en översikt.</span>
                    <p>A+++ Den högsta effektivitetsklassen. Och det bästa valet om du vill minska dina energikostnader
                        och ditt koldioxidavtryck.</p>

                    <p>A++ Vitvaror i klass A++ är inte längre de mest energieffektiva på marknaden. Investera i en kyl
                        i klass A+++, det lönar sig i längden.</p>

                    <p>A+ Kylar med energieffektivitetsklass A+ kan förbruka upp till dubbelt så mycket el som en i
                        klass A+++.</p>

                    <p>Kategorin kylskåp, frysskåp och kyl/frysar kommer få en ny energideklaration 1 mars 2021. Då
                        försvinner alla "plus-tecken" efter bokstaven som beskriver energieffektivitetsklass och skalan
                        görs om internationellt.</p>
                </div>
            </div>

            <div class="border-l border-r px-10 pb-20">
                <p class="text-base font-bold">Ett fristående kylskåp eller ett integrerat kylskåp?</p>

                <p>Det första du måste bestämma dig för när du köper en ny kyl är om du ska ha en fristående modell
                    eller en inbyggnadskyl även kallad integrerad kyl. De har båda sina fördelar:</p>

                <p>Fristående: Rätt val för större flexibilitet. Mer lättplacerad och ofta större inre volym.
                    Inbyggd: Idealiskt om du vill skapa en ren, sömlös look, integrerad med samma luckor som övriga
                    köket.</p>

                <p>Oavsett vilken du väljer hittar du den rätta stilen och modellen för dina behov och preferenser hos
                    Bosch. Vi har många sorters kylskåp att välja mellan.</p>
            </div>

            <div class="pl-10">
                <p class="text-base font-bold">Vilken storlek passar i mitt kök?</p>

                <p>Du måste veta vilket mått (höjd och bredd och djup) på kyl som passar i ditt kök innan du väljer en
                    ny
                    kyl. Det gäller i synnerhet om kylen ska placeras i en nisch eller du ska byta ut ett gammalt
                    kylskåp. Planerar du ett
                    nytt kök? Då har du större frihet.</p>

                <p>Tips från proffsen: Här kommer några allmänna riktlinjer när det gäller dimensioner:</p>

                <p>En standardkyl är 60 cm bred.<br>
                    En XXL-modell är 70 cm eller bredare. Kompletterar du ett 70 cm kylskåp med ett köksskåp på 50 cm
                    kan du
                    ersätta ett gammalt kylskåp och frysskåp med en total bredd på 120 cm med en sådan lösning om du
                    exvis ska byta ut
                    enbart köksluckorna.<br>
                    Side by side-kyl/frysar kan vara mer än 90 cm breda.</p>
            </div>
        </div>

        <div class="flex justify-center mt-14">
            <a href="javascript:void(0)" class="rounded-full p-2 mx-2 hover:border-0 bg-coolGray-350"></a>
            <a href="javascript:void(0)" class="rounded-full p-2 mx-2 hover:border-0 bg-coolGray-200"></a>
            <a href="javascript:void(0)" class="rounded-full p-2 mx-2 hover:border-0 bg-coolGray-200"></a>
            <a href="javascript:void(0)" class="rounded-full p-2 mx-2 hover:border-0 bg-coolGray-200"></a>
        </div>
    </div>

    {{-- Footer --}}
    <div class="bg-footer bg-black px-12 py-16 bg-contain bg-no-repeat bg-left-top">
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

    </div>
</body>

</html>
