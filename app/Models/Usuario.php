<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $telefono
 * @property $contrasenya
 * @property $correo
 * @property $tipo
 * @property $created_at
 * @property $updated_at
 *
 * @property Alquilere[] $alquileres
 * @property Comentario[] $comentarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellidos' => 'required',
		'telefono' => 'required',
		'contrasenya' => 'required',
		'correo' => 'required',
		'tipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidos','telefono','contrasenya','correo','tipo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alquileres()
    {
        return $this->hasMany('App\Models\Alquilere', 'id_usuario', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comentarios()
    {
        return $this->hasMany('App\Models\Comentario', 'id_usuario', 'id');
    }
    

}
