<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $libFichierAnalyse
 * @property string $cheminFichierAnalyse
 * @property integer $FaireAnalyse_id
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property FaireAnalysis $faireAnalysis
 */
class FichierAnalyse extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['libFichierAnalyse', 'cheminFichierAnalyse', 'FaireAnalyse_id', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faireAnalysis()
    {
        return $this->belongsTo('App\Models\FaireAnalysis', 'FaireAnalyse_id');
    }
}
