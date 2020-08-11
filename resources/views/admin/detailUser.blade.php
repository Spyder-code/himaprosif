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
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col col-sm text-center">
                    <img class="img-thumbnail mt-3" src="{{ asset('images/user/'.$user->image) }}" style="height:300px" alt="{{$user->name}}">
                </div>
                <div class="col col-sm mt-3">
                    <ul class="list-group text-left">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col col-4">
                                    <label for="address">Nama</label>
                                </div>
                                <div class="col col-2">
                                    <label for="">:</label>
                                </div>
                                <div class="col">
                                    {{$user->nama_lengkap}}
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col col-4">
                                    <label for="address">Username</label>
                                </div>
                                <div class="col col-2">
                                    <label for="">:</label>
                                </div>
                                <div class="col">
                                    {{$user->name}}
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col col-4">
                                    <label for="address">Divisi</label>
                                </div>
                                <div class="col col-2">
                                    <label for="">:</label>
                                </div>
                                <div class="col">
                                    {{$user->divisi}}
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

        <div class="row mt-5">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Activity Logs
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Subjek</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Waktu</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$item->subjek}}</td>
                                <td>{{$item->pesan}}</td>
                                <td>
                                    {{date('d F Y', strtotime($item->created_at))}}
                                    {{date('H:i:s', strtotime($item->created_at))}}
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('custom-script')
<script>
    $(function(){
        var table = $('.table').DataTable({
            responsive:true
        });
    });
</script>
@endsection
