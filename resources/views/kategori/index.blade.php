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
                    <div id="answer1" class="form-group">
                        <label for="">Nama Kategori</label>
                        <input type="text" name="nama"  class="form-control" id="" placeholder="">
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
                        @forelse($kategories as $kategori)
                        <tr>
                            <td>{{$kategori->no_reg}}</td>
                            <td>{{$kategori->nama}}</td>
                            <td>
                                <button type="button" class="btn btn-outline-warning">Edit Kategori</button>
                                <button type="button" class="btn btn-outline-danger">Hapus Kategori</button>
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