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
                    <form>
                    <div class="form-group">
                        <label for="nama">Nama Satuan</label>
                        <input type="email" name="nama" value="{{old('nama_satuan')}}" class="form-control" id="nama" placeholder="">
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
                            <td>UOM/20220221/001</td>
                            <td>Unit</td>
                            <td>
                                <button type="button" class="btn btn-outline-warning">Edit Satuan</button>
                                <button type="button" class="btn btn-outline-danger">Hapus Satuan</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection