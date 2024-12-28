@props(['color' => 'white'])


@php

    $classes = "bg-black-800 text-white rounded-2xl py-1 px-4 transition-colors duration-300 hover:text-black";

    if ($color == 'white') {
        $classes .= ' hover:bg-white';
    }

    if ($color == 'red') {
        $classes .= ' hover:bg-red-600';
    }

    if ($color == 'blue') {
        $classes .= ' hover:bg-blue-600';
    }
@endphp

<button class="{{ $classes }}">
    {{ $slot }}
</button>
