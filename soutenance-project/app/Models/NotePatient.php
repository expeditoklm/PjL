<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $patient_id
 * @property string $note
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property Patient $patient
 */
class NotePatient extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['patient_id', 'note', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }
}
