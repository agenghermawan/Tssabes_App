@extends('User.Layout.App')
@section('footer', 'fixed-bottom')
@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-12 col-md-6">
                <img src="{{ asset('image/image.jpg') }}" width="100%" height="400px" alt="">
            </div>
            <div class="col-12 col-md-6">
                <h3> Pendaftaran </h3>
                <p> Sebelum melakukan pendaftaran baca terlebih dahulu aturan atau tata tertibnya nya <a
                        href="{{ route('Rules') }}">
                        disini </a> </p>
                <form action="">
                    <div class="first-form" id="first-form">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Nama Lengkap :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Email :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Tempat Lahir :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Tanggal Lahir :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Jenis Kelamin :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Usia :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Tinggi Badan :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Berat Badan :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Agama :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Asal Sekolah :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Tingkatan Sekolah (Kelas) :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Unit Latihan :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Tingkatan Sabuk (Kelas) :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Riwayat Kesehatan :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Alamat :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> No Telepon :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl">
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-info" id="hide"> Selanjutnya </a>
                    </div>


                    <div class="row my-3" id="second-form" style="display: none">
                        <div class="col-md-12 my-3">
                            <label for="foto" class="mb-2"> Foto(Background Putih Menggunakan Baju Tapak Suci)
                            </label>
                            <input type="file" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="foto" class="mb-2"> Akte </label>
                            <input type="file" class="form-control">
                        </div>
                        <div class="row">
                            <div class="container">
                                <a type="submit" class="btn btn-info my-2" id="back"> Back </a>
                                <button type="submit" class="btn btn-info my-2"> Submit Pendaftaran
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@section('opsionalJs')
    <script>
        $(document).ready(function() {
            $("#hide").click(function() {
                $("#first-form").hide("slow");
                $("#second-form").fadeIn("slow");
            });
            $("#back").click(function() {
                $("#first-form").fadeIn("slow");
                $("#second-form").hide("slow");
            });
        });
    </script>

@endsection
