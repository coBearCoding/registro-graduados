@extends('layouts.layout_admin')

@include('administrativos.components.navbar')

@section('content')
    <form class="container" id="login-form" action="/login-user" method="POST">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-user-o"></span>
                    </div>
                    @csrf
                    <div class="form-group mb-6">
                        <label for="exampleInputEmail1" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="cedula" name="cedula" aria-describedby="cedula"
                            placeholder="Cedula">
                    </div>
                    <div class="form-group mb-6">
                        <label for="exampleInputPassword1" class="form-label">Contrasena</label>
                        <input type="password" id="clave" name="clave" class="form-control" placeholder="Contrasena">
                    </div>
                    <br>
                    <div class="form-group mb-6">
                        <button type="submit" id="login-button"
                            class="form-control btn btn-primary rounded submit px-3">INICIAR SESION</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@section('content')

@section('js')
    <script src="{{ asset('js/administrativos.js') }}"></script>
@endsection
