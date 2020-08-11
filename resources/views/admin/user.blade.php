@extends('layouts.admin')
@section('judul', "User")
@section('content')
    <div class="container">
        @if ($message = Session::get('success'))
        <div class="row">
            <div class="col mt-3">
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
            </div>
        </div>
    @endif
    @if ($message = Session::get('danger'))
        <div class="row">
            <div class="col mt-3">
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
            </div>
        </div>
    @endif

        <div class="row">
            <div class="col">
                <h1>Management User</h1>
                <div class="row">
                    @foreach ($data as $item)
                        <div class="col col-sm-3">
                            <div class="card mt-3" style="height: 350px">
                                <div class="card-body text-center">
                                    <img src="{{asset('images/user/'.$item->image)}}" class="img-thumbnail" style="height: 160px">
                                    <h5>{{$item->nama_lengkap}}</h5>
                                </div>
                                <div class="card-footer">
                                    <a href="{{url('admin/user/'.$item->name)}}" class="btn btn-info d-block">Detail</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
@endsection
