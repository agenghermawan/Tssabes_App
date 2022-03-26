@extends('Admin.Layout.Main')
@section('title')
    Daftar Siswa
@endsection
@section('description')
    Daftar Siswa yang telah registrasi
@endsection
@section('breadcumb-title', 'Daftar Siswa')
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>Statistik</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data['user'] as $item)
                    <tr>
                        <td>
                            {{$item->namaLengkap}}
                        </td>
                        <td>
                            {{$item->alamat}}
                        </td>
                        <td>
                            {{$item->tanggalLahir}}
                        </td>
                        <td>
                            {{$item->email}}
                        </td>
                        <td>
                            <!-- button trigger for  Vertically Centered modal -->
                            <button type="button" class="btn btn-info block statisticButton" value="{{$item->id}}">
                                Statistik Peserta
                            </button>
                            <!-- Vertically Centered modal Modal -->
                            <div class="modal fade" id="statisticModal" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Vertically Centered
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="chart-visitors-profile"></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary"
                                                    data-bs-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Close</span>
                                            </button>
                                            <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Accept</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-primary">
                                Action
                            </button>
                        </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
@push('chart')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(".statisticButton").click(function(e) {

                var button = e.target;
                var IdPeserta = button.value;
                var saveData = $.ajax({
                    type: 'GET',
                    url: "statistic/"+IdPeserta,
                    dataType: "text",
                    success: function(resultData) {
                        var dataJson = JSON.parse(resultData);
                        console.log(dataJson.user)
                        if(dataJson.user){
                            SetChartValue(dataJson.user);
                            $('#statisticModal').modal('show')
                        }else {
                            alert("ga ada data");
                        }

                    }
                });
                saveData.error(function(e) {
                    alert("Something went wrong");
                });
        });

        function SetChartValue(dataCharts){
            let optionsStatisticProfile  = {
                series: [dataCharts.power, dataCharts.agility,dataCharts.strength],
                labels: ['Power', 'Agility','Strength'],
                colors: ['#435ebe','#55c6e8','#FD5D5D'],
                chart: {
                    type: 'donut',
                    width: '100%',
                    height:'350px'
                },
                legend: {
                    position: 'bottom'
                },
                plotOptions: {
                    pie: {
                        donut: {
                            size: '30%'
                        }
                    }
                }
            }

            var chartStatistic = new ApexCharts(document.getElementById('chart-visitors-profile'), optionsStatisticProfile)
            chartStatistic.render()
        }

    </script>

@endpush
