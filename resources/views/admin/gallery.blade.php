@extends('layouts.admin')
@section('judul', "Gallery")
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

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <button href="#" data-toggle="modal" data-target=".create" class="ml-2 btn btn-primary">Tambah Gallery</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive-sm">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$item->judul}}</td>
                                <td style="cursor: pointer">
                                    <img src="{{asset('images/gallery/'.$item->image)}}" class="picture" style="width: 80px; height:80px">
                                </td>
                                <td class="d-flex flex-row">
                                    <button href="#" data-toggle="modal" data-target=".update-{{$item->id}}" class="ml-2 btn btn-primary">Ubah</button>
                                    {{-- Modal Update --}}
                            <div class="modal fade update-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="{{url('updateGallery')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="oldImage" value="{{$item->image}}">
                                        <input type="hidden" name="id" value="{{$item->id}}">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1>Update</h1>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="file" class="mt-2 in" name="image" onchange="loadFile1(event)" required>
                                                <img style="width:150px; height:150px" class="img-thumbnail mt-3 pic" />
                                                <script>
                                                    $('.pic').hide();
                                                function readURL(input) {
                                                    if (input.files && input.files[0]) {
                                                        var reader = new FileReader();
                                                        reader.onload = function(e) {
                                                        $('.pic').attr('src', e.target.result);
                                                        }
                                                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                                                    }
                                                }
                                                $(".in").change(function() {
                                                    readURL(this);
                                                    $('.pic').show();
                                                });
                                            </script>
                                                <input type="text" name="judul" class="form-control mt-2" value="{{$item->judul}}">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                                    <form action="{{url('deleteGallery')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$item->id}}">
                                        <input type="hidden" name="judul" value="{{$item->judul}}">
                                        <button type="submit" onclick="return confirm('Are You Sure?')" class="ml-2 btn btn-danger">Hapus</button>
                                    </form>
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

    {{-- Modal create --}}
    <div class="modal fade create" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{url('createGallery')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h1>Create</h1>
                    <button class="close" type="button" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="file" class="mt-2" name="image" onchange="loadFile1(event)" required>
                        <img id="output2" style="width:150px; height:100px" class="img-thumbnail mt-3" />
                        <script>
                        $('#output2').hide();
                        var loadFile1 = function(event) {
                            $('#output2').show();
                            var output1 = document.getElementById('output2');
                            output1.src = URL.createObjectURL(event.target.files[0]);
                            output1.onload = function() {
                            URL.revokeObjectURL(output1.src)
                            }
                        };
                        </script>
                        <input type="text" name="judul" class="form-control mt-2" placeholder="Caption">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Tambahkan</button>
                </div>
            </div>
        </form>
        </div>
    </div>
    {{-- Modal Image --}}
    <div class="modal fade imageModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 id="judulImage"></h1>
                    <button class="close" type="button" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="itemImage" class="img-thumbnail">
                </div>
            </div>
        </form>
        </div>
    </div>
@endsection

@section('custom-script')
<script>
    $(function(){
        var table = $('.table').DataTable();
        $('.picture').click(function () {
            var src = $(this).attr('src');
            $('#itemImage').attr('src',src);
            $('.imageModal').modal('show');
        });
    });
</script>
@endsection
