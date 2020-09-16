@extends('layouts.user')
@section('link-partner','active')
@section('main')

<div class="site-section bg-light" id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
                <div class="block-heading-1">
                    <h2>Himaprosif Media Partner</h2>
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
                <div class="row">
                    <div class="col">
                        <ul class="list-group">
                            <li class="list-group-item d-flex">
                                <span style="color: lightcoral; font-size:20pt"><i class="fas fa-address-book"></i></span>
                                <p class="ml-3">Merupakan kerjasama yang saling menguntungkan yang terjalin antara himaprosif dengan pihak yang bersangkutan terkait publikasi event kepada seluruh jangkauan besar dari himaprosif.
                                </p>
                            </li>
                            <li class="list-group-item d-flex">
                                <span style="color: lightcoral; font-size:15pt"><i class="fas fa-warehouse"></i></span>
                                <p class="ml-3">Tujuan dari kerjasama ini untuk meningkatkan kerjasama antara Himaprosif Media Partnership dengan pihak yang bersangkutan baik dalam lingkungan nasional maupun internasional.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <div class="bg-white p-3 p-md-5">
                <h3 class="text-black mb-4">Contact Info</h3>
                <ul class="list-unstyled footer-link">
                <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+62 878 5926 3716 (Hanif Aristyo Rahadian)
                </span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>himaprosif@uinsby.ac.id</span></li>
                </ul>
            </div>
            </div>
        </div>
    </div>
</div>

    <div class="site-section" id="services-section">
        <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
            <div class="block-heading-1">
                <h2>Ketentuan Umum</h2>
            </div>
            </div>
        </div>
        <div class="owl-carousel owl-all">
            <div class="block__35630">
            <div class="icon mb-0">
                <span class="flaticon-add"></span>
            </div>
            <h3 class="mb-3">Join</h3>
            <p>Bersedia menjadi partner untuk acara yang berhubungan dengan : Seminar yang bertema tentang Teknologi, Manajemen, serta bisnis.</p>
            </div>

            <div class="block__35630">
            <div class="icon mb-0">
                <span><i class="fas fa-ticket-alt"></i></span>
            </div>
            <h3 class="mb-3">Free Pass</h3>
            <p>Jika kegiatan berupa seminar, Maka 2 anggota Himaprosif berhak mendapatkan freepas untuk mengikuti seminar tsb.
            </p>
            </div>

            <div class="block__35630">
            <div class="icon mb-0">
                <span><i class="icon-instagram"></i></span>
            </div>
            <h3 class="mb-3">Follow Me</h3>
            <p>Diharapakan untuk 15 panitia mengikuti atau follow instagram Himaprosif (@himaprosif)
            </p>
            </div>

            <div class="block__35630">
            <div class="icon mb-0">
                <span><i class="fas fa-icons"></i></span>
            </div>
            <h3 class="mb-3">Icon</h3>
            <p>Mencantumkan Logo Himaprosif dalam banner, proster, pamphlet, backdrop serta peralatan publikasi lainnya.
            </p>
            </div>

            <div class="block__35630">
            <div class="icon mb-0">
                <span><i class="fas fa-book-open"></i></span>
            </div>
            <h3 class="mb-3">Social Media</h3>
            <p>Memberikan interaksi berupa Like, Comment, Tag, dan Share pada konten publikasi yang telah diposting.
            </p>
            </div>


        </div>
        </div>
    </div>

    <div class="site-section bg-light" id="contact-sections">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                <div class="block-heading-1">
                    <h2>Teknis</h2>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3 class="text-center">
                        1
                    </h3>
                    <hr>
                    <div class="card">
                        <div class="card-body">
                            <p class="mt-3 text-justify">Mengajukan proposal kegiatan ke-email himaprosif (himaprosif@uinsby.ac.id)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3 class="text-center">
                        2
                    </h3>
                    <hr>
                    <div class="card">
                        <div class="card-body">
                            <p class="mt-3 text-justify">Pengajuan kerjasama selambatnya selama 3 minggu sebelum acara berlangsung.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3 class="text-center">
                        3
                    </h3>
                    <hr>
                    <div class="card">
                        <div class="card-body">
                            <p class="mt-3 text-justify">Pemberitahuan  keputusan paling lambat 2 hari setelah proposal dikirim.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3 class="text-center">
                        4
                    </h3>
                    <hr>
                    <div class="card border">
                        <div class="card-body">
                            <p class="mt-3 text-justify">Kirim konten Poster serta Caption ke nomor +6287859263716 (Hanif Aristyo Rahadian)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
