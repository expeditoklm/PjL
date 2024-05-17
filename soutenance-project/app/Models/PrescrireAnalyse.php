<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $consultation_id
 * @property string $detailsAnalyse
 * @property integer $typeAnalyse_id
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property Consultation $consultation
 * @property TypeAnalysis $typeAnalysis
 */
class PrescrireAnalyse extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['consultation_id', 'detailsAnalyse', 'typeAnalyse_id', 'deleted', 'created_at', 'updated_at'];

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
    public function typeAnalyse()
    {
        return $this->belongsTo('App\Models\TypeAnalyse', 'typeAnalyse_id');
    }
}
