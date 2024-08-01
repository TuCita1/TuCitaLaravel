<x-proveedor.proveedor>
    <section class="head">
        <h1>Reservas</h1>               
    </section>
    <main class="content-card">
        @foreach ($reservas as $reserva)
            <section class="card">
                <h1>{{ $reserva->servicio->nombre }}</h1>
                
                <div>
                    <img src="{{ asset($reserva->servicio->url_imagen) }}" alt="" class="img-cliente">
                </div>

                <div>
                    <strong>Descripcion: </strong>
                    <label>{{ $reserva->servicio->descripcion }}</label>
                </div>

                <div>
                    <strong>Fecha: </strong>
                    <label>{{ $reserva->fecha }}</label>
                </div>

                <div>
                    <strong>Valor: </strong>
                    <label>${{ $reserva->servicio->valor }}</label>
                </div>              
            </section>
        @endforeach
    </main>
</x-proveedor.proveedor>
