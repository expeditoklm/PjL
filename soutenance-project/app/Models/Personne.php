<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $cin
 * @property string $nomPers
 * @property string $prenomPers
 * @property boolean $sexe
 * @property string $dateNaiss
 * @property string $adressePers
 * @property string $emailPers
 * @property string $mdpPers
 * @property string $telPers
 * @property string $professionPers
 * @property string $paysPers
 * @property string $villePers
 * @property string $imgProfil
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property FichierAdministratif[] $fichierAdministratifs
 * @property Patient[] $patients
 * @property PersonnelSante[] $personnelSantes
 */
class Personne extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['cin', 'nomPers', 'prenomPers', 'sexe', 'dateNaiss', 'adressePers', 'emailPers', 'mdpPers', 'telPers', 'professionPers', 'paysPers', 'villePers', 'imgProfil', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fichierAdministratifs()
    {
        return $this->hasMany('App\Models\FichierAdministratif');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function patients()
    {
        return $this->hasMany('App\Models\Patient');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personnelSantes()
    {
        return $this->hasMany('App\Models\PersonnelSante');
    }
}
