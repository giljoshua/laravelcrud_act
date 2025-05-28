@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <p>You're logged in!</p>
    <h2>Available Products</h2>
    @if ($products->isEmpty())
        <p>No products found.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection