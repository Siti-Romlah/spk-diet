@extends('template.admin.base')


@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">Detail Makanan</div>
    </div>
    <div class="card-body">
        <dl>
            <dt>Nama Makanan</dt>
            <dd>{{$makanan->nama}}</dd>
            <dt>Kalori Makanan</dt>
            <dd>{{$makanan->kalori}}</dd>
            <dt>Protein Makanan</dt>
            <dd>{{$makanan->protein}}</dd>
            <dt>Karbohidrat Makanan</dt>
            <dd>{{$makanan->karbohidrat}}</dd>
            <dt>Lemak Makanan</dt>
            <dd>{{$makanan->lemak}}</dd>
        </dl>
    </div>
</div>
@endsection