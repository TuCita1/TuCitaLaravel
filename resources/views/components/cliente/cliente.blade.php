<x-index :title="'Cliente'">
    <header>
        <h1>Cliente</h1>
        <p>Nombre: {{ session('nombre') }}</p>
        <a href="{{ route('home') }}"><button>Salir</button></a>  
    </header>
    <main>
        <div>Tipos de servicio</div>
        @foreach ($tipoServicios as $tipoServicio)
            <div>
                <a href="{{ route('servicio-cliente',$tipoServicio->id) }}">                
                    <label>{{ $tipoServicio->nombre }}</label>
                    <img src="{{ $tipoServicio->url_imagen }}" alt="" style="width: 30px">
                </a>                                  
            </div>
        @endforeach
    </main>
    <footer>

    </footer>
</x-index>
