<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $hopital_id
 * @property integer $personnelSante_id
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property Hopital $hopital
 * @property PersonnelSante $personnelSante
 */
class PersonnelSante_Hopital extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['hopital_id', 'personnelSante_id', 'deleted', 'created_at', 'updated_at'];

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
    public function personnelSante()
    {
        return $this->belongsTo('App\Models\PersonnelSante', 'personnelSante_id');
    }
}
