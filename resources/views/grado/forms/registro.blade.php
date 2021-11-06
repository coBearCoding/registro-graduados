@extends('layouts.layout')

<div style="text-align: center;">
    <h6 style="color: rgba(22,91,170, 1);">{{ $cita_login->nombre ?? '' }} {{$cita_login->apellido ?? ''}}</h6>
    <p style="color: #5d8095;font-weight: 700;font-size: 12px;">{{  $cita_login->facultad ?? '' }}</p>
</div>


<input type="hidden" value="'.$cfac.'" id="op" name="op"><input type="hidden" value="'.$sala.'" id="sala" name="sala">
<div class="form-group col-sm-12">
    <label for="email" class="h4">Email*</label>
    <input type="email" class="form-control" id="correo" name="correo" placeholder="Email"
        data-error="email valido es requerido." required="required">
    <div class="help-block with-errors"></div>
</div>

<div class="row">
    <div class="form-group col-sm-6">
        <label for="">Fecha de Asistencia</label>
        <select class="form-control" id="dia" name="dia" class="single-form form-control mt-2">
            {{-- <option value='$text'>".$dias."</option> --}}
        </select>
    </div>
    <div class="form-group col-sm-6">
        <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}" />
        <label for="">Hora</label>
        <select class="form-control" id="hora" name="hora" class="single-form form-control mt-2">
            {{-- <option value='$desc'>" . $horas . "</option>
            <option value='---'>Cupos Agotados</option> --}}
        </select>
    </div>
    <div class="form-group col-sm-6">
        <label for="">Talla de la Toga</label>
        <select class="form-control" id="talla_toga" name="talla_toga" class="single-form form-control mt-2">
            <option value="---">-- Elige una opción --</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
            <option value="XXXL">XXXL</option>
        </select>
    </div>
    <div class="form-group col-sm-6">
        <label for="">Talla de Camiseta</label>
        <select class="form-control" id="talla_camiseta" name="talla_camiseta" class="single-form form-control mt-2">
            <option value="---">-- Elige una opción --</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
        </select>
    </div>


    <button type="submit" id="form-submit" class="btn-action btn-alt">Enviar</button>
    <div id="msgSubmit" class="h3 text-center hidden"></div>
    <div class="clearfix"></div>
</div>
@section('js')
<script src="{{asset('js/registro-grado.js')}}"></script>
@endsection
