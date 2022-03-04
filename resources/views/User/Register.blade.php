@extends('User.Layout.App')
@section('footer', 'fixed-bottom')
@section('content')
    <div class="container">
        {{-- @if ($errors->any())
        <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <div class="row my-5">
            <div class="col-12 col-md-6">
                <img src="{{ asset('image/image.jpg') }}" width="100%" height="400px" alt="">
            </div>
            <div class="col-12 col-md-6">
                <h3> Pendaftaran </h3>
                <p> Sebelum melakukan pendaftaran baca terlebih dahulu aturan atau tata tertibnya nya <a
                        href="{{ route('Rules') }}">
                        disini </a> </p>
                <form action="{{ route('register.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="status" value="PendaftaranUlang">
                    <div class="first-form" id="first-form">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Nama Lengkap :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl" name="namaLengkap" value="{{ old('namaLengkap')}}">
                                    @error('namaLengkap')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Email :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl" name="email" value="{{ old('email')}}">
                                    @error('email')
                                          <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Tempat Lahir :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl" name="tempatLahir" value="{{ old('tempatLahir')}}">
                                    @error('tempatLahir')
                                         <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Tanggal Lahir :</label>
                                    <input type="date" class="form-control shadow-sm rounded-xl" name="tanggalLahir" value="{{ old('tanggalLahir')}}">
                                    @error('tanggalLahir')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Jenis Kelamin :</label>
                                    <select name="jenisKelamin" class="form-control" id="jenisKelamin">
                                        <option value="LakiLaki"> Laki Laki </option>
                                        <option value="Perempuan"> Perempuan </option>
                                    </select>
                                    @error('jenisKelamin')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Usia :</label>
                                    <input type="number" class="form-control shadow-sm rounded-xl" name="usia" value="{{ old('usia')}}">
                                    @error('usia')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Tinggi Badan :</label>
                                    <input type="number" class="form-control shadow-sm rounded-xl" name="tinggiBadan" value="{{ old('tinggiBadan')}}">
                                    @error('tinggiBadan')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Berat Badan :</label>
                                    <input type="number" class="form-control shadow-sm rounded-xl" name="beratBadan" value="{{ old('beratBadan')}}">
                                    @error('beratBadan')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Agama :</label>
                                    <select name="agama" class="form-control" id="agama">
                                        <option value="Islam"> Islam </option>
                                        <option value="Hindu"> Hindu </option>
                                        <option value="Budha"> Budha </option>
                                    </select>
                                    @error('agama')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Asal Sekolah :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl" name="asalSekolah" value="{{ old('asalSekolah')}}">
                                    @error('asalSekolah')
                                        <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Tingkatan Sekolah (Kelas) :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl" name="tingkatanSekolah" value="{{ old('tingkatanSekolah')}}">
                                @error('tingkatanSekolah')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Unit Latihan :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl" name="unitLatihan" value="{{ old('unitLatihan')}}">
                                @error('unitLatihan')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Tingkatan Sabuk (Kelas) :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl" name="tingkatanSabuk" value="{{ old('tingkatanSabuk')}}">
                                @error('tingkatanSabuk')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Riwayat Kesehatan :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl" name="riwayatKesehatan" value="{{ old('riwayatKesehatan')}}">
                                @error('riwayatKesehatan')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> Alamat :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl" name="alamat" value="{{old('alamat')}}">
                                    @error('alamat')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email"> No Telepon :</label>
                                    <input type="text" class="form-control shadow-sm rounded-xl" name="noTelp" value="{{old('noTelp')}}">
                                    @error('noTelp')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-info" id="hide"> Selanjutnya </a>
                    </div>

                    <div class="row my-3" id="second-form" style="display: none">
                        <div class="col-md-12 my-3">
                            <label for="foto" class="mb-2"> Foto(Background Putih Menggunakan Baju Tapak Suci)
                            </label>
                            <input type="file" class="form-control" name="foto" value="{{old('foto')}}">
                            @error('foto')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="akte" class="mb-2"> Akte ( Foto )</label>
                            <input type="file" class="form-control" name="akte" value="{{old('akte')}}">
                        @error('akte')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        </div>
                        <div class="row">
                            <div class="container">
                                <a type="submit" class="btn btn-info my-2" id="back"> Kembali </a>
                                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Lakukan Pendaftaran
                                </button>
                            </div>
                        </div>
                        <!-- Button trigger modal -->
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pendaftaran</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                Apakah data yang dimasukan sudah benar ?
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Keluar</button>
                                <button type="submit" class="btn btn-primary">Lakukan Pendaftaran Sekarang</button>
                                </div>
                            </div>
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
