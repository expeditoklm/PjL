<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Log;
use App\Models\Patient;
use App\Models\Personne;
use Illuminate\Http\Request;
use App\Models\PersonnelSante;
use Illuminate\Support\Carbon;


class PagesController extends Controller
{

    public function welcome()
    {
        return view('welcome');
    }


    public function pageAttente()
    {
        return view('pages/pageAttente');
    }
    public function voirPatient()
    {
        return view('pages/voirPatient');
    }

    public function recherchePatient()
    {
        
        $personneId = session('persConnecteId');
        $personne = Personne::where('id', $personneId)->first();

        //return $personne;


        $user = Auth::user();
        if ($user->typePersonne ===  'Patient') {
            $patient_id = session('patientOuPersSanteConnecteId');
            $lesLogs = Log::select('logs.*', 'personnes.nomPers AS personnel_sante_nom')
                ->where('logs.patient_id', $patient_id)
                ->latest()
                ->take(3)
                ->join('personnel_santes', 'logs.personnel_sante_id', '=', 'personnel_santes.id')
                ->join('personnes', 'personnel_santes.personne_id', '=', 'personnes.id')
                ->get();
        } else {
            $personneId = session('persConnecteId');
            $lesLogs = Log::select('logs.*', 'personnes.nomPers AS patient_nom')
                ->where('logs.personnel_sante_id', $personneId)
                ->latest()
                ->take(3)
                ->join('patients', function ($join) {
                    $join->on('logs.patient_id', '=', 'patients.id')
                        ->whereRaw('logs.id IN (SELECT MAX(id) FROM logs GROUP BY patient_id)');
                })
                ->join('personnes', 'patients.personne_id', '=', 'personnes.id')
                ->get();

            //return $lesLogs ;
        }
        return view('pages/recherchePatient',compact('lesLogs','personne'));
    }
    public function recherchePatientPost(Request $request)
    {
        $query = Personne::query();
        if (!empty($request->pays)) {
            $query->orWhere('paysPers', $request->pays);
        }
        if (!empty($request->typePiece)) {
            $query->orWhere('typeCin', $request->typePiece);
        }
        if (!empty($request->cin)) {
            $query->orWhere('cin', $request->cin);
        }
        if (!empty($request->nomPers)) {
            $query->orWhere('nomPers', $request->nomPers);
        }
        if (!empty($request->prenomPers)) {
            $query->orWhere('prenomPers', $request->prenomPers);
        }
        $personnes = $query->whereHas('patients')->get();




        $personneId = session('persConnecteId');
        $personne = Personne::where('id', $personneId)->first();

        //return $personne;


        $user = Auth::user();
        if ($user->typePersonne ===  'Patient') {
            $patient_id = session('patientOuPersSanteConnecteId');
            $lesLogs = Log::select('logs.*', 'personnes.nomPers AS personnel_sante_nom')
                ->where('logs.patient_id', $patient_id)
                ->latest()
                ->take(3)
                ->join('personnel_santes', 'logs.personnel_sante_id', '=', 'personnel_santes.id')
                ->join('personnes', 'personnel_santes.personne_id', '=', 'personnes.id')
                ->get();
        } else {
            $personneId = session('persConnecteId');
            $lesLogs = Log::select('logs.*', 'personnes.nomPers AS patient_nom')
                ->where('logs.personnel_sante_id', $personneId)
                ->latest()
                ->take(3)
                ->join('patients', function ($join) {
                    $join->on('logs.patient_id', '=', 'patients.id')
                        ->whereRaw('logs.id IN (SELECT MAX(id) FROM logs GROUP BY patient_id)');
                })
                ->join('personnes', 'patients.personne_id', '=', 'personnes.id')
                ->get();

            //return $lesLogs ;
        }


        return view('pages/listesPatientsRechercher', compact('personnes','lesLogs','personne'));

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

    public function listeSoinPatient()
    {
        return view('pages/listeSoinPatient');
    }
    public function SoinPatient()
    {
        return view('pages/soinPatient');
    }
    public function listePatientRechercher()
    {
        return view('pages/listesPatientsRechercher');
    }

    public function notePatient()
    {
        return view('pages/notePatient');
    }
    public function signUp()
    {
        return view('pages/signUp');
    }

    public function login()
    {
        return view('pages/login');
    }
    public function forgotPassword()
    {
        return view('pages/forgotPassword');
    }

    public function error404()
    {
        return view('pages/error404');
    }
    public function voireNotification()
    {
        $user = Auth::user();
        $personneId = session('persConnecteId');
        $personne = Personne::where('id', $personneId)->first();
        if ($user->typePersonne ===  'Patient') {
            $patient_id = session('patientOuPersSanteConnecteId');
            $lesLogs = Log::select('logs.*', 'personnes.nomPers AS personnel_sante_nom')
                ->where('logs.patient_id', $patient_id)
                ->latest()
                ->join('personnel_santes', 'logs.personnel_sante_id', '=', 'personnel_santes.id')
                ->join('personnes', 'personnel_santes.personne_id', '=', 'personnes.id')
                ->get();
        } else {
            $personneId = session('persConnecteId');

            $lesLogs = Log::select('logs.*', 'personnes.nomPers AS patient_nom')
                ->where('logs.personnel_sante_id', $personneId)
                ->latest()
                ->join('patients', function ($join) {
                    $join->on('logs.patient_id', '=', 'patients.id')
                        ->whereRaw('logs.id IN (SELECT MAX(id) FROM logs GROUP BY patient_id)');
                })
                ->join('personnes', 'patients.personne_id', '=', 'personnes.id')
                ->get();
        }





        return view('pages/voireNotification', compact('lesLogs'));
    }
}
