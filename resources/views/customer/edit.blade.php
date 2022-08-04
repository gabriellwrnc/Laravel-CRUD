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
            <form action="/customer/{{$customer->id}}" method="POST">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label>Nama<span class="text-danger"></span></label>
                    <input type="text" class="form-control" name="nama" value="{{ $customer->nama }}">
                </div>
                <div class="mb-3">
                    <label>NIK <span class="text-danger"></span></label>
                    <input type="text" class="form-control" name="nik" value="{{ $customer->nik }}">
                </div>
                <div class="mb-3">
                    <label>Nomor Kartu Keluarga <span class="text-danger"></span></label>
                    <input type="text" class="form-control" name="no_kk" value="{{ $customer->no_kk }}">
                </div>
                <div class="mb-3">
                    <label>Alamat <span class="text-danger"></span></label>
                    <input type="text" class="form-control" name="alamat" value="{{ $customer->alamat }}">
                </div>
                <div class="mb-3">
                    <label>Jenis Kelamin <span class="text-danger"></span></label>
                    <br>
                    <select name="jenis_kelamin">
                        <option value="L" @if($customer->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
                        <option value="P" @if($customer->jenis_kelamin == "P") selected @endif>Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Update</button>
                    <a href="/customer" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection