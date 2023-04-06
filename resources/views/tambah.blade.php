@extends('layout')

@section('content')
    <a href="/admin" class="mb-4">Kembali</a>
    <h3 class="fw-bold">Tambah Sepatu</h3>
    <form action="/simpan" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="">Nama Barang</label>
            <input type="text" class="form-control @error('product_name') is-invalid @enderror"
                name="product_name"id="">
            @error('product_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="">Harga Barang</label>
            <input type="text" class="form-control @error('product_price') is-invalid @enderror" name="product_price"
                id="">
            @error('product_price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="">Foto Barang</label>
            <input type="file" class="form-control" name="product_image" id="">
        </div>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
@endsection
