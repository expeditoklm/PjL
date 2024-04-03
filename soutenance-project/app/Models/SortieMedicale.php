<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $consultation_id
 * @property string $modeSortie
 * @property string $DetailsSortie
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property Dece[] $deces
 * @property Evacuation[] $evacuations
 * @property Permission[] $permissions
 * @property Consultation $consultation
 */
class SortieMedicale extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['consultation_id', 'modeSortie', 'DetailsSortie', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function deces()
    {
        return $this->hasMany('App\Models\Dece', 'sortieMedicale_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function evacuations()
    {
        return $this->hasMany('App\Models\Evacuation', 'sortieMedicale_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function permissions()
    {
        return $this->hasMany('App\Models\Permission', 'sortieMedicale_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function consultation()
    {
        return $this->belongsTo('App\Models\Consultation');
    }
}
