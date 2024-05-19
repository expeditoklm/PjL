<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $libDomaine
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property PersonnelSanteDomaineIntervention[] $personnelSanteDomaineInterventions
 */
class DomaineIntervention extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['libDomaine', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personnelSanteDomaineInterventions()
    {
        return $this->hasMany('App\Models\PersonnelSanteDomaineIntervention', 'domaine_interv_id');
    }
}
