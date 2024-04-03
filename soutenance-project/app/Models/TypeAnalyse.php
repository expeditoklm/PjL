<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $libÄnalyse
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property FaireAnalysis[] $faireAnalyses
 * @property PrescrireAnalysis[] $prescrireAnalyses
 */
class TypeAnalyse extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['libÄnalyse', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function faireAnalyses()
    {
        return $this->hasMany('App\Models\FaireAnalysis', 'typeAnalyse_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prescrireAnalyses()
    {
        return $this->hasMany('App\Models\PrescrireAnalysis', 'typeAnalyse_id');
    }
}
