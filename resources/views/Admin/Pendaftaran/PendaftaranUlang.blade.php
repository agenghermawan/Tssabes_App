@extends('Admin.Layout.Main')
@section('title')
    Pendaftaran Ulang
@endsection
@section('description')
    Daftar Siswa yang mendaftar ( Ulang )
@endsection
@section('breadcumb-title', 'Pendaftaran')
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>Asal Sekolah</th>
                        <th>Tingkatan Sekolah</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataPendaftar as $dp)
                        <tr>
                            <td class="col-auto">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-md">
                                        <img src="assets/images/faces/5.jpg">
                                    </div>
                                    <p class="font-bold ms-3 mb-0">{{ $dp->namaLengkap }}</p>
                                </div>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $dp->email }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">{{ $dp->noTelp }}</p>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">Daftar Baru</p>
                            </td>
                            <td class="col-auto">
                                <!--Modal lg size -->
                                <div class="me-1 mb-1 d-inline-block">
                                    <!-- Button trigger for large size modal -->
                                    <button type="button" class="btn btn-outline-info" data-bs-toggle="modal"
                                        data-bs-target="#large">
                                        Detail
                                    </button>
                                    <!--large size Modal -->
                                    <div class="modal fade text-left" id="large" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel17" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel17">Detail Prestasi Remaja
                                                    </h4>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-12 col-md-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 class="card-title">Table with outer spacing</h4>
                                                            </div>
                                                            <div class="card-content">
                                                                <div class="card-body">
                                                                    <p class="card-text">Using the most basic table up,
                                                                        here’s how
                                                                        <code>.table</code>-based tables look in Bootstrap.
                                                                        You can use any example
                                                                        of below table for your table and it can be use with
                                                                        any type of bootstrap tables.
                                                                    </p>
                                                                    <!-- Table with outer spacing -->
                                                                    <div class="table-responsive">
                                                                        <table class="table table-lg">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Nama Lengkap</th>
                                                                                    <th>{{ $ps->id }}</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-bold-500">Michael Right
                                                                                    </td>
                                                                                    <td>$15/hr</td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-bold-500">Morgan
                                                                                        Vanblum</td>
                                                                                    <td>$13/hr</td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-bold-500">Tiffani Blogz
                                                                                    </td>
                                                                                    <td>$15/hr</td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-bold-500">Ashley Boul
                                                                                    </td>
                                                                                    <td>$15/hr</td>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-bold-500">Mikkey Mice
                                                                                    </td>
                                                                                    <td>$15/hr</td>

                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-secondary"
                                                        data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                    <button type="button" class="btn btn-primary ml-1"
                                                        data-bs-dismiss="modal">
                                                        <i class="bx bx-check d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Accept</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- <div class="table-responsive">
        <table class="table table-hover table-lg">
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Asal Sekolah </th>
                    <th>Tingkatan Sekolah </th>
                    <th>Status</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prestasiSD as $ps)
                    <tr>
                        <td class="col-auto">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src="assets/images/faces/5.jpg">
                                </div>
                                <p class="font-bold ms-3 mb-0">{{ $ps->namaLengkap }}</p>
                            </div>
                        </td>
                        <td class="col-auto">
                            <p class=" mb-0">{{ $ps->asalSekolah }}</p>
                        </td>
                        <td class="col-auto">
                            <p class=" mb-0">{{ $ps->tingkatanSekolah }}</p>
                        </td>
                        <td class="col-auto">
                            <p class=" mb-0">{{ $ps->status }}</p>
                        </td>
                        <td class="col-auto">
                            <p class=" mb-0"> <button class="btn btn-info">Detail</button> </p>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div> --}}
@endsection
