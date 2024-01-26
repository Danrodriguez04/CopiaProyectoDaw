<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Especialidad;
use App\Models\FormatoCita;
use Illuminate\Http\Request;

class CitaController extends Controller
{



    public function getAppointmentsDetails(){
        //$citas= Cita::all();
        $formatoCita = FormatoCita::all();
        $especialidades = Especialidad::all();
        return view('layouts.cita.solicitarcita',compact('formatoCita','especialidades'));
    }



    public function getAppointmentsByPatientId($patient){
        return view('layouts.cita.showcita', compact('patient'));
    }


    public function confirm(){

    }

    public function create (Request $request){
        $prova = FormatoCita::
        $formato = FormatoCita::all()->where('id',$request->tipocita);
        $especialidad = Especialidad::select('id')->where('id',$request->especialidad);
        //echo $request->especialidad;
        //echo $request->fecha;
        echo $formato;
        $cita = new Cita;
        $cita->fecha =$request->fecha;
        $cita->id_tipo = $especialidad;
        //$cita->id_estado
        //$cita->id_trabajador_crea
        //$cita->id_trabajador_atiende
        //$cita->id_horario
        //$cita->id_paciente
        $cita->id_formato_cita = $formato;
        //$cita->save();
        echo $cita;

    }

    public function storeBBDD(Request $request){
        $request->validate([

        ]);
    }

}
