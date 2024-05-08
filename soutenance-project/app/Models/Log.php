<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    /**
     * Les attributs qui peuvent être assignés en masse.
     *
     * @var array
     */
    protected $fillable = [
        'patient_id', 'personnel_sante_id', 'objet', 'deleted'
    ];

    /**
     * Obtenez le patient associé à ce journal.
     */
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    /**
     * Obtenez le personnel de santé associé à ce journal.
     */
    public function personnelSante()
    {
        return $this->belongsTo(PersonnelSante::class);
    }
}
