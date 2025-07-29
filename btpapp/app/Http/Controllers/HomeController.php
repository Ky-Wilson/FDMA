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
    // admin dashboard
    public function index()
    {
        return view('admin.dashboard');
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
    public function projets(){
        return view('site.projets');
    }

    public function bmi(){
        return view('site.projets.pr1');
    }

    public function duplexferke(){
        return view('site.projets.pr2');
    }

    //page services
    public function services(){
        return view('site.services');
    }
}