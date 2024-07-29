@extends('template.admin.base')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Data Makanan
            <a href="{{url('base/makanan/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i>Tambah Data</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th width="100px">no</th>
                    <th>aksi</th>
                    <th>Kategori</th>
                    <th>nama</th>
                    <th>kalori</th>
                    <th>protein</th>
                    <th>lemak</th>
                    <th>Karbohidrat</th>
                </thead>
                <tbody>
                    @foreach ($makanan as $makanan )
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{url('base/makanan', $makanan->id)}}" class="btn btn-info">
                                    <i class="fas fa-info"></i>
                                </a>
                                <a href="{{url("base/makanan/$makanan->id")}}/edit" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ url('base/makanan', $makanan->id) }}" method="post" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-tone"><i class="fas fa-trash"></i></button>
                                </form>
                                <!-- <a href="" onclick="confirm('Apakah yakin menghapus data ini')" class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a> -->

                            </div>
                        </td>
                        <td>

                            {{ $makanan->kategori}}

                        </td>
                        <td>
                            {{$makanan->nama}}
                        </td>
                        <td>
                            {{$makanan->kalori}}
                        </td>

                        <td>
                            {{$makanan->protein}}
                        </td>
                        <td>
                            {{$makanan->lemak}}
                        </td>
                        <td>
                            {{$makanan->karbohidrat}}
                        </td>
                    </tr>

                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>

@endsection