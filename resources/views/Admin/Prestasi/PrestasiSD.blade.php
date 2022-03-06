@extends('Admin.Layout.app')

@section('title')
    Prestasi SD 
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
                {{-- @foreach ($dataPendaftar as $dp)
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
                            <p class=" mb-0">Edit </p>
                        </td>
                    </tr>
                @endforeach --}}

            </tbody>
        </table>
    </div>
@endsection
