<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar y registro</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main>
        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn_iniciar sesion">Iniciar Sesion</button>
                </div>

                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesion</p>
                    <button id="btn_registrarse">Registrarse</button>
                </div>
            </div>

            <div class="contenedor__login-register">

                <form method="POST" action="{{ route('login-ingresar') }}" class="formulario__login">
                    @csrf

                    <h2>Iniciar Sesion</h2>
                    <input type="email" name="email" placeholder="Correo electronico">
                    <input type="password" name="contraseña" placeholder="Contraseña">
                    <button type="submit">Ingresar</button>
                </form>


                <form method="POST" action="{{ route('login-crear') }}" enctype="multipart/form-data"
                    class="formulario_register">
                    @csrf
                    <h2>Registrarse</h2>

                    <input type="text" name="nombre" placeholder="Nombre">
                    <input type="text" name="apellido" placeholder="Apellido">
                    <input type="email" name="email" placeholder="Correo">
                    <input type="text" name="telefono" placeholder="Telefono">
                    <input type="password" name="contraseña" placeholder="Contraseña">

                    <input type="file" name="image" accept="image/*">

                    <label for="opciones">Tipo de Usuario</label>
                    <select name="id_tipo_usuario">
                        @foreach ($tipoUsuarios as $tipoUsuario)
                            <option value="{{ $tipoUsuario->id }}">{{ $tipoUsuario->nombre }}</option>
                        @endforeach
                    </select>

                    <button type="submit">Guardar Usuario</button>
                </form>

            </div>

        </div>
    </main>
    <script src="script.js"></script>
</body>

</html>
