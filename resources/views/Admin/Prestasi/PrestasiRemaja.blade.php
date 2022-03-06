@extends('Admin.Layout.app')

@section('title')
    Prestasi Remaja 
@endsection
@section('content')
    <div class="table-responsive">
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
                @foreach ($prestasiRemaja as $rr)
                    <tr>
                        <td class="col-auto">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src="assets/images/faces/5.jpg">
                                </div>
                                <p class="font-bold ms-3 mb-0">{{ $rr->namaLengkap }}</p>
                            </div>
                        </td>
                        <td class="col-auto">
                            <p class=" mb-0">{{ $rr->asalSekolah }}</p>
                        </td>
                        <td class="col-auto">
                            <p class=" mb-0">{{ $rr->tingkatanSekolah }}</p>
                        </td>
                        <td class="col-auto">
                            <p class=" mb-0">{{ $rr->status}}</p>
                        </td>
                        <td class="col-auto">
                            <p class=" mb-0">Action</p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
