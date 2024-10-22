<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return \response()->view('pages.admin.catalog.categories.index', compact([
            'categories',
        ]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:categories',
        ]);

        Category::create([
            'title' => $request->title,
        ]);

        return redirect()->route('categories.index')->with('success', 'Категория ' . $request->title . ' успешно добавлена');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return \response()->view('pages.admin.catalog.categories.edit', compact([
            'category',
        ]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $category->update($request->all());

        return redirect()->route('categories.index')->with('success', 'Категория ' . $category->title . ' успешно изменена');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if (!$category) {
            return abort(404);
        }

        $category->delete();

        return redirect()->route('categories.index')->with('error', 'Категория ' . $category->title . ' успешно удалена');
    }
}
