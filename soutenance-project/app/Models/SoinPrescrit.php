<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $consultation_id
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
    protected $fillable = ['consultation_id', 'detailsSoinPrescrit', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function consultation()
    {
        return $this->belongsTo('App\Models\Consultation');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function typeSoin()
    {
        return $this->belongsTo(TypeSoin::class, 'type_soin_id');
    }
}
