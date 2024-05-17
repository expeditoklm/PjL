<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeSoin extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['libTypeSoin','deleted', 'created_at', 'updated_at'];
/**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    // Relation avec les soins de ce type
    public function soins()
    {
        return $this->hasMany(SoinPrescrit::class, 'type_soin_id');
    }
}
