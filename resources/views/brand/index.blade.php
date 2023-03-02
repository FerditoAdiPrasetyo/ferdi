@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Data</li>
            <li class="breadcrumb-item active" aria-current="page"> Brand</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('brand.store')}}" method="post">
                    @csrf
                    <div id="answer1" class="form-group">
                        <label for="">Nama Brand</label>
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
                        <th scope="col">Kode Brand</th>
                        <th scope="col">Nama Brand</th>
                        <th scope="col">Options</th>
                    </thead>
                    <tbody>
                        @forelse($brands as $brand)
                        <tr>
                            <td>{{$brand->no_reg}}</td>
                            <td>{{$brand->nama}}</td>
                            <td>
                                <a type="button" href="{{route('brand.edit', $brand->id)}}" class="btn btn-outline-warning ">Edit Brand</a>
                                <form action="{{ route('brand.destroy', $brand->id) }}" method="post">
                                    @csrf 
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-outline-danger">Hapus Brand</button>
                                </form>
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