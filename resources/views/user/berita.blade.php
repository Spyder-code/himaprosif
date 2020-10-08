@extends('layouts.user')
@section('link-berita','active')
@section('main')
<div class="container">
    <div class="row">
        <div class="col col-sm-12">
            <div class="site-section py-5" id="blog-section">
                <div class="container">
                  <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                      <div class="block-heading-1" data-aos="fade-right" data-aos-delay="">
                        <h2>Acara</h2>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                        @foreach ($acara as $item)
                        <div class="col-lg-4">
                            <div class="mb-5 d-flex blog-entry" data-aos="fade-right" data-aos-delay="">
                              <a href="{{url('berita-acara/'.$item->judul)}}" class="blog-thumbnail"><img src="{{asset('images/berita/'.$item->image)}}" alt="Image" class="img-fluid"></a>
                              <div class="blog-excerpt">
                                <span class="d-block text-muted">{{date('d F Y', strtotime($item->created_at))}}</span>
                                <h2 class="h4 mb-3"><a href="{{url('berita-acara/'.$item->judul)}}">{{$item->judul}}</a></h2>
                                <p><a href="{{url('berita-acara/'.$item->slug)}}" class="text-primary">Read More</a></p>
                              </div>
                            </div>
                          </div>
                        @endforeach
                  </div>
                </div>
              </div>
            <hr>
              <div class="site-section py-1" id="blog-section">
                <div class="container">
                  <div class="row justify-content-center text-center mb-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                      <div class="block-heading-1" data-aos="fade-right" data-aos-delay="">
                        <h2>Berita</h2>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                        @foreach ($berita as $item)
                        <div class="col-lg-4">
                            <div class="mb-5 d-flex blog-entry" data-aos="fade-right" data-aos-delay="">
                              <a href="{{url('berita-acara/'.$item->judul)}}" class="blog-thumbnail"><img src="{{asset('images/berita/'.$item->image)}}" alt="Image" class="img-fluid"></a>
                              <div class="blog-excerpt">
                                <span class="d-block text-muted">{{date('d F Y', strtotime($item->created_at))}}</span>
                                <h2 class="h4  mb-3"><a href="{{url('berita-acara/'.$item->judul)}}">{{$item->judul}}</a></h2>
                                <p><a href="{{url('berita-acara/'.$item->slug)}}" class="text-primary">Read More</a></p>
                              </div>
                            </div>
                          </div>
                        @endforeach
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
