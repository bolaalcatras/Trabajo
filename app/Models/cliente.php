<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $fillable = [
        'primernombre', 'segundonombre', 'primerapellido', 'segundoapellido', 'Tipodedocumento', 'Fechadenacimiento', 'NumeroIdentificacion', 'Genero', 'Direccion',
    ];

    public function pqrsds()
    {
        return $this->hasOne(pqrsd::class);
    }

}