<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $libDomaine
 * @property integer $personnelSante_id
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property PersonnelSante $personnelSante
 */
class DomaineIntervention extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['libDomaine', 'personnelSante_id', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personnelSante()
    {
        return $this->belongsTo('App\Models\PersonnelSante', 'personnelSante_id');
    }
}
