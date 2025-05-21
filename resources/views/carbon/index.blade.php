@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kalkulator Jejak Karbon</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('carbon.calculate') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="transportation_type">Jenis Transportasi Harian</label>
                            <select class="form-control" id="transportation_type" name="transportation_type" required>
                                <option value="car">Mobil</option>
                                <option value="bus">Bus</option>
                                <option value="train">Kereta</option>
                                <option value="motorcycle">Sepeda Motor</option>
                                <option value="bicycle">Sepeda</option>
                                <option value="walk">Jalan Kaki</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="transportation_distance">Jarak Tempuh Harian (km)</label>
                            <input type="number" class="form-control" id="transportation_distance" name="transportation_distance" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="electricity_usage">Penggunaan Listrik Bulanan (kWh)</label>
                            <input type="number" class="form-control" id="electricity_usage" name="electricity_usage" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="meat_consumption">Konsumsi Daging</label>
                            <select class="form-control" id="meat_consumption" name="meat_consumption" required>
                                <option value="high">Tinggi (setiap hari)</option>
                                <option value="medium">Sedang (3-5 kali seminggu)</option>
                                <option value="low">Rendah (1-2 kali seminggu)</option>
                                <option value="vegetarian">Vegetarian</option>
                                <option value="vegan">Vegan</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="waste_produced">Sampah yang Dihasilkan per Minggu (kg)</label>
                            <input type="number" class="form-control" id="waste_produced" name="waste_produced" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="flights_per_year">Jumlah Penerbangan per Tahun</label>
                            <input type="number" class="form-control" id="flights_per_year" name="flights_per_year" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Hitung Jejak Karbon</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection