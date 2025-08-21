<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class bController extends Controller
{
    public function index()
    {
        $annonces = Annonce::latest()->get();
        return view('site.bienvenue', compact('annonces'));
    }
}
