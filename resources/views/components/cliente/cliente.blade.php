<!-- Componente principal para la vista de Cliente -->
<x-index :title="'Cliente'">
    <div class="cliente">
        <header class="header">
            <section class="flex-header">
                <a href="{{ route('home') }}">
                    <img src="{{asset('img/app/logo.svg')}}">
                </a>
                <ul>
                    <a href="{{ route('cliente') }}">
                    <li>Servicios</li>
                    </a>
                    <a href="{{ route('reservas') }}">
                    <li>Reservas</li>
                    </a>
                    <a href="{{ route('calificacion-form') }}">
                    <li>Calificaciones</li>
                    </a>
                    <a href="{{ route('perfil-cliente') }}">
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
