    @extends('layouts.user')
    @section('link-contact','active')
    @section('main')

    <div class="site-section bg-light" id="contact-section">
        <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
            <div class="block-heading-1">
                <h2>Contact Us</h2>
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
            <form action="" method="post">
                @csrf
                <div class="form-group row">
                <div class="col-md-12 mb-4 mb-lg-0">
                    <input name="nama" type="text" class="form-control" placeholder="Name">
                </div>
                </div>

                <div class="form-group row">
                <div class="col-md-12">
                    <input name="email" type="text" class="form-control" placeholder="Email address">
                </div>
                </div>

                <div class="form-group row">
                <div class="col-md-12">
                    <textarea name="pesan" class="form-control" placeholder="Write your message." cols="30" rows="10"></textarea>
                </div>
                </div>
                <div class="form-group row">
                <div class="col-md-6 mr-auto">
                    <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
                </div>
                </div>
            </form>
            </div>
            <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <div class="bg-white p-3 p-md-5">
                <h3 class="text-black mb-4">Contact Info</h3>
                <ul class="list-unstyled footer-link">
                <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+62 838 5731 7946</span></li>
                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>himaprosif.com</span></li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
    @endsection
