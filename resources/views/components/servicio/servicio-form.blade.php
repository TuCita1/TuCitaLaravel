<x-index :title="'Servicio'">
    <header>
        <a href="{{ route('servicio') }}"><button>Volver</button></a>
    </header>
    <main>
        <label>{{ $id }}</label>
        @if ($id != 0)

            <form method="POST" action="{{ route('servicio-editar') }}" enctype="multipart/form-data" class="formulario_register">
                
                @csrf
                @method('PUT')

                <h1>Editar servicio</h1>
                <input type="number" name="id" placeholder="id" hidden value="{{ $id }}">
                @error('id')
                    {{ $message }}
                @enderror

                <input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre', $servicio->nombre) }}">
                @error('nombre')
                    {{ $message }}
                @enderror

                <input type="text" name="descripcion" placeholder="Descripcion"
                    value="{{ old('descripcion', $servicio->descripcion) }}">
                @error('descripcion')
                    {{ $message }}
                @enderror

                <input type="number" name="valor" placeholder="valor servicio"
                    value="{{ old('valor', $servicio->valor) }}">
                @error('valor')
                    {{ $message }}
                @enderror

                <input type="number" name="duracion" placeholder="duracion servicio"
                    value="{{ old('duracion', $servicio->duracion) }}">
                @error('duracion')
                    {{ $message }}
                @enderror

                <input type="number" name="servicios_simultaneos" placeholder="servicios simultaneos"
                    value="{{ old('servicios_simultaneos', $servicio->servicios_simultaneos) }}">
                @error('servicios_simultaneos')
                    {{ $message }}
                @enderror

                <input type="number" name="hora_entrada" placeholder="hora de entrada"
                    value="{{ old('hora_entrada', $servicio->hora_entrada) }}">
                @error('hora_entrada')
                    {{ $message }}
                @enderror

                <input type="number" name="hora_salida" placeholder="hora de salida"
                    value="{{ old('hora_salida', $servicio->hora_salida) }}">
                @error('hora_salida')
                    {{ $message }}
                @enderror

                <input type="file" name="image" accept="image/*" value="{{ old('image', $servicio->image) }}">
                @error('image')
                    {{ $message }}
                @enderror

                <label for="opciones">Negocio</label>
                <select name="id_negocio" value="{{old('id_negocio', $servicio->id_negocio)}}">
                    @foreach ($negocios as $negocio)
                        <option value="{{ $negocio->id }}">{{ $negocio->nombre }}</option>
                    @endforeach
                </select>
                @error('id_tipo_usuario')
                    {{$message}}
                @enderror

                <label for="opciones">Tipo Servicio</label>
                <select name="id_tipo_servicio" value="{{old('id_tipo_servicio', $servicio->id_tipo_servicio)}}">
                    @foreach ($tiposServicio as $tipoServicio)
                        <option value="{{ $tipoServicio->id }}">{{ $tipoServicio->nombre }}</option>
                    @endforeach
                </select>
                @error('id_tipo_servicio')
                    {{$message}}
                @enderror

                <button type="submit">Actualizar</button>
            </form>
        @else
            
        <form method="POST" action="{{ route('servicio-crear') }}" enctype="multipart/form-data"
                class="formulario_register">
                @csrf
                <h1>Crear servicio</h1>

                <input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
                @error('nombre')
                    {{ $message }}
                @enderror

                <input type="text" name="descripcion" placeholder="Descripcion"
                    value="{{ old('descripcion') }}">
                @error('descripcion')
                    {{ $message }}
                @enderror

                <input type="number" name="valor" placeholder="valor servicio"
                    value="{{ old('valor') }}">
                @error('valor')
                    {{ $message }}
                @enderror

                <input type="number" name="duracion" placeholder="duracion servicio" value="{{ old('duracion') }}">
                @error('duracion')
                    {{ $message }}
                @enderror

                <input type="number" name="servicios_simultaneos" placeholder="servicios simultaneos" value="{{ old('servicios_simultaneos') }}">
            @error('servicios_simultaneos')
                {{ $message }}
            @enderror

            <input type="number" name="hora_entrada" placeholder="hora de entrada" value="{{ old('hora_entrada') }}">
            @error('hora_entrada')
                {{ $message }}
            @enderror

            <input type="number" name="hora_salida" placeholder="hora de salida" value="{{ old('hora_salida') }}">
            @error('hora_salida')
                {{ $message }}
            @enderror                

                <input type="file" name="image" accept="image/*" value="{{ old('image') }}">
                @error('image')
                    {{ $message }}
                @enderror

                <label for="opciones">Negocio</label>
                <select name="id_negocio" value="{{old('id_negocio')}}">
                    @foreach ($negocios as $negocio)
                        <option value="{{ $negocio->id }}">{{ $negocio->nombre }}</option>
                    @endforeach
                </select>
                @error('id_tipo_usuario')
                    {{$message}}
                @enderror

                <label for="opciones">Tipo Servicio</label>
                <select name="id_tipo_servicio" value="{{old('id_tipo_servicio')}}">
                    @foreach ($tiposServicio as $tipoServicio)
                        <option value="{{ $tipoServicio->id }}">{{ $tipoServicio->nombre }}</option>
                    @endforeach
                </select>
                @error('id_tipo_servicio')
                    {{$message}}
                @enderror

                <button type="submit">Crear</button>
            </form>
        @endif
    </main>
    <footer>

    </footer>
</x-index>
