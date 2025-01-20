@extends('app')
@section('content')
    <x-default-baner :title="$page . ' PP Murah ' . date('Y')" :desc="$desc . '.'" />
    <article>
        <section id="content" class="__container !max-w-[800px] text-justify !py-12">
            {{-- H2 --}}
            <h2>{{ $title }}</h2>
            <img src="{{ $thumbnail }}" alt="{{ $title }}">
            <p>
                Setiap <strong>{{ $page }}</strong> pada umumnya memiliki kelebihan dan kekurangan masing-masing.
            </p>
        </section>
    </article>
@endsection
