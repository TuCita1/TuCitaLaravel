<x-index :title="'Cliente'">
    <div class="cliente">
        <header>
            <section class="flex-header">
                <a href="{{ route('home') }}">
                    <img src="{{asset('img/app/logo.svg')}}">
                </a>
                <ul>
                    <a href="{{ route('cliente') }}">
                    <li>Servicios</li>
                    </a>
                    <a href="{{ route('cliente') }}">
                    <li>Agenda</li>
                    </a>
                    <a href="{{ route('cliente') }}">
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
