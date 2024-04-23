<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pqrsd extends Model
{
    protected $fillable = [
        'cliente_id', 'correo_electronico', 'es_anonima', 'tipo_de_pqrsd', 'tipo_de_persona', 'descripcion', 'url_pdf', 'estado',
    ];

    public function cliente()
    {
        return $this->belongsTo(cliente::class);
    }
}