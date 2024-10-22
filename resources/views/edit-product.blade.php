<form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" required>

    <label for="description">Description:</label>
    <textarea name="description" id="description" required>{{ old('description', $product->description) }}</textarea>

    <label for="price">Price:</label>
    <input type="text" name="price" id="price" value="{{ old('price', $product->price) }}" required>

    <label for="image">Product Image:</label>
    <input type="file" name="image" id="image">

    @if ($product->image)
        <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="150">
    @endif

    <button type="submit">Update Product</button>
</form>
