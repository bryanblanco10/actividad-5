<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{

    public function index()
    {
    }

    public function create()
    {
        return view('clientes.index');
    }

    public function store(Request $request)
    {
      $datos = Cliente::create(
        [
          'type_identification' => $request->type_identification,
          'identification' => $request->identification,
          'names' => $request->names,
          'surnames' => $request->surnames,
          'address' => $request->address,
          'cell_phone' => $request->cell_phone,
          'email' => $request->email,
          'birth_date' => $request->birth_date,
          'biografia' => $request->biografia,
        ]
      );

      return response()->json([
        'mensaje'=>'Cliente creado con exito'
      ]);
    }

    public function show(Cliente $cliente)
    {
        return response()->json($cliente);
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
