@extends('layouts.admin')
@section('judul', "Berita")
@section('content')
<script src='https://cdn.tiny.cloud/1/ip0rkeafploig1u7xvh8y8bb0c7qg3gz1kesdzcwab09fnzx/tinymce/5/tinymce.min.js' referrerpolicy="origin">
</script>
<script>
  tinymce.init({
    selector: '#mytextarea'
  });
</script>

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
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('createBerita') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="judul" class="form-control" placeholder="Judul">
                                <select name="kategori" class="form-control mt-2">
                                    <option value="Berita">Berita</option>
                                    <option value="Acara">Acara</option>
                                </select>
                                {{-- <textarea id="in_txt" cols="30" rows="10" placeholder="Keterangan" class="form-control mt-2"></textarea> --}}
                            </div>
                            <div class="form-group">
                                <textarea id="mytextarea" class="mt-3" rows="20" name="isi">
                                    Isi Berita/Acara
                                </textarea>
                                <input type="file" class="mt-2" name="image" id="gambarProduk1" onchange="loadFile1(event)" required>
                                <img id="output2" class="img-thumbnail mt-3" />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
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
@endsection
