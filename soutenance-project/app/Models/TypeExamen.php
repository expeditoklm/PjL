<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $libTypeExamen
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property ExamenClinique[] $examenCliniques
 */
class TypeExamen extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['libTypeExamen', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function examenCliniques()
    {
        return $this->hasMany('App\Models\ExamenClinique', 'typeExamen_id');
    }
}
