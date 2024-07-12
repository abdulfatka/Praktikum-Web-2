<head>
    <title>Admin | Pembimbing Akademik Kampus</title>
    <link rel="icon" href="{{ asset('assets/img/LogoNurulFikri.png') }}" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>Hai {{ strtoupper(Auth::user()->name) }}, Selamat datang di dashboard kami &#128075;</p>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="row m-6">
            <!-- Card Mahasiswa Bimbingan -->
            <div class="col-md-4">
                <div class="card text-white bg-info mb-3">
                    <div class="card-header">Mahasiswa Bimbingan</div>
                    <div class="card-body">
                        <h5 class="card-title">Jumlah Mahasiswa</h5>
                        <p class="card-text">25</p>
                    </div>
                </div>
            </div>
            <!-- Card Jadwal Bimbingan -->
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Jadwal Bimbingan</div>
                    <div class="card-body">
                        <h5 class="card-title">Sesi Bimbingan Minggu Ini</h5>
                        <p class="card-text">5</p>
                    </div>
                </div>
            </div>
            <!-- Card Pesan -->
            <div class="col-md-4">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">Pesan</div>
                    <div class="card-body">
                        <h5 class="card-title">Pesan Baru</h5>
                        <p class="card-text">3</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Mahasiswa Bimbingan -->
        <div class="card mb-4 m-6">
            <div class="card-header">Daftar Mahasiswa Bimbingan</div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Program Studi</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Farhan Muhammad Mukhlis</td>
                            <td>0110123495</td>
                            <td>Teknik Informatika</td>
                            <td>Aktif</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Dilla Wulandari</td>
                            <td>0110123948</td>
                            <td>Sistem Informasi</td>
                            <td>Aktif</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Salsabila Mila</td>
                            <td>0110123933</td>
                            <td>Bisnis Digital</td>
                            <td>Aktif</td>
                        </tr>
                        <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Chart Example -->
        <div class="card mb-4 m-6">
            <div class="card-header">Statistik Kehadiran</div>
            <div class="card-body">
                <canvas id="attendanceChart"></canvas>
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('attendanceChart').getContext('2d');
        var attendanceChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Kehadiran',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</x-app-layout>
