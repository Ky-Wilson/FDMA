<?php
namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('site.contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Envoi de l'email
        Mail::to('hlab.digital.center@gmail.com')->send(new ContactMail($request->all()));

        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
