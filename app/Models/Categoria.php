<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Categoria extends Model
{
    use HasFactory;
    protected $table = "categorias";
    protected $fillable = [
        'nombre',
        'descripcion',
        'orden',
        'tipo'
    ];

    public function registros()
    {
        return $this->BelongsTo(Registro::class);
    }
}
