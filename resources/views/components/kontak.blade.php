@php
    $menu = [
        ['0882-8931-7870', whatsapp()],
        ['info@dionzebua.com', 'mailto:info@dionzebua.com'],
    ];

@endphp

@foreach ($menu as $key => $item)
    <li>
        <a target="_blank" href="{{ $item[1] ?? route(Str::slug($item[0])) }}"
            class="whitespace-nowrap hover:text-blue-50">{{ $item[0] }}</a>
    </li>
@endforeach
