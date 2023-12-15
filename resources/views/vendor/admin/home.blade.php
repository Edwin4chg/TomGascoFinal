@component('admin::layouts.app')
<?php
// Obtener el total de compras de hoy
$ventasHoy = \App\Models\Purchase::whereDate('created_at', today())->count();
// Obtener el total de compras de ayer
$ventasAyer = \App\Models\Purchase::whereDate('created_at', today()->subDay())->count();
// Calcular el porcentaje de aumento
$porcentajeAumentoVentas = ($ventasAyer > 0) ? (($ventasHoy - $ventasAyer) / $ventasAyer) * 100 : 100;

// Obtener el total de compradores de hoy
$compradoresHoy = \App\Models\Customer::whereDate('created_at', today())->count();
// Obtener el total de compradores de ayer
$compradoresAyer = \App\Models\Customer::whereDate('created_at', today()->subDay())->count();
// Calcular el porcentaje de aumento
$porcentajeAumentoCompradores = ($compradoresAyer > 0) ? (($compradoresHoy - $compradoresAyer) / $compradoresAyer) * 100 : 100;
?>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5>Ventas de Hoy</h5>
                <p>Monto: ${{ $ventasHoy }}</p>
                <p>Porcentaje de aumento: {{ $porcentajeAumentoVentas }}%</p>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5>Compradores de Hoy</h5>
                <p>Total de compradores: {{ $compradoresHoy }}</p>
                <p>Porcentaje de aumento: {{ $porcentajeAumentoCompradores }}%</p>
            </div>
        </div>
    </div>
</div>

<canvas id="grafico" height="80px"></canvas>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script>
    var ctx = document.getElementById('grafico').getContext('2d');
    var mi_primer_grafico = new Chart(ctx, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [{{$ventasHoy}}, {{$compradoresHoy}}],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)'
                ]
            }],
            labels: ['Ventas', 'Compradores']
        },
        options: {
            responsive: true
        }
    });
</script>
@endcomponent
