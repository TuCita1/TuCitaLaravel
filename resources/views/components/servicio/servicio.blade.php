<x-index :title="'Servicios'">    
    <header>
        <h1>Servicios</h1>
        
        <a href="{{ route('servicio-form',0) }}"><button>Crear</button></a>
        <a href="{{ route('proveedor') }}"><button>Volver</button></a>
    </header>
    <main>
        <div>
            <h1>Listado de servicios del usuario</h1>
            @foreach($servicios as $servicio)
                <div>
                    <label>{{ $servicio->nombre }}</label>
                    <label>{{ $servicio->descripcion }}</label>
                    <label>{{ $servicio->valor }}</label>
                    <label>{{ $servicio->duracion }}</label>
                    
                    <img src="{{ $servicio->url_imagen }}" alt="" style="width: 30px">
                                        
                    <a href="{{ route('servicio-form',$servicio->id) }}"><button>Actualizar</button></a>                    
                    <form method="POST" action="{{ route('servicio.eliminar', $servicio->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </div>            
            @endforeach
        </div>
    </main>
    <footer>

    </footer>
</x-index>
