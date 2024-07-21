<x-proveedor.proveedor>
    <section class="head">
        <h1>Negocios</h1>
        <a href="{{ route('negocio-form', 0) }}"><button>Crear</button></a>        
    </section>
    <main class="content-card">
        @foreach ($negocios as $negocio)
            <section class="card">
                <h1>{{ $negocio->nombre }}</h1>
                <div>
                    <img src="{{ asset($negocio->url_imagen) }}" alt="">
                </div>
                
                <div>
                    <strong>Direccion: </strong>
                    <label>{{ $negocio->direccion }}</label>
                </div>
                <div>
                    <strong>Telefono: </strong>
                    <label>{{ $negocio->telefono }}</label>
                </div>

                <div>

                    <a href="{{ route('negocio-form', $negocio->id) }}"><button>Actualizar</button></a>
                    <form method="POST" action="{{ route('negocio.eliminar', $negocio->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </div>
            </section>
        @endforeach
    </main>
</x-proveedor.proveedor>
