<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class TestController extends Controller
{
    function index(){
        return view('accueil');
    }
    function accueil(): View{
        return view('accueil');
    }function mentions(){
        return view('mentions_légale');
    }
    function equipe(){
        return view('equipe');
    }
    function welcome(){
        return view('welcome');
    }
    function epreuve(){
        return view('epreuve');
    }
    function collège(){
        return view('collège');
    }
    function resultat(){
        return view('resultat');
    }
    function role(){
        return view('resultat');
    }
    function genre(){

    }
}
