@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hasil Perhitungan Jejak Karbon</div>

                <div class="card-body">
                    <h4>Total Jejak Karbon Tahunan Anda: {{ number_format($carbonFootprint->total_emissions, 2) }} kg CO2e</h4>
                    
                    <div class="mt-4">
                        <h5>Rincian Emisi:</h5>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Transportasi
                                <span class="badge bg-primary rounded-pill">{{ number_format($carbonFootprint->transportation_emissions, 2) }} kg CO2e</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Listrik
                                <span class="badge bg-primary rounded-pill">{{ number_format($carbonFootprint->electricity_emissions, 2) }} kg CO2e</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Makanan
                                <span class="badge bg-primary rounded-pill">{{ number_format($carbonFootprint->food_emissions, 2) }} kg CO2e</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Sampah
                                <span class="badge bg-primary rounded-pill">{{ number_format($carbonFootprint->waste_emissions, 2) }} kg CO2e</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Penerbangan
                                <span class="badge bg-primary rounded-pill">{{ number_format($carbonFootprint->flight_emissions, 2) }} kg CO2e</span>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <h5>Rekomendasi untuk Mengurangi Emisi:</h5>
                        <ul>
                            <li>Gunakan transportasi umum atau kendaraan tidak bermotor</li>
                            <li>Kurangi konsumsi daging dan produk hewani</li>
                            <li>Gunakan peralatan listrik yang hemat energi</li>
                            <li>Kurangi sampah dengan menerapkan 3R (Reduce, Reuse, Recycle)</li>
                            <li>Kurangi perjalanan menggunakan pesawat</li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <canvas id="carbonChart" width="400" height="200"></canvas>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('carbon.index') }}" class="btn btn-primary">Hitung Lagi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('carbonChart').getContext('2d');
        var carbonChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Transportasi', 'Listrik', 'Makanan', 'Sampah', 'Penerbangan'],
                datasets: [{
                    data: [
                        {{ $carbonFootprint->transportation_emissions }},
                        {{ $carbonFootprint->electricity_emissions }},
                        {{ $carbonFootprint->food_emissions }},
                        {{ $carbonFootprint->waste_emissions }},
                        {{ $carbonFootprint->flight_emissions }}
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(153, 102, 255, 0.7)'
                    ]
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Distribusi Jejak Karbon Anda'
                    }
                }
            }
        });
    });
</script>
@endsection