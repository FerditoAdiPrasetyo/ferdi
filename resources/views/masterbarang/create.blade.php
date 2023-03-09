@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Barang</li>
            <li class="breadcrumb-item active" aria-current="page">Add Barang Baru</li>
        </ol>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{route('masterbarang.store',$kategories->id)}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" style="font-weight: bold;">Nama Barang:</label>
                            <input type="text" name="nama"  id="" class="form-control" placeholder="">
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="" style="font-weight: bold;">Brand:</label>
                            <select name="brand_id" id="" class="form-control">
                                @foreach ($brands as $brands)
                                <option value="{{$brands->id}}">{{$brands->no_reg}} - {{$brands->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="" style="font-weight: bold;">UOM:</label>
                            <select name="satuan_id" id="" class="form-control">
                                @foreach ($satuans as $uom)
                                <option value="{{$uom->id}}">{{$uom->no_reg}} - {{$uom->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" style="font-weight: bold;">Harga:</label>
                            <input type="text" name="harga"  id="" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" style="font-weight: bold;">Jumlah Stock:</label>
                            <input type="text" name="quantity" id="" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-outline-primary">
                            Simpan Stock
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection