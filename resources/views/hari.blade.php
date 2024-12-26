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
            <div class="col-lg-4 col-sm-6">
                <div class="card gradient-5">
                    <div class="card-body">
                        <h3 class="card-title text-white">Total Kendaraan</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{($data->first()->motor)+($data->first()->mobil)}} Kendaraan
                                <i class="fa fa-car" style="margin-left: 5px;"></i>
                                <i class="fa fa-motorcycle" style="margin-left: 5px;"></i>
                            </h2>
                            <p class="text-white mb-0">Motor : {{$data->first()->motor}} Kendaraan</p>
                            <p class="text-white mb-0">Mobil : {{$data->first()->mobil}} Kendaraan</p>
                        </div>
                        {{-- <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-8">
                <div class="card gradient-9">
                    <div class="card-body">
                        <h3 class="card-title text-white">Total Pendapatan</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">Rp. {{($data->first()->motor*$data->first()->sh_motor)+($data->first()->mobil*$data->first()->sh_mobil)}}<i class="fa fa-money" style="margin-left: 5px;"></i></h2>
                            <p class="text-white mb-0">Motor : Rp. {{$data->first()->motor*$data->first()->sh_motor}} </p>
                            <p class="text-white mb-0">Mobil : Rp. {{$data->first()->mobil*$data->first()->sh_mobil}} </p>
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
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Date</th>
                                        <th>Start</th>
                                        <th>End Start</th>
                                        <th>Mobil</th>
                                        <th>Motor</th>
                                        <th>Jumlah Kendaraan</th>
                                        <th>Total Pendapatan</th>
                                        {{-- <th>Country</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><span class="text-muted">Oct 16, 2017</span>
                                        </td>
                                        <td>10:00</td>
                                        <td>12:00</td>
                                        {{-- <td><span class="label gradient-1 rounded">Paid</span> --}}
                                        </td>
                                        <td><span class="label gradient-1 rounded">{{$d->mobil}}</span></td>
                                        <td><span class="label gradient-1 rounded">{{$d->motor}}</span></td>
                                        <td>{{$d->mobil + $d->motor}} Kendaraan</td>
                                        <td>Rp. {{($d->mobil*$d->sh_mobil) + ($d->motor*$d->sh_motor)}}</td>
                                    </tr>
                                    @endforeach
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
