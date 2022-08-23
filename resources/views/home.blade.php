@extends('layout.app')

@section('title')
    Home
@endsection

 @section('Content')
    <div class="row g-2 text-center">
        <div class="col-2">
        <div class="p-3 border bg-light mt-3">10 barang<i class="fa fa-boxes"></i></div>
        </div>

        <div class="col-3">
        <div class="p-3 border bg-light mt-3">15 kategori<i class="fa fa-tag"></i></div>
        </div>

        <div class="col-3">
        <div class="p-3 border bg-light mt-3">5 suplier<i class="fa fa-truck"></i></div>
        </div>

        <div class="col-3">
        <div class="p-3 border bg-light mt-3">100 member<i class="fa fa-users"></i></div>
        </div>
    </div>
    @endsection