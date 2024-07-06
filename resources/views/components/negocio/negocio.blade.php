<x-index :title="'Negocios'">    
    <header>
        <h1>Negocios</h1>
        
        <a href="{{ route('negocio-create') }}"><button>Crear</button></a>
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
                </div>            
            @endforeach
        </div>
    </main>
    <footer>

    </footer>
</x-index>