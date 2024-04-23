<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\pqrsd;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function inicio(){
        return view("clientes.inicio") ;
    }
    public function datos(Request $request) {
        // Verificar si la PQRS es anónima o no
        if ($request->es_anonima === 'true') {
            // Si es anónima, simplemente mostrar el formulario de ingreso de datos del cliente


            $pqrsd = new pqrsd();
            $pqrsd->cliente_id = $request->cliente_id;
            $pqrsd->es_anonima = $request->es_anonima;
            $pqrsd->tipo_de_pqrsd = $request->tipo_de_pqrsd;
            $pqrsd->tipo_de_persona = $request->tipo_de_persona;
            $pqrsd->descripcion = $request->descripcion;
            $pqrsd->url_pdf = $request->url_pdf;
            $pqrsd->estado = $request->estado;
            $pqrsd->save();
            return view("clientes.anonima");    
        } else {

            // Si no es anónima, encontrar el cliente y su PQRS asociada
            $cliente = cliente::find($request->cliente_id);
            $pqrsd = pqrsd::where('cliente_id', $request->cliente_id)->first();
            return view("clientes.create")->with('cliente', $cliente)->with('pqrsd', $pqrsd);
        }
    }

    function store(request $request){
        $cliente = new cliente();
        $cliente->primernombre=$request->primernombre;
        $cliente->segundonombre=$request->segundonombre;
        $cliente->primerapellido=$request->primerapellido;
        $cliente->segundoapellido=$request->segundoapellido;
        $cliente->Tipodedocumento=$request->Tipodedocumento;
        $cliente->Fechadenacimiento=$request->Fechadenacimiento;
        $cliente->NumeroIdentificacion=$request->NumeroIdentificacion;
        $cliente->Genero=$request->Genero;
        $cliente->Direccion=$request->Direccion;
        $cliente->save();

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



        return view('clientes.confirmacion');
    }}