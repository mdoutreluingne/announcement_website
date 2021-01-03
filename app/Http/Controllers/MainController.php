<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // Méthode pour la page d'accueil
    public function home()
    {
       echo "Home";
    }

    // Méthode pour la page bonjour
    public function bonjour($prenom)
    {
        echo "Bonjour $prenom";
    }
}
