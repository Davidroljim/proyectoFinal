<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alquilere
 *
 * @property $id
 * @property $id_usuario
 * @property $id_equipo
 * @property $f_inicio
 * @property $f_fin
 * @property $created_at
 * @property $updated_at
 *
 * @property Equipo $equipo
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Alquilere extends Model
{
    
    static $rules = [
		'id_usuario' => 'required',
		'id_equipo' => 'required',
        'stock' => 'required',
		'f_inicio' => 'required',
		'f_fin' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usuario','id_equipo','stock','f_inicio','f_fin'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Models\Equipo', 'id', 'id_equipo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'id', 'id_usuario');
    }
    

}
