<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipo
 *
 * @property $id
 * @property $nombre
 * @property $caracteristicas
 * @property $precio
 * @property $fotos
 * @property $disponible
 * @property $created_at
 * @property $updated_at
 *
 * @property Alquilere[] $alquileres
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Equipo extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'caracteristicas' => 'required',
		'precio' => 'required',
		'fotos' => 'required',
		'disponible' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','caracteristicas','precio','fotos','disponible'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alquileres()
    {
        return $this->hasMany('App\Models\Alquilere', 'id_equipo', 'id');
    }
    

}
