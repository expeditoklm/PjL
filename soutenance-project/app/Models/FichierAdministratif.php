<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $personne_id
 * @property string $numFichierAdministratifs
 * @property string $cheminFichierAdministratifs
 * @property integer $typeFichierAdministratifs_id
 * @property boolean $deleted
 * @property string $created_at
 * @property string $updated_at
 * @property Personne $personne
 * @property TypeFichierAdministratif $typeFichierAdministratif
 */
class FichierAdministratif extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['personne_id', 'numFichierAdministratifs', 'cheminFichierAdministratifs', 'typeFichierAdministratifs_id', 'deleted', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personne()
    {
        return $this->belongsTo('App\Models\Personne');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function typeFichierAdministratif()
    {
        return $this->belongsTo('App\Models\TypeFichierAdministratif', 'typeFichierAdministratifs_id');
    }
}
