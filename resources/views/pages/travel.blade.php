@extends('app')
@section('content')
    <x-default-baner :title="$page" :desc="$desc" />
    <div id="content" class="__container !max-w-[800px] text-justify !py-12">
        <h2>{{ $title }}</h2>
        <p>
            <a
                href="{{ route('jalur-rute-travel', ['asal' => Str::slug($travel[0]->name), 'tujuan' => Str::slug($travel[1]->name), 'asalId' => $travel[0]->code, 'tujuanId' => $travel[1]->code]) }}"><strong>{{ $page }}</strong></a>&nbsp;kini
            hadir untuk membantu perjalanan travel anda
            dan keluarga. Kami siap antar jemput anda dari
            {{ $travel[0]->name }} menuju {{ $travel[1]->name }} atau pun sebaliknya dari
            {{ $travel[1]->name }} ke {{ $travel[0]->name }}. Dijamin aman, cepat, nyaman, dan selamat sampai tujuan.
        </p>
        <p>Memilih <a href="{{ route('beranda') }}">jasa travel</a> harus selalu berhati-hati, anda sangat disarankan untuk
            membayar biaya travel ketika sudah sampai di tujuan. Modus penipuan kini semakin merambat ke bidang jasa travel
            reguler. Banyak yang menjadi agen atau travel abal-abal.</p>
    </div>
@endsection
