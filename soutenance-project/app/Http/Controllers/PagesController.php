<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Log;
use App\Models\Patient;
use App\Models\Personne;
use Illuminate\Http\Request;
use App\Models\PersonnelSante;
use App\Models\Consultation;
use App\Models\Correspondance;
use App\Models\Hopital;
use App\Models\SoinPrescrit;

use App\Models\ExamenClinique;

use App\Models\Consultation_Correspondance;
use App\Models\User;
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
    public function voirPatient($id)
    {
        session()->put('patient_init', $id);
        $personne = Personne::findOrFail($id);
        $patient = Patient::where('personne_id', $personne->id)->first();
        $user = User::where('id', $patient->user_id)->first();
        
        // Récupérer les consultations du patient directement à partir de la relation
        $consultations = $patient->consultations;
    
        $correspondants = [];
    
        // Parcourir toutes les consultations du patient
        foreach ($consultations as $consultation) {
            // Récupérer les correspondants de chaque consultation
            $consultation_correspondances = Consultation_Correspondance::where('consultation_id', $consultation->id)->get();
            
            // Parcourir les correspondances pour cette consultation et récupérer les noms des correspondants
            foreach ($consultation_correspondances as $cc) {
                $correspondant = Correspondance::find($cc->correspondance_id);
                if ($correspondant) {
                    // Ajouter les informations du correspondant à la liste
                    $correspondants[] = [
                        'id' => $correspondant->id,
                        'nomCorresp' => $correspondant->nomCorresp,
                        'prenomCorresp' => $correspondant->prenomCorresp,
                        'telephone' => $correspondant->telephone,
                        'relation' => $correspondant->relation,
                        'created_at' => $correspondant->created_at,
                    ];
                }
            }
        }
        
        // Maintenant $correspondants contient une liste d'informations sur les correspondants de toutes les consultations du patient
        
        return view('pages/voirPatient', compact('personne', 'patient', 'user', 'consultations', 'correspondants'));
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
            $personnel_sante_id = session('patientOuPersSanteConnecteId');

            $lesLogs = Log::select('logs.*', 'personnes.nomPers AS patient_nom')
                ->where('logs.personnel_sante_id', $personnel_sante_id)
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
        return view('pages/recherchePatient', compact('lesLogs', 'personne'));
    }
    public function recherchePatientPost(Request $request)
    {
        //pour la recherche du patient

        $query = Personne::query();

        if (!empty($request->pays)) {
            $query->where('paysPers', $request->pays);
        }

        if (!empty($request->typePiece)) {
            $query->where('typeCin', $request->typePiece);
        }

        if (!empty($request->cin)) {
            $query->where('cin', $request->cin);
        }

        if (!empty($request->prenomPers)) {
            $query->where('prenomPers', $request->prenomPers);
        }
        if (!empty($request->nomPers)) {
            $query->where('nomPers', $request->nomPers);
        }
        if (!empty($request->ville)) {
            $query->where('villePers', $request->ville);
        }

        $personnes = $query->whereHas('patients')->get();



        //pour remplir le nom et prenom de la personne connecté
        $personneId = session('persConnecteId');
        $personne = Personne::where('id', $personneId)->first();



        //pour les logs
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
            //$personneId = session('persConnecteId');
            $personnel_sante_id = session('patientOuPersSanteConnecteId');

            $lesLogs = Log::select('logs.*', 'personnes.nomPers AS patient_nom')
                ->where('logs.personnel_sante_id', $personnel_sante_id)
                ->latest()
                ->take(3)
                ->join('patients', function ($join) {
                    $join->on('logs.patient_id', '=', 'patients.id')
                        ->whereRaw('logs.id IN (SELECT MAX(id) FROM logs GROUP BY patient_id)');
                })
                ->join('personnes', 'patients.personne_id', '=', 'personnes.id')
                ->get();

        }


        return view('pages/listesPatientsRechercher', compact('personnes', 'lesLogs', 'personne'));
    }


    public function listeVisitePatient()
    {
        $personne_id =session('patient_init');
        $patient = Patient::where('personne_id', $personne_id)->first();
        
        $consultations = Consultation::where('patient_id', $patient->id)->get();
        return view('pages/listeVisitePatient',compact('consultations'));
    }
    public function VisitePatient($id)
    {
        $personne_id =session('patient_init');
        $patient = Patient::where('personne_id', $personne_id)->first();
        $consultations = Consultation::where('id', $id)->first();
        $personnel_sante = PersonnelSante::where('id', $consultations->personnelSante_id)->first();
        $medecin = Personne::where('id', $personnel_sante->personne_id)->first();
        $hopital = Hopital::where('id', $consultations->hopital_id)->first();
        $examen_clinique = ExamenClinique::where('consultation_id', $consultations->id)->get();
        $soins_prescrit = SoinPrescrit::where('consultation_id', $consultations->id)->get();
        //dd($examen_clinique);
        return view('pages/VisitePatient',compact('consultations','medecin','hopital','examen_clinique','soins_prescrit'));
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
            $personnel_sante_id = session('patientOuPersSanteConnecteId');
            $lesLogs = Log::select('logs.*', 'personnes.nomPers AS patient_nom')
                ->where('logs.personnel_sante_id', $personnel_sante_id)
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
