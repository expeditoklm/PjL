<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $patient_id
 * @property integer $personnel_sante_id
 * @property integer $hopital_id
 * @property string $objet
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property Hopital $hopital
 * @property Patient $patient
 * @property PersonnelSante $personnelSante
 */
class Log extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['patient_id', 'personnel_sante_id', 'hopital_id', 'objet', 'deleted', 'created_at', 'updated_at'];

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
        return $this->belongsTo('App\Models\PersonnelSante');
    }
}
