@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
            @endif
            <form action="/customer/store" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Nama<span class="text-danger"></span></label>
                    <input type="text" class="form-control" name="nama" value="{{ old('nik') }}">
                </div>
                <div class="mb-3">
                    <label>NIK <span class="text-danger"></span></label>
                    <input type="text" class="form-control" name="nik" value="{{ old('nik') }}">
                </div>
                <div class="mb-3">
                    <label>Nomor Kartu Keluarga <span class="text-danger"></span></label>
                    <input type="text" class="form-control" name="no_kk" value="{{ old('no_kk') }}">
                </div>
                <div class="mb-3">
                    <label>Alamat <span class="text-danger"></span></label>
                    <input type="text" class="form-control" name="alamat" value="{{ old('alamat') }}">
                </div>
                <div class="mb-3">
                    <label>Jenis Kelamin <span class="text-danger"></span></label>
                    <br>
                    <select name="jenis_kelamin">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Register</button>
                    <a href="/home" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection