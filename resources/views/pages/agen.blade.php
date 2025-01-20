@extends('app')
@section('content')
    <x-default-baner :title="$page . ' PP Murah ' . date('Y')" :desc="$desc . '.'" />
    <article>
        <section id="content" class="__container !max-w-[800px] text-justify !py-12">
            {{-- H2 --}}
            <h2>{{ $title }}</h2>
            <img src="{{ route('thumbnail-agen-travel', ['asal' => Str::slug($agent->name), 'asalId' => $agent->code]) }}"
                alt="{{ $title }}">
        </section>
    </article>
@endsection
