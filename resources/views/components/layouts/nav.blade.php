@php
    $menu = [
        ['Beranda'], 
        ['Arsip Travel'], 
        ['Developer' , 'https://dionzebua.com']
    ];

@endphp

<ul class="flex flex-col md:!flex-row gap-x-10 gap-y-4 font-medium">
    @foreach ($menu as $key => $item)
        <li>
            <a href="{{ $item[1] ?? route(Str::slug($item[0])) }}"
                class="whitespace-nowrap {{ Str::slug($item[0]) == Route::currentRouteName() ? '!text-blue-700' : '' }} hover:text-blue-700 ">{{ $item[0] }}</a>
        </li>
    @endforeach
</ul>
