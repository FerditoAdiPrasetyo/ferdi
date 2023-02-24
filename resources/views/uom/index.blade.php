@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Data</li>
            <li class="breadcrumb-item active" aria-current="page"> Satuan</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-4">
                <div class="card-body">
                    <form action="{{route('uom.store')}}" method="post">
                        @csrf
                    <div id="answer1" class="form-group">
                        <label for="">Nama Satuan</label>
                        <input type="text" name="nama"  class="form-control" id="" placeholder="">
                        <button type="submit" class="btn btn-outline-primary mt-4">
                            Simpan Satuan
                        </button>
                    </div>
                    </from>
                </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <table class="table table-hover">
                    <thead>
                        <th scope="col">Kode Satuan</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Options</th>
                    </thead>
                    <tbody>
                        @forelse ($satuans as $satuan)
                        <tr>
                            <td>{{$satuan->no_reg}}</td>
                            <td>{{$satuan->nama}}</td>
                            <td>
                                <button type="button" class="btn btn-outline-warning">Edit Satuan</button>
                                <button type="button" class="btn btn-outline-danger">Hapus Satuan</button>
                            </td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection