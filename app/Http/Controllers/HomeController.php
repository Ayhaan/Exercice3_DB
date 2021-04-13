<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $datas = Membre::all();
        // $hommes = Membre::where('genre', 'homme')->take(5)->get();
        $hommes = Membre::where('genre', 'homme')->get();
        $femmes = Membre::where('genre', 'femme')->get();

        $homme_condition = Membre::whereBetween('age', [18,24])->where('genre', 'homme')->get();
        $femme_condition = Membre::whereBetween('age', [18,24])->where('genre', 'femme')->get();
        $hors_condition = Membre::whereNotBetween('age', [18,24])->get();
        return view('home', compact('datas', 'hommes', 'femmes', 'homme_condition', 'femme_condition', 'hors_condition'));
    }
}
