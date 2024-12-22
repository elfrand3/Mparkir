@extends('layout.template')
@section('content')
<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
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
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-2">
                    <div class="card-body">
                        <h3 class="card-title text-white">Parkir Mobil</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">30 <i class="fa fa-car" style="margin-left: 5px;"></i></h2>
                            <p class="text-white mb-0">Satuan Harga : Rp.5000 </p>
                            <p class="text-white mb-0">Total : Rp.150000 </p>
                        </div>
                        {{-- <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-3">
                    <div class="card-body">
                        <h3 class="card-title text-white">Parkir Motor</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">10<i class="fa fa-motorcycle" style="margin-left: 5px;"></i></h2>
                            <p class="text-white mb-0">Satuan Harga : Rp.2000 </p>
                            <p class="text-white mb-0">Total : Rp.20000 </p>
                        </div>
                        {{-- <span class="float-right display-5 opacity-5"><i class="fa fa-money" style="font-size:70px"></i></span> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection