<div
    class="__container grid place-items-center bg-gradient-to-tl from-blue-900 via-blue-700 to-blue-600 from-10% via-80% to-95% py-20 relative">
    <div class="top-0 left-0 w-full h-full absolute !z-[2] !bg-[length:40px_40px] md:!bg-[length:60px_60px] lg:!bg-[length:80px_80px]"
        style="background: url({{ asset('img/bg-baner.svg') }}) ">
    </div>
    <div class="text-center z-[3]">
        <h1 class="!text-white mb-2">{{ config('app.name') . ' Murah' }}</h1>
        <p class="text-slate-300 mb-7 max-w-[450px]">Temukan kenyamanan dan kemudahan perjalanan dengan layanan travel
            reguler kami!</p>
    </div>
    <div class="w-full !z-[2]">
        <div class="container mx-auto flex justify-center items-center">
            <form method="POST"
                action={{ route('cari-rute', [
                    'asal' => 'Depok',
                    'asalId' => 7,
                    'tujuan' => 'Depok',
                    'tujuanId' => 7,
                ]) }}
                class="w-full max-w-[400px] sm:max-w-[550px] border border-gray-300 px-4 py-5 md:p-6 grid grid-cols-1 gap-6 bg-white shadow-lg rounded-lg">
                @method('POST')
                @csrf
                <div class="grid grid-cols-2 gap-x-5 gap-y-3 [&_p]:text-sm [&_p]:text-slate-600 [&_p]:font-semibold">
                    @livewire('select-area', ['label' => 'Asal'])
                    @livewire('select-area', ['label' => 'Tujuan'])
                </div>
                <div class="[&>*]:w-full [&_span]:mx-auto">
                    <x-button text="Cari Rute" :submit="true" class="relative z-[1]" :transparant="false" />
                </div>
            </form>
        </div>
    </div>
</div>
