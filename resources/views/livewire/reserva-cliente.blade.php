<main>
    <section class="head">
        <h1>Fecha de reserva</h1>
        <input 
            type="date" 
            min="{{$fechaInicio}}" 
            max="{{$fechaFin}}" 
            class="input" 
            wire:change="seleccionarFecha($event.target.value)"
        >                
    </section>          
    <section class="head">
        @foreach ($horariosDisponibles as $horarioDisponible)
            <label class="input" wire:click="seleccionarHora($event.target.innerText)">{{ htmlspecialchars($horarioDisponible) }}</label>
        @endforeach
    </section>

    <form method="POST" action="{{ route('reservar') }}" class="form">
        @csrf        
        <h1>Reservar</h1>

        <label class="input">{{ session('nombre') }}</label>        
        <input type="number" class="input" name="id_usuario" hidden value="{{ session('id') }}">

        <label class="input">{{ $servicio->nombre }}</label>        
        <input type="number" class="input" name="id_servicio" hidden value="{{ $id }}">

        <label class="input">{{ $fechaSeleccionadaString }}</label>
        <input type="string" class="input" name="fecha" hidden value="{{ $fechaSeleccionadaString }}">        
        

        <button type="submit">Crear</button>
    </form>   
          
</main>
