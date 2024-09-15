@php
    $menu = ['Beranda', 'Rute Travel', 'Tentang Kami'];
@endphp

<ul class="flex flex-col md:!flex-row gap-x-10 gap-y-4 font-medium">
    @foreach ($menu as $item)
        <li>
            <a href="{{ route(Str::slug($item)) }}"
                class="{{ Str::slug($item) == Route::currentRouteName() ? '!text-blue-700' : '' }} hover:text-blue-700 ">{{ $item }}</a>
        </li>
    @endforeach
</ul>
