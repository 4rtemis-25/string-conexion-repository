<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cadena
 *
 * @property $id
 * @property $nombre_cadena
 * @property $created_at
 * @property $updated_at
 *
 * @property Aprendice[] $aprendices
 * @property Programa[] $programas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cadena extends Model
{
    
    static $rules = [
		'nombre_cadena' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_cadena'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function aprendices()
    {
        return $this->hasMany('App\Models\Aprendice', 'cadena_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function programas()
    {
        return $this->hasMany('App\Models\Programa', 'cadena_id', 'id');
    }
    

}
