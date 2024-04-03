<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nomCorresp
 * @property string $prenomCorresp
 * @property string $telephone
 * @property string $relation
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property ConsultationCorrespondance[] $consultationCorrespondances
 */
class Correspondance extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nomCorresp', 'prenomCorresp', 'telephone', 'relation', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultationCorrespondances()
    {
        return $this->hasMany('App\Models\ConsultationCorrespondance');
    }
}
