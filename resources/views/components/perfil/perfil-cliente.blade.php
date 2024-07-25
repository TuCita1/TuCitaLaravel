<x-cliente.cliente :title="'Cliente'">

    <main class="content-form">
        <img src="{{asset(session('url'))}}" class="img-perfil" alt="">
        <form method="POST" action="{{ route('usuario-editar') }}" enctype="multipart/form-data" class="form">
            @csrf
            @method('PUT')

            <h1>Editar perfil</h1>

            <input type="number" name="id" placeholder="id" hidden value="{{ session('id') }}">
            @error('id')
                {{ $message }}
            @enderror

            <input type="text" class="input" name="nombre" placeholder="Nombre"
                value="{{ old('nombre', session('nombre')) }}">
            @error('nombre')
                <small>{{ $message }}</small>
            @enderror
            
            <input type="text" class="input" name="apellido" placeholder="Apellido"
                value="{{ old('apellido', session('apellido')) }}">
            @error('apellido')
                <small>{{ $message }}</small>
            @enderror

            <input type="email" class="input" name="email" placeholder="Correo"
                value="{{ old('email', session('email')) }}">
            @error('email')
                <small>{{ $message }}</small>
            @enderror

            <input type="text" class="input" name="telefono" placeholder="Telefono"
                value="{{ old('telefono', session('telefono')) }}">
            @error('telefono')
                <small>{{ $message }}</small>
            @enderror

            <input type="password" class="input" name="contraseña" placeholder="Contraseña"
                value="{{ old('contraseña', session('contraseña')) }}">
            @error('contraseña')
                <small>{{ $message }}</small>
            @enderror

            <button type="submit">Actualizar</button>
        </form>

    </main>
</x-cliente.cliente>
