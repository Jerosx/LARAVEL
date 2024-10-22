<?php

namespace App\Http\Controllers;

use App\Models\Product;  
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all(); // Recupera todos los productos de la base de datos
        return view('products', ['products' => $products]); // Pasa los productos a la vista
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create-product'); // Crear una vista para el formulario de creación
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validación de la imagen
        ]);
    
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public'); // Almacena la imagen en storage/app/public/products
        }
    
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imagePath,
        ]);
    
        return redirect()->route('products.index');
    }
    


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('edit-product', compact('product')); // Crear una vista para el formulario de edición
    }

    public function update(Request $request, Product $product)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('image')) {
        // Elimina la imagen anterior si existe
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $imagePath = $request->file('image')->store('products', 'public');
        $product->image = $imagePath;
    }

    $product->update([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'image' => $product->image,
    ]);

    return redirect()->route('products.index');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }

}
