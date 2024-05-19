<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $personne_id
 * @property integer $user_id
 * @property string $typePersonnel
 * @property string $numServicePersonnel
 * @property boolean $validated
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property AdministreSoin[] $administreSoins
 * @property Consultation[] $consultations
 * @property FaireAnalysis[] $faireAnalyses
 * @property Log[] $logs
 * @property PersonnelSanteHopital[] $personnelSanteHopitals
 * @property PersonnelSanteDomaineIntervention[] $personnelSanteDomaineInterventions
 * @property Personne $personne
 * @property User $user
 */
class PersonnelSante extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['personne_id', 'user_id', 'typePersonnel', 'numServicePersonnel', 'validated', 'deleted', 'created_at', 'updated_at'];

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
    public function faireAnalyses()
    {
        return $this->hasMany('App\Models\FaireAnalysis', 'personnelSante_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function logs()
    {
        return $this->hasMany('App\Models\Log');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personnelSanteHopitals()
    {
        return $this->hasMany('App\Models\PersonnelSante_Hopital', 'personnelSante_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personnelSanteDomaineInterventions()
    {
        return $this->hasMany('App\Models\PersonnelSanteDomaineIntervention');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personne()
    {
        return $this->belongsTo('App\Models\Personne');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
