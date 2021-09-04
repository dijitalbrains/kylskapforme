@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-transparent border-b border-gray w-full focus:outline-none mt-3 py-1 focus:border-lime-350']) !!}>
