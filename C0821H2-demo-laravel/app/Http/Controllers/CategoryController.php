<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $category = Category::all();
        return view('admin.category.list', compact('category'));
    }


    public function create()
    {
        return view('admin.category.create');
    }


    public function store(CreateCategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->input('name');
        $category->save();
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }


    public function update(CreateCategoryRequest $request, $id)
    {
            $category = Category::findOrFail($id);
            $category->name = $request->input('name');
            $category->save();
            return redirect()->route('category.index');
    }


    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->products()->delete();
        $category->delete();
        return redirect()->route('category.index');
    }
}
