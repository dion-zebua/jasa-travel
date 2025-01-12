@extends('components.layouts.background-blue')
@section('content-bg-blue')
    <div class="__container py-24">
        <x-heading title="Pilih Rute" desc1="Bebarapa Rute Unggulan"
            desc2="Kami merekomendasikan bebrapa rute yang jadi pilihan banyak orang." :light="true" :full="true" />
        <x-layouts.travel-grid :featured="$featured" />
    </div>
@endsection
