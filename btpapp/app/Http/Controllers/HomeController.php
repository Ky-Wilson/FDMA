<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str; // N'oubliez pas d'importer Str si vous l'utilisez dans la vue (pour Str::limit)


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Si cette route est accessible aux non-authentifiés, vous pouvez retirer ou ajuster ce middleware
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function annonces(){
        // Utilisez paginate() pour obtenir une collection paginable
        // 5 est le nombre d'annonces par page, vous pouvez l'ajuster
        $annonces = Annonce::latest()->paginate(2);
        
        // Si vous avez besoin d'annonces récentes pour la sidebar (optionnel, comme dans les commentaires de la vue)
        // $recentAnnonces = Annonce::latest()->take(3)->get(); // 'get()' est correct ici car ce n'est pas pour la pagination

        return view('site.annonces', compact('annonces'));
        // Si vous utilisez $recentAnnonces, ce serait :
        // return view('site.annonces', compact('annonces', 'recentAnnonces'));
    }
public function voir($id)
{
    $annonce = Annonce::findOrFail($id);
    return view('site.annonce-details', compact('annonce'));
}
}