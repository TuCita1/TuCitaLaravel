<!-- Componente principal para la vista de la página 'Tu-Cita' -->
<x-index :title="'Tu-Cita'">
    <!-- Contenedor principal de la página -->
    <div class="home">

        <!-- Sección de encabezado de la página -->
        <header>
            <!-- Sección para la navegación y el logotipo -->
            <section class="flex-header">
                <!-- Enlace al inicio que contiene el logotipo de la aplicación -->
                <a href="{{ route('home') }}">
                    <img src="img/app/logo.svg">
                </a>
                <!-- Enlace al inicio de sesión con un botón para ingresar -->
                <a href="{{ route('login') }}">
                    <button>Ingresar</button>
                </a>
            </section>

            <!-- Sección con información introductoria sobre la aplicación -->
            <section class="info">
                <!-- Título principal de la sección de información -->
                <h1>Agenda tu cita con los mejores profesionales y en el lugar que desees</h1>
                <!-- Descripción de la experiencia que ofrece la aplicación -->
                <p>"Transforma tu experiencia de belleza con nuestra aplicación de reservas. Encuentra y reserva
                    fácilmente citas en salones de belleza, spas y barberías, todo en un solo lugar. Disfruta de la
                    comodidad y la eficiencia de planificar tus momentos de cuidado personal desde la palma de tu mano.
                    ¡Descubre un nuevo nivel de relajación y estilo con solo unos clics!"</p>
            </section>
        </header>

        <main>
            <!-- Sección que describe los servicios ofrecidos por la aplicación -->
            <section class="info">
                <h1>SERVICIOS QUE OFRECEMOS</h1>
                <!-- Descripción de los servicios disponibles en la aplicación -->
                <p>Nuestra aplicación web ofrece una plataforma integral para reservar citas en salones de belleza, spas
                    y barberías. Facilita la búsqueda y reserva de servicios como cortes de cabello, tratamientos
                    capilares, manicuras, pedicuras, masajes, tratamientos faciales, afeitados y arreglos de barba. Todo
                    en un solo lugar, con una interfaz intuitiva y accesible desde cualquier dispositivo. Experimenta la
                    comodidad y la eficiencia de planificar tus momentos de cuidado personal de manera rápida y
                    sencilla.</p>
            </section>


            <!-- Sección con categorías de servicios ofrecidos -->
            <section class="flex-main">
                <!-- Categoría de Salones de Belleza -->
                <div>
                    <h1>SALONES DE BELLEZA</h1>
                    <img src="img/app/iconosdb.svg" alt="">
                </div>

                <!-- Categoría de Barberías -->
                <div>
                    <h1>BARBERIAS</h1>
                    <img src="img/app/iconobb.svg" alt="">
                </div>

                <!-- Categoría de Spas -->
                <div>
                    <h1>SPA</h1>
                    <img src="img/app/iconospa.svg" alt="">
                </div>

            </section>

        </main>

        <!-- Sección de pasos para usar la aplicación -->
        <header>
            <!-- Sección con el título de los pasos -->
            <section class="info">
                <h1>PASO A PASO</h1>
            </section>
            <!-- Sección con los pasos para usar la aplicación -->
            <section class="flex-main">

                <!-- Paso 1: Selección del tipo de servicio -->
                <div>
                    <img src="img/app/paso1.svg" alt="">
                    <p>Selecionar tipo de servicio</p>
                </div>

                <!-- Paso 2: Selección de fecha y hora -->
                <div>
                    <img src="img/app/paso2.svg" alt="">
                    <p>Seleccionar fecha y hora</p>
                </div>

                <!-- Paso 3: Realización de la reserva -->
                <div>
                    <img src="img/app/paso3.svg" alt="">
                    <p>Realizar reserva</p>
                </div>

            <!-- Sección con la importancia de la aplicación de reservas -->
            </section>
            <section class="info">
                <p>Contar con una aplicación de reservas para salones de belleza, spas y barberías es crucial en la era
                    digital. Esta herramienta facilita a los clientes encontrar y reservar servicios de manera rápida y
                    conveniente, optimizando su tiempo y mejorando su experiencia.</p>
            </section>
        </header>

        <!-- Sección principal de información adicional -->
        <main>
            <!-- Sección sobre la misión de la aplicación -->
            <section class="card">
                <h2>Mision</h2>
                <p>Facilitar y mejorar la experiencia de reserva para clientes y proveedores de servicios de belleza, spa y barbería, ofreciendo una plataforma accesible, intuitiva y confiable que promueva la comodidad y el bienestar.</p>
            </section>
            <!-- Sección sobre la visión de la aplicación -->
            <section class="card">
                <h2>Vision</h2>
                <p>Convertirnos en la principal plataforma en línea para la reserva de citas de belleza, spa y barbería, reconocida por nuestra calidad de servicio, innovación tecnológica y compromiso con la satisfacción del cliente y el crecimiento de nuestros socios comerciales.</p>
            </section>
            <!-- Sección sobre los objetivos de la aplicación -->
            <section class="card">
                <h2>Objetivos</h2>
                <p>Convertirnos en la plataforma líder y de confianza para la reserva de citas de belleza, spa y barbería, ofreciendo una experiencia excepcional para los usuarios y socios comerciales, impulsada por la innovación, la calidad del servicio y la conveniencia.</p>
            </section>
        </main>
    </div>
</x-index>

