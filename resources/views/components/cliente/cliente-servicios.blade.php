<x-cliente.cliente :title="'Cliente'">
    <section class="flex-main">
        @foreach ($tipoServicios as $tipoServicio)
            <div>
                <a href="{{ route('servicio-cliente',$tipoServicio->id) }}">                                            
                    <img src="{{ $tipoServicio->url_imagen }}" alt="{{$tipoServicio->nombre}}">
                </a> 
                <h1>{{$tipoServicio->nombre}}</h1>                                 
                <p>{{$tipoServicio->descripcion}}</p>
            </div>
        @endforeach
    </section> 
</x-cliente.cliente>