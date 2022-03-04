@extends('User.Layout.App')
@section('footer', 'fixed-bottom')
@section('content')
    <div class="container">
        <div class="image-achievement">
            <div class="text-center">
                <img src="{{ asset('image/archievment.jpg')}}" width="400px" class="rounded-circle" height="400px" alt="">
                <h3 class="my-3"> PRESTASI YANG TELAH DI RAIH </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 mt-3">
                <div class="card text-center">
                    <div class="card-header">
                        SDN 05 Pasar Baru
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"> Alfil Natan Qoiri 
                        </h5>
                      <img src="{{ asset('image/profile-achivment.jpg')}}" width="70px" height="70px" class="rounded-circle" alt="">
                      <p class="card-text mt-3">JUARA 1 TUNGGAL O2SN tingkat jakarta pusat tahun (2019) </p>
                      <a href="#" class="btn btn-primary">Kelas 6</a>
                    </div>
                  </div>
            </div>
        </div>
        
    </div>
@endsection
