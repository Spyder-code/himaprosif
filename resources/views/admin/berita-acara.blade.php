@extends('layouts.admin')
@section('judul', "Event")
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
                        <button href="#" data-toggle="modal" data-target=".create" class="ml-2 btn btn-primary">Tambah Berita / Acara</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$item->judul}}</td>
                                <td>{{$item->kategori}}</td>
                                <td style="cursor: pointer"> <img src="{{asset('images/berita/'.$item->image)}}" style="width: 80px; height:80px" class="picture"></td>
                                <td class="d-flex flex-row">
                                    <button href="#" data-toggle="modal" data-target=".update-{{$item->id}}" class="ml-2 btn btn-info">Ubah</button>
                                    {{-- Modal Update --}}
                            <div class="modal fade update-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="{{url('updateBerita')}}" method="post" enctype="multipart/form-data">
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
                                                <input type="text" name="judul" class="form-control" value="{{$item->judul}}">
                                                <select name="kategori" class="form-control mt-2">
                                                    @if ($item->kategori=="Berita")
                                                    <option selected value="Berita">Berita</option>
                                                    <option value="Acara">Acara</option>
                                                    @else
                                                    <option value="Berita">Berita</option>
                                                    <option selected value="Acara">Acara</option>
                                                    @endif
                                                </select>
                                                <textarea id="inputArea-{{$item->id}}" name="isi" cols="30" rows="10" class="form-control mt-2"></textarea>
                                                <input type="file" class="mt-2 in" name="image" id="gambarProduk1" onchange="loadFile1(event)">
                                                <img id="output1" style="width:100px; height:100px" class="img-thumbnail pic mt-3" />
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
                                                    $('#inputArea-'+{{$item->id}}).val('{!!$item->isi!!}');
                                                </script>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">Update</button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                                    <a href="{{url('admin/berita-acara/'.$item->id)}}" class="ml-2 btn btn-primary">Detail</a>
                                    <form action="{{url('deleteBerita')}}" method="post">
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
            <form action="{{url('createBerita')}}" method="post" enctype="multipart/form-data">
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
                        <input type="text" name="judul" class="form-control" placeholder="Judul">
                        <select name="kategori" class="form-control mt-2">
                            <option value="Berita">Berita</option>
                            <option value="Acara">Acara</option>
                        </select>
                        <textarea id="in_txt" cols="30" rows="10" placeholder="Keterangan" class="form-control mt-2"></textarea>
                        <p><input id="out_html" name="isi" class="form-control" type="hidden"/></p>
                        <input type="file" class="mt-2" name="image" id="gambarProduk1" onchange="loadFile1(event)" required>
                        <img id="output2" style="width:150px; height:100px" class="img-thumbnail mt-3" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="btn" class="btn btn-success">Tambahkan</button>
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
                        function convert() {
                var input_str; //store input
                var text_input; //store input after beging trim()med
                var output_html=""; //store output
                var counter;

                input_str=document.getElementById('in_txt').value; //get input and store it in input_str
                text_input=input_str.trim(); //trim() input
                if(text_input.length > 0){
                    output_html+="<p>"; //begin by creating paragraph
                    for(counter=0; counter < text_input.length; counter++){
                        switch (text_input[counter]){
                            case '\n':
                                if (text_input[counter+1]==='\n'){
                                    output_html+="</p>\n<p>";
                                    counter++;
                                }
                                else output_html+="<br>";
                                break;

                            case ' ':
                                if(text_input[counter-1] != ' ' && text_input[counter-1] != '\t')
                                    output_html+=" ";
                                break;

                            case '\t':
                                if(text_input[counter-1] != '\t')
                                    output_html+=" ";
                                break;

                            case '&':
                                output_html+="&amp;";
                                break;

                            case '"':
                                output_html+="&quot;";
                                break;

                            case '>':
                                output_html+="&gt;";
                                break;

                            case '<':
                                output_html+="&lt;";
                                break;

                            default:
                                output_html+=text_input[counter];

                        }

                    }
                    output_html+="</p>"; //finally close paragraph
                }
                document.getElementById('out_html').value = output_html; // display output html
            }

            var el = document.getElementById('btn');
            el.onclick = convert;
        </script>
@endsection

@section('custom-script')
<script>
    $(function(){
        var table = $('.table').DataTable({
            responsive:true
        });
        $('.picture').click(function () {
            var src = $(this).attr('src');
            $('#itemImage').attr('src',src);
            $('.imageModal').modal('show');
        });
    });
</script>
@endsection
