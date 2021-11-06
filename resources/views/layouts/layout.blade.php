<!DOCTYPE html>
<html>

<head>
    @include('layouts.components.head')
</head>

<body>
    @yield('header')
    <div class="container contenedor">
        <section id="principal" class="principal">
            <div class="container contenedor">
                <div class="row">
                    <div class="col-sm-12 col-md-12 text-center">
                        <img class="" src="{{asset('icons/ECOTEC.svg')}}" style="width:50%" alt="Icon">
                        <h2>Agenda tu Cita</h2>
                        <p style="color: #19629a;">Para la firma de acta de graduación y entrega de título</p>
                    </div>
                </div>
            </div>

            @yield('content')
        </section>
    </div>
    @yield('footer')
    @include('layouts.components.javascript')
    @yield('js')
</body>

</html>
