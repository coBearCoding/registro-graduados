<?php

namespace App\Http\Controllers;

use App\Models\CitaSeparar;
use Illuminate\Http\Request;

class AdministrativosController extends Controller
{
    public function consulta()
    {
        $citas = CitaSeparar::join('cita_dias', 'cita_separar.dia', '=','cita_dias.id_dias')
        ->join('cita_horas', 'cita_separar.hora', '=','cita_horas.id_hora')
        ->join('alumnos', 'alumnos.ced_alum', '=', 'cita_separar.cedula')
        ->orderBy('cita_separar.fec_reg', 'ASC')
        ->whereNotIn('cedula', ['0924151152'])
        ->select('alumnos.nom_alum as nombres',
                 'alumnos.ape_alum as apellidos',
                 'cita_separar.cedula as cedula',
                 'cita_separar.fec_reg',
                 'cita_separar.*',
                 'cita_horas.*',
                 'cita_dias.*')
        ->distinct()
        ->get();

        return view('administrativos.index')
        ->with('citas',$citas);
    }

    public function eliminar(Request $request){
        dd($request);

        $eliminar_cita = CitaSeparar::where('id_agenda',$request->id_agenda)
        ->delete();

        if($eliminar_cita){
            return response()
            ->json([
                'msg'=>'Cita eliminada correctamente'
            ], 200);
        }else{
            return response()
            ->json([
                'msg'=>'Error al eliminar cita'
            ], 400);
        }
    }

    //AJAX DATA METHODS
    public function editar(Request $request){
        $cita = CitaSeparar::where('id_agenda', $request->id_agenda)
        ->first();

        dd($cita);
    }
}

