<div class="grid grid-cols-4 gap-x-6 gap-y-10">
    @foreach ($agent as $item)
        <div
            class="group col-span-full sm:col-span-2 lg:col-span-1 border relative rounded-xl shadow-xl cursor-pointer overflow-hidden before:absolute before:content-[''] before:z-[2] before:inset-0 before:bg-slate-950/55">
            <a title="Agent Travel {{ $item->name }}"
                src="{{ route('thumbnail-agen-travel', ['asal' => Str::slug($item->name), 'asalId' => $item->code]) }}"
                href="{{ route('agen-travel', ['asal' => Str::slug($item->name), 'asalId' => $item->code]) }}"
                class="absolute inset-0 z-[99]"></a>
            <img loading="lazy" title="Agent Travel {{ $item->name }}"
                src="{{ route('thumbnail-agen-travel', ['asal' => Str::slug($item->name), 'asalId' => $item->code]) }}"
                class="group-hover:scale-125 w-full object-cover absolute inset-0 scale-100 transition-all duration-500"
                alt="Surabaya" />
            <div class="z-10 aspect-[16/12] relative p-5 text-center flex-col flex justify-end h-full">
                <a title="Agent Travel {{ $item->name }}" href="{{ whatsapp() }}" target="_blank"
                    class="col-span-full px-5 py-2 border-2 border-red-600 hover:border-red-500 bg-red-600 hover:bg-red-500 text-slate-200 rounded-lg transition-all relative">
                    Pesan Sekarang
                </a>
            </div>
        </div>
    @endforeach
</div>
