@extends('Admin.Layout.app')

@section('title')
    Prestasi SD
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>Status</th>
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
