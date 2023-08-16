<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultoria extends Model
{
    public $timestamps = false;
    
    protected $table='contacto';
    protected $fillable=['email', 'informacion'];
    

    
}
