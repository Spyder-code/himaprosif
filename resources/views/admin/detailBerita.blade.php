@extends('layouts.admin')
@section('judul', "Event")
@section('content')
<style>
    p{
        text-indent: 60px;
    }
</style>
    <div class="container">
        <a href="{{url('admin/berita-acara')}}" class="btn btn-info mb-3">Kembali</a>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col col-sm">
                        <img src="{{asset('images/berita/'.$data->image)}}" style="height: 200px;">
                    </div>
                    <div class="col col-sm mt-2">
                        <span class="d-block text-muted">{{date('d F Y', strtotime($data->created_at))}}</span>
                        <span class="d-block text-muted">{{$data->kategori}}</span>
                        <h2 class="h4 mb-2 mt-3"><a href="single.html">{{$data->judul}}</a></h2>
                        <div>{!!$data->isi!!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
