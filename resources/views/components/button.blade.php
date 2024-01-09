<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-6 py-2 bg-black border border-white rounded-sm font-semibold text-sm text-white uppercase tracking-widest']) }}>
    {{ $slot }}
</button>
