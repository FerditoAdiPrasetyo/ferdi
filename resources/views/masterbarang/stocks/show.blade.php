@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <p style="margin-left: 2px; font-weight: bold;">Master Barang</p>
        <p style="margin-left: 5px;">/ Tampilan Stock</p>
    </div>
    <div class="card">
        <div class="d-flex justify-content-center" >
            <img src="img/1.webp" alt="monitor" width="500">
        </div>
       <table class="table table-hover">
            <thead>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Brand</th>
                <th scope="col">UOM</th>
                <th scope="col">Price</th>
            </thead>
            <tbody>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection