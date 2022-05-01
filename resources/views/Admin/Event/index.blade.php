@extends('Admin.Layout.main')
@section('title')
    Daftar Event
@endsection
@section('description')
    Daftar Event
@endsection
@section('breadcumb-title', 'Pendaftaran')
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Event</th>
                        <th>Organizer </th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($getEvent as $item)
                        <tr>
                            <td>
                                {{$loop->iteration}}
                            </td>
                            <td>
                                {{ $item->name }}
                            </td>
                            <td>
                                {{ $item->organizer }}
                            </td>
                            <td>
                                <!-- Button trigger for large size modal -->
                                      <button type="button" class="btn btn-outline-warning  btn-primary" data-bs-toggle="modal"
                                      data-bs-target="#large{{$item->id}}">
                                      Detail Event
                                  </button>
                                  <!--large size Modal -->
                                  <div class="modal fade text-left" id="large{{$item->id}}" tabindex="-1" role="dialog"
                                      aria-labelledby="myModalLabel17" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"
                                          role="document">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h4 class="modal-title" id="myModalLabel17">Detail Event </h4>
                                                  <button type="button" class="close" data-bs-dismiss="modal"
                                                      aria-label="Close">
                                                      <i data-feather="x"></i>
                                                  </button>
                                              </div>
                                              @php
                                                 $data =  App\Models\event::where('id',$item->id)->first();
                                              @endphp
                                              <div class="modal-body">
                                                  <img src="{{$data->image}}" class="img-fluid shadow rounded-md" alt="">
                                                  {{$data->description}}
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
                               <a class="btn btn-info"> Ubah  </a>
                               <a class="btn btn-danger"> Delete  </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

