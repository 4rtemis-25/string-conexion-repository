<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 *
 * @property $id
 * @property $nombre_proyecto
 * @property $descripcion
 * @property $imagen_proyecto
 * @property $nombre_equipo1
 * @property $nombre_equipo_creador
 * @property $created_at
 * @property $updated_at
 *
 * @property Equipo $equipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proyecto extends Model
{
    
    static $rules = [
		'nombre_proyecto' => 'required',
		'descripcion' => 'required',
		'imagen_proyecto' => 'required',
		'nombre_equipo1' => 'required',
		'nombre_equipo_creador' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_proyecto','descripcion','imagen_proyecto','nombre_equipo1','nombre_equipo_creador'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Models\Equipo', 'id', 'nombre_equipo_creador');
    }
    

}
