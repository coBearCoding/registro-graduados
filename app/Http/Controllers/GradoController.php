<?php

namespace App\Http\Controllers;

use App\Models\CitaSeparar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GradoController extends Controller
{
    public function index()
    {
        return view('grado.index');
    }

    public function validacionCedula(Request $request)
    {
        $cita_separada = CitaSeparar::join('cita_dias', 'cita_separar.dia', '=', 'cita_dias.id_dias')
            ->join('cita_horas', 'cita_separar.hora', '=', 'cita_horas.id_hora')
            ->where('cedula', $request->cedula)
            ->where('cita_separar.estado', 'A')
            ->first();

        if ($cita_separada != null) {

            // return response("<h3 style='color: #19629a;padding-top: 2rem;text-align: center;'>Estimado estudiante su cita ya fue agendada.</h3>");
            return view('grado.consulta.consulta')
                ->with('cita_separada', $cita_separada);
        } else {
            $cita_login = DB::select('EXEC sp_citas_login ?', [
                $request->cedula
            ]);

            return view('grado.forms.registro')
                ->with('cita_login', $cita_login[0]);
        }
    }

    public function dias(Request $request)
    {
        $cita_dias = DB::select('sp_cita_get_dias ?', [
            'G'
        ]);

        return response()
            ->json([
                $cita_dias
            ]);
    }

    public function horarios(Request $request)
    {
        $cita_horario = DB::select('EXEC sp_cita_check_horas ?,?,?,?', [
            $request->dia,
            'G',
            $request->hora,
            1
        ]);

        return response()
            ->json([
                $cita_horario
            ]);
    }
}
