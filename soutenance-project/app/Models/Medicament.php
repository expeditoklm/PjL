<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $libMedicament
 * @property string $formMedicament
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property PrescrireMedicament[] $prescrireMedicaments
 */
class Medicament extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['libMedicament', 'formMedicament', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prescrireMedicaments()
    {
        return $this->hasMany('App\Models\PrescrireMedicament');
    }
}



