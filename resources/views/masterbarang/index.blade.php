@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex">
        <ol class="breadcrumb bg-transparent d-flex align-items-center">
            <li class="breadcrumb-item" aria-current="page">Master Barang</li>
            <li class="breadcrumb-item active" aria-current="page">Index</li>
        </ol>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-hover">
                 <thead>
                     <th scope="col">Kode Categorys</th>
                     <th scope="col">Nama Barang</th>
                     <th scope="col">Options</th>
                 </thead>
                 <tbody>
                         <td>KTG/20220221/001</td>
                         <td>Sport</td>
                        <td>
                            <button type="button" class="btn btn-outline-secondary">update Stock</button>
                            <button type="button" class="btn btn-outline-secondary">Tampilkan Stock</button>
                        </td>
                     </tr>
                 </tbody>
             </table>
        </div>
    </div>
</div>

@endsection