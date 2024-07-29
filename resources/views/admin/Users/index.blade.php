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
            <form action="{{url('base/user')}}" method="post">
                @csrf
             
                <div class="from-group">
                    <label for="" class="control-label ">nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="from-group">
                    <label for="" class="control-label">email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="from-group">
                    <label for="" class="control-label">password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                
                <br>
                <button class="btn btn-dark float-right "><i class="fa fa-save"></i>Simpan</button>
            </form>
        </div>
    </div>
</div>

@endsection