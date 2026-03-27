@props(['href' => '/'])

@php
    $active = request()->is(trim($href, '/')) || request()->is(trim($href, '/') . '/*');
    $class = $active
        ? "flex text-white w-full gap-5 border-2 items-center rounded-2xl p-2.5 mb-10.5"
        : "flex text-white w-full gap-5 items-center rounded-2xl p-2.5 mb-10.5";
@endphp

<a href="{{ $href }}" {{ $attributes->class([$class]) }}>{{ $slot }}</a>