<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Annonce;
use App\Models\Projet;
use Illuminate\Http\Request;
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
    // admin dashboard
    public function index()
    {
        return view('admin.dashboard');
    }

    public function bienvenue(){
        $annonces = Annonce::latest()->paginate(2);
        return view('site.bienvenue', compact('annonces'));
    }
    // annonces
    public function annonces(){
        $annonces = Annonce::latest()->paginate(2);
        return view('site.annonces', compact('annonces'));
    }

    //annonce 
    public function voir($id)
    {
        $annonce = Annonce::findOrFail($id);
        return view('site.annonce-details', compact('annonce'));
    }

    //page contact
    public function contact(){
        return view('site.contact');
    }

    //page apropos
    public function apropos(){
        return view('site.apropos');
    }

    //page projets

public function projets()
{
    $projets = Projet::where('actif', true)
                     ->orderBy('date_fin', 'desc')
                     ->get();

    $categories = Projet::select('categorie')
                        ->where('actif', true)
                        ->distinct()
                        ->pluck('categorie');

    return view('site.projets', compact('projets', 'categories'));
}
public function show($id)
{
    $projet = Projet::findOrFail($id);
    return view('site.projet-detail', compact('projet'));
}

    public function bmi(){
        return view('site.projets.pr1');
    }

    public function duplexferke(){
        return view('site.projets.pr2');
    }

    public function chuyop(){
        return view('site.projets.chuyop');
    }

    //page services
    public function services(){
        return view('site.services');
    }
}