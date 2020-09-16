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
                        <a href="{{ url('admin/addBerita') }}" class="ml-2 btn btn-primary">Tambah Berita / Acara</a>
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
                                    <a href="{{ url('admin/updateBerita/'.$item->id) }}" class="ml-2 btn btn-info">Ubah</a>
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
