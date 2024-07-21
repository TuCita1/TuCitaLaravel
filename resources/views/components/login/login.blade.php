<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Configuración de caracteres y compatibilidad para el navegador -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Enlaces a hojas de estilo CSS -->
    <link href="{{ asset('css/component/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Título de la página -->
    <title>Tu-Cita</title>
</head>

<body>

    <!-- Contenedor principal del contenido -->
    <main>

        <div class="contenedor__todo">

            <!-- Contenedor para el login y registro -->
            <div class="caja__trasera">
                <!-- Sección para el inicio de sesión -->
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <!-- Botón para cambiar a la vista de inicio de sesión -->
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <!-- Sección para el registro -->
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <!-- Botón para cambiar a la vista de registro -->
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">


                <!-- Formulario de inicio de sesión -->
                <form method="POST" action="{{ route('login-ingresar') }}" class="formulario__login">
                    @csrf

                    <!-- Título del formulario -->
                    <h2>Iniciar Sesión</h2>

                    <!-- Campo de entrada para el correo electrónico -->
                    <input type="email" name="email" placeholder="Correo electronico" value="{{ old('email') }}">
                    @error('email')
                        <!-- Mensaje de error para el campo de correo electrónico -->
                        <small>{{ $message }}</small>
                    @enderror


                    <!-- Campo de entrada para la contraseña -->
                    <input type="password" name="contraseña" placeholder="Contraseña" value="{{ old('contraseña') }}">
                    @error('contraseña')
                        <!-- Mensaje de error para el campo de contraseña -->
                        <small>{{ $message }}</small>
                    @enderror
                    <br>
                    <!-- Botón para enviar el formulario de inicio de sesión -->
                    <button type="submit">Ingresar</button>
                </form>

                <!-- Formulario de registro -->
                <form method="POST" action="{{ route('login-crear') }}" enctype="multipart/form-data" class="formulario__register">
                    @csrf

                    <!-- Título del formulario -->
                    <h2>Regístrarse</h2>

                    <!-- Campo de entrada para el nombre -->
                    <input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
                    @error('nombre')
                        <!-- Mensaje de error para el campo de nombre -->
                        <small>{{ $message }}</small>
                    @enderror

                    <!-- Campo de entrada para el apellido -->
                    <input type="text" name="apellido" placeholder="Apellido" value="{{ old('apellido') }}">
                    @error('apellido')
                        <!-- Mensaje de error para el campo de apellido -->
                        <small>{{ $message }}</small>
                    @enderror

                    <!-- Campo de entrada para el correo electrónico -->
                    <input type="email" name="email" placeholder="Correo" value="{{ old('email') }}">
                    @error('email')
                        <!-- Mensaje de error para el campo de correo electrónico -->
                        <small>{{ $message }}</small>
                    @enderror

                    <!-- Campo de entrada para el teléfono -->
                    <input type="text" name="telefono" placeholder="Telefono" value="{{ old('telefono') }}">
                    @error('telefono')
                        <!-- Mensaje de error para el campo de teléfono -->
                        <small>{{ $message }}</small>
                    @enderror

                    <!-- Campo de entrada para la contraseña -->
                    <input type="password" name="contraseña" placeholder="Contraseña" value="{{ old('contraseña') }}">
                    @error('contraseña')
                        <!-- Mensaje de error para el campo de contraseña -->
                        <small>{{ $message }}</small>
                    @enderror
                    

                    <!-- Campo para seleccionar una imagen (opcional) -->
                    <label for="file" class="input">
                        Seleccionar imagen
                    </label>                    
                    <input id="file" type="file" name="image" accept="image/*" value="{{ old('image') }}">
                    @error('image')
                        <!-- Mensaje de error para el campo de imagen -->
                        <small>{{ $message }}</small>
                    @enderror
                                        
                    
                    <!-- Selector para el tipo de usuario -->
                    <select name="id_tipo_usuario" value="{{ old('id_tipo_usuario') }}" class="input">
                        <option value="" disabled selected >Seleccione tipo de usuario</option>
                        <!-- Itera sobre los tipos de usuario disponibles -->
                        @foreach ($tipoUsuarios as $tipoUsuario)
                            <option value="{{ $tipoUsuario->id }}">{{ $tipoUsuario->nombre }}</option>
                        @endforeach
                    </select>
                    @error('id_tipo_usuario')
                        <!-- Mensaje de error para el campo de tipo de usuario -->
                        <small>{{ $message }}</small>
                    @enderror
                    <br>
                    <!-- Botón para enviar el formulario de registro -->
                    <button type="submit">Regístrarse</button>

                </form>
            </div>
        </div>

    </main>










    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
