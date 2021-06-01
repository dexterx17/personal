<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacitacion extends Model
{
    use HasFactory;

    protected $table = "capacitaciones";
    
    protected $fillable  = [
        'user_id',
        'nombre',
        'institucion',
        'fecha',
        'horas'
    ];

      
      public function user(){
        return $this->belongsTo(User::class);
    }
}
