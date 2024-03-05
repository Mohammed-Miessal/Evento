<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;

class CategorieController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:Administrateur');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::all();
        return view('dashboard.categorie.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categorie.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategorieRequest $request)
    {
        $validatedData = $request->validated();

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('category_images', 'public');
        }

        Categorie::create([
            'name' => $validatedData['name'],
            'image_path' => $imagePath,
        ]);

        return redirect()->route('categorie.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $categorie)
    {
        $categorie = Categorie::find($categorie->id);
        return view('dashboard.categorie.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(UpdateCategorieRequest $request, Categorie $categorie)
    {
        $validatedData = $request->validated();

        // Handle image upload
        $newImagePath = $categorie->image_path;
        if ($request->hasFile('image')) {
            // Delete the old image from storage
            if ($categorie->image_path) {
                Storage::disk('public')->delete($categorie->image_path);
            }

            // Upload the new image
            $newImagePath = $request->file('image')->store('category_images', 'public');
        }

        // Update the category
        $categorie->update([
            'name' => $validatedData['name'],
            'image_path' => $newImagePath,
        ]);

        return redirect()->route('categorie.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        Storage::disk('public')->delete($categorie->image_path);
        $categorie->delete();
        return redirect()->route('categorie.index');
    }
}
