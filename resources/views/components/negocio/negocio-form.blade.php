<x-proveedor.proveedor>
    <main class="content-form">
        @if ($id != 0)
            <h1>Editar negocio</h1>
            <form method="POST" action="{{ route('negocio-editar') }}" enctype="multipart/form-data" class="form">
                @csrf
                @method('PUT')


                <input type="number" name="id" placeholder="id" hidden value="{{ $id }}">
                @error('id')
                    {{ $message }}
                @enderror

                <input type="number" name="id_usuario" placeholder="id" hidden value="{{ session('id') }}">
                @error('id_usuario')
                    {{ $message }}
                @enderror



                <input type="text" class="input" name="nombre" placeholder="Nombre"
                    value="{{ old('nombre', $negocio->nombre) }}">
                @error('nombre')
                    <small>{{ $message }}</small>
                @enderror

                <input type="text" class="input" name="direccion" placeholder="Direccion"
                    value="{{ old('direccion', $negocio->direccion) }}">
                @error('direccion')
                    <small>{{ $message }}</small>
                @enderror

                <input type="text" class="input" name="telefono" placeholder="Telefono"
                    value="{{ old('telefono', $negocio->telefono) }}">
                @error('telefono')
                    <small>{{ $message }}</small>
                @enderror

                <label for="file" class="input"> Seleccionar imagen </label>
                <input type="file" id="file" class="input" name="image" accept="image/*"
                    value="{{ old('image', $negocio->image) }}">
                @error('image')
                    <small>{{ $message }}</small>
                @enderror

                <button type="submit">Actualizar</button>
            </form>
        @else
            <h1>Crear negocio</h1>
            <form method="POST" action="{{ route('negocio-crear') }}" enctype="multipart/form-data" class="form">
                @csrf


                <input type="number" class="input" name="id_usuario" placeholder="id" hidden
                    value="{{ session('id') }}">
                @error('id_usuario')
                    <small>{{ $message }}</small>
                @enderror

                <input type="text" class="input" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
                @error('nombre')
                    <small>{{ $message }}</small>
                @enderror

                <input type="text" class="input" name="direccion" placeholder="Direccion"
                    value="{{ old('direccion') }}">
                @error('direccion')
                    <small>{{ $message }}</small>
                @enderror

                <input type="text" class="input" name="telefono" placeholder="Telefono"
                    value="{{ old('telefono') }}">
                @error('telefono')
                    <small>{{ $message }}</small>
                @enderror

                <label for="file" class="input"> Seleccionar imagen </label>
                <input id="file" type="file" name="image" accept="image/*" value="{{ old('image') }}">
                @error('image')
                    <small>{{ $message }}</small>
                @enderror

                <button type="submit">Crear</button>
            </form>
        @endif
    </main>
</x-proveedor.proveedor>
