<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $correspondance_id
 * @property integer $consultation_id
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property Consultation $consultation
 * @property Correspondance $correspondance
 */
class Consultation_Correspondance extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['correspondance_id', 'consultation_id', 'deleted', 'created_at', 'updated_at'];

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
    public function correspondance()
    {
        return $this->belongsTo('App\Models\Correspondance');
    }
}
