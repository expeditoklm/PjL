<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $logo
 * @property string $libHopital
 * @property string $paysHopital
 * @property string $villeHopital
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property AdministreSoin[] $administreSoins
 * @property Consultation[] $consultations
 * @property FaireAnalysis[] $faireAnalyses
 * @property PersonnelSante_Hopital[] $personnelSanteHopitals
 */
class Hopital extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['logo', 'libHopital', 'paysHopital', 'ville','Hopital', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function administreSoins()
    {
        return $this->hasMany('App\Models\AdministreSoin');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultations()
    {
        return $this->hasMany('App\Models\Consultation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function faireAnalyses()
    {
        return $this->hasMany('App\Models\FaireAnalysis');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personnelSanteHopitals()
    {
        return $this->hasMany('App\Models\PersonnelSante_Hopital');
    }
}
