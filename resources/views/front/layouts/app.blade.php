<!DOCTYPE html>
<html lang="{{ \App::getLocale() }}">

<head>
    <base href="{{ url('/') }}/" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="/css/app.css" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <title>Kylskap For Me @yield('title')</title>
</head>

<body x-data="{ isSidebarOpen: false }" :class="{'overflow-y-hidden' : isSidebarOpen }">

    {{-- Container --}}
    <div class="container mx-auto px-4">

        {{-- Header --}}
        @include('front.layouts.partials.header')

        {{-- All Filter --}}
        @include('front.layouts.partials.presetFilters')

        {{-- Breadcrumb --}}
        @if ( Request::path() !== '/')
            <x-breadcrumb class="my-10"></x-breadcrumb>
        @endif

        {{$slot}}

        {{-- Sidebar --}}
        @include('front.layouts.partials.sidebar')

    </div>

    {{-- Footer --}}
    @include('front.layouts.partials.footer')

    <script>
        function rangeSlider(rangeMin, rangeMax, min, max) {
            return {
                range: rangeMax - rangeMin,
                rangeMin,
                rangeMax,
                min,
                max,
                dragLeft: false,
                dragRight: false,

                handleThumbMouseMove: function(e) {
                    if (!this.dragLeft && !this.dragRight) return;

                    const thumbEl = this.dragLeft ? this.$refs.minThumb : this.$refs.maxThumb;

                    const sliderRect = this.$refs.sliderEl.getBoundingClientRect();

                    let r = ((e.type == 'touchmove' ? e.touches[0].clientX : e.clientX) - sliderRect.left) / sliderRect.width;
                    r = Math.max(0, Math.min(r, 1));
                    const value = Math.floor(r * this.range + this.rangeMin);

                    if (this.dragLeft) {
                        this.min = value;
                        this.max = Math.max(this.min, this.max);
                    } else {
                        this.max = value;
                        this.min = Math.min(this.min, this.max);
                    }
                }
            };
        }
    </script>
</body>

</html>
