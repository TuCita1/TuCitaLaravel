<x-proveedor.proveedor>

    <main class="content-form">
        @if ($id != 0)

            <form method="POST" action="{{ route('servicio-editar') }}" enctype="multipart/form-data" class="form">
                @csrf
                @method('PUT')

                <h1>Editar servicio</h1>
                <input type="number" name="id" placeholder="id" hidden value="{{ $id }}">
                @error('id')
                    {{ $message }}
                @enderror



                <input type="text" class="input" name="nombre" placeholder="Nombre"
                    value="{{ old('nombre', $servicio->nombre) }}">
                @error('nombre')
                    <small>{{ $message }}</small>
                @enderror

                <input type="text" class="input" name="descripcion" placeholder="Descripcion"
                    value="{{ old('descripcion', $servicio->descripcion) }}">
                @error('descripcion')
                    <small>{{ $message }}</small>
                @enderror

                <input type="number" class="input" name="valor" placeholder="valor servicio"
                    value="{{ old('valor', $servicio->valor) }}">
                @error('valor')
                    <small>{{ $message }}</small>
                @enderror

                <input type="number" class="input" name="duracion" placeholder="duracion servicio"
                    value="{{ old('duracion', $servicio->duracion) }}">
                @error('duracion')
                    <small>{{ $message }}</small>
                @enderror

                <input type="number" class="input" name="servicios_simultaneos" placeholder="servicios simultaneos"
                    value="{{ old('servicios_simultaneos', $servicio->servicios_simultaneos) }}">
                @error('servicios_simultaneos')
                    <small>{{ $message }}</small>
                @enderror

                <input type="number" class="input" name="hora_entrada" placeholder="hora de entrada"
                    value="{{ old('hora_entrada', $servicio->hora_entrada) }}">
                @error('hora_entrada')
                    <small>{{ $message }}</small>
                @enderror

                <input type="number" class="input" name="hora_salida" placeholder="hora de salida"
                    value="{{ old('hora_salida', $servicio->hora_salida) }}">
                @error('hora_salida')
                    <small>{{ $message }}</small>
                @enderror

                <select name="id_negocio" class="input" value="{{ old('id_negocio', $servicio->id_negocio) }}">
                    <option value="" disabled selected>Seleccione su negocio</option>
                    @foreach ($negocios as $negocio)
                        <option value="{{ $negocio->id }}">{{ $negocio->nombre }}</option>
                    @endforeach
                </select>
                @error('id_negocio')
                    <small>{{ $message }}</small>
                @enderror


                <select name="id_tipo_servicio" class="input"
                    value="{{ old('id_tipo_servicio', $servicio->id_tipo_servicio) }}">
                    <option value="" disabled selected>Seleccione el tipo de servicio</option>
                    @foreach ($tiposServicio as $tipoServicio)
                        <option value="{{ $tipoServicio->id }}">{{ $tipoServicio->nombre }}</option>
                    @endforeach
                </select>
                @error('id_tipo_servicio')
                    <small>{{ $message }}</small>
                @enderror

                <label for="file" class="input"> Seleccionar imagen </label>
                <input id="file" type="file" class="input" name="image" accept="image/*"
                    value="{{ old('image', $servicio->image) }}">
                @error('image')
                    {{ $message }}
                @enderror

                <button type="submit">Actualizar</button>
            </form>

        @else
        
            <form method="POST" action="{{ route('servicio-crear') }}" enctype="multipart/form-data" class="form">
                @csrf
                <h1>Crear servicio</h1>

                <input type="text" class="input" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
                @error('nombre')
                    <small>{{ $message }}</small>
                @enderror

                <input type="text" class="input" name="descripcion" placeholder="Descripcion"
                    value="{{ old('descripcion') }}">
                @error('descripcion')
                    <small>{{ $message }}</small>
                @enderror

                <input type="number" class="input" name="valor" placeholder="valor servicio"
                    value="{{ old('valor') }}">
                @error('valor')
                    <small>{{ $message }}</small>
                @enderror

                <input type="number" class="input" name="duracion" placeholder="duracion servicio"
                    value="{{ old('duracion') }}">
                @error('duracion')
                    <small>{{ $message }}</small>
                @enderror

                <input type="number" class="input" name="servicios_simultaneos" placeholder="servicios simultaneos"
                    value="{{ old('servicios_simultaneos') }}">
                @error('servicios_simultaneos')
                    <small>{{ $message }}</small>
                @enderror

                <input type="number" class="input" name="hora_entrada" placeholder="hora de entrada"
                    value="{{ old('hora_entrada') }}">
                @error('hora_entrada')
                    <small>{{ $message }}</small>
                @enderror

                <input type="number" class="input" name="hora_salida" placeholder="hora de salida"
                    value="{{ old('hora_salida') }}">
                @error('hora_salida')
                    <small>{{ $message }}</small>
                @enderror

                <select name="id_negocio" class="input" value="{{ old('id_negocio') }}">
                    <option value="" disabled selected>Seleccione su negocio</option>
                    @foreach ($negocios as $negocio)
                        <option value="{{ $negocio->id }}">{{ $negocio->nombre }}</option>
                    @endforeach
                </select>
                @error('id_negocio')
                    <small>{{ $message }}</small>
                @enderror

                <select name="id_tipo_servicio" class="input" value="{{ old('id_tipo_servicio') }}">
                    <option value="" disabled selected>Seleccione el tipo de servicio</option>
                    @foreach ($tiposServicio as $tipoServicio)
                        <option value="{{ $tipoServicio->id }}">{{ $tipoServicio->nombre }}</option>
                    @endforeach
                </select>
                @error('id_tipo_servicio')
                    <small>{{ $message }}</small>
                @enderror

                <label for="file" class="input"> Seleccionar imagen </label>
                <input id="file" type="file" class="input" name="image" accept="image/*"
                    value="{{ old('image') }}">
                @error('image')
                    <small>{{ $message }}</small>
                @enderror

                <button type="submit">Crear</button>
            </form>

        @endif
    </main>
</x-proveedor.proveedor>
