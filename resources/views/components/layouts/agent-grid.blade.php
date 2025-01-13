<div
    class="grid grid-cols-4 gap-x-6 gap-y-10 [&>*]:col-span-full [&>*]:sm:col-span-2 [&>*]:lg:col-span-1 [&>*]:border [&>*]:relative [&>*]:min-h-96 md:[&>*]:min-h-80 [&>*]:rounded-xl [&>*]:shadow-xl [&>*]:cursor-pointer [&>*]:overflow-hidden [&>*]:before:absolute [&>*]:before:content-[''] [&>*]:before:z-[2] [&>*]:before:inset-0 [&>*]:before:bg-slate-950/55 [&_img]:w-full [&_img]:h-full [&_img]:object-cover [&_img]:absolute [&_img]:inset-0 [&_img]:scale-100 [&_img]:transition-all [&_img]:duration-500 [&>div>div]:z-10 [&>div>div]:relative [&>div>div]:p-5 [&>div>div]:text-center [&>div>div]:flex-col [&>div>div]:flex [&>div>div]:justify-end [&>div>div]:h-full [&_a]:col-span-full [&_a]:px-5 [&_a]:py-2 [&_a]:border-2 [&_a]:border-red-600 hover:[&_a]:border-red-500 [&_a]:bg-red-600 hover:[&_a]:bg-red-500 [&_a]:text-slate-200 [&_a]:rounded-lg [&_a]:transition-all [&_a]:relative">
    @foreach ($agent as $item)
        <div class="group">
            <img title="Agent Travel {{ $item->name }}" src="https://berkah-trans.my.id/src/img/place/surabaya.jpg" class="group-hover:scale-125" alt="Surabaya">
            <div class="">
                <a title="Agent Travel {{ $item->name }}" href="{{ whatsapp() }}" target="_blank">
                    Pesan Sekarang
                </a>
            </div>
        </div>
    @endforeach
</div>
