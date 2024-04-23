<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\pqrsd;
use Illuminate\Http\Request;

class PqrsdsController extends Controller
{
    public function index()
    {
        return view('formulario');
    }

    public function store(Request $request)
    {
        $pqrsd = new pqrsd();
        $pqrsd->cliente_id = $request->cliente_id;
        $pqrsd->correo_electronico = $request->correo_electronico;
        $pqrsd->es_anonima = $request->es_anonima;
        $pqrsd->tipo_de_pqrsd = $request->tipo_de_pqrsd;
        $pqrsd->tipo_de_persona = $request->tipo_de_persona;
        $pqrsd->descripcion = $request->descripcion;
        $pqrsd->url_pdf = $request->url_pdf;
        $pqrsd->estado = $request->estado;
        $pqrsd->save();

        return view('confirmacion');
    }
}