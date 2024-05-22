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
use App\Models\PrescrireMedicament;
use App\Models\TypeSoin;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


use Illuminate\Http\JsonResponse;




use Illuminate\Support\Carbon;


class PostController extends Controller
{

    //fonction validation
    protected function validator(array $data)
    {
        $rules = [

            'numPiece' => ['required', 'string', 'max:255'],
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'sexe' => ['required', 'string', 'max:255'],
            'dateNaiss' => ['required', 'date', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'string', 'min:8'],
            'tel' => ['required', 'string', 'max:255'],
            'profession' => ['required', 'string', 'max:255'],
            'pays' => ['required', 'string', 'max:255'],
            'ville' => ['required', 'string', 'max:255'],
            'typePiece' => ['required', 'string', 'max:255'],
            'piece' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nomPere' => ['required', 'string', 'max:255'],
            'prenomPere' => ['required', 'string', 'max:255'],
            'pathologiePere' => ['required', 'string', 'max:255'],
            'nomMere' => ['required', 'string', 'max:255'],
            'prenomMere' => ['required', 'string', 'max:255'],
            'pathologieMere' => ['required', 'string', 'max:255'],
            'groupS' => ['nullable', 'string', 'max:255'],




        ];

        return Validator::make($data, $rules);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    //fonction create user
    protected function create(array $data)
    {

        return User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'typePersonne' => 'Patient',
            'deleted' => 0,
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\Personne
     */
    //fonction create personne
    protected function createPersonne(array $data)
    {

        return Personne::create([
            'cin' => $data['numPiece'],
            'nomPers' => $data['nom'],
            'prenomPers' => $data['prenom'],
            'sexe' => $data['sexe'],
            'dateNaiss' => $data['dateNaiss'],
            'adressePers' => $data['adresse'],
            'telPers' => $data['tel'],
            'professionPers' => $data['profession'],
            'paysPers' => $data['pays'],
            'villePers' => $data['ville'],
            'imgProfil' => $data['imgProfil'],
            'typeCin' => $data['typePiece'],
            'cheminCin' => $data['piece'],
            'deleted' => 0,
        ]);
    }
    //fonction create patient
    /* protected function createPatient(array $data)
        {
            if(isset($data['personne_id'])){
                return Patient::create([
                    'personne_id' => $data['personne_id'],
                    'user_id' => $data['numPiece'],
                    'groupeSanguinPers' => $data['groupS'],
                    'nomPere' => $data['nomPere'],
                    'prenomPere' => $data['prenomPere'],
                    'pathologiePere' => $data['pathologiePere'],
                    'nomMere' => $data['nomMere'],
                    'prenomMere' => $data['prenomMere'],
                    'pathologieMere' => $data['pathologieMere'],
                    'deleted' => 0,
                ]);
                
            }
            
        }
        
    
        */


    public function createPatientPost(Request $request)
    {
        try {

            $this->validator($request->all())->validate();
            $var = $request->all();
            //je cree le user
            event(new Registered($user = $this->create($var)));
            //je recupere lid de user dans la table user
            $var['user_id'] = $user->id;
            $var['imgProfil'] = 'default.png';

            //je cree la personne
            $personne = $this->createPersonne($var);
            $var['personne_id'] = $personne->id;
            //dd($var);
            //recuperer fichier piece
            if ($request->hasFile('piece') && $request->file('piece')->isValid()) {

                // Récupérer le fichier téléversé
                $piece = $request->file('piece');

                // Déplacer le fichier vers le dossier "uploads"
                $imageName = $request->nom . '.' . $piece->getClientOriginalExtension();
                $piece->storeAs('uploads', $imageName);

                // Ajouter le nom du fichier à l'array des données
                $var['piece'] = $imageName;
            }

            //creer soit un patient soit un personnel de sante

            $var['personne_id'] = $personne->id;

            //$patient = $this->createPatient($var);
            // dd($request);
            Patient::create([
                'personne_id' => $personne->id,
                'user_id' => $user->id,
                'groupeSanguinPers' => $request->groupS,
                'nomPere' => $request->nomPere,
                'prenomPere' => $request->prenomPere,
                'pathologiePere' => $request->pathologiePere,
                'nomMere' => $request->nomMere,
                'prenomMere' => $request->prenomMere,
                'pathologieMere' => $request->pathologieMere,
                'deleted' => 0,
            ]);
            return redirect()->back()->with('success', 'Votre compte a été créé avec succès !');
        } catch (\Exception $e) {

            // En cas d'exception, supprimer l'utilisateur et la personne créés
            if (isset($user)) {
                $user->delete();
            }
            if (isset($personne)) {
                $personne->delete();
            }
            //dd('Une exception a été attrapée : ',  $e->getMessage(), "\n");
            // Gérer les erreurs spécifiques
            if ($request->password != $request->password_confirmation) {
                return redirect()->back()->with('error', 'Mot de passe non conformes.');
            } elseif (User::where('email', $request->email)->exists()) {
                return redirect()->back()->with('error', 'E-mail existant.');
            } else {
                return redirect()->back()->with('error', 'Champs incomplets! Veuillez remplir tous les champs...');
            }
        }
    }





    public function createConsultationPost(Request $request)
    {
        $hopital_id = session('hopital_interv_id');
        $personnelSante_id = session('patientOuPersSanteConnecteId');
        $personneConnecte_id = session('persConnecteId');
        $patientPersonne_id = session('patient_init');
        $patient = Patient::where('personne_id', $patientPersonne_id)->first();


        $consultation = Consultation::create([
            'motif' => $request->motif,
            'anamnèse' => $request->anamnese,
            'signeAssocie' => $request->signeAssocie,
            'antecedant' => $request->antecedant,
            'diagnostiqueRetenu' => $request->diagnostiqueRetenu,
            'bilan' => $request->bilan,
            'allergies' => $request->allergies,
            'patient_id' => $patient->id,
            'personnelSante_id' => $personnelSante_id,
            'hopital_id' => $hopital_id,
            'deleted' => 0,
        ]);
        if ($consultation) {
            SortieMedicale::create([
                'modeSortie' => 'Sortie Normale',
                'DetailsSortie' => 'Sortie libre',
                'consultation_id' => $consultation->id,
                'deleted' => 0,
            ]);


            $user = auth()->user();


            if ($user->typePersonne === 'Personnel de santé') {
                Log::create([
                    'patient_id' => $patient->id,
                    'personnel_sante_id' => $personnelSante_id,
                    'objet' => 'vous a enregistré une consultaion',
                    'hopital_id' => $hopital_id,
                    'deleted' => 0,
                ]);
            }
        }



        return redirect()->back()->with('success', 'La consultation a été créé avec succès !');
    }








    public function createExamenCliniquePost(Request $request)
    {
        $hopital_id = session('hopital_interv_id');
        $personnelSante_id = session('patientOuPersSanteConnecteId');
        $personneConnecte_id = session('persConnecteId');
        $patientPersonne_id = session('patient_init');
        $patient = Patient::where('personne_id', $patientPersonne_id)->first();


        $examenClinique = ExamenClinique::create([
            'description' => $request->description,
            'observation' => $request->observation,
            'consultation_id' => $request->consultation_id,
            'typeExamen_id' => $request->typeExamen_id,
            'deleted' => 0,
        ]);
        if ($examenClinique) {
            $user = auth()->user();


            if ($user->typePersonne === 'Personnel de santé') {
                Log::create([
                    'patient_id' => $patient->id,
                    'personnel_sante_id' => $personnelSante_id,
                    'objet' => 'vous a enregistré un examen clinique',
                    'hopital_id' => $hopital_id,
                    'deleted' => 0,
                ]);
            }
        }



        return redirect()->back()->with('success', 'L\'examen clinique a été créé avec succès !');
    }


    public function createSoinPrescritPost(Request $request)
    {
        $hopital_id = session('hopital_interv_id');
        $personnelSante_id = session('patientOuPersSanteConnecteId');
        $personneConnecte_id = session('persConnecteId');
        $patientPersonne_id = session('patient_init');
        $patient = Patient::where('personne_id', $patientPersonne_id)->first();


        $soinPrescrit = SoinPrescrit::create([
            'detailsSoinPrescrit' => $request->detailsSoinPrescrit,
            'consultation_id' => $request->consultation_id,
            'type_soin_id' =>$request->typeSoin_id,
            'deleted' => 0,
        ]);
        if ($soinPrescrit) {
            $user = auth()->user();


            if ($user->typePersonne === 'Personnel de santé') {
                Log::create([
                    'patient_id' => $patient->id,
                    'personnel_sante_id' => $personnelSante_id,
                    'objet' => 'vous a prescrit un soin',
                    'hopital_id' => $hopital_id,
                    'deleted' => 0,
                ]);
            }
        }



        return redirect()->back()->with('success', 'Le soin a été prescrit avec succès !');
    }





    public function createAnalysePrescritPost(Request $request)
    {
        $hopital_id = session('hopital_interv_id');
        $personnelSante_id = session('patientOuPersSanteConnecteId');
        $personneConnecte_id = session('persConnecteId');
        $patientPersonne_id = session('patient_init');
        $patient = Patient::where('personne_id', $patientPersonne_id)->first();


        $analysePrescrit = PrescrireAnalyse::create([
            'detailsAnalyse' => $request->detailsAnalyse,
            'consultation_id' => $request->consultation_id,
            'typeAnalyse_id' => $request->typeAnalyse_id,
            'deleted' => 0,
        ]);
        if ($analysePrescrit) {
            $user = auth()->user();


            if ($user->typePersonne === 'Personnel de santé') {
                Log::create([
                    'patient_id' => $patient->id,
                    'personnel_sante_id' => $personnelSante_id,
                    'objet' => 'vous a prescrit une analyse',
                    'hopital_id' => $hopital_id,
                    'deleted' => 0,
                ]);
            }
        }



        return redirect()->back()->with('success', 'Le soin a été prescrit avec succès !');
    }


    public function createOrdonnancePrescritPost(Request $request)
    {
        $hopital_id = session('hopital_interv_id');
        $personnelSante_id = session('patientOuPersSanteConnecteId');
        $personneConnecte_id = session('persConnecteId');
        $patientPersonne_id = session('patient_init');
        $patient = Patient::where('personne_id', $patientPersonne_id)->first();


        $ordonnancePrescrit = Ordonnance::create([
            'consultation_id' => $request->consultation_id,
            'deleted' => 0,
        ]);
        if ($ordonnancePrescrit) {
            PrescrireMedicament::create([
                'qte' => $request->qte,
                'dose' => $request->dose,
                'nbFois' => $request->nbFois,
                'intervPrise' => $request->intervPrise,
                'datePremPrise' => $request->datePremPrise,
                'autresInstructions' => $request->autresInstructions,
                'ordonnance_id' => $ordonnancePrescrit->id,
                'medicament_id' => $request->medicament_id,
                'deleted' => 0,
            ]);
            $user = auth()->user();


            if ($user->typePersonne === 'Personnel de santé') {
                Log::create([
                    'patient_id' => $patient->id,
                    'personnel_sante_id' => $personnelSante_id,
                    'objet' => 'vous a prescrit une Ordonnance',
                    'hopital_id' => $hopital_id,
                    'deleted' => 0,
                ]);
            }
        }

        return redirect()->back()->with('success', 'L\'ordonnance a été prescrit avec succès !');
    }



    public function createMedicamentPrescritPost(Request $request)
    {
        $hopital_id = session('hopital_interv_id');
        $personnelSante_id = session('patientOuPersSanteConnecteId');
        $personneConnecte_id = session('persConnecteId');
        $patientPersonne_id = session('patient_init');
        $patient = Patient::where('personne_id', $patientPersonne_id)->first();


        $medicamentPrescrit = PrescrireMedicament::create([
            'qte' => $request->qte,
            'dose' => $request->dose,
            'nbFois' => $request->nbFois,
            'intervPrise' => $request->intervPrise,
            'datePremPrise' => $request->datePremPrise,
            'autresInstructions' => $request->autresInstructions,
            'ordonnance_id' => $request->ordonnance_id,
            'medicament_id' =>$request->medicament_id,
            'deleted' => 0,
        ]);
        if ($medicamentPrescrit) {
            $user = auth()->user();


            if ($user->typePersonne === 'Personnel de santé') {
                Log::create([
                    'patient_id' => $patient->id,
                    'personnel_sante_id' => $personnelSante_id,
                    'objet' => 'a mis à jour une Ordonnance',
                    'hopital_id' => $hopital_id,
                    'deleted' => 0,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Le médicament a été ajouté avec succès !');
    }

    public function createfichierConsultationPost(Request $request)
    {
        $hopital_id = session('hopital_interv_id');
        $personnelSante_id = session('patientOuPersSanteConnecteId');
        $personneConnecte_id = session('persConnecteId');
        $patientPersonne_id = session('patient_init');
        $patient = Patient::where('personne_id', $patientPersonne_id)->first();

        if ($request->hasFile('chemin') && $request->file('chemin')->isValid()) {

            // Récupérer le fichier téléversé
            $chemin = $request->file('chemin');

            // Déplacer le fichier vers le dossier "uploads"
            $imageName = $request->libFichierConsultation . '.' . $chemin->getClientOriginalExtension();
            $chemin->storeAs('uploads', $imageName);

            // Ajouter le nom du fichier à l'array des données
            $var['chemin'] = $imageName;
        }
        if ($imageName) {
            $fichierConsultation = FichierConsultation::create([
                'libFichierConsultation' => $request->libFichierConsultation,
                'cheminFichierConsultation' => $imageName,
                'consultation_id' => $request->consultation_id,
                'deleted' => 0,
            ]);
            if ($fichierConsultation) {

                // Récupérer l'utilisateur connecté
                $user = auth()->user();


                if ($user->typePersonne === 'Personnel de santé') {
                    Log::create([
                        'patient_id' => $patient->id,
                        'personnel_sante_id' => $personnelSante_id,
                        'objet' => 'a ajouté un fichier pour la consultation ',
                        'hopital_id' => $hopital_id,
                        'deleted' => 0,
                    ]);
                }
            }
            return redirect()->back()->with('success', 'Le fichier a été ajouté avec succès !');
        }
    }




}
