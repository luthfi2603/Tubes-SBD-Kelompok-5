@extends('admin.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add New Product</h1>
    </div>

    <div class="my-4">
        <form action="/admin/movies/add" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-5 mx-auto">
                    <div class="mb-3">
                        <label for="nama_produk" class="form-label">Judul Movie</label>
                        <input name="nama_produk" type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" placeholder="Masukkan judul movie" autofocus value="{{ old('nama_produk') }}">
                        @error('nama_produk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="harga_produk" class="form-label">Harga</label>
                        <input name="harga_produk" type="text" class="form-control @error('harga_produk') is-invalid @enderror" id="harga_produk" placeholder="Masukkan harga produk" value="{{ old('harga_produk') }}">
                        @error('harga_produk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kategori_produk" class="form-label">Kategori</label>
                        <input name="kategori_produk" type="text" class="form-control @error('kategori_produk') is-invalid @enderror" id="kategori_produk" placeholder="Masukkan kategori produk" value="{{ old('kategori_produk') }}">
                        @error('kategori_produk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="merek_produk" class="form-label">Merek</label>
                        <input name="merek_produk" type="text" class="form-control @error('merek_produk') is-invalid @enderror" id="merek_produk" placeholder="Masukkan merek produk" value="{{ old('merek_produk') }}">
                        @error('merek_produk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi_produk" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi_produk" class="form-control @error('deskripsi_produk') is-invalid @enderror" id="deskripsi_produk" cols="30" rows="10">{{ old('deskripsi_produk') }}</textarea>
                        @error('deskripsi_produk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar</label>
                        <input name="image" id="image" type="file" class="form-control @error('image') is-invalid @enderror">
                        <div class="form-text">rasio gambar 1:1, ukuran kurang dari 2 MB</div>
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="d-grid gap-2 col-3 mt-1">
                    <button class="btn btn-dark" type="submit">Add</button>
                </div>
            </div>
        </form>
    </div>
@endsection