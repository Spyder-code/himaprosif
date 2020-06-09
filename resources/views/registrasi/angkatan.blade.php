@extends('layouts.user')
@section('link-pendaftaran','active')
@section('main')
<div class="site-section bg-light" id="contact-section">
    <div class="container">
    <div class="row">
        <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
        <div class="block-heading-1">
            <h2>Daftar sebagai mahasiswa aktif sistem informasi</h2>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
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
        <form action="{{url('pendaftaran-angkatan')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
            <div class="col-md-6 mb-4 mb-lg-0">
                <label for="nomor">(Wajib)</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" onkeyup="this.value = this.value.toUpperCase();">
            </div>
            <div class="col-md-6">
                <label for="nomor">(Wajib)</label>
                <input type="text" name="nim" class="form-control" placeholder="NIM" onkeyup="this.value = this.value.toUpperCase();">
            </div>
            </div>


            <div class="form-group row">
                <div class="col-md-12">
                    <label for="angkatan">Angkatan</label>
                    <select name="angkatan" id="angkatan" class="form-control">
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                    </select>
                </div>
                </div>

            <div class="form-group row">
            <div class="col-md-6 mb-4 mb-lg-0">
                <label for="nomor">(Wajib)</label>
                <input type="text" name="nomor" class="form-control" placeholder="Nomor tlp.">
            </div>
            <div class="col-md-6">
                <label for="instagram">(Optional)</label>
                <input type="text" name="instagram" class="form-control" placeholder="Instagram">
            </div>
            </div>


            <div class="form-group row">
            <div class="col-md-12">
                {{-- <label for="nomor">(optional)</label> --}}
                <textarea name="motto" id="" class="form-control" placeholder="Motto" cols="30" rows="3"></textarea>
            </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 ml-2">
                    <label for="foto" class="text-dark">Foto profil (Wajib)</label>
                    <input type="file" onchange="loadFile(event)" name="image" id="image" class="ml-5" placeholder="foto profil">
                </div>
                <div class="col-md-6 ml-4">
                    <img id="output" class="img-thumbnail mt-3" />
                    <script>
                    var loadFile = function(event) {
                        var output = document.getElementById('output');
                        output.src = URL.createObjectURL(event.target.files[0]);
                        output.onload = function() {
                        URL.revokeObjectURL(output.src) // free memory
                        }
                    };
                    </script>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12 ml-4">
                    <input class="form-check-input" id="check" type="checkbox" value="1" name="status">
                    <label class="form-check-label mb-3" for="defaultCheck1">
                       Saya menyatakan bahwa data di atas benar apa adanya dan tidak ada kepalsuan ataupun penggandaan.
                    </label>
                </div>
            </div>

            <div class="form-group row">
            <div class="col-md-6 mr-auto">
                <input id="btn-submit" type="submit" disabled class="btn btn-block btn-success text-white py-3 px-5" value="Daftar">
            </div>
            </div>
        </form>
        </div>
        <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
        <div class="bg-white p-3 p-md-5">
            <h3 class="text-black mb-4">Information</h3>
            <p class="text-danger">Setiap mahasiswa prodi sistem informasi wajib mendaftarkan dirinya sebagai mahasiswa sistem informasi aktif</p>
        </div>
        </div>
    </div>
    </div>
</div>

<script>
    $(function(){
        $('#check').click(function(){
            if($(this).prop("checked") == true){
                $('#btn-submit').removeAttr("disabled");
            }
            else if($(this).prop("checked") == false){
                $('#btn-submit').prop("disabled", true);
            }
        });
    });
</script>
@endsection
