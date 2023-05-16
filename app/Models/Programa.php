<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Programa
 *
 * @property $id
 * @property $nombre_programa
 * @property $ficha_programa
 * @property $cadena_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Aprendice[] $aprendices
 * @property Cadena $cadena
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Programa extends Model
{
    
    static $rules = [
		'nombre_programa' => 'required',
		'ficha_programa' => 'required',
		'cadena_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_programa','ficha_programa','cadena_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function aprendices()
    {
        return $this->hasMany('App\Models\Aprendice', 'programa_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cadena()
    {
        return $this->hasOne('App\Models\Cadena', 'id', 'cadena_id');
    }
    

}
