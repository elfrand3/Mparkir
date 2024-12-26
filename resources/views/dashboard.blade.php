@extends('layout.template')
@section('content')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Monitoring</a></li>
        </ol>
    </div>
</div>
<div class="content-body">
    <div class="container-fluid mt-3 ml-4">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="card gradient-6">
                    <div class="card-body">
                        <h3 class="card-title text-white">REALTIME</h3>
                        <div class="d-inline-block mb-1">
                            <h2 class="text-white" id="current-time">00:00:00 </h2>
                            <p class="text-white" id="current-date">Loading...</p>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-clock-o"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-9">
                    <div class="card-body">
                        <h3 class="card-title text-white">Parkir Mobil</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{ number_format($tmb)}} <i class="fa fa-car" style="margin-left: 5px;"></i></h2>
                            <p class="text-white mb-0">Satuan Harga : Rp. {{$data->first()->sh_mobil}} </p>
                            <p class="text-white mb-0">Total : Rp. {{ number_format($tpb)}} </p>
                        </div>
                        {{-- <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-5">
                    <div class="card-body">
                        <h3 class="card-title text-white">Parkir Motor</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{ number_format($tmt)}} <i class="fa fa-motorcycle" style="margin-left: 5px;"></i></h2>
                            <p class="text-white mb-0">Satuan Harga : Rp. {{$data->first()->sh_motor}}  </p>
                            <p class="text-white mb-0">Total : Rp. {{ number_format($tpt)}} </p>
                        </div>
                        {{-- <span class="float-right display-5 opacity-5"><i class="fa fa-money" style="font-size:70px"></i></span> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Total Kendaraan</h4>
                        <canvas id="barChart" width="500" height="250"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 chart-container">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Total Pendapatan</h4>
                        <canvas id="lineChartPendapatan" width="500" height="250"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Fungsi untuk mendapatkan bulan dan tahun secara otomatis
    function generateDynamicMonths() {
        const currentDate = new Date(); // Tanggal saat ini
        const currentMonth = currentDate.getMonth(); // Bulan saat ini (0-11)
        const currentYear = currentDate.getFullYear(); // Tahun saat ini
        const months = [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];

        // Ambil 6 bulan terakhir hingga bulan saat ini
        const dynamicLabels = [];
        for (let i = 5; i >= 0; i--) {
            const date = new Date(currentYear, currentMonth - i, 1);
            const monthName = months[date.getMonth()];
            const year = date.getFullYear();
            dynamicLabels.push(`${monthName} ${year}`);
        }
        return dynamicLabels;
    }

    // Data untuk kolom mobil dan motor
    const labels = generateDynamicMonths(); // Labels bulan dinamis
    const dataMobil = [{{ number_format($tmb)}}]; // Data untuk mobil
    const dataMotor = [{{ number_format($tmt)}}]; // Data untuk motor

    const pendapatanMobil = [{{ number_format($tpb)}}]; // Pendapatan mobil
    const pendapatanMotor = [{{ number_format($tpt)}}];

    // Konfigurasi Chart.js
    const ctx = document.getElementById('barChart').getContext('2d');
    const barChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Mobil',
                    data: dataMobil,
                    backgroundColor: 'rgba(75, 192, 192, 0.6)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Motor',
                    data: dataMotor,
                    backgroundColor: 'rgba(153, 102, 255, 0.6)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top'
                },
                tooltip: {
                    enabled: true
                }
            },
            scales: {
                x: {
                    beginAtZero: true
                },
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const ctxLine = document.getElementById('lineChartPendapatan').getContext('2d');
    const lineChartPendapatan = new Chart(ctxLine, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Pendapatan Mobil (Rp)',
                    data: pendapatanMobil,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // Area di bawah garis
                    borderColor: 'rgba(75, 192, 192, 1)', // Warna garis
                    borderWidth: 2,
                    tension: 0.4, // Membuat garis melengkung
                    fill: true // Isi area di bawah garis
                },
                {
                    label: 'Pendapatan Motor (Rp)',
                    data: pendapatanMotor,
                    backgroundColor: 'rgba(153, 102, 255, 0.2)', // Area di bawah garis
                    borderColor: 'rgba(153, 102, 255, 1)', // Warna garis
                    borderWidth: 2,
                    tension: 0.4, // Membuat garis melengkung
                    fill: true // Isi area di bawah garis
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top'
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            let value = context.raw.toLocaleString('id-ID', {
                                style: 'currency',
                                currency: 'IDR'
                            });
                            return `${context.dataset.label}: ${value}`;
                        }
                    }
                }
            },
            scales: {
                x: {
                    beginAtZero: true
                },
                y: {
                    beginAtZero: true,
                    ticks: {
                        // Format sumbu Y dalam format Rupiah
                        callback: function(value) {
                            return value.toLocaleString('id-ID', {
                                style: 'currency',
                                currency: 'IDR'
                            });
                        }
                    }
                }
            }
        }
    });

</script>
@endsection
