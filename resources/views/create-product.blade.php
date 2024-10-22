<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="description">Description:</label>
    <textarea name="description" id="description" required></textarea>

    <label for="price">Price:</label>
    <input type="text" name="price" id="price" required>

    <label for="image">Product Image:</label>
    <input type="file" name="image" id="image">

    <button type="submit">Create Product</button>
</form>
