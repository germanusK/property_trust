@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-sm shadow-sm py-1 px-1 border border-white bg-black text-white focus:text-white focus:bg-black']) !!}>
