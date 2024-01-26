<!--// No olvidar que para que las rutas puedan utilizar esta vista debemos saber que es parte de una plantilla, es un subdirectorio de la carpeta views-->

@extends('layouts.cita')


<!-- //desde nuestra plantilla cita cambiamos el contenido que queremos cambiar-->
@section('title', 'Elige tu cita')
@section('page')
    <h1>SOLICITA TU CITA</h1>
@endsection

@section('content')


<form class="d-flex flex-column  w-75 p-5 row-gap-3 " method="POST" action="{{ route('create') }}">
    @csrf
    <div class="row mb-3 ">
        <label class="text-center">FORMATO DE LA CITA</label>
    @foreach ($formatoCita as $formato)
        <input type="radio" class="btn-check  " id="{{$formato->codigo_traduccion }}" value="{{ $formato->id }}" name="tipocita" required>
        <label class="btn btn-outline-primary col-sm-3" for="{{ $formato->codigo_traduccion }}">{{ $formato->codigo_traduccion }}</label>
    @endforeach
    </div>

    <label class="align-self-center w-75 text-center">ESPECIALIDAD:
    <select name="especialidad" class="form-select align-self-center border border-dark" aria-label="Default select example">
    @foreach ($especialidades as $especialidad )
        <option value="{{$especialidad->id}}">{{$especialidad->codigo_traduccion}}</option>
    @endforeach
    </select>
    </label>

    <label class="d-flex justify-content-evenly ">SELECCIONA LA FECHA:
        <input type="text" id="datepicker" name="fecha" placeholder="dd-mm-aaaa" >
    </label>

    <input type="submit" value="SOLICITAR CITA" class="btn btn-secondary">

</form>




@endsection
