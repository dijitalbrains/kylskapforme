<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-3 gap-y-3 sm:gap-y-4 xl:gap-y-6 items-center uppercase font-bold mb-14">

    <div>
        <button
            class="bg-black rounded-full text-white pl-6 pr-5 py-1.5 xl:py-2 uppercase font-medium hover:shadow-lg"
            @click="isSidebarOpen = true">
            <span class="relative top-px">Alla filter</span>
            <x-svg-chevron direction="down" class="h-6 w-6 inline-block ml-3 text-lime-350"></x-svg-chevron>
        </button>
    </div>

    <div>
        <a href="{{url('search')}}" class="border-lime-350 filter-preset-link">
            <span class="truncate">Fristående kylskåP</span>
            <span class="filter-preset-count">250 st</span>
        </a>
    </div>

    @for ($i = 1; $i <= 8; $i++)
        <div>
            <a href="{{url('search')}}" class="border-white inline-flex filter-preset-link filter-preset-max-w">
                <span class="truncate flex-1">Kombinerad kyl och frysa</span>
                <span class="filter-preset-count">250 st</span>
            </a>
        </div>
    @endfor
</div>
