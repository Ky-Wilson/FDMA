<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjetController extends Controller
{
    public function index()
    {
        $projets = Projet::orderBy('created_at', 'desc')->get();
        return view('admin.projets.index', compact('projets'));
    }
    /**
     * Show the form for creating a new project.
     */
    public function create()
    {
        return view('admin.projets.create');
    }

    /**
     * Store a newly created project in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'categorie' => 'required|in:commercial,residential,healthcare',
            'lieu' => 'nullable|string|max:255',
            'image_principale' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'galerie_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'details' => 'nullable|string',
            'date_debut' => 'nullable|date',
            'date_fin' => 'nullable|date|after_or_equal:date_debut',
            'statut' => 'required|in:en_cours,termine,suspendu',
            'budget' => 'nullable|numeric|min:0',
            'client' => 'nullable|string|max:255',
            'featured' => 'boolean',
            'actif' => 'boolean',
        ]);

        // Prepare data for storage
        $data = $request->all();

        // Handle main image upload
        if ($request->hasFile('image_principale')) {
            $data['image_principale'] = $request->file('image_principale')->store('projects', 'public');
        }

        // Handle gallery images upload
        if ($request->hasFile('galerie_images')) {
            $galerieImages = [];
            foreach ($request->file('galerie_images') as $image) {
                $galerieImages[] = $image->store('projects/gallery', 'public');
            }
            $data['galerie_images'] = json_encode($galerieImages);
        }

        // Create the project
        Projet::create($data);

        // Redirect to the projects index with a success message
        return redirect()->route('admin.projets.index')->with('success', 'Projet créé avec succès.');
    }

    public function show($id)
    {
        $projet = Projet::findOrFail($id);
        return view('admin.projets.show', compact('projet'));
    }

    /**
     * Show the form for editing the specified project.
     */
    public function edit($id)
    {
        $projet = Projet::findOrFail($id);
        return view('admin.projets.edit', compact('projet'));
    }

    /**
     * Update the specified project in storage.
     */
    public function update(Request $request, $id)
    {
        $projet = Projet::findOrFail($id);

        // Validate the request (image_principale and galerie_images are nullable for updates)
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'categorie' => 'required|in:commercial,residential,healthcare',
            'lieu' => 'nullable|string|max:255',
            'image_principale' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'galerie_images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'details' => 'nullable|string',
            'date_debut' => 'nullable|date',
            'date_fin' => 'nullable|date|after_or_equal:date_debut',
            'statut' => 'required|in:en_cours,termine,suspendu',
            'budget' => 'nullable|numeric|min:0',
            'client' => 'nullable|string|max:255',
            'featured' => 'boolean',
            'actif' => 'boolean',
        ]);

        // Prepare data for update
        $data = $request->all();

        // Handle main image update
        if ($request->hasFile('image_principale')) {
            // Delete old image if exists
            if ($projet->image_principale) {
                Storage::disk('public')->delete($projet->image_principale);
            }
            $data['image_principale'] = $request->file('image_principale')->store('projects', 'public');
        }

        // Handle gallery images update (replacing the entire gallery for simplicity)
        if ($request->hasFile('galerie_images')) {
            // Delete old gallery images if exist
            if ($projet->galerie_images) {
                $oldGalerie = json_decode($projet->galerie_images, true);
                foreach ($oldGalerie as $oldImage) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
            $galerieImages = [];
            foreach ($request->file('galerie_images') as $image) {
                $galerieImages[] = $image->store('projects/gallery', 'public');
            }
            $data['galerie_images'] = json_encode($galerieImages);
        }

        // Update the project
        $projet->update($data);

        // Redirect to the projects index with a success message
        return redirect()->route('admin.projets.index')->with('success', 'Projet mis à jour avec succès.');
    }

    /**
     * Remove the specified project from storage.
     */
    public function destroy($id)
    {
        $projet = Projet::findOrFail($id);

        // Delete main image if exists
        if ($projet->image_principale) {
            Storage::disk('public')->delete($projet->image_principale);
        }

        // Delete gallery images if exist
        if ($projet->galerie_images) {
            $galerie = json_decode($projet->galerie_images, true);
            foreach ($galerie as $image) {
                Storage::disk('public')->delete($image);
            }
        }

        // Delete the project
        $projet->delete();

        // Redirect to the projects index with a success message
        return redirect()->route('admin.projets.index')->with('success', 'Projet supprimé avec succès.');
    }
}