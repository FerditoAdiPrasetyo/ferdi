@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Transaksi</li>
            <li class="breadcrumb-item active" aria-current="page">Barang Masuk</li>
        </ol>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="card-body alert alert-danger">Request Barang akan masuk kedalam table dibawah ini</div>
            <table class="table table-hover">
                <thead>
                    <th scope="col">Refrensi</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Options</th>
                </thead>
                <tbody>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection