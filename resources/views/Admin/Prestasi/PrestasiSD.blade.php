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
                                    <p class="font-bold ms-3 mb-0">{{ $ps->namaLengkap }}</p>
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
                                           <!-- Button trigger for large size modal -->
                                           <button type="button" class="btn btn-outline-info" data-bs-toggle="modal"
                                           data-bs-target="#large">
                                           Details
                                       </button>
                                       <!--large size Modal -->
                                       <div class="modal fade text-left" id="large" tabindex="-1" role="dialog"
                                           aria-labelledby="myModalLabel17" aria-hidden="true">
                                           <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"
                                               role="document">
                                               <div class="modal-content">
                                                   <div class="modal-header">
                                                       <h4 class="modal-title" id="myModalLabel17">Detail</h4>
                                                       <button type="button" class="close" class="btn btn-info" data-bs-dismiss="modal"
                                                           aria-label="Close">
                                                           <i data-feather="x"></i>
                                                       </button>
                                                   </div>
                                                   <div class="modal-body">
                                                       I love tart cookie cupcake. I love chupa chups biscuit. I love
                                                       marshmallow apple pie wafer
                                                       liquorice. Marshmallow cotton candy chocolate. Apple pie muffin tart.
                                                       Marshmallow halvah pie
                                                       marzipan lemon drops jujubes. Macaroon sugar plum cake icing toffee.
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
