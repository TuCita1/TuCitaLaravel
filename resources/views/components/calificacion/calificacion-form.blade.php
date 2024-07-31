<x-cliente.cliente :title="'Cliente'">
    <main class="content-form">
            <h1>Crear calificacion</h1>
            <form method="POST" action="{{ route('calificacion-crear') }}" enctype="multipart/form-data" class="form">
                @csrf

                <input type="number" class="input" name="id_usuario" placeholder="id" hidden
                    value="{{ session('id') }}">
                @error('id_usuario')
                    <small>{{ $message }}</small>
                @enderror

                <input type="number" class="input" name="id_servicio" placeholder="id" hidden
                    value="{{ session('id') }}">
                @error('id_servicio')
                    <small>{{ $message }}</small>
                @enderror

                <input type="text" class="input" name="descripcion" placeholder="Descripcion"
                    value="{{ old('descripcion') }}">
                @error('descripcion')
                    <small>{{ $message }}</small>
                @enderror

                <input type="text" class="input" name="valor" placeholder="Valor"
                    value="{{ old('valor') }}">
                @error('valor')
                    <small>{{ $message }}</small>
                @enderror

                <button type="submit">Crear</button>
            </form>
    </main>
</x-cliente.cliente>