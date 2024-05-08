<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Patient;

use App\Models\Personne;
use Illuminate\Http\Request;
use App\Models\PersonnelSante;
use App\Models\PersonnelSante_Hopital;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Symfony\Component\Console\Question\Question;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/base';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $type = $request->input('typePersonne');

        // Recherche de l'utilisateur dans la table User
        $user = User::where('email', $credentials['email'])->first();

        if ($user) {
            if ($user->typePersonne === $type) {
                $personne = Personne::where('user_id', $user->id)->first();
                
                //$personne = $user->personne;
                
                if ($personne->personnelSantes) {
                    
                    $personnelSante = PersonnelSante::where('personne_id', $personne->id)->first();
                    
                    $typePersonnelSante = $request->input('personnelSante');
                    //dd($typePersonnelSante);
                    if ($personnelSante->typePersonnel === $typePersonnelSante) {
                        // Vérifier le numéro identifiant du personnel de santé
                        $numIdentifiant = $request->input('idPersonnelSante');
                        if ($personnelSante->numServicePersonnel === $numIdentifiant) {
                            $idHopital = $request->input('idHopital');
                            $hopitalIntervention = $personnelSante->personnelSanteHopitals->pluck('hopital_id')->toArray();

                            if (in_array($idHopital, $hopitalIntervention)) {
                                // Vérification de l'authentification pour le personnel de santé
                                if (Auth::attempt($credentials)) {
                                    $user = Auth::user();
                                    return redirect()->intended('base');
                                }
                            } else {
                                return redirect('login')->with(
                                    'error',
                                    'Hopital d\'intervention incorrect '
                                );
                            }
                        } else {
                            return redirect('login')->with('error', 'Numéro d\'ordre incorrect');
                        }
                    } else {
                        return redirect('login')->with('error', 'Type de pers.santé incorrect');
                    }
                }elseif ($personne->patients) {
                    $patient = $personne->patients->first();
                    // Vérification de l'authentification pour le personnel de santé
                    if (Auth::attempt($credentials)) {
                        $user = Auth::user();
                        return redirect()->route('pages.voir-patient');
                    }
                }
            } else {
                return redirect('login')->with('error', 'choix type personne incorrect');
            }
        }

        return redirect('login')->with('error', 'Identifiants incorrects');
    }
}
