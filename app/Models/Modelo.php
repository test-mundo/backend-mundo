<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_modelo'
    ];

    public function marcas(){
        //return $this->hasMany('App\Models\Marca');
        return $this->hasMany(Role::class, 'marcas');
    }

}
