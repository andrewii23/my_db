@extends('layouts.main')

@section('title', 'List')

@section('content')
{{-- Andrew Gamer Content --}}
<main>
    <table class="center">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <th>
                    <a href="{{ route('product-view', ['product' => $product->code,]) }}">
                        {{ $product->code }}
                    </a>
                </th>
                <td>{{ $product->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</main>
@endsection