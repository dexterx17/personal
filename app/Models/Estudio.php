<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
    use HasFactory;

    protected $table = "estudios";

      
    protected $fillable  = [
        'user_id',
        'nivel',
        'institucion',
        'fecha_egresamiento',
        'titulo'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
