@extends('layout.app')

@section('title')
Barang
@endsection

@section('Content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Tambah Barang</h5>

            <div class="card-body">
                <form action="{{route('barang.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="form-control @error ('nama') is-invalid @enderror">
                                @error('nama')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" name="harga" value="{{ old('nama') }}" class="form-control @error ('nama') is-invalid @enderror">
                                @error('nama')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="stock">Stok</label>
                        <input type="number" name="stok" value="{{ old('nama') }}" class="form-control @error ('nama') is-invalid @enderror">
                                @error('nama')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                    </div>
                </div>

              <div class="col-lg-4">
                <div class="form-group">
                    <label for="suplier" class="form-label">Suplier</label>
                    <select name="suplier_id" id="suplier_id" class="form-control ">
                      @foreach ($suplier as $s)
                      <option value="{{$s->id}}">{{$s->nama}}</option>
                      @endforeach
                    </select>
                </div>
             </div>

               <div class="col-lg-4">
                 <div class="form-group">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select name="kategori_id" id="kategori_id" class="form-control ">
                    @foreach ($kategori as $item)
                      <option value="{{$item->id}}">{{$item->nama}}</option>
                      @endforeach
                    </select>
                </div>
              </div>
            </div>

            <div class="modal-footer mt-3">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection