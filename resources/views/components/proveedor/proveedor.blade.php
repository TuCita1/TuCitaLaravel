<x-index :title="'Proveedor'">    
    <header>
        <h1>Pagina principal del proveedor</h1>
        <p>Nombre: {{ session('nombre') }}</p>
        <a href="{{ route('negocio') }}"><button>Negocios</button></a>        
    </header>
    <main>
        <div>
            Proveedor
        </div>
    </main>
    <footer>

    </footer>
</x-index>