<x-cliente.cliente :title="'Cliente'">    
    <main>        
        @livewire('reserva-cliente',[
            'id' => $id,
            'servicio' => $servicio, 
            'fechaInicio' => $fechaInicio, 
            'fechaFin' => $fechaFin, 
            'horarios' => $horarios
        ])
    </main>
</x-cliente.cliente>
