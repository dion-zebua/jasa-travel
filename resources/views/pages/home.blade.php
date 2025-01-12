@extends('app')
@section('content')
    <x-layouts.home.baner />
    <x-layouts.home.advantages />
    <x-layouts.home.rute :featured="$featured" />
    <x-layouts.gallery />
@endsection
