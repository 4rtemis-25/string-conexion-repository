<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Aprendice
 *
 * @property $id
 * @property $foto_perfil
 * @property $habilidades
 * @property $tipo_documento
 * @property $numero_documento
 * @property $numero_telefono
 * @property $direccion
 * @property $cadena_id
 * @property $programa_id
 * @property $usuario_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cadena $cadena
 * @property Programa $programa
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Aprendice extends Model
{
    
    static $rules = [
		'foto_perfil' => 'required',
		'habilidades' => 'required',
		'tipo_documento' => 'required',
		'numero_documento' => 'required',
		'numero_telefono' => 'required',
		'direccion' => 'required',
		'cadena_id' => 'required',
		'programa_id' => 'required',
		'usuario_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['foto_perfil','habilidades','tipo_documento','numero_documento','numero_telefono','direccion','cadena_id','programa_id','usuario_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cadena()
    {
        return $this->hasOne('App\Models\Cadena', 'id', 'cadena_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function programa()
    {
        return $this->hasOne('App\Models\Programa', 'id', 'programa_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'usuario_id');
    }
    

}
