<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $libTypeSoin
 * @property string $created_at
 * @property string $updated_at
 * @property AdministreSoin[] $administreSoins
 * @property SoinPrescrit[] $soinPrescrits
 */
class TypeSoin extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['libTypeSoin', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function administreSoins()
    {
        return $this->hasMany('App\Models\AdministreSoin', 'typeSoin_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function soinPrescrits()
    {
        return $this->hasMany('App\Models\SoinPrescrit');
    }
}
