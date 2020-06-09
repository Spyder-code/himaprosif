@extends('layouts.user')
@section('link-angkatan','active')
@section('main')

<div class="container">
    <div class="row">
        <div class="col text-center" style="height: 500px">
            <h1 style="padding-top: 200px">data kosong</h1>
        </div>
    </div>
</div>


    {{-- <div class="site-section" id="team-section">
        <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7 text-center">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                <h2>Daftar Angkatan</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
            </div>
        </div>

        <div class="owl-carousel owl-all">
            <div class="block-team-member-1 text-center rounded h-100">
            <figure>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle">
            </figure>
            <h3 class="font-size-20 text-black">Max Carlson</h3>
            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Co-Founder</span>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
            </div>
            </div>

            <div class="block-team-member-1 text-center rounded h-100">
            <figure>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle">
            </figure>
            <h3 class="font-size-20 text-black">Charlotte Pilat</h3>
            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Co-Founder</span>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
            </div>
            </div>

            <div class="block-team-member-1 text-center rounded h-100">
            <figure>
                <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded-circle">
            </figure>
            <h3 class="font-size-20 text-black">Nicole Lewis</h3>
            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Co-Founder</span>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
            </div>
            </div>

            <div class="block-team-member-1 text-center rounded h-100">
            <figure>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle">
            </figure>
            <h3 class="font-size-20 text-black">Jean Smith</h3>
            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Financial Manager</span>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
            </div>
            </div>

            <div class="block-team-member-1 text-center rounded h-100">
            <figure>
                <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle">
            </figure>
            <h3 class="font-size-20 text-black">Bob Carry</h3>
            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Loader Manager</span>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
            </div>
            </div>

            <div class="block-team-member-1 text-center rounded h-100">
            <figure>
                <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded-circle">
            </figure>
            <h3 class="font-size-20 text-black">Anne Fisher</h3>
            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Package Manager</span>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="block-social-1">
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
                <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
            </div>
            </div>
        </div>



        </div>
    </div> --}}
@endsection
