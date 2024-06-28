<x-index :title="'Cliente'">    
    <header>
        <h1>Cliente</h1>
        <p>Nombre: {{ session('nombre') }}</p>
        <a href="{{ route('negocio-create') }}"><button>Crear</button></a>
    </header>
    <main>
        <div>
            Cliente
        </div>
    </main>
    <footer>

    </footer>
</x-index>