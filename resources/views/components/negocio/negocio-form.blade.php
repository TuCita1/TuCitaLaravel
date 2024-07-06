<x-index :title="'Negocio'">
    <header>
        
    </header>
    <main>

        <form method="POST" action="{{ route('negocio-crear') }}" enctype="multipart/form-data" class="formulario_register">
            @csrf
            <h1>Crear negocio</h1>

            <input type="number" name="id_usuario" placeholder="id" hidden value="{{ session('id') }}">
            @error('id_usuario')
                {{$message}}
            @enderror

            <input type="text" name="nombre" placeholder="Nombre" value="{{old('nombre')}}">
            @error('nombre')
                {{$message}}
            @enderror

            <input type="text" name="direccion" placeholder="Direccion" value="{{ old('direccion') }}">
            @error('direccion')
                {{$message}}
            @enderror

            <input type="text" name="telefono" placeholder="Telefono" value="{{ old('telefono') }}">
            @error('telefono')
                {{$message}}
            @enderror

            <input type="file" name="image" accept="image/*" value="{{ old('image') }}">
            @error('image')
                {{$message}}
            @enderror

            <button type="submit">Crear</button>
        </form>

        <form method="POST" action="{{ route('login-crear') }}" enctype="multipart/form-data" class="formulario_register">
            @csrf            
            <h1>Editar negocio</h1>
            <input type="number" name="id" placeholder="id" hidden value="{{ session('id') }}">
            @error('id')
                {{$message}}
            @enderror

            <input type="number" name="id_usuario" placeholder="id" hidden value="{{ session('id') }}">
            @error('id_usuario')
                {{$message}}
            @enderror

            <input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
            @error('nombre')
                {{$message}}
            @enderror

            <input type="text" name="direccion" placeholder="Direccion" value="{{ old('direccion') }}">
            @error('direccion')
                {{$message}}
            @enderror

            <input type="text" name="telefono" placeholder="Telefono" value="{{ old('telefono') }}">
            @error('telefono')
                {{$message}}
            @enderror

            <input type="file" name="image" accept="image/*" value="{{ old('image') }}">
            @error('image')
                {{$message}}
            @enderror

            <button type="submit">Actualizar</button>
        </form>

    </main>
    <footer>

    </footer>
</x-index>
