<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $patient_id
 * @property integer $hopital_id
 * @property integer $typeSoin_id
 * @property string $detailsAdministreSoins
 * @property integer $personnelSante_id
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property Hopital $hopital
 * @property Patient $patient
 * @property PersonnelSante $personnelSante
 * @property TypeSoin $typeSoin
 */
class AdministreSoin extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['patient_id', 'hopital_id', 'typeSoin_id', 'detailsAdministreSoins', 'personnelSante_id', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hopital()
    {
        return $this->belongsTo('App\Models\Hopital');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personnelSante()
    {
        return $this->belongsTo('App\Models\PersonnelSante', 'personnelSante_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function typeSoin()
    {
        return $this->belongsTo('App\Models\TypeSoin', 'typeSoin_id');
    }
}
