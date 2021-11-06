@extends('layouts.layout')


@section('header')
    @include('grado.components.header')
@endsection


@section('content')
    <div class="container">
        <div class="hero2">
            <div class="hero-form">

                <form id="registro-form" data-toggle="validator" class="shake">

                    <div class="row">

                        <div class="form-group col-sm-12">
                            <label for="cedula" class="h4">Cédula*</label>
                            <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cédula"
                                data-error="La Cédula es requerida." required="required">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div id="respuesta_html" class="form-group col-sm-12" style="padding-left: 0px;"></div>
                        <div id="msg"></div>

                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection


@section('footer')
    @include('grado.components.footer')
@endsection

@section('js')
    <script src="{{ asset('js/grado.js') }}"></script>
@endsection
