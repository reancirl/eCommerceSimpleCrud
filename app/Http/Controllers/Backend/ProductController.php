<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('products');
    }


    public function create()
    {
        return view('products_create');
    }


    public function store(Request $request)
    {
        $this->validate($request , [
        'name' => 'required',
        'slug' => 'required',
        'brand' => 'required',
        'description' => 'required',
        'keywords' => 'required',
        'quantity' => 'required|integer',
        'image' => 'sometimes|file|image',
        ]);

        if($request->hasFile('image'))
        {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        }

        $product = new Product();
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->brand = $request->brand;
        $product->description = $request->description;
        $product->keywords = $request->keywords;
        $product->quantity = $request->quantity;
        $product->image = $fileNameToStore;
        $product->category_id = $request->category_id;

        $product->save();
        return redirect('/admin/products')->with('message', 'Product Added!');
    }


    public function show($id)
    {
        $product = Product::findorFail($id);
        return view('products_show', compact('product'));
    }


    public function edit($id)
    {
        $product = Product::findorFail($id);
        return view('products_edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request , [
        'name' => 'required',
        'slug' => 'required',
        'brand' => 'required',
        'description' => 'required',
        'keywords' => 'required',
        'quantity' => 'required',
        'image' => 'sometimes|file|image',
        ]);

        if($request->hasFile('image'))
        {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        }

        $product = Product::find($id);
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->brand = $request->brand;
        $product->description = $request->description;
        $product->keywords = $request->keywords;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;

        if($request->hasFile('image'))
        {
            $product->image = $fileNameToStore;
        }

        $product->save();
        return redirect('/admin/products')->with('message', 'Product Updated!');
    }


    public function destroy(Product $product)
    {
        $product->delete();

        Storage::delete('public/images/'.$product->image);

        return redirect('admin/products')->with('message', 'Product Deleted!');
    }
}
