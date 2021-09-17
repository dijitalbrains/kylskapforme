<x-app-layout>
    {{-- Products Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-12 gap-y-16">
        <p>this is favourite page</p>
    </div>

    <nav class="my-20">
        <ul class="flex justify-center">
            <li>
                <a href="javascript:void(0)" class="pagination-link">
                    <x-svg-chevron direction="left" class="w-4 h-4"></x-svg-chevron>
                </a>
            </li>

            <li><a href="javascript:void(0)" class="pagination-link">1</a></li>
            <li><a href="javascript:void(0)" class="pagination-link">2</a></li>
            <li><a href="javascript:void(0)" class="pagination-link">3</a></li>
            <li><a href="javascript:void(0)" class="pagination-link pagination-link-active">4</a></li>
            <li><a href="javascript:void(0)" class="pagination-link">5</a></li>

            <li><a href="javascript:void(0)" class="pagination-link">
                    <x-svg-chevron direction="right" class="w-4 h-4"></x-svg-chevron>
                </a>
            </li>
        </ul>
    </nav>
</x-app-layout>
