@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Transaksi</li>
            <li class="breadcrumb-item active" aria-current="page">Barang Masuk</li>
        </ol>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="card-body alert alert-danger">Request Barang akan masuk kedalam table dibawah ini</div>
            <table class="table table-hover">
                <thead>
                    <th scope="col">Refrensi</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Jumlah Permintaan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Quantity</th>

                </thead>
                <tbody>
                    @forelse ($permintaans as $permintaan)
                   <tr>
                    <td>{{$permintaan->kode_permintaan}}</td>
                    <td>{{$permintaan->barang->brand->nama}}</td>
                    <td>{{$permintaan->jumlah}}</td>
                    <td>{{$permintaan->created_at}}</td>
                    <td>{{$permintaan->total}}</td>
                    @role ('admin')
                        @if ($permintaan->status !== 'in')
                            <td class="d-flex">
                                <form action="" method="post">
                                    @csrf
                                    <button class="btn btn-outline-info btn-sm">Setujui</button>
                                </form>
                                <form action="" method="post">
                                    @csrf
                                    <button class="btn btn-outline-danger btn-sm ml-2">Tolak</button>
                                </form>
                            </td>
                            @endif
                        @endrole
                    </tr>
                    @empty
                    @endrole
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection