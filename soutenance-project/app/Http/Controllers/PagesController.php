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
use App\Models\Deces;
use App\Models\Evacuation;
use App\Models\FaireAnalyse;
use App\Models\Ordonnance;
use App\Models\PrescrireAnalyse;
use App\Models\SortieMedicale;
use App\Models\AdministreSoin;
use App\Models\FichierConsultation;
use App\Models\NotePatient;
use App\Models\Permission;
use App\Models\TypeSoin;
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
        $hopital_id=session('hopital_interv_id');
        $personnSante_id = session('patientOuPersSanteConnecteId');
        //$personneConnecte_id = session('persConnecteId');

        session()->put('patient_init', $id);
        $personne = Personne::findOrFail($id);
        $patient = Patient::where('personne_id', $personne->id)->first();
        $user = User::where('id', $patient->user_id)->first();
        $patientPersonne_id = session('patient_init');
        $patient = Patient::where('personne_id', $patientPersonne_id)->first();
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
        

        Log::create([
            'patient_id' => $patient->id,
            'personnel_sante_id' => $personnSante_id,
            'objet' => 'a visité votre dossier médical',
            'hopital_id' => $hopital_id,
            'deleted' => 0,
        ]);
        // Maintenant $correspondants contient une liste d'informations sur les correspondants de toutes les consultations du patient
        
        return view('pages/voirPatient', compact('personne', 'patient', 'user', 'consultations', 'correspondants'));
    }
    

    public function recherchePatient()
    {
        $domainesIntervention=[];
        $personneId = session('persConnecteId');
        $personne = Personne::where('id', $personneId)->first();
        if($personne->personnelSantes){

            $personnelSante = PersonnelSante::where('personne_id', $personne->id)->first();
            $domainesIntervention = $personnelSante->personnelSanteDomaineInterventions;
      
        }



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
        return view('pages/recherchePatient', compact('lesLogs', 'personne','domainesIntervention'));
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
        
        $consultations = Consultation::where('id', $id)->first();
        $personnel_sante = PersonnelSante::where('id', $consultations->personnelSante_id)->first();
        $medecin = Personne::where('id', $personnel_sante->personne_id)->first();
        $hopital = Hopital::where('id', $consultations->hopital_id)->first();
        $examen_clinique = ExamenClinique::where('consultation_id', $consultations->id)->get();
        $soins_prescrit = SoinPrescrit::where('consultation_id', $consultations->id)->get();
        $analyses_prescrit = PrescrireAnalyse::where('consultation_id', $consultations->id)->get();
        $consultation = Consultation::with('ordonnances.prescrireMedicaments.medicament')->find($consultations->id);
        $sortie_medicale = SortieMedicale::where('consultation_id', $consultations->id)->first();
        $sortie_medicale_info=[];
        if($sortie_medicale->modeSortie == "Evacuation"){
            $sortie_medicale_info = Evacuation::where('sortieMedicale_id', $sortie_medicale->id)->first();
        }elseif($sortie_medicale->modeSortie == "Permission"){
            $sortie_medicale_info = Permission::where('sortieMedicale_id', $sortie_medicale->id)->first();
        }elseif($sortie_medicale->modeSortie == "Deces"){
            $sortie_medicale_info = Deces::where('sortieMedicale_id', $sortie_medicale->id)->first();
        }
        $consultation_id = $id;
        $fichier_consultation = FichierConsultation::where('consultation_id', $consultations->id)->get();



       // dd( $consultations->id);
        return view('pages/VisitePatient',compact('consultations','medecin','hopital','examen_clinique','soins_prescrit','analyses_prescrit','consultation','sortie_medicale','sortie_medicale_info','consultation_id','fichier_consultation'));
    }
    public function listeAnalysePatient()
    {
        $personne_id =session('patient_init');
        $patient = Patient::where('personne_id', $personne_id)->first();
        
        $analyses = FaireAnalyse::where('patient_id', $patient->id)->get();
        return view('pages/listeAnalysePatient',compact('analyses'));
    }
    public function AnalysePatient($id)
    {
        $analyse = FaireAnalyse::where('id', $id)->first();
        return view('pages/analysePatient',compact('analyse'));
    }

    public function listeSoinPatient()
    {
        $personne_id = session('patient_init');
        $patient = Patient::where('personne_id', $personne_id)->first();
    
        // Vérifier si $patient existe
        if (!$patient) {
            // Redirection ou affichage d'un message d'erreur
            return redirect()->route('pages.error-404')->with('error', 'Patient introuvable.');
        }
    
        $soins = AdministreSoin::where('patient_id', $patient->id)->get();
    
        // Vérifier si $soins existe
        if ($soins->isEmpty()) {
            // Redirection ou affichage d'un message d'erreur
            return redirect()->route('pages.error-404')->with('error', 'Aucun soin trouvé pour ce patient.');
        }
    
        // Retourner la vue avec les soins
        return view('pages/listeSoinPatient', compact('soins'));
    }
    
    public function SoinPatient($id)
    {
        $soinAdmis = AdministreSoin::where('id', $id)->first();
        return view('pages/soinPatient',compact('soinAdmis'));
    }
    public function listePatientRechercher()
    {
        return view('pages/listesPatientsRechercher');
    }

    public function notePatient()
    {
        $personne_id =session('patient_init');
        $patient = Patient::where('personne_id', $personne_id)->first();
        $notes = NotePatient::where('patient_id', $patient->id)->get();

        return view('pages/notePatient',compact('notes'));
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
