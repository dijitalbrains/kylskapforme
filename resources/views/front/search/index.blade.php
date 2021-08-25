<x-app-layout>
    {{-- Products Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-16">

        {{-- Product Card --}}
        @for ($i = 0; $i < 9; $i++) <x-product-card>
            </x-product-card>
            @endfor

    </div>

    <nav class="my-10">
        <ul class="flex justify-center">
            <li><a href="javascript:void(0)"
                    class="text-xs font-medium flex w-8 h-8 mx-1 rounded-full items-center justify-center leading-tight bg-black text-lime-350 hover:text-white">
                    <x-svg-chevron direction="left" class="w-4 h-4"></x-svg-chevron>
                </a>
            </li>
            <li><a href="javascript:void(0)"
                    class="text-xs font-medium flex w-8 h-8 mx-1 rounded-full items-center justify-center leading-tight bg-black text-lime-350 hover:text-white">1</a>
            </li>
            <li><a href="javascript:void(0)"
                    class="text-xs font-medium flex w-8 h-8 mx-1 rounded-full items-center justify-center leading-tight bg-black text-lime-350 hover:text-white">2</a>
            </li>
            <li><a href="javascript:void(0)"
                    class="text-xs font-medium flex w-8 h-8 mx-1 rounded-full items-center justify-center leading-tight bg-black text-lime-350 hover:text-white">3</a>
            </li>
            <li><a href="javascript:void(0)"
                    class="text-xs font-medium flex w-8 h-8 mx-1 rounded-full items-center justify-center leading-tight bg-black text-white">4</a>
            </li>
            <li><a href="javascript:void(0)"
                    class="text-xs font-medium flex w-8 h-8 mx-1 rounded-full items-center justify-center leading-tight bg-black text-lime-350 hover:text-white">5</a>
            </li>
            <li><a href="javascript:void(0)"
                    class="text-xs font-medium flex w-8 h-8 mx-1 rounded-full items-center justify-center leading-tight bg-black text-lime-350 hover:text-white">
                    <x-svg-chevron direction="right" class="w-4 h-4"></x-svg-chevron>
                </a>
            </li>
        </ul>
    </nav>
</x-app-layout>
