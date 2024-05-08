<?php

namespace App\Helpers;

use App\Models\Log;
use App\Models\Patient;
use App\Models\Personne;
use App\Models\PersonnelSante;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Relations\Relation;

class base
{
    public static function getUserInfo()
    {
        if (Auth::check()) {
            // Récupère l'utilisateur connecté
            $user = Auth::user();
        
            
                // Récupère les informations de la personne associée à l'utilisateur
                $personne = Personne::where('user_id', $user->id)->first();
        
                // Retourne toutes les informations de la personne
                return $personne;
        }
        // Retourne null si aucun utilisateur n'est connecté ou si le type d'utilisateur n'est pas géré
        return null;
    }
    
    public static function recupLogs()
    {
        $user = Auth::user();
        $personne = Personne::where('user_id', $user->id)->first();
        $patient = Patient::where('personne_id', $personne->id)->first();


        //$lesLogs = Log::where('patient_id',$patient->id)->latest()->take(3)->get();
        
        $lesLogs = Log::select('logs.*', 'personnes.nomPers AS personnel_sante_nom')
        ->where('logs.patient_id', $patient->id)
        ->latest()
        ->take(3)
        ->join('personnel_santes', 'logs.personnel_sante_id', '=', 'personnel_santes.id')
        ->join('personnes', 'personnel_santes.personne_id', '=', 'personnes.id')
        ->get();


        return $lesLogs ;
    }

}
