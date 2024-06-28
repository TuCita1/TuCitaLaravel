<x-index :title="'Negocio'">
    <header>
        
    </header>
    <main>

        <form method="POST" action="{{ route('login-crear') }}" enctype="multipart/form-data" class="formulario_register">
            @csrf
            <h1>Crear negocio</h1>
            <input type="number" name="id_usuario" placeholder="id" hidden>
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="direccion" placeholder="direccion">
            <input type="text" name="telefono" placeholder="Telefono">
            <input type="file" name="image" accept="image/*">

            <button type="submit">Crear</button>
        </form>

        <form method="POST" action="{{ route('login-crear') }}" enctype="multipart/form-data" class="formulario_register">
            @csrf            
            <h1>Editar negocio</h1>
            <input type="number" name="id" placeholder="id" hidden>
            <input type="number" name="id_usuario" placeholder="id" hidden>
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="direccion" placeholder="direccion">
            <input type="text" name="telefono" placeholder="Telefono">
            <input type="file" name="image" accept="image/*">

            <button type="submit">Actualizar</button>
        </form>

    </main>
    <footer>

    </footer>
</x-index>
