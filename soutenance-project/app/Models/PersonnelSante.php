<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $personne_id
 * @property string $typePersonnel
 * @property string $numServicePersonnel
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property AdministreSoin[] $administreSoins
 * @property Consultation[] $consultations
 * @property DomaineIntervention[] $domaineInterventions
 * @property FaireAnalysis[] $faireAnalyses
 * @property PersonnelSanteHopital[] $personnelSanteHopitals
 * @property Personne $personne
 */
class PersonnelSante extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['personne_id', 'typePersonnel', 'numServicePersonnel', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function administreSoins()
    {
        return $this->hasMany('App\Models\AdministreSoin', 'personnelSante_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultations()
    {
        return $this->hasMany('App\Models\Consultation', 'personnelSante_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function domaineInterventions()
    {
        return $this->hasMany('App\Models\DomaineIntervention', 'personnelSante_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function faireAnalyses()
    {
        return $this->hasMany('App\Models\FaireAnalysis', 'personnelSante_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personnelSanteHopitals()
    {
        return $this->hasMany('App\Models\PersonnelSanteHopital', 'personnelSante_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personne()
    {
        return $this->belongsTo('App\Models\Personne');
    }
}
