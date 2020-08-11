@extends('layouts.admin')
@section('judul', "History")
@section('content')
<style>
    /* .li{
        height: 100px
    } */
    .ic{
       font-size: 40pt
    }
    @media (max-width: 600px) {
        /* .li{
            height: 200px;
        } */
        .ic{
       font-size: 30pt
    }
    }
</style>
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
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        @if ($data->count()>0)
                        @foreach ($data as $item)
                        <ul class="list-group text-left mt-3">
                            <li class="list-group-item li">
                                <div class="row">
                                    <div class="col col-sm-2">
                                        <i class="mdi {{$item->icon}} mdi-icon text-success ic"></i>
                                    </div>
                                    <div class="col col-sm-8">
                                        <p class="text-primary">{{$item->subjek}}</p>
                                        <h6>{{$item->pesan}}</h6>
                                    </div>
                                    <div class="col col-sm-2">
                                        <p class="text-secondary text-right">
                                            {{date('d F Y', strtotime($item->created_at))}}
                                            {{date('H:i:s', strtotime($item->created_at))}}
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        @endforeach
                        @else
                            <h1>Activity Kosong</h1>
                        @endif
                        <div class="text-center mt-3">
                            {{$data->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

