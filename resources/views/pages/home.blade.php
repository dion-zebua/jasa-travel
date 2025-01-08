@extends('app')
@section('content')
    <x-layouts.home.baner />
    <x-layouts.home.advantages />
    <div class="bg-gradient-to-bl from-blue-500 to-blue-700">
        <div class="bg-right-bottom " style="background-image: url({{ asset('img/blob.svg') }})">
            <div class="__container py-24">
                <x-heading title="Pilih Rute" desc1="Bebarapa Rute Unggulan"
                    desc2="Kami merekomendasikan bebrapa rute yang jadi pilihan banyak orang." :light="true" />
            </div>
        </div>
    </div>
    <x-layouts.gallery />
@endsection
