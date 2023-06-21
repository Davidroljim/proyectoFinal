<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    static $rules = [
         		'name' => 'required',
         		'email' => 'required',
         		'role' => 'required',
             ];
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',

    ];
    

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'role',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}


// <?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// /**
//  * Class User
//  *
//  * @property $id
//  * @property $name
//  * @property $email
//  * @property $email_verified_at
//  * @property $role
//  * @property $password
//  * @property $remember_token
//  * @property $created_at
//  * @property $updated_at
//  *
//  * @property Alquilere[] $alquileres
//  * @property Comentario[] $comentarios
//  * @package App
//  * @mixin \Illuminate\Database\Eloquent\Builder
//  */
// class User extends Model
// {
    
//     static $rules = [
// 		'name' => 'required',
// 		'email' => 'required',
// 		'role' => 'required',
//     ];

//     protected $perPage = 20;

//     /**
//      * Attributes that should be mass-assignable.
//      *
//      * @var array
//      */
//     protected $fillable = ['name','email','role'];


//     /**
//      * @return \Illuminate\Database\Eloquent\Relations\HasMany
//      */
//     public function alquileres()
//     {
//         return $this->hasMany('App\Models\Alquilere', 'id_usuario', 'id');
//     }
    
//     /**
//      * @return \Illuminate\Database\Eloquent\Relations\HasMany
//      */
//     public function comentarios()
//     {
//         return $this->hasMany('App\Models\Comentario', 'id_usuario', 'id');
//     }
    

// }
