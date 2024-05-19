<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $personnel_sante_id
 * @property integer $domaine_interv_id
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property DomaineIntervention $domaineIntervention
 * @property PersonnelSante $personnelSante
 */
class PersonnelSanteDomaineIntervention extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['personnel_sante_id', 'domaine_interv_id', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function domaineIntervention()
    {
        return $this->belongsTo('App\Models\DomaineIntervention', 'domaine_interv_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personnelSante()
    {
        return $this->belongsTo('App\Models\PersonnelSante');
    }
}
