@extends('user.Layout.App')

@section('content')
    <div class="container">
        <div class="hero mt-2 row">
            <div class="col-12 col-md-6" data-aos="fade-left">
                <div class="text-hero mt-5">
                    <h1> Padepokan Rajawali <br> Perguruan Bela diri </h1>
                </div>
                <div class="button-hero mt-5">
                    <p> Buka hari ini </p>
                    <p> Sampai pukul 21.00 </p>
                    <input type="text" value="Lokasi : Sawah Besar" class="form-control mt-5">
                    <button class="btn btn-primary mt-3"> WhatsApp : 0812-8400-7005</button>
                </div>
            </div>
            <div class="col-12 col-md-6" data-aos="fade-right">
                <img src="{{ asset('image/banner.jpg') }}" width="100%" height="550px" class="shadow"
                    style="border-radius: 80%" alt="">
            </div>
        </div>
        <div class="Galeri my-5">
            <h2 class="text-center" style="font-weight: 700"> Galeri </h2>
            <p class="text-center"> Foto diambil saat Latihan Bersama </p>
            <hr class="mt-3">

            <div class="image-list row">
                @foreach ($gallery as $item)
                    <div class="col-12 col-md-4 mt-3" data-aos="fade-right" data-aos-offset="300"
                        data-aos-easing="ease-in-sine">
                        <img class="rounded shadow" width="100%" height="300px" src="{{ url($item->image) }}"
                            data-iml="403" data-atf="false">
                    </div>
                @endforeach
            </div>
        </div>

        <div class="testimonial" style="">
            <h3 style="font-weight: 700;" class="text-center"> Testi </h3>
            <p class="text-center"> Testimoni dari pengguna </p>
            <div class="row my-5">
                <div class="col-12 col-md-4 p-3" data-aos="fade-down-right" data-aos-duration="3000">
                    <div class="row">
                        <div class="col-12 col-md-2">
                            <img src="{{ asset('image/profile-achivment.jpg') }}" width="70px" height="70px"
                                class="rounded-circle" alt="">
                        </div>
                        <div class="col-md-10">
                            <h3> Will Jansen </h3>
                            <p> Peserta</p>
                        </div>
                    </div>
                    <p class="fw-light mt-2">
                        "Kegiatan positif Tapak Suci, selain bela diri seni juga bisa untuk olahraga"
                    </p>
                </div>
                <div class="col-12 col-md-4 p-3" data-aos="fade-down-right" data-aos-duration="3000">
                    <div class="row">
                        <div class="col-12 col-md-2">
                            <img src="{{ asset('image/profile-achivment.jpg') }}" width="70px" height="70px"
                                class="rounded-circle" alt="">
                        </div>
                        <div class="col-md-10">
                            <h3> Will Jansen </h3>
                            <p> Peserta</p>
                        </div>
                    </div>
                    <p class="fw-light mt-2">
                        "Kegiatan positif Tapak Suci, selain bela diri seni juga bisa untuk olahraga"
                    </p>
                </div>
                <div class="col-12 col-md-4 p-3" data-aos="fade-down-right" data-aos-duration="3000">
                    <div class="row">
                        <div class="col-12 col-md-2">
                            <img src="{{ asset('image/profile-achivment.jpg') }}" width="70px" height="70px"
                                class="rounded-circle" alt="">
                        </div>
                        <div class="col-md-10">
                            <h3> Will Jansen </h3>
                            <p> Peserta</p>
                        </div>
                    </div>
                    <p class="fw-light mt-2">
                        "Kegiatan positif Tapak Suci, selain bela diri seni juga bisa untuk olahraga"
                    </p>
                </div>
            </div>

        </div>

        <div class="care row mt-5">
            <div class="col-12 col-md-6 mt-5">
                <h1 style="font-weight: 700"> Punya Pertanyaan Kepada Kami ? </h1>
                <p style="font-weight: 400">Hubungi Kami </p>
                <div class="row">
                    <div class="col-12 col-md-3 mb-1">
                        <button class="btn btn-info shadow rounded" style="width: 100%"> <i class="fas fa-comment"></i>
                            WhatsApp </button>
                    </div>
                    <div class="col-12 col-md-3 mb-1">
                        <button class="btn btn-info shadow rounded" style="width: 100%"> <i class="fas fa-phone"></i> Telp
                        </button>
                    </div>
                    <div class="col-12 col-md-3 mb-1">
                        <button class="btn btn-info shadow rounded" style="width: 100%"> <i class="fas fa-map"></i>
                            Lihat Rute </button>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-6">
                <img src="{{ asset('image/image 5.png') }}" width="100%" height="400px" alt="">
            </div>
        </div>
    </div>
@endsection
