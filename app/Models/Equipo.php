<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipo
 *
 * @property $id
 * @property $nombre_equipo
 * @property $nombre_integrante1
 * @property $nombre_integrante2
 * @property $nombre_integrante3
 * @property $servicios_ofrecidos
 * @property $diponibilidad
 * @property $correo_usuario_creador
 * @property $created_at
 * @property $updated_at
 *
 * @property Proyecto[] $proyectos
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Equipo extends Model
{
    
    static $rules = [
		'nombre_equipo' => 'required',
		'nombre_integrante1' => 'required',
		'nombre_integrante2' => 'required',
		'nombre_integrante3' => 'required',
		'servicios_ofrecidos' => 'required',
		'diponibilidad' => 'required',
		'correo_usuario_creador' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_equipo','nombre_integrante1','nombre_integrante2','nombre_integrante3','servicios_ofrecidos','diponibilidad','correo_usuario_creador'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proyectos()
    {
        return $this->hasMany('App\Models\Proyecto', 'nombre_equipo_creador', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'correo_usuario_creador');
    }
    

}
