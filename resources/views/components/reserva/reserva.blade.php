<x-index :title="'Reserva'">
    <header>
        <h1>Reserva</h1>
        <p>Nombre: {{ session('nombre') }}</p>
        <a href="{{ route('home') }}"><button>Salir</button></a>  
    </header>
    <main>
        <div>{{$servicio}}</div>
    </main>
    <footer>

    </footer>
</x-index>
