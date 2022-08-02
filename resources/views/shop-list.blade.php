@extends('layouts.main')

@section('title', 'Shop')

@section('content')
{{-- Andrew Gamer Content --}}
<main>
    <table class="center">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Owner</th>
            </tr>
        </thead>
        <tbody>
            @foreach($shops as $shop)
            <tr>
                <th>
                    <a href="{{ route('shop-view', ['shop' => $shop->code,]) }}">
                        {{ $shop->code }}
                    </a>
                </th>
                <td>{{ $shop->name }}</td>
                <td>{{ $shop->owner }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection