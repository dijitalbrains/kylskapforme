<div class="relative">

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
