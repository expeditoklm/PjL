<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Personne;
use App\Models\Patient;
use App\Models\PersonnelSante;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    //fonction validation
    protected function validator(array $data)
    {
    $rules = [
        
        'personne_id' => ['nullable', 'number', 'max:255'],
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
        'typePersonne' => ['required', 'string', 'max:255'],
        'user_id' => ['nullable', 'number', 'max:255'],

        'piece' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ];

    // Ajoutez des règles de validation conditionnelles pour le personnel de santé
    if ($data['typePersonne'] === 'Personnel de santé') {
        $rules['nomPere'] = ['nullable', 'string', 'max:255'];
        $rules['prenomPere'] = ['nullable', 'string', 'max:255'];
        $rules['pathologiePere'] = ['nullable', 'string', 'max:255'];
        $rules['nomMere'] = ['nullable', 'string', 'max:255'];
        $rules['prenomMere'] = ['nullable', 'string', 'max:255'];
        $rules['pathologieMere'] = ['nullable', 'string', 'max:255'];
        $rules['groupS'] = ['nullable', 'string', 'max:255'];
        $rules['numService'] = ['required', 'string', 'max:255'];
        $rules['personnelSante'] = ['required', 'string', 'max:255'];
        
        
    } else {
        // Règles de validation pour un patient
        $rules['nomPere'] = ['required', 'string', 'max:255'];
        $rules['prenomPere'] = ['required', 'string', 'max:255'];
        $rules['pathologiePere'] = ['required', 'string', 'max:255'];
        $rules['nomMere'] = ['required', 'string', 'max:255'];
        $rules['prenomMere'] = ['required', 'string', 'max:255'];
        $rules['pathologieMere'] = ['required', 'string', 'max:255'];
        $rules['groupS'] = ['required', 'string', 'max:255'];
    }

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
            'typePersonne' => $data['typePersonne'],
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
    

    //fonction create personnel de sante
    protected function createPersonnelSante(array $data)
    {
        return PersonnelSante::create([
            'typePersonnel' => $data['personnelSante'],
            'numServicePersonnel' => $data['numService'],
            'user_id' => $data['user_id'],
            'personne_id' => $data['personne_id'],
            'validated' => 0,
            'deleted' => 0,
        ]);
    }
    */


    public function register(Request $request)
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
            if ($var['typePersonne'] === 'Patient') {
                $var['personne_id'] = $personne->id;
                
                //$patient = $this->createPatient($var);
               // dd($request);
                Patient::create([
                    'personne_id' => $personne->id,
                    'user_id' => $user->id,
                    'groupeSanguinPers' =>$request->groupS,
                    'nomPere' => $request->nomPere,
                    'prenomPere' => $request->prenomPere,
                    'pathologiePere' => $request->pathologiePere,
                    'nomMere' => $request->nomMere,
                    'prenomMere' =>$request->prenomMere,
                    'pathologieMere' => $request->pathologieMere,
                    'deleted' => 0,
                ]);
                return redirect()->route('login')->with('success', 'Votre compte a été créé avec succès. Veuillez vous connecter pour continuer.');
            }
            elseif($var['typePersonne'] === 'Personnel de santé')
            {
                    PersonnelSante::create([
                    'typePersonnel' => $request->personnelSante,
                    'numServicePersonnel' => $request->numService,
                    'user_id' => $user->id,
                    'personne_id' => $personne->id,
                    'validated' => 0,
                    'deleted' => 0,
                ]);
                return redirect()->route('pages.page-attente');
            }
            
            return redirect()->route('pages.page-attente');


        }
        catch (\Exception $e)
        {

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
                return redirect()->back()->with('error', 'Mots de passe non conformes.');
            }
            elseif (User::where('email', $request->email)->exists()) {
                return redirect()->back()->with('error', 'E-mail existant.');
            }
            else{
                return redirect()->back()->with('error', 'Champs incomplets! Veuillez remplir tous les champs...');
            }
        }
    }
        

}
