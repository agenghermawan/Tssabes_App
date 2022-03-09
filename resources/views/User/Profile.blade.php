@extends('User.Layout.App')
@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row mb-3">
                <div class="col-12 col-md-12 text-center my-5">
                    <h1 style="font-weight: 700;color:rgb(85, 82, 246)"> Pusbindiklat Gemilang </h1>
                    <h3> Perguruan Bela Diri </h3>
                </div>
                <div class="col-12">
                    <img src="{{ asset('image/bannerprofile.jpg')}}" width="100%" height="700px" class="shadow rounded" alt="">
                </div>
            </div>
            <div class="col-12 text-center">
                <h1 style="font-size: 22px"> Hubungi Kami </h1>
                <hr>
            </div>
            <div class="row col-12 my-3">
                <div class="col-12 col-md-4">
                    <h1 style="font-size: 22px;font-weight:700" class="my-2"> Kontak </h1>
                    <a class="btn btn-info py-3 px-5 mb-2" style="font-weight: bold;color:whitesmoke;background-color:#4a4a59"> TELEPON </a>
                    <p> 0812-8400-7005 </p>
                </div>
                <div class="col-12 col-md-4">
                    <h1 style="font-size: 22px;font-weight:700" class="my-2">Alamat </h1>
                    <a class="btn btn-info py-3 px-5 mb-2" style="font-weight: bold;color:whitesmoke;background-color:#4a4a59"> LIHAT RUTE </a>
                    <p> Jl karang anyar raya, rptra rw 02
                        Jakarta Pusat
                        DKI Jakarta 10740
                        Indonesia</p>
                </div>
                <div class="col-12 col-md-4">
                    <h1 style="font-size: 22px;font-weight:700" class="my-2"> Jam Buka </h1>
                    <div>
                        <table>
                            <tr>
                                <td>
                                   Senin 
                                </td>
                                <td>
                                   : 15.30 - 21.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Selasa
                                </td>
                                <td>
                                     : 15.30 - 21.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Rabu 
                                </td>
                                <td>
                                    : 15.30 - 20.30
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Kamis
                                </td>
                                <td>
                                    : 15.30 - 21.00
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Jumat 
                                </td>
                                <td>
                                    : 15.30 - 20.30
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Sabtu
                                </td>
                                <td>
                                    : Tutup
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Minggu
                                </td>
                                <td>
                                     : 08.00 - 12.00
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15867.37626825078!2d106.8273723!3d-6.1516326!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x85572b55e82da086!2sRPTRA%20Karang%20Anyar!5e0!3m2!1sen!2sid!4v1646748367330!5m2!1sen!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
@endsection
