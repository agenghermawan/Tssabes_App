@extends('User.Layout.App')
@section('content')
<section
class="h-100 w-100 bg-white"
>
<div
  class="content-3-1 container-xxl mx-auto position-relative"
>
  <div class="d-flex flex-lg-row flex-column align-items-center">
    <div class="img-hero text-center justify-content-center d-flex">
      <img
        id="hero"
        class="img-fluid"
        src={{asset('image/profile.png')}}
        alt="image"
        width="643px"
        height="537px"
      />
    </div>

    <div class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
      <h2 class="title-text">3 Keuntungan Bergabung bersama Pusbindiklat Gemilang</h2>
      <ul class="p-0 m-0">
        <li class="list-unstyled">
          <h4 class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
            <span class="circle text-white d-flex align-items-center justify-content-center">
              1
            </span>
            Memberikan Pelatihan secara kompeten
          </h4>
          <p class="text-caption">
            Kami memberikan mentor yang berpengalaman
            <br class="d-sm-inline d-none" />
            dalam bidang ini
          </p>
        </li>
        <li class="list-unstyled">
          <h4 class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
            <span class="circle text-white d-flex align-items-center justify-content-center">
              2
            </span>
            Rasa Kekeluargaan yang tinggi
          </h4>
          <p class="text-caption">
            Kelompok yang sangat kompak sesama
            <br class="d-sm-inline d-none" />
            dan sangat Kekeluargaan
          </p>
        </li>
        <li class="list-unstyled">
          <h4 class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
            <span class="circle text-white d-flex align-items-center justify-content-center">
              3
            </span>
            Berlatih Bersama Kami
          </h4>
          <p class="text-caption">
            Mulai berlatih bersama kami
            <br class="d-sm-inline d-none" />
            dan menjadi yang terbaik
          </p>
        </li>
      </ul>
      <div class="row">
        <div class="col-auto">
          <a class="btn btn-learn text-white">
            <i class="fas fa-phone-alt"></i>
            &nbsp; 0812-8400-7005
          </a>
        </div>
        <div class="col-auto">
          <a class="btn btn-learn text-white">
            <i class="fas fa-map-marked"></i>
            &nbsp;Klik Map Disini
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row align-items-center text-center section-profile">
    <div class="col-md-12 col-12">
      <img src={{asset('image/Group-profile.png')}} alt="imageGroup">
    </div>
  </div>
</div>
</section>
@endsection
