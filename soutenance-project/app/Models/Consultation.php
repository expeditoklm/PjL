<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $patient_id
 * @property integer $hopital_id
 * @property string $motif
 * @property string $anamnèse
 * @property string $signeAssocie
 * @property string $antecedant
 * @property string $diagnostiqueRetenu
 * @property string $bilan
 * @property string $allergies
 * @property integer $personnelSante_id
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property ConsultationCorrespondance[] $consultationCorrespondances
 * @property Hopital $hopital
 * @property Patient $patient
 * @property PersonnelSante $personnelSante
 * @property ExamenClinique[] $examenCliniques
 * @property FichierConsultation[] $fichierConsultations
 * @property Ordonnance[] $ordonnances
 * @property PrescrireAnalysis[] $prescrireAnalyses
 * @property SoinPrescrit[] $soinPrescrits
 * @property SortieMedicale[] $sortieMedicales
 */
class Consultation extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['patient_id', 'hopital_id', 'motif', 'anamnèse', 'signeAssocie', 'antecedant', 'diagnostiqueRetenu', 'bilan', 'allergies', 'personnelSante_id', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultationCorrespondances()
    {
        return $this->hasMany('App\Models\ConsultationCorrespondance');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hopital()
    {
        return $this->belongsTo('App\Models\Hopital');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function patient()
    {
        return $this->belongsTo('App\Models\Patient');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personnelSante()
    {
        return $this->belongsTo('App\Models\PersonnelSante', 'personnelSante_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function examenCliniques()
    {
        return $this->hasMany('App\Models\ExamenClinique');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fichierConsultations()
    {
        return $this->hasMany('App\Models\FichierConsultation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ordonnances()
    {
        return $this->hasMany('App\Models\Ordonnance');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prescrireAnalyses()
    {
        return $this->hasMany('App\Models\PrescrireAnalysis');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function soinPrescrits()
    {
        return $this->hasMany('App\Models\SoinPrescrit');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sortieMedicales()
    {
        return $this->hasMany('App\Models\SortieMedicale');
    }
}
