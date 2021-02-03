<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'name', 'surname', 'cedula', 'email', 'user', 'password', 'estatus', 'photos', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function departamentos()
    {
        return $this->belongsToMany(Departamentos::class, 'usuario_x_departamentos' , 'usxdp_uscedula', 'usxdp_dpid');
    }

        public function role()
    {
        return $this->belongsTo('App\Rol');
    }

   public function esAdmin(){
        
     

    }
}
