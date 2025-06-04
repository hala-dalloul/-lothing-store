<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('category')) {
            $products = Product::with('category')
                ->where('categoryId', $request->category)
                ->get();
        } else {
            $products = Product::with('category')->get();
        }
        $categories = Category::all();
        return view('products.index',compact(['products','categories']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create',compact('categories')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
                'name'=>'required|string|max:255',
                'description'=>'required|string',
                'price'=>'required|numeric',
                'categoryId'=>'required|numeric'
            ]);

        $product=Product::create($request->all());
        return redirect()->route('products.index')->with('success', 'Product added.'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('products.edit',compact(['product','categories']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
                'name'=>'required|string|max:255',
                'description'=>'required|string',
                'price'=>'required|numeric',
                'categoryId'=>'required|numeric'
            ]);
            $product=Product::findOrFail($id);
            $product->update($request->only(['name', 'description', 'price', 'categoryId']));
            return redirect()->route('products.index')->with('success','Updated this product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('products.index')->with('success','Product deleted!');
    }
}
