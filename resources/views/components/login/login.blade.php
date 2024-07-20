<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/component/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Tu-Cita</title>
</head>

<body>

    <main>

        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">


                <!--Login-->
                <form method="POST" action="{{ route('login-ingresar') }}" class="formulario__login">
                    @csrf

                    <h2>Iniciar Sesión</h2>

                    <input type="email" name="email" placeholder="Correo electronico" value="{{ old('email') }}">
                    @error('email')
                        <small>{{ $message }}</small>
                    @enderror


                    <input type="password" name="contraseña" placeholder="Contraseña" value="{{ old('contraseña') }}">
                    @error('contraseña')
                        <small>{{ $message }}</small>
                    @enderror
                    <br>
                    <button type="submit">Ingresar</button>
                </form>

                <!--Register-->
                <form method="POST" action="{{ route('login-crear') }}" enctype="multipart/form-data" class="formulario__register">
                    @csrf

                    <h2>Regístrarse</h2>

                    <input type="text" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
                    @error('nombre')
                        <small>{{ $message }}</small>
                    @enderror

                    <input type="text" name="apellido" placeholder="Apellido" value="{{ old('apellido') }}">
                    @error('apellido')
                        <small>{{ $message }}</small>
                    @enderror

                    <input type="email" name="email" placeholder="Correo" value="{{ old('email') }}">
                    @error('email')
                        <small>{{ $message }}</small>
                    @enderror

                    <input type="text" name="telefono" placeholder="Telefono" value="{{ old('telefono') }}">
                    @error('telefono')
                        <small>{{ $message }}</small>
                    @enderror

                    <input type="password" name="contraseña" placeholder="Contraseña" value="{{ old('contraseña') }}">
                    @error('contraseña')
                        <small>{{ $message }}</small>
                    @enderror
                    

                    <label for="file" class="input">
                        Seleccionar imagen
                    </label>                    
                    <input id="file" type="file" name="image" accept="image/*" value="{{ old('image') }}">
                    @error('image')
                        <small>{{ $message }}</small>
                    @enderror
                                        
                    
                    <select name="id_tipo_usuario" value="{{ old('id_tipo_usuario') }}" class="input">
                        <option value="" disabled selected >Seleccione tipo de usuario</option>
                        @foreach ($tipoUsuarios as $tipoUsuario)
                            <option value="{{ $tipoUsuario->id }}">{{ $tipoUsuario->nombre }}</option>
                        @endforeach
                    </select>
                    @error('id_tipo_usuario')
                        <small>{{ $message }}</small>
                    @enderror
                    <br>
                    <button type="submit">Regístrarse</button>

                </form>
            </div>
        </div>

    </main>










    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
