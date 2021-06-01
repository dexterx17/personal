<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    protected $table = 'registros';
    protected $fillable = [
        'fecha',
        'user_id',
        'categoria_id',
        'valor',
        'observacion',
    ];

    public function categoria()
    {
        return $this->hasMany(categoria::class);
    }

    public function usuario()
    {
        return $this->hasMany(User::class);
    }
}
