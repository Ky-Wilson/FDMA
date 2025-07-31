<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AnnonceController extends Controller
{
    /**
     * Affiche la liste des annonces.
     */
     public function index()
    {
        // Limite à 2 annonces par page
        $annonces = Annonce::latest()->paginate(5);
        return view('admin.annonces.index', compact('annonces'));
    }
     public function adminDashboard()
    {
        // KPI 1 : Nombre total d'annonces
        $totalAnnonces = Annonce::count();

        // KPI 2 : Nombre d'annonces ajoutées ce mois-ci
        $annoncesCeMois = Annonce::whereYear('created_at', Carbon::now()->year)
                                    ->whereMonth('created_at', Carbon::now()->month)
                                    ->count();

        // Vous pouvez ajouter d'autres KPI ici si nécessaire

        return view('admin.dashboard', compact('totalAnnonces', 'annoncesCeMois'));
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
        'photo_1' => 'required|image|max:2048',
        'photo_2' => 'nullable|image|max:2048',
        'photo_3' => 'nullable|image|max:2048',
        'photo_4' => 'nullable|image|max:2048',
    ]);

    $photos = [];

    // Gérer les uploads
    foreach (['photo_1', 'photo_2', 'photo_3', 'photo_4'] as $photoField) {
        if ($request->hasFile($photoField)) {
            $path = $request->file($photoField)->store('annonces', 'public');
            $photos[] = $path;
        } else {
            $photos[] = null;
        }
    }

    // Créer l’annonce
    Annonce::create([
        'titre' => $request->titre,
        'introduction' => $request->introduction,
        'details' => $request->details,
        'photos' => json_encode($photos),
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

    $validated = $request->validate([
        'titre' => 'required|string|max:255',
        'introduction' => 'required|string|max:500',
        'details' => 'required|string',
        'photo_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'photo_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'photo_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'photo_4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Récupérer les anciennes photos
    $oldPhotos = is_array($annonce->photos) ? $annonce->photos : json_decode($annonce->photos, true) ?? [];

    $photos = [];

    // Boucle sur les 4 emplacements
    for ($i = 1; $i <= 4; $i++) {
        $key = 'photo_' . $i;

        if ($request->hasFile($key)) {
            // Nouvelle photo : upload et ajouter au tableau
            $path = $request->file($key)->store('annonces', 'public');
            $photos[] = $path;
        } elseif (isset($oldPhotos[$i - 1])) {
            // Pas de nouvelle photo : on garde l’ancienne
            $photos[] = $oldPhotos[$i - 1];
        } else {
            // Ni nouvelle ni ancienne : vide
            $photos[] = null;
        }
    }

    // Mise à jour de l'annonce
    $annonce->update([
        'titre' => $validated['titre'],
        'introduction' => $validated['introduction'],
        'details' => $validated['details'],
        'photos' => json_encode($photos),
    ]);

    return redirect()->route('admin.annonces.index')->with('success', 'Annonce mise à jour avec succès.');
}



    /**
     * Supprime une annonce.
     */
    public function destroy($id)
{
    $annonce = Annonce::findOrFail($id);

    // Décoder le JSON en tableau
    $photos = json_decode($annonce->photos, true) ?? [];

    foreach ($photos as $photo) {
        if ($photo) {
            Storage::disk('public')->delete($photo);
        }
    }

    $annonce->delete();

    return redirect()->route('admin.annonces.index')->with('success', 'Annonce supprimée avec succès.');
}

}
