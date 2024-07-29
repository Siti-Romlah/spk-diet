@extends('template.admin.base')


@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">Detail pengguna</div>
    </div>
    <div class="card-body">
        <dl>
            <dt>jenis kelamin</dt>
            <dd>{{$pengguna->jenis_kelamin}}</dd>
            <dt>berat badan</dt>
            <dd>{{$pengguna->berat_badan}}</dd>
            <dt>tinggi badan</dt>
            <dd>{{$pengguna->tinggi_badan}}</dd>
            <dt>umur</dt>
            <dd>{{$pengguna->umur}}</dd>
            <dt>tingkat aktivitas</dt>
            <dd>{{$pengguna->tingkat_aktivitas}}</dd>
            <dt>deskripsi pengguna</dt>
            <dd>{{$pengguna->deskripsi}}</dd>
        </dl>
    </div>
</div>
@endsection