<x-cliente.cliente>
    <section class="head">
        <h1>Servicios Disponibles</h1>        
    </section>
    <main class="content-card">
              
            @foreach ($servicios as $servicio)
                <section class="card">
                    <label>{{ $servicio->nombre }}</label>
                    <div>
                        <img src="{{ asset($servicio->url_imagen) }}" alt="" class="img-cliente">
                    </div>
                    <label>{{ $servicio->descripcion }}</label>
                    <label>{{ $servicio->valor }}</label>
                    <label>{{ $servicio->duracion }}</label>

                    <label>{{ $servicio->negocio->nombre }}</label>
                    <label>{{ $servicio->negocio->direccion }}</label>
                    <label>{{ $servicio->negocio->telefono }}</label>

                    
                    <a href="{{ route('reserva',$servicio->id) }}">
                        <button>Reserva</button>
                    </a>
                    
                </section>
            @endforeach
        
    </main>    
</x-cliente.cliente>
