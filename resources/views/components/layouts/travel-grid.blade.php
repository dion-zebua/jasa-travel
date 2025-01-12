<div class="mt-10">
    <div
        class="grid grid-cols-1 min-[400px]:grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-y-7 gap-x-5">

        @foreach ($featured as $item)
            <div class="rounded-lg overflow-hidden">
                <a href="{{ route('jalur-rute-travel', ['asal' => Str::slug($item[0]['name']), 'tujuan' => Str::slug($item[1]['name']), 'asalId' => $item[0]['code'], 'tujuanId' => $item[1]['code']]) }}"
                    class="overflow-hidden w-full h-auto block">
                    <img src="{{ route('thumbnail-jalur-rute-travel', ['asal' => Str::slug($item[0]['name']), 'tujuan' => Str::slug($item[1]['name']), 'asalId' => $item[0]['code'], 'tujuanId' => $item[1]['code']]) }}"
                        class="border-4 border-b-0 rounded-lg rounded-b-none hover:scale-110 transition-all duration-300" alt="Travel">
                </a>
                <a href="{{ whatsapp() }}" target="__blank"
                    class="bg-slate-800 hover:bg-blue-900 text-slate-300 px-5 py-2 text-sm line-clamp-2 !leading-5 text-center font-bold">Pesan
                    Travel</a>
            </div>
        @endforeach
    </div>
</div>
