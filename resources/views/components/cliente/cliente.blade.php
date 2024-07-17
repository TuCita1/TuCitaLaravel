<x-index :title="'Cliente'">
    <header>
        <h1>Cliente</h1>
        <p>Nombre: {{ session('nombre') }}</p>
    </header>
    <main>
        <div>Tipos de servicio</div>
        @foreach ($tipoServicios as $tipoServicio)
            <div>
                <label>{{ $tipoServicio->nombre }}</label>
                <img src="{{ $servicio->url_imagen }}" alt="" style="width: 30px">
                <label>{{ $servicio->descripcion }}</label>
            </div>
        @endforeach
    </main>
    <footer>

    </footer>
</x-index>
