<!-- Componente principal para la vista de Cliente -->
<x-index :title="'Cliente'">
    <!-- Sección de encabezado de la página -->
    <header>
        <!-- Título principal de la página -->
        <h1>Cliente</h1>

        <!-- Muestra el nombre del cliente almacenado en la sesión -->
        <p>Nombre: {{ session('nombre') }}</p>

        <!-- Botón para salir, redirige al usuario a la ruta 'home' -->
        <a href="{{ route('home') }}">
            <button>Salir</button>
        </a>
    </header>

    <!-- Sección principal del contenido -->
    <main>
        <!-- Título para la sección de tipos de servicio -->
        <div>Tipos de servicio</div>

        <!-- Itera sobre la colección de tipos de servicio y muestra cada uno -->
        @foreach ($tipoServicios as $tipoServicio)
            <div>
                <!-- Enlace a la página de servicio específico para el cliente -->
                <a href="{{ route('servicio-cliente', $tipoServicio->id) }}">
                    <!-- Etiqueta que muestra el nombre del tipo de servicio -->
                    <label>{{ $tipoServicio->nombre }}</label>
                    <!-- Imagen representativa del tipo de servicio -->
                    <img src="{{ $tipoServicio->url_imagen }}" alt="" style="width: 30px">
                </a>
            </div>
        @endforeach
    </main>

    <!-- Sección de pie de página (vacía en este momento) -->
    <footer>

    </footer>
</x-index>
