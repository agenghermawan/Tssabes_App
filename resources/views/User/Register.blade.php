@extends('User.Layout.App')
@section('footer', 'fixed-bottom')
@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-12 col-md-6">
                <img src="{{asset('image/image.jpg')}}" width="100%" height="400px" alt="">
            </div>
            <div class="col-12 col-md-6">
                <h3> Pendaftaran </h3>
                <p> Sebelum melakukan baca terlebih dahulu aturan atau tata tertibnya nya <a href="{{ route('Rules') }}"> disini </a> </p>
                <form action="">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"> Nama Lengkap :</label>
                                <input type="text" class="form-control shadow-sm rounded-xl" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"> Email :</label>
                                <input type="text" class="form-control shadow-sm rounded-xl" >
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"> Tempat Lahir :</label>
                                <input type="text" class="form-control shadow-sm rounded-xl" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"> Tanggal Lahir  :</label>
                                <input type="text" class="form-control shadow-sm rounded-xl" >
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"> Jenis Kelamin :</label>
                                <input type="text" class="form-control shadow-sm rounded-xl" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"> Usia :</label>
                                <input type="text" class="form-control shadow-sm rounded-xl" >
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"> Tinggi Badan :</label>
                                <input type="text" class="form-control shadow-sm rounded-xl" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"> Berat Badan :</label>
                                <input type="text" class="form-control shadow-sm rounded-xl" >
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"> Agama :</label>
                                <input type="text" class="form-control shadow-sm rounded-xl" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"> Asal Sekolah :</label>
                                <input type="text" class="form-control shadow-sm rounded-xl" >
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"> Tingkatan Sekolah (Kelas) :</label>
                                <input type="text" class="form-control shadow-sm rounded-xl" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"> Unit Latihan :</label>
                                <input type="text" class="form-control shadow-sm rounded-xl" >
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"> Tingkatan Sabuk (Kelas) :</label>
                                <input type="text" class="form-control shadow-sm rounded-xl" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"> Riwayat Kesehatan :</label>
                                <input type="text" class="form-control shadow-sm rounded-xl" >
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"> Alamat :</label>
                                <input type="text" class="form-control shadow-sm rounded-xl" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email"> No Telepon :</label>
                                <input type="text" class="form-control shadow-sm rounded-xl" >
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-info"> Selanjutnya  </button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('opsionalJs')
    <script>

    </script>

@endsection