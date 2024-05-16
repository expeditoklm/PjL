<?php

namespace App\Helpers;

use App\Models\Log;
use App\Models\Patient;
use App\Models\Personne;
use App\Models\PersonnelSante;
use App\Models\Consultation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Relations\Relation;

class base
{
    public static function getUserInfo()
    {
        if (Auth::check()) {
            // Récupère l'utilisateur connecté
            $user = Auth::user();
            $personneId=session('persConnecteId');
                
                // Récupère les informations de la personne associée à l'utilisateur
                $personne = Personne::where('id', $personneId)->first();
                //dd(session('persConnecteId'));
                // Retourne toutes les informations de la personne
                return $personne;
        }
        // Retourne null si aucun utilisateur n'est connecté ou si le type d'utilisateur n'est pas géré
        return null;
    }
    
    
    public static function recupLogs()
    {
        $user = Auth::user();
        $personneId=session('persConnecteId');    
        $personne = Personne::where('id', $personneId)->first();
        if($user->typePersonne ===  'Patient'){
            $patient_id = session('patientOuPersSanteConnecteId');
            $lesLogs = Log::select('logs.*', 'personnes.nomPers AS personnel_sante_nom')
            ->where('logs.patient_id', $patient_id)
            ->latest()
            ->take(3)
            ->join('personnel_santes', 'logs.personnel_sante_id', '=', 'personnel_santes.id')
            ->join('personnes', 'personnel_santes.personne_id', '=', 'personnes.id')
            ->get();

        }else{
            $personneId=session('persConnecteId'); 
            $personnel_sante_id = session('patientOuPersSanteConnecteId');

        $lesLogs = Log::select('logs.*', 'personnes.nomPers AS patient_nom')
        ->where('logs.personnel_sante_id', $personnel_sante_id)
        ->latest()
        ->take(3)
        ->join('patients', function($join) {
            $join->on('logs.patient_id', '=', 'patients.id')
                ->whereRaw('logs.id IN (SELECT MAX(id) FROM logs GROUP BY patient_id)');
        })
        ->join('personnes', 'patients.personne_id', '=', 'personnes.id')
        ->get();

        }
        


        return $lesLogs ;
    }
    public static function getUserOrPatientInfo() {
        $personnePatient_id = session('patient_init');
        $personne = Personne::where('id', $personnePatient_id)->first();
        $patient = Patient::where('personne_id', $personne->id)->first();
        $consultation = Consultation::where('patient_id', $patient->id)->first();
    
        return ['personne' => $personne, 'consultation' => $consultation];
    }
    

}
