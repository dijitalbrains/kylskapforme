@props(['direction'])

@php
switch ($direction) {
case "down":$dValue = "M19 9l-7 7-7-7";break;
case "left":$dValue = "M15 19l-7-7 7-7";break;
case "right":$dValue = "M9 5l7 7-7 7";break;
case "up":$dValue = "M5 15l7-7 7 7";break;
}
@endphp

<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" {{$attributes}}>
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{$dValue}}"></path>
</svg>
