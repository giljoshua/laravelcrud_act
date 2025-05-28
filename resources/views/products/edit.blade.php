<h1>Edit Product</h1>

<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $product->name }}" placeholder="Name">
    <br><br>

    <textarea name="description" placeholder="Description">{{ $product->description }}</textarea>
    <br><br>

    <input type="number" step="0.01" name="price" value="{{ $product->price }}" placeholder="Price">
    <br><br>

    <button type="submit">Update</button>
</form>
