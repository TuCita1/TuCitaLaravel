<x-index :title="'Proveedor'">
    <div class="proveedor">
        <header class="header">
            <section class="flex-header">
                <a href="{{ route('home') }}">
                    <img src="{{asset('img/app/logo.svg')}}">
                </a>
                <ul>
                    <a href="{{ route('reservas-proveedor') }}">
                        <li>Reservas</li>
                    </a>
                    <a href="{{ route('negocio') }}">
                        <li>Negocios</li>
                    </a>
                    <a href="{{ route('servicio') }}">
                        <li>Servicios</li>
                    </a>
                    <a href="{{ route('servicio') }}">
                        <li>Calificaciones</li>
                    </a>                    
                    <a href="{{ route('perfil-proveedor') }}">
                        <li>Perfil</li>
                    </a>
                </ul>
                <a href="{{ route('home') }}">
                    <button>Salir</button>
                </a>
            </section>
        </header>
        <main>
            {{$slot}}
        </main>
    </div>
</x-index>
