@extends('layout.app')

@section('title')
    pembelian
@endsection

@section('Content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
        <h5>Data pembelian</h5>

        <button type="button" class="btn btn-success btn-sm float-end" data-bs-toggle="modal" data-bs-target="#ModalTambah"><i class="fa fa-plus"></i></button>
        </div>
    </div>

</div>
<div class="card-body">
<table class="table table-striped mt-5">
<thead>
    <tr> 
        <th>No.</th>
        <th>Tanggal</th>
        <th>jumlah</th>
        <th>Harga</th>
        <th>Barang</th>
        <th>Aksi</th>
</div>
</thead>

<tbody>
    <tr>
        <td>1</td>
        <td>19 Agustus 2022</td>
        <td>1</td>
        <td>25.000</td>
        <td>Sebuah Video</td>
        <td>ATK</td>
        <td>
            <a href="#" class="btn btn-warning btn-sm"> <i class ="fa fa-edit"></i></a>
            <a href="#" class="btn btn-danger btn-sm"> <i class ="fa fa-trash"></i></a>
        </td>
    </tr>

<div class="modal fade" id="ModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</table>
@endsection