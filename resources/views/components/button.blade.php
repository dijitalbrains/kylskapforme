<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn-round-black mt-0']) }}>
    {{ $slot }}
</button>
