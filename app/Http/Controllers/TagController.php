<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagUpdateRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::all();

        return \response()->view('pages.admin.catalog.tags.index', compact([
            'tags',
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
            'name' => 'required|unique:tags',
        ]);

        Tag::create([
            'name' => $request->name,
        ]);

        return redirect()->route('tags.index')->with('success', 'Тег ' . $request->name . ' успешно добавлен');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return \response()->view('pages.admin.catalog.tags.edit', compact([
            'tag',
        ]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TagUpdateRequest $request, Tag $tag)
    {
        $tag->update($request->all());

        return redirect()->route('tags.index')->with('success', 'Тег ' . $tag->name . ' успешно изменен');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        if (!$tag) {
            return abort(404);
        }

        $tag->delete();

        return redirect()->route('tags.index')->with('error', 'Тег ' . $tag->name . ' успешно удален');
    }
}
