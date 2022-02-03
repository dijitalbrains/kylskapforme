<div class="relative" x-data="Product()">

    {{-- Favourite --}}
    @auth
        <a href="javascript:void(0)" class="card-favourite" @click="toggleFavorite({{ $refrigerator->id }}, $el)">
            <x-svg-heart-outline class="heart-outline {{ $refrigerator->isFavorite ? 'favourite' : '' }}">
            </x-svg-heart-outline>
        </a>
    @endauth
    {{-- Image --}}
    <a href="product/{{ $refrigerator->id }}">
        <img src="{{ $refrigerator->default_image }}" class="h-72 m-auto mb-4">
    </a>

    {{-- Description --}}
    <div>
        <div class="text-base font-bold uppercase mb-1">{{ $refrigerator->name }}</div>
        <div class="font-bold uppercase">
            SW8 AM2Y XR 2
            <span class="capitalize">Fristående <span class="lowercase">kylskåp</span></span>
        </div>
        <div class="font-light my-4">
            Färg: {{ $refrigerator->color_name }}<br>
            Kylkapacitet: {{ $refrigerator->displayed_volume }}<br>
            Höjd: {{ $refrigerator->height }}<br>
            Produktblad: ?
        </div>
    </div>

    {{-- Price --}}
    <div class="border-t-2 border-b-2 border-lime-350 py-2 text-center text-base">
        Från <span class="font-bold ml-3">{{ $refrigerator->min_price }} kr</span>
    </div>

    {{-- Button --}}
    <div class="text-center">
        <a href="product/{{ $refrigerator->id }}" class="btn-round-black inline-block">
            LÄS MER
        </a>
    </div>
</div>
