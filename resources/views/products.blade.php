<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>

    @include('partials.nav')


<h1>Lista de productos</h1>

<table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" width="100">
                    @else
                        No foto
                    @endif
                </td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}">Editar</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Borrar</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No hay productos</td>
            </tr>
        @endforelse
    </tbody>
</table>
<br>
<a href="{{ route('products.create') }}">Crear producto</a>


    
</body>
</html>