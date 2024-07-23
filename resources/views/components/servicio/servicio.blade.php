<x-proveedor.proveedor>
    <section class="head">
        <h1>Servicios</h1>
        <a href="{{ route('servicio-form', 0) }}"><button>Crear</button></a>        
    </section>
    <main class="content-card">
        @foreach ($servicios as $servicio)
            <section class="card">
                <h1>{{ $servicio->nombre }}</h1>
                <div>
                    <img src="{{ asset($servicio->url_imagen) }}" alt="" class="img-cliente">
                </div>
                
                <div>
                    <p>{{ $servicio->descripcion }}</p>
                </div>
                <div>
                    <strong>Valor: </strong>
                    <label>${{ $servicio->valor }}</label>
                </div>
                <div>
                    <strong>Duración: </strong>
                    <label>{{ $servicio->duracion }}</label>
                </div>
                

                <div>
                    <a href="{{ route('servicio-form', $servicio->id) }}"><button>Actualizar</button></a>
                    <form method="POST" action="{{ route('servicio.eliminar', $servicio->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </div>                
            </section>
        @endforeach
    </main>
</x-proveedor.proveedor>
