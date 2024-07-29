@extends('template.admin.base')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Data Pengguna
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th width="100px">no</th>
                    <th>aksi</th>
                    <th>Jenis Kelamin</th>
                    <th>Berat Badan</th>
                    <th>Tinggi Badan</th>
                    <th>Umur</th>
                    <th>Tingkat Aktivitas</th>
                </thead>
                <tbody>
                    @foreach ($list_pengguna as $pengguna )
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{url('base/pengguna', $pengguna->id)}}" class="btn btn-info">
                                    <i class="fas fa-info"></i>
                                </a>
                            </div>
                        </td>
                        <td>
                            {{$pengguna->jenis_kelamin}}
                        </td>
                        <td>
                            {{$pengguna->berat_badan}}
                        <td>
                            {{$pengguna->tinggi_badan}}
                        </td>
                        <td>
                            {{$pengguna->umur}}
                        </td>
                        <td>
                            {{$pengguna->tingkat_aktivitas}}
                        </td>
                    </tr>

                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>

@endsection