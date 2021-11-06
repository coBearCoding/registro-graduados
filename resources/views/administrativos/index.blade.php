@extends('layouts.layout_admin')

@include('administrativos.components.navbar')
@section('content')
    @php
    use Carbon\Carbon;
    @endphp
    <table class="display" id="consulta-table">
        <thead>
            <th>Cedula Estudiante</th>
            <th>Nombre de Estudiante</th>
            <th>Dia Agendado</th>
            <th>Horario Agendado</th>
            <th>Correo Registrado</th>
            <th>Fecha de Registro</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($citas as $cita)
                <tr class="table-active">
                    <td>{{ $cita->cedula }}</td>
                    <td>{{$cita->nombres}} {{$cita->apellidos}}</td>
                    <td>{{ $cita->dias }}</td>
                    <td>{{ $cita->horas }}</td>
                    <td>{{$cita->correo}}</td>
                    <td>@php
                            setlocale(LC_ALL, 'es_EC');
                            echo Carbon::parse($cita->fec_reg)->formatLocalized('%d/%B/%Y');
                        @endphp
                    </td>
                    <td>
                        <div class="btn-group" role="group">
                            <button class="btn btn-primary" disabled onclick="editar({{$cita->id_agenda}})">
                                <i class="bi bi-pencil-square"></i>
                            </button>
                            <button class="btn btn-danger" onclick="eliminar({{$cita->id_agenda}})">
                                <i class="bi bi-trash"></i>
                            </button>
                        </div>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @include('administrativos.components.editar_modal')
@endsection

@section('js')
    <script src="{{ asset('js/administrativos.js') }}"></script>
@endsection
