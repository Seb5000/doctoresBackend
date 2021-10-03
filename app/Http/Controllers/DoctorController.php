<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use Carbon\Carbon;

class DoctorController extends Controller
{
    public function list(Request $request)
    {
        $item = new Doctor();
        $item = $item->whereNull('deleted_at')->get();

        $data = array(
            'success' => true,
            'data' => $item,
            'msg' => trans('messages.listed')
        );

        return response()->json($data);
    }

    public function show(Request $request)
    {
        $item = Doctor::where('id',$request->id)->first();
        $data = array(
            'success' => true,
            'data' => $item,
            'msg' => trans('messages.listed')
        );

        return response()->json($data);
    }

    public function store(Request $request)
    {
        //return "hola";
        if ($request->id) {
            $item = Doctor::findOrFail($request->id);
            $msg = "Actualizado";
        } else {
            $item = new Doctor();
            $msg = "Agregado";
        }

        $item->nombreCompleto = $request->nombreCompleto;
        $item->categoria = $request->categoria;
        $item->genero = $request->genero;
        $item->fechaDeNacimiento = $request->fechaDeNacimiento;
        $item->telefonoFijo = $request->telefonoFijo;
        $item->numeroCelular = $request->numeroCelular;
        $item->email = $request->email;
        $item->especialidadKey = $request->especialidadKey;
        $item->estado = $request->estado;

        $item->save();

        $result = array(
            'success' => true,
            'data' => $item,
            'msg' => $msg
        );
        return response()->json($result);
    }

    public function destroy(Request $request)
    {
        $item = Doctor::where('id', $request->id)->first();
        $item->deleted_at = Carbon::now();
        $item->save();
        $result = array(
            'success' => true,
            'data' => null,
            'msg' => "borrado"
        );

        return response()->json($result);
    }
}
