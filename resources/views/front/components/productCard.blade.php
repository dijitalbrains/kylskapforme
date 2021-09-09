<div class="relative">

    {{-- Favourite --}}
    <a href="javascript:void(0)" class="card-favourite">
        <x-svg-heart class="h-5 w-5 fill-current text-lime-350 hover:border-lime-350"></x-svg-heart>
    </a>

    {{-- Image --}}
    <img src="{{ $refrigerator->default_image }}" class="h-72 m-auto mb-4">

    {{-- Description --}}
    <div>
        <div class="text-base font-bold uppercase mb-1">{{ $refrigerator->name }}</div>
        <div class="font-bold uppercase">
            SW8 AM2Y XR 2
            <span class="capitalize">Fristående <span class="lowercase">kylskåp</span></span>
        </div>
        <div class="font-light my-4">
            Färg: {{ $refrigerator->color->name ?? '-' }}<br>
            Kylkapacitet: 346 liter<br>
            Höjd: {{ $refrigerator->height }}<br>
            Produktblad: ?
        </div>
    </div>

    {{-- Price --}}
    <div class="border-t-2 border-b-2 border-lime-350 py-2 text-center text-base">
        Från <span class="font-bold ml-3">7 395 kr</span>
    </div>

    {{-- Button --}}
    <div class="text-center">
        <a href="product" class="btn-round-black inline-block">
            LÄS MER
        </a>
    </div>
</div>
