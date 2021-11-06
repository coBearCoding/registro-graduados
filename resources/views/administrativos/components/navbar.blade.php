<nav class="navbar navbar-light bg-light">
    <div class="container-fluid text-center">
        <a class="navbar-brand" href="#">
            <img src="{{asset('icons/logoazul.png')}}" alt="" height="70">
        </a>
        @if(Auth::user())
        <div class="text-center font-monospace fw-bold fs-1">Consulta Citas, Bienvenido {{Auth::user()->NOMBRES}}</div>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-secondary font-monospace">Logout</button>
            </form>
        @else
            <div class="text-center font-monospace fw-bold fs-1">Consulta Citas</div>
            <div>&nbsp;</div>
        @endif
    </div>
</nav>
