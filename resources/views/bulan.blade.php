@extends('layout.template')
@section('content')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Rekap</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Pendapatan Perbulan</a></li>
        </ol>
    </div>
</div>
<div class="content-body">
    <div class="container-fluid mt-3 ml-4">
        <div class="row">
            <div class="col-lg-11">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Pendapatan/Perbulan</h4>
                        <div class="table-responsive">
                            <table class="table header-border">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Motor</th>
                                        <th>Mobil</th>
                                        <th>Total Pendapatan</th>
                                        {{-- <th>Country</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><span class="text-muted">Oct 16, 2024</span></td>
                                        <td><span class="label gradient-1 rounded">20</span></td>
                                        <td><span class="label gradient-1 rounded">10</span></td>
                                        <td>Rp. 110000</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><span class="text-muted">Oct 17, 2024</span></td>
                                        <td><span class="label gradient-1 rounded">10</span></td>
                                        <td><span class="label gradient-1 rounded">20</span></td>
                                        <td>Rp. 130000</td>
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
