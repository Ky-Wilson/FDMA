<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnnonceController extends Controller
{
    /**
     * Affiche la liste des annonces.
     */
    public function index()
    {
        $annonces = Annonce::latest()->get();
        return view('admin.annonces.index', compact('annonces'));
    }

    /**
     * Affiche le formulaire de création.
     */
    public function create()
    {
        return view('admin.annonces.create');
    }

    public function show($id)
{
    $annonce = Annonce::findOrFail($id);
    return view('admin.annonces.show', compact('annonce'));
}
    /**
     * Enregistre une nouvelle annonce.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'introduction' => 'required|string',
            'details' => 'required|string',
            'photos.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'photos' => 'array|max:4',
        ]);

        $photoPaths = [];
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $path = $photo->store('annonces', 'public');
                $photoPaths[] = $path;
            }
        }

        Annonce::create([
            'titre' => $request->titre,
            'introduction' => $request->introduction,
            'details' => $request->details,
            'photos' => $photoPaths,
        ]);

        return redirect()->route('admin.annonces.index')->with('success', 'Annonce créée avec succès.');
    }

    /**
     * Affiche le formulaire d’édition d’une annonce.
     */
    public function edit($id)
    {
        $annonce = Annonce::findOrFail($id);
        return view('admin.annonces.edit', compact('annonce'));
    }

    /**
     * Met à jour une annonce.
     */
    public function update(Request $request, $id)
    {
        $annonce = Annonce::findOrFail($id);

        $request->validate([
            'titre' => 'required|string|max:255',
            'introduction' => 'required|string',
            'details' => 'required|string',
            'photos.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'photos' => 'array|max:4',
        ]);

        $photoPaths = $annonce->photos ?? [];

        if ($request->hasFile('photos')) {
            // Supprimer les anciennes photos
            if ($photoPaths) {
                foreach ($photoPaths as $oldPhoto) {
                    Storage::disk('public')->delete($oldPhoto);
                }
            }

            // Ajouter les nouvelles photos
            $photoPaths = [];
            foreach ($request->file('photos') as $photo) {
                $path = $photo->store('annonces', 'public');
                $photoPaths[] = $path;
            }
        }

        $annonce->update([
            'titre' => $request->titre,
            'introduction' => $request->introduction,
            'details' => $request->details,
            'photos' => $photoPaths,
        ]);

        return redirect()->route('admin.annonces.index')->with('success', 'Annonce mise à jour avec succès.');
    }

    /**
     * Supprime une annonce.
     */
    public function destroy($id)
    {
        $annonce = Annonce::findOrFail($id);

        // Supprimer les photos associées
        if ($annonce->photos) {
            foreach ($annonce->photos as $photo) {
                Storage::disk('public')->delete($photo);
            }
        }

        $annonce->delete();

        return redirect()->route('admin.annonces.index')->with('success', 'Annonce supprimée avec succès.');
    }
}
