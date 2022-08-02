@extends('layouts.main')

@section('title', 'List')

@section('content')
{{-- Andrew Gamer Content --}}
<main>
    <p>
        <b>Code ::</b>
        <span>{{ $shop->code }}</span><br />
        <b>Name ::</b>
        <span>{{ $shop->name }}</span><br />
        <b>Owner ::</b>
        <span>{{ $shop->owner }}</span><br />
        <b>Location ::</b>
        <span>{{ $shop->latitude }} {{ $shop->longitude }}</span><br />
        <b>Address ::</b>
        <span>{{ $shop->address }}</span><br />
    </p>
</main>
@endsection