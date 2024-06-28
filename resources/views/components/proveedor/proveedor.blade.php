<x-index :title="'Proveedor'">    
    <header>
        <h1>Proveedor</h1>
        <p>Nombre: {{ session('nombre') }}</p>
        <a href="{{ route('negocio-create') }}"><button>Crear</button></a>
    </header>
    <main>
        <div>
            Proveedor
        </div>
    </main>
    <footer>

    </footer>
</x-index>