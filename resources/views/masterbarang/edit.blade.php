@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <p style="margin-left: 2px; font-weight: bold;">Master Barang</p>
        <p style="margin-left: 5px;">/ Edit Stock Barang</p>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" style="font-weight: bold;">Nomor Refrensi:</label>
                            <input type="text" name=""  id="" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" style="font-weight: bold;">Nama Barang:</label>
                            <input type="text" name=""  id="" class="form-control" >
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="" style="font-weight: bold;">Kategori:</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih Kategori</option>
                                <option value="">1</option>
                                <option value="">2</option>
                            </select>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="" style="font-weight: bold;">Brand:</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih Brand</option>
                                <option value="">1</option>
                                <option value="">2</option>
                            </select>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group">
                            <label for="" style="font-weight: bold;">UOM:</label>
                            <select name="" id="" class="form-control">
                                <option value="">Pilih UOM</option>
                                <option value="">1</option>
                                <option value="">2</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" style="font-weight: bold;">Harga:</label>
                            <input type="text" name=""  id="" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" style="font-weight: bold;">Image:</label>
                            <input type="file" name=""  id="" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" style="font-weight: bold;">Status:</label>
                            <input type="text" name=""  id="" class="form-control" >
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