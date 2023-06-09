<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interaccion extends Model
{
    use HasFactory;
    public $table = 'interaccion';
    protected $primaryKey = 'id';
    public $incrementing = 'true';

    protected $fillable = [
        'perro_interesado_id',
        'perro_candidato_id',
        'preferencia',
    ];
    

    
}
