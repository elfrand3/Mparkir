@extends('layout.template')
@section('content')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Rekap</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Pendapatan Perhari</a></li>
        </ol>
    </div>
</div>
<div class="content-body">
    <div class="container-fluid mt-3 ml-4">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-1">
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
            <div class="col-lg-4 col-sm-8">
                <div class="card gradient-2">
                    <div class="card-body">
                        <h3 class="card-title text-white">Total Pendapatan</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">Rp.1500000<i class="fa fa-money" style="margin-left: 5px;"></i></h2>
                            <p class="text-white mb-0">Motor : Rp.750000 </p>
                            <p class="text-white mb-0">Mobil : Rp.750000 </p>
                        </div>
                        {{-- <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-11">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Pendapatan/Hari</h4>
                        <div class="table-responsive">
                            <table class="table header-border">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Date</th>
                                        <th>Start</th>
                                        <th>End Start</th>
                                        <th>Jenis Kendaraan</th>
                                        <th>Jumlah Kendaraan</th>
                                        <th>Nominal</th>
                                        {{-- <th>Country</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><span class="text-muted">Oct 16, 2017</span>
                                        </td>
                                        <td>10:00</td>
                                        <td>12:00</td>
                                        {{-- <td><span class="label gradient-1 rounded">Paid</span> --}}
                                        </td>
                                        <td><span class="label gradient-1 rounded">Motor</span></td>
                                        <td><span class="label gradient-1 rounded">6</span></td>
                                        <td>Rp. 18000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><span class="text-muted">Oct 16, 2017</span>
                                        </td>
                                        <td>08:00</td>
                                        <td>12:00</td>
                                        {{-- <td><span class="label gradient-1 rounded">Paid</span> --}}
                                        <td><span class="label gradient-1 rounded">Mobil</span></td>
                                        <td><span class="label gradient-1 rounded">5</span></td>
                                        <td>Rp. 25000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
