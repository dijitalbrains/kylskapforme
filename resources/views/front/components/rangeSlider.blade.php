@props(['filter'])

@php
    /** This Range Slider blade component is using dynamic min, max, rangMin, rangMax values from Alpine component `sideBar`.
    *   These values are defined under main key `filters` which we need to prefix for all range slider instances
    **/

    $min = "filters.{$filter}.min";
    $max = "filters.{$filter}.max";
    $rangeMin = "filters.{$filter}.rangeMin";
    $rangeMax = "filters.{$filter}.rangeMax";
@endphp


<div {{ $attributes->merge(['class' => 'flex flex-col items-center']) }}
    x-data="rangeSlider()" x-init="initSlider({{'filters.'.$filter}})">
    <input class="absolute opacity-0 pointer-events-none" type="range" name="{{$filter}}_min" min="{{$min}}" max="{{$max}}"
        x-model="{{$min}}" class="px-3 py-2 rounded" step="100">
    <input class="absolute opacity-0 pointer-events-none" type="range" name="{{$filter}}_max" min="{{$min}}" max="{{$max}}"
        x-model="{{$max}}" step="100">

    <div class="flex items-center relative bg-white w-full h-1.5 mt-4" x-ref="sliderEl"
        @touchend.window="dragLeft = dragRight = false" @touchmove.window="handleThumbMouseMove($event, {{'filters.'.$filter}})"
        @mouseup.window="dragLeft = dragRight = false" @mousemove.window="handleThumbMouseMove($event, {{'filters.'.$filter}})"
        style="user-select: none">
        <div class="absolute h-1.5 bg-black"
            :style="`left: ${({{$min}} - {{$rangeMin}}) * 100 / range}%; right: ${100 - ({{$max}} - {{$rangeMin}}) * 100 / range}%`">
        </div>

        <div class="w-6 h-6 -ml-0.5 rounded-full bg-lime-350 absolute cursor-pointer" @touchstart="dragLeft = true"
            @mousedown="dragLeft = true" :style="`left: ${({{$min}} - {{$rangeMin}}) * 100 / range}%`" x-ref="minThumb">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-1.5 mt-1.5 transform rotate-90" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
            </svg>
        </div>

        <div class="w-6 h-6 -ml-5 rounded-full bg-lime-350 absolute cursor-pointer" @touchstart="dragRight = true"
            @mousedown="dragRight = true" :style="`left: ${({{$max}} - {{$rangeMin}}) * 100 / range}%`" x-ref="maxThumb">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-1.5 mt-1.5 transform rotate-90" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16" />
            </svg>
        </div>
    </div>

    <div class="flex justify-between w-full mt-6">
        <input type="number" min="{{$min}}" max="{{$max}}" x-model="{{$min}}" class="px-3 py-2 rounded w-36 font-bold">
        <span class="leading-8 font-bold">&ndash;</span>
        <input type="number" min="{{$min}}" max="{{$max}}" x-model="{{$max}}" class="px-3 py-2 rounded w-36 font-bold">
    </div>
</div>