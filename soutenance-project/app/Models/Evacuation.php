<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $motifEvacuation
 * @property string $hopitalDestination
 * @property integer $sortieMedicale_id
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property SortieMedicale $sortieMedicale
 */
class Evacuation extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['motifEvacuation', 'hopitalDestination', 'sortieMedicale_id', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sortieMedicale()
    {
        return $this->belongsTo('App\Models\SortieMedicale', 'sortieMedicale_id');
    }
}
