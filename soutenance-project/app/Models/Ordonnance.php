<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $consultation_id
 * @property string $libOrdonnance
 * @property string $formeMedocs
 * @property string $qteAchete
 * @property string $nbfois
 * @property string $interDePrise
 * @property string $datePremierePrise
 * @property string $autresInstructions
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property Consultation $consultation
 */
class Ordonnance extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['consultation_id', 'libOrdonnance', 'formeMedocs', 'qteAchete', 'nbfois', 'interDePrise', 'datePremierePrise', 'autresInstructions', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function consultation()
    {
        return $this->belongsTo('App\Models\Consultation');
    }
}
