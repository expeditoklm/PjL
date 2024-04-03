<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $libTypefichierAdministratifs
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property FichierAdministratif[] $fichierAdministratifs
 */
class TypeFichierAdministratif extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['libTypefichierAdministratifs', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fichierAdministratifs()
    {
        return $this->hasMany('App\Models\FichierAdministratif', 'typeFichierAdministratifs_id');
    }
}
