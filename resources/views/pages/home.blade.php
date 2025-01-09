@extends('app')
@section('content')
    <x-layouts.home.baner />
    <x-layouts.home.advantages />
    <div class="bg-gradient-to-bl from-blue-500 to-blue-700">
        <div class="bg-right-bottom " style="background-image: url({{ asset('img/blob.svg') }})">
            <div class="__container py-24">
                <x-heading title="Pilih Rute" desc1="Bebarapa Rute Unggulan"
                    desc2="Kami merekomendasikan bebrapa rute yang jadi pilihan banyak orang." :light="true" :full="true" />
                <div class="mt-10">
                    <div
                        class="grid grid-cols-1 min-[400px]:grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-y-7 gap-x-5">

                        @for ($i = 0; $i < 1; $i++)
                            <div class="rounded-lg overflow-hidden">
                                <img src="{{ route('thumbnail', ['text' => 'Travel Kalimantan Barat Kalimantan Selatan']) }}"
                                    class="border-4 border-b-0 rounded-lg rounded-b-none" alt="Travel">
                                <a href="#!"
                                    class="bg-slate-800 hover:bg-blue-900 text-slate-300 px-5 py-2 text-sm line-clamp-2 !leading-5 text-center font-bold">Pesan
                                    Travel</a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-layouts.gallery />
@endsection
