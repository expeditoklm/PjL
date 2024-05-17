<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $ordonnance_id
 * @property integer $medicament_id
 * @property string $qte
 * @property string $dose
 * @property string $nbFois
 * @property string $intervPrise
 * @property string $datePremPrise
 * @property string $autresInstructions
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property Medicament $medicament
 * @property Ordonnance $ordonnance
 */
class PrescrireMedicament extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['ordonnance_id', 'medicament_id', 'qte', 'dose', 'nbFois', 'intervPrise', 'datePremPrise', 'autresInstructions', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function medicament()
    {
        return $this->belongsTo('App\Models\Medicament');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ordonnance()
    {
        return $this->belongsTo('App\Models\Ordonnance');
    }
}
