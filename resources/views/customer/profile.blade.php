@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/home" class="btn btn-danger">Back</a>
    <div class="card my-4">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        <div class="card-body p-0 table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <th>#</th>
                    <th>Nama</th>
                    <th>NIK </th>
                    <th>Jenis Kelamin</th>
                    <th>Nomor Kartu Keluarga</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </thead>
                <?php $no = 1 ?>
                @foreach($customer as $customers)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $customers->nama }}</td>
                    <td>{{ $customers->nik }}</td>
                    <td>
                        @if($customers->jenis_kelamin == "L") Laki-laki
                        @elseif($customers->jenis_kelamin == "P") Perempuan @endif
                    </td>
                    <td>{{ $customers->no_kk}}</td>
                    <td>{{ $customers->alamat }}</td>
                    <td>
                        <a href="/customer/{{$customers->id}}/edit" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square "></i></a>
                        <form action="/customer/{{$customers->id}}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data?')" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash text-dark"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

</div>
@endsection