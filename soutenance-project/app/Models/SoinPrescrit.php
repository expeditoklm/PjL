<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $consultation_id
 * @property string $libSoinPrescrit
 * @property string $detailsSoinPrescrit
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property Consultation $consultation
 */
class SoinPrescrit extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['consultation_id', 'libSoinPrescrit', 'detailsSoinPrescrit', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function consultation()
    {
        return $this->belongsTo('App\Models\Consultation');
    }
    
}
