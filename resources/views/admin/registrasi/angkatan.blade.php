@extends('layouts.admin')
@section('judul', "Angkatan")
@section('content')
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Progress Pendaftaran</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm mt-2">
                <span>Angkatan 2016</span>
                <div class="progress" style="height:30px">
                    <div class="progress-bar text-dark" role="progressbar" style="width: {{$jumlah16}}%;" aria-valuenow="{{$jumlah16}}" aria-valuemin="0" aria-valuemax="100">{{round($jumlah16,2)}}%</div>
                </div>
            </div>
            <div class="col-sm mt-2">
                <span>Angkatan 2017</span>
                <div class="progress" style="height:30px">
                    <div class="progress-bar text-dark" role="progressbar" style="width: {{$jumlah17}}%;" aria-valuenow="{{$jumlah17}}" aria-valuemin="0" aria-valuemax="100">{{round($jumlah17,2)}}%</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm mt-2">
                <span>Angkatan 2018</span>
                <div class="progress" style="height:30px">
                    <div class="progress-bar text-dark" role="progressbar" style="width: {{$jumlah18}}%;" aria-valuenow="{{$jumlah18}}" aria-valuemin="0" aria-valuemax="100">{{round($jumlah18,2)}}%</div>
                </div>
            </div>
            <div class="col-sm mt-2">
                <span>Angkatan 2019</span>
                <div class="progress" style="height:30px">
                    <div class="progress-bar text-dark" role="progressbar" style="width: {{$jumlah19}}%;" aria-valuenow="{{$jumlah19}}" aria-valuemin="0" aria-valuemax="100">{{round($jumlah19,2)}}%</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm mt-2">
                <span>Angkatan 2020</span>
                <div class="progress" style="height:30px">
                    <div class="progress-bar text-dark" role="progressbar" style="width: {{$jumlah20}}%;" aria-valuenow="{{$jumlah20}}" aria-valuemin="0" aria-valuemax="100">{{round($jumlah20,2)}}%</div>
                </div>
            </div>
            <div class="col-sm mt-2"></div>
        </div>

        <hr>
        <h1 class="text-center mt-4">Data statistik</h1>
        <div class="row">
            <div class="col-sm mt-4">
                <div class="card">
                    <div class="card-header bg-primary text-light">Angkatan 2016</div>
                    <div class="card-body">
                        <h6>Jumlah pendaftar {{$a}} /78 Mhs</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm mt-4">
                <div class="card">
                    <div class="card-header bg-primary text-light">Angkatan 2017</div>
                    <div class="card-body">
                        <h6>Jumlah pendaftar {{$b}} /82 Mhs</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm mt-4">
                <div class="card">
                    <div class="card-header bg-primary text-light">Angkatan 2018</div>
                    <div class="card-body">
                        <h6>Jumlah pendaftar {{$c}} /68 Mhs</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm mt-4">
                <div class="card">
                    <div class="card-header bg-primary text-light">Angkatan 2019</div>
                    <div class="card-body">
                        <h6>Jumlah pendaftar {{$d}} /60 Mhs</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm mt-4">
                <div class="card">
                    <div class="card-header bg-primary text-light">Angkatan 2020</div>
                    <div class="card-body">
                        <h6>Jumlah pendaftar {{$e}} /0 Mhs</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm mt-4"></div>
        </div>
    </div>
@endsection
