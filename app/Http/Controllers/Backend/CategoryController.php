<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{

    public function index()
    {
        return view('category');
    }


    public function create()
    {
        return view('category_create');
    }


    public function store(Request $request)
    {
        $this->validate($request , [
        'name' => 'required',
        'author' => 'required'
        ]);

        $c = new Category();
        $c->name = $request->name;
        $c->author = $request->author;

        $c->save();
        return redirect('/admin/categories')->with('message', 'Category Added!');
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('admin/categories')->with('message', 'Category Deleted!');
    }
}
