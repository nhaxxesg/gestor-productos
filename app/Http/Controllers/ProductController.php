<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Logic to store the product
        
        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        return view('products.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Logic to update the product
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        // Logic to delete the product
        return redirect()->route('products.index');
    }
}
