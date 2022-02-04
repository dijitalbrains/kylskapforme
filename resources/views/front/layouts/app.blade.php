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

<body x-data="sideBar()" :class="{'overflow-y-hidden' : isSidebarOpen }">

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

        function sideBar() {
            return {
                isSidebarOpen: false,
                filters: {
                    price: {
                        min: 0,
                        max: 100000,
                        rangeMin: 0,
                        rangeMax: 100000
                    },
                    height: {
                        min: 0,
                        max: 200,
                        rangeMin: 0,
                        rangeMax: 200,
                        preset: null
                    },
                    width: {
                        min: 10,
                        max: 110,
                        rangeMin: 10,
                        rangeMax: 110,
                        preset: null
                    },
                    depth: {
                        min: 0,
                        max: 70,
                        rangeMin: 0,
                        rangeMax: 70,
                        preset: null
                    },
                    weight: {
                        min: 0,
                        max: 200,
                        rangeMin: 0,
                        rangeMax: 200,
                        preset: null
                    },
                    type: null,
                    rea: null,
                    style: null,
                    color: null,
                    household_size: null
                },

                setRangSliderMin(slider, min){
                    this.resetRangeSlider(slider);
                    this.filters[slider].min = min;
                },

                setRangSliderMax(slider, max){
                    this.resetRangeSlider(slider);
                    this.filters[slider].max = max;
                },
                setRangSliderMinMax(slider, min, max){
                    this.resetRangeSlider(slider);
                    this.filters[slider].min = min;
                    this.filters[slider].max = max;
                },

                clearAll(){
                    this.filters.type = null;
                    this.filters.rea = null;
                    this.filters.style = null;
                    this.filters.color = null;
                    this.filters.household_size = null;
                    this.resetRangeSlider('price');
                    this.resetRangeSlider('height');
                    this.resetRangeSlider('width');
                    this.resetRangeSlider('depth');
                    this.resetRangeSlider('weight');
                },

                resetRangeSlider(slider){
                    this.filters[slider].min = this.filters[slider].rangeMin;
                    this.filters[slider].max = this.filters[slider].rangeMax;
                    this.filters[slider].preset = null;
                }
            };
        }

        function rangeSlider() {
            return {
                range: null,
                dragLeft: false,
                dragRight: false,
                dragLeftPercent: 0,
                dragRightPercent: 0,

                initSlider(filter) {
                    this.range = filter.rangeMax - filter.rangeMin;
                },

                handleThumbMouseMove: function(e, filter) {
                    if (!this.dragLeft && !this.dragRight) return;
                    
                    const thumbEl = this.dragLeft ? this.$refs.minThumb : this.$refs.maxThumb;
                    const sliderRect = this.$refs.sliderEl.getBoundingClientRect();

                    let r = ((e.type == 'touchmove' ? e.touches[0].clientX : e.clientX) - sliderRect.left) / sliderRect.width;
                    r = Math.max(0, Math.min(r, 1));
                    const value = Math.floor(r * this.range + filter.rangeMin);

                    if (this.dragLeft) {
                        filter.min = value;
                        filter.max = Math.max(filter.min, filter.max);
                    } else {
                        filter.max = value;
                        filter.min = Math.min(filter.min, filter.max);
                    }

                    if( 'preset' in filter)
                        filter.preset = null;
                }
            };
        }

        function Product() {
            return {
                toggleFavorite(refrigerator_id, element) {
                    axios.post(element.children[0].classList.toggle("favourite") ? 'api/add-favorite' :
                        'api/remove-favorite', {
                            refrigerator_id
                        }).then(() => {
                        if (window.location.pathname == '/favourite') {
                            if (element.parentElement.parentElement.childElementCount == 1) {
                                element.parentElement.parentElement.parentElement.insertAdjacentHTML('afterend',
                                    '<p class="text-center">No Record Found</p>');
                            }
                            element.parentElement.remove();
                        }
                    }).catch(function(error) {
                        if (error.response.status == 401) {
                            element.children[0].classList.toggle("favourite")
                            window.location = '/login';
                        }
                    });
                }
            }
        }
    </script>
</body>

</html>
