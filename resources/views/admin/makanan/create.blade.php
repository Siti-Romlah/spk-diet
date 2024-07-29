@extends('template.admin.base')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Tambah Data Makanan
        </div>
        <div class="card-body">
            <form action="{{url('base/makanan/store')}}" method="post">
                @csrf
                <div class="from-group">
                    <label for="kategori" class="control-label">Kategori</label>
                    <select name="kategori" id="nama_kategori" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="Makanan Pagi">Makanan Pagi</option>
                        <option value="Makanan Siang">Makanan Siang</option>
                        <option value="Makanan Malam">Makanan Malam</option>
                    </select>
                </div>
                <div class="from-group">
                    <label for="" class="control-label ">nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="from-group">
                    <label for="" class="control-label">kalori</label>
                    <input type="text" class="form-control" name="kalori">
                </div>
                <div class="from-group">
                    <label for="" class="control-label">protein</label>
                    <input type="text" class="form-control" name="protein">
                </div>
                <div class="from-group">
                    <label for="" class="control-label">lemak</label>
                    <input type="text" class="form-control" name="lemak">
                </div>
                <div class="from-group">
                    <label for="" class="control-label">karbohidrat</label>
                    <input type="text" class="form-control" name="karbohidrat">
                </div>
                <br>
                <button class="btn btn-dark float-right "><i class="fa fa-save"></i>Simpan</button>
            </form>
        </div>
    </div>
</div>

@endsection