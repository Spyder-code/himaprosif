@extends('layouts.user')
@section('link-berita','active')
@section('livewire-head')
  @livewireStyles
@endsection
@section('main')
<style>
    p{
        text-indent: 60px;
    }
</style>
<div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8 blog-content">
            <img src="{{asset('images/berita/'.$data->image)}}" style="height:400px; width:100%">
            <div class="block-heading-1 mt-3 mb-2 text-center" data-aos="fade-right" data-aos-delay="">
                <h2>{{$data->judul}}</h2>
            </div>
            <span class="d-block text-muted mt-3 font-weight-bold">Upload on {{date('d F Y', strtotime($data->created_at))}}</span>
            <hr>
            <p class="mt-3">{!!$data->isi!!}</p>
            <hr>
            <!-- Livewire Section -->
            @livewire('komentar', ['data' => $data])
            @livewire('form-komentar', ['data' => $data])
            <!-- Livewire Section -->

        </div>
        <div class="col-md-4 sidebar">
          <div class="sidebar-box">
            <div class="categories">
                <h3>Acara Baru</h3>
                @foreach ($acara as $item)
                    <li><a href="{{url('berita-acara/'.$item->judul)}}">{{$item->judul}}</a></li>
                @endforeach
                <h3>Berita Baru</h3>
                @foreach ($berita as $item)
                    <li><a href="{{url('berita-acara/'.$item->judul)}}">{{$item->judul}}</a></li>
                @endforeach
            </div>
          </div>
          <div class="sidebar-box text-center">
            <img src="{{asset('images/user/'.$user->image)}}" alt="Image" class="img-fluid mb-4 w-50 rounded-circle">
            <p>{{$user->nama_lengkap}}</p>
            <h3 class="text-black">Author</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('livewire-script')
  @livewireScripts
@endsection
