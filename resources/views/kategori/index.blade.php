@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Data</li>
            <li class="breadcrumb-item active" aria-current="page"> Kategori</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('kategori.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Kategori</label>
                        <input type="text" name="nama" value="{{old('nama_kategori')}}" class="form-control" id="nama" placeholder="">
                        <button type="submit" class="btn btn-outline-primary mt-4">
                            Perbarui Kategori
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <table class="table table-hover">
                    <thead>
                        <th scope="col">Kode Kategori</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Options</th>
                    </thead>
                    <tbody>
                        
                            <td>KTG/20220221/001</td>
                            <td>Sport</td>
                            <td>
                                <button type="button" class="btn btn-outline-warning">Edit Kategori</button>
                                <button type="button" class="btn btn-outline-danger">Hapus Kategori</button>
                            </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection