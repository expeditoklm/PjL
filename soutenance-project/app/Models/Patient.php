<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $personne_id
 * @property string $groupeSanguinPers
 * @property string $nomPere
 * @property string $prenomPere
 * @property string $pathologiePere
 * @property string $nomMere
 * @property string $prenomMere
 * @property string $pathologieMere
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property AdministreSoin[] $administreSoins
 * @property Consultation[] $consultations
 * @property FaireAnalysis[] $faireAnalyses
 * @property NotePatient[] $notePatients
 * @property Personne $personne
 */
class Patient extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['personne_id', 'groupeSanguinPers', 'nomPere', 'prenomPere', 'pathologiePere', 'nomMere', 'prenomMere', 'pathologieMere', 'deleted', 'created_at', 'updated_at'];

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
    public function notePatients()
    {
        return $this->hasMany('App\Models\NotePatient');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personne()
    {
        return $this->belongsTo('App\Models\Personne');
    }
}
