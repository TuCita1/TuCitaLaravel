<x-index :title="'Negocios'">    
    <header>
        <h1>Negocios</h1>
        
        <a href="{{ route('negocio-form',0) }}"><button>Crear</button></a>
        <a href="{{ route('proveedor') }}"><button>Volver</button></a>
    </header>
    <main>
        <div>
            <h1>Listado de negocios del usuario</h1>
            @foreach($negocios as $negocio)
                <div>
                    <label>{{ $negocio->nombre }}</label>
                    <label>{{ $negocio->direccion }}</label>
                    <label>{{ $negocio->telefono }}</label>
                    
                    <img src="{{ $negocio->url_imagen }}" alt="" style="width: 30px">
                    
                    <a href="{{ route('negocio-form',$negocio->id) }}"><button>Actualizar</button></a>
                    <form method="POST" action="{{ route('negocio.eliminar', $negocio->id) }}" method="POST">
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