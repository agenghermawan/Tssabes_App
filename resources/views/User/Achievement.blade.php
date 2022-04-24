@extends('User.Layout.App')
@section('content')
    <div class="container">
        <div class="image-achievement">
            <div class="text-center">
                <img src="{{ asset('image/archievment.jpg')}}" width="400px" class="rounded-circle" height="400px" alt="">
                <h3 class="my-3"  style="color: #3ad8ff;
                font-weight: 700;"> PRESTASI YANG TELAH DI RAIH </h3>
            </div>
        </div>
        <div class="row mx-auto text-center">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Prestasi SD</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Prestasi Remaja</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Semua Prestasi</button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">
                        @foreach ($achievementSD as $dt)
                            <div class="col-12 col-md-4 mt-3">
                                <div class="card text-center">
                                    <div class="card-header">
                                        {{$dt->asalSekolah}}
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"> {{$dt->namaLengkap}} 
                                        </h5>
                                    <img src="{{ asset('image/profile-achivment.jpg')}}" width="70px" height="70px" class="rounded-circle" alt="">
                                    @foreach ($dt->daftarJuara as $item)
                                        <p class="card-text mt-3"><i class="fas fa-trophy "></i>{{$item['daftarJuara']}}</p>
                                    @endforeach
                                    <a href="#" class="btn btn-primary">{{$dt->tingkatanSekolah}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
               
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row">
                        @foreach ($achievementRemaja as $dt)
                            <div class="col-12 col-md-4 mt-3">
                                <div class="card text-center">
                                    <div class="card-header">
                                        {{$dt->asalSekolah}}
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"> {{$dt->namaLengkap}} 
                                        </h5>
                                    <img src="{{ asset('image/profile-achivment.jpg')}}" width="70px" height="70px" class="rounded-circle" alt="">
                                    @foreach ($dt->daftarJuara as $item)
                                        <p class="card-text mt-3"><i class="fas fa-trophy "></i>{{$item['daftarJuara']}}</p>
                                    @endforeach
                                    <a href="#" class="btn btn-primary">{{$dt->tingkatanSekolah}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="row">
                        @foreach ($achievementList as $dt)
                            <div class="col-12 col-md-4 mt-3">
                                <div class="card text-center">
                                    <div class="card-header">
                                        {{$dt->asalSekolah}}
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"> {{$dt->namaLengkap}} 
                                        </h5>
                                    <img src="{{ asset('image/profile-achivment.jpg')}}" width="70px" height="70px" class="rounded-circle" alt="">
                                    @foreach ($dt->daftarJuara as $item)
                                        <p class="card-text mt-3"><i class="fas fa-trophy "></i>{{$item['daftarJuara']}}</p>
                                    @endforeach
                                    <a href="#" class="btn btn-primary">{{$dt->tingkatanSekolah}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
              </div>
        </div>
      
    </div>
@endsection
