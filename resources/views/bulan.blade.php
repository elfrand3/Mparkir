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
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Motor</th>
                                        <th>Mobil</th>
                                        <th>Total Pendapatan</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    @foreach ($data as $d )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><span class="text-muted">Oct 16, 2017</span></td>
                                        <td><span class="label gradient-1 rounded">{{$d->mobil}}</span></td>
                                        <td><span class="label gradient-1 rounded">{{$d->motor}}</span></td>
                                        <td>Rp. {{($d->mobil*$d->sh_mobil) + ($d->motor*$d->sh_motor)}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
            
                        <nav>
                            <ul class="pagination justify-content-end">
                                <li class="page-item {{ $data->onFirstPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $data->previousPageUrl() }}">Previous</a>
                                </li>
                                @for ($i = 1; $i <= $data->lastPage(); $i++)
                                    <li class="page-item {{ $data->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $data->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li class="page-item {{ !$data->hasMorePages() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $data->nextPageUrl() }}">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
