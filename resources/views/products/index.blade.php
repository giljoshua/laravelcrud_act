<h1>Product List</h1>

<a href="{{ route('products.create') }}">Create New Product</a>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>${{ number_format($product->price, 2) }}</td>
            <td>
                <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                <form method="POST" action="{{ route('products.destroy', $product->id) }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
