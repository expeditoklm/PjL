<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Auth;


class PagesController extends Controller
{
    public function voirPatient()
    {
        return view('pages/voirPatient');
    }
    public function recherchePatient()
    {
        return view('pages/recherchePatient');
    }
    public function listeVisitePatient()
    {
        return view('pages/listeVisitePatient');
    }
    public function VisitePatient()
    {
        return view('pages/VisitePatient');
    }
    public function listeAnalysePatient()
    {
        return view('pages/listeAnalysePatient');
    }
    public function AnalysePatient()
    {
        return view('pages/analysePatient');
    }
    
    
    
}
