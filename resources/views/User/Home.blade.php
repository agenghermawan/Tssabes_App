@extends('user.Layout.App')

@section('content')
    <div class="container">
        <div class="hero mt-2 row">
            <div class="col-12 col-md-6">
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
            <div class="col-12 col-md-6">
                <img src="{{ asset('image/banner.jpg') }}" width="100%" height="550px" class="shadow"
                    style="border-radius: 80%" alt="">
            </div>
        </div>
        <div class="Galeri my-5">
            <h2 class="text-center" style="font-weight: 700"> Galeri </h2>
            <p class="text-center"> Foto diambil saat Latihan Bersama </p>
            <hr class="mt-3">

            <div class="image-list row">
                <div class="col-12 col-md-4 mt-3">
                    <img class="rounded shadow" width="100%" height="400px"
                        src="https://lh3.googleusercontent.com/6wikN4aSD55eATfnmtxiI8OZYSHhFHb0gyM8JkvlPvF_ecNgI9x_5qDJKjc6c3qXSJMS4wepYbnn00aL=w768-h768-n-o-v1"
                        data-iml="403" data-atf="false">
                </div>

                <div class="col-12 col-md-4 mt-3">
                    <img class="rounded shadow" width="100%" height="400px"
                        src="https://lh3.googleusercontent.com/eqZDfoSb-D5EGfg2OyevGDGYs-HMoqP0J7OvXAO3-19aosRyup9Jj7vGZJCFumQF6Ov6Z6qVI-cb6ZG9=w768-h768-n-o-v1"
                        data-iml="1020" data-atf="false">
                </div>

                <div class="col-12 col-md-4 mt-3">
                    <img class="rounded" width="100%" height="400px"
                        src="https://lh3.googleusercontent.com/VpiJdsLooPJVTTK4Y8lJndV58-xlBjDglLwwb_gdVyNEIK9NoMyCYocwJI9mFWyTKpuVHDr17TJ7Fs9g=w768-h768-n-o-v1"
                        data-iml="780" data-atf="false">
                </div>

                <div class="col-12 col-md-4 mt-3">
                    <img class="rounded shadow" width="100%" height="400px"
                        src="https://lh3.googleusercontent.com/INpONTNg5RukhnG-lr5PS55OB_Rm1csdbHBCjNZ0V-jBqTFjjQGqcHuog0F3E7m_WSuep2AtDLhDW2lT=w768-h768-n-o-v1"
                        data-iml="516" data-atf="false">
                </div>

                <div class="col-12 col-md-4 mt-3">
                    <img class="rounded shadow" width="100%" height="400px"
                        src="https://lh3.googleusercontent.com/sTMkEvQFOtRREAD1--YMwcEIYMNsJIXUrDfC70LnMrEVX81dd_iXvLxL5aXxAvnL4PnHQRBR6kk2JJTO=w768-h768-n-o-v1"
                        data-iml="525" data-atf="false">
                </div>
            </div>
        </div>

        <div class="testimonial">
            <h3 style="font-weight: 700;" class="text-center"> Testi </h3>
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
