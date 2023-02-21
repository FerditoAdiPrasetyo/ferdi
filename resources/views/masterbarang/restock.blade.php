@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <p style="margin-left: 2px; font-weight: bold;">Master Barang</p>
        <p style="margin-left: 5px;">/ Request Stock Barang</p>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="#" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nip" style="font-weight: bold;">Nomor Refrensi:</label>
                            <input type="text" name="nomor-refrensi"  id="nama-barang" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nip" style="font-weight: bold;">Nama Barang:</label>
                            <input type="text" name="nama-barang"  id="nama-barang" class="form-control" placeholder="">
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="kategori" style="font-weight: bold;">Kategori:</label>
                            <select name="kategori" id="kategori" class="form-control">
                                <option value="">Pilih Kategori</option>
                                <option value="a">a</option>
                                <option value="b">b</option>
                            </select>
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
                            <label for="image" style="font-weight: bold;">Image:</label>
                            <input type="file" name="image"  id="image" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status" style="font-weight: bold;">Status:</label>
                            <input type="text" name="status"  id="status" class="form-control" placeholder="">
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