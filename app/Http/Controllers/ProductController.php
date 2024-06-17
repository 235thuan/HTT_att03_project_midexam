<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('products.index', compact('products'));
    }
    public function create()
    {
        return view('products.create');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        if ($product) {
            return view('products.edit', compact('product'));
        }

        return redirect()->route('products.index')->with('error', 'Product not found!');
    }



    public function add(Request $request)
    {
        $request->validate([
            'tensp' => 'required|string|max:255',
            'gia' => 'required|numeric',
            'soluong' => 'required|integer',
            'mota' => 'nullable|string',
        ]);

        // Create a new product instance with the validated data
        $product = new Product([
            'tensp' => $request->tensp,
            'gia' => $request->gia,
            'soluong' => $request->soluong,
            'mota' => $request->mota,
        ]);

        // Save the product to the database
        $product->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product added successfully!');
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->tensp = $request->tensp;
            $product->gia = $request->gia;
            $product->soluong = $request->soluong;
            $product->mota = $request->mota;
            $product->save();

            return redirect()->back()->with('success', 'Product updated successfully!');
        }

        return redirect()->back()->with('error', 'Product not found!');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
            return redirect()->back()->with('success', 'Product deleted successfully!');
        }

        return redirect()->back()->with('error', 'Product not found!');
    }
}
