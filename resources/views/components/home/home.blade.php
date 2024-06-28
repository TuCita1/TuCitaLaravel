
<x-index :title="'Tu-Cita'">    
    <header>
        <div>
            <a href="{{ route('login') }}">
            <button>Ingresar</button>
            </a>
        </div>
        <section class="header-texto">
            <h1>Agenda tu cita con los mejores profesionales y en el lugar que desees.</h1>
            <h2>¡Tu cita perfecta te espera¡</h2>
        </section>

        <div class="ola" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C195.53,132.55 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #08f;"></path></svg></div>
    </header>

    <div class="container">
        <div class="count-box">
            <h2>Usuarios Registrados</h2>
            <div id="user-count">0</div>
        </div>
        <div class="count-box">
            <h2>Citas Agendadas</h2>
            <div id="appointment-count">0</div>
        </div>
    </div>

    <div class="contenedor-pasos">
        <div class="paso1">
            <img src="img/paso1.png" alt="Paso 1" class="step-image">
            <div class="step-number">1</div>
            <p class="step-description">Descripción del paso 1.</p>
        </div>
        <div class="paso2">
            <img src="img/paso2.png" alt="Paso 2" class="step-image">
            <div class="step-number">2</div>
            <p class="step-description">Descripción del paso 2.</p>
        </div>
        <div class="paso3">
            <img src="img/paso3.png" alt="Paso 3" class="step-image">
            <div class="step-number">3</div>
            <p class="step-description">Descripción del paso 3.</p>
        </div>
    </div>

    <div>
        <!-- Tarjeta de Misión -->
        <div class="card w-90 p-3 m-3">
            <div class="card-body">
            <h5 class="card-title">Mision</h5>
            <p class="card-text">Facilitar y mejorar la experiencia de reserva para clientes y proveedores de servicios de belleza, spa y barbería, ofreciendo una plataforma accesible, intuitiva y confiable que promueva la comodidad y el bienestar.</p>          
            </div>
        </div>
        <!-- Tarjeta de Visión -->
        <div class="card w-90 p-3 m-3">
            <div class="card-body">
            <h5 class="card-title">Vision</h5>
            <p class="card-text">Convertirnos en la principal plataforma en línea para la reserva de citas de belleza, spa y barbería, reconocida por nuestra calidad de servicio, innovación tecnológica y compromiso con la satisfacción del cliente y el crecimiento de nuestros socios comerciales.</p>        
            </div>
        </div>
        <!-- Tarjeta de Objetivos -->
        <div class="card w-90 p-3 m-3">
            <div class="card-body">
            <h5 class="card-title">Objetivos</h5>
            <p class="card-text">Convertirnos en la plataforma líder y de confianza para la reserva de citas de belleza, spa y barbería, ofreciendo una experiencia excepcional para los usuarios y socios comerciales, impulsada por la innovación, la calidad del servicio y la conveniencia.</p>          
            </div>
        </div>
    </div>

    <footer>
        <div class="social-container">
            <div class="social-item">
                <i class="fab fa-facebook-f"></i>
                <span>Facebook</span>
            </div>
            <div class="social-item">
                <i class="fab fa-twitter"></i>
                <span>Twitter</span>
            </div>
            <div class="social-item">
                <i class="fab fa-instagram"></i>
                <span>Instagram</span>
            </div>
            <div class="social-item">
                <i class="fab fa-linkedin-in"></i>
                <span>LinkedIn</span>
            </div>
        </div>
    </footer>
</x-index>