<?php
// Lesson 27: the controller. Gets data from the model and picks the view.

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // SELECT * FROM products ORDER BY id
        $products = Product::orderBy('id')->get();

        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // On error Laravel goes back to the form with the messages and the typed values.
        $data = $request->validate([
            'name' => 'required|max:100',
            'price' => 'required|numeric|min:0',
        ], [
            'required' => 'To pole jest wymagane.',
            'numeric' => 'Cena musi być liczbą.',
            'max' => 'Nazwa może mieć najwyżej 100 znaków.',
            'min' => 'Cena nie może być ujemna.',
        ]);

        // INSERT INTO products (name, price) VALUES (?, ?)
        Product::create($data);

        return redirect('/products');
    }
}
