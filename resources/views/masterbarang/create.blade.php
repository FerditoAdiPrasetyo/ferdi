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
            <form action="#" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="nip" style="font-weight: bold;">Nama Barang:</label>
                            <input type="text" name="nama-barang"  id="nama-barang" class="form-control" placeholder="">
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="brand" style="font-weight: bold;">Brand:</label>
                            <select name="brand" id="brand" class="form-control">
                                <option value="">Pilih Brand</option>
                                <option value="a">a</option>
                                <option value="b">b</option>
                            </select>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="uom" style="font-weight: bold;">UOM:</label>
                            <select name="uom" id="uom" class="form-control">
                                <option value="">Pilih UOM</option>
                                <option value="a">a</option>
                                <option value="b">b</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="harga" style="font-weight: bold;">Harga:</label>
                            <input type="text" name="harga"  id="harga" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="stock" style="font-weight: bold;">Jumlah Stock:</label>
                            <input type="text" name="stock" id="stock" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-outline-primary">
                            Simpan Stock
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection