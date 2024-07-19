<x-index :title="'Servicios Disponibles'">
    <header>
        <h1>Servicios Disponibles</h1>

        <a href="{{ route('servicio-form', 0) }}"><button>Agendar</button></a>
        <a href="{{ route('cliente') }}"><button>Volver</button></a>
    </header>
    <main>
        <div>
            <h1>Listado de servicios de tipo {{ $id_tipo }}</h1>
            @foreach ($servicios as $servicio)
                <div>
                    <label>{{ $servicio->nombre }}</label>
                    <label>{{ $servicio->descripcion }}</label>
                    <label>{{ $servicio->valor }}</label>
                    <label>{{ $servicio->duracion }}</label>

                    <label>{{ $servicio->negocio->nombre }}</label>
                    <label>{{ $servicio->negocio->direccion }}</label>
                    <label>{{ $servicio->negocio->telefono }}</label>

                    <img src="{{ $servicio->url_imagen }}" alt="" style="width: 30px">
                    
                    <a href="{{ route('reserva',$servicio->id) }}">
                        <button>Reserva</button>
                    </a>
                    
                </div>
            @endforeach
        </div>
    </main>
    <footer>

    </footer>
</x-index>
