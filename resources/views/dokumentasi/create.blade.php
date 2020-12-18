@extends('layouts/main')

@section('title', 'Add Documentation Data')

@section('container')
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary text-center">Add Documentation</h6>
        </div>
        <div class="card-body">
            <form class=" form-signin" action="/dokumentasi" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="kategori_id">Kategori Id</label>
                    <input type="number" class="form-control @error('kategori_id') is-invalid @enderror" id="kategori_id"
                        placeholder="Masukan Kategori" name="kategori_id" value="{{ old('kategori_id') }}">
                    @error('kategori_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                        placeholder="Masukan Judul" name="judul" value="{{ old('judul') }}">
                    @error('judul')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="penulis"
                        placeholder="Masukan Penulis" name="penulis" value="{{ old('penulis') }}">
                    @error('penulis')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control @error('isi') is-invalid @enderror" id="isi"
                        placeholder="Isi Konten" name="isi" value="{{ old('isi') }}">
                    @error('isi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="gambar">Gambar Konten</label>
                    <input style="height: 30%;" type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar"
                        placeholder="Masukan Gambar" name="gambar" value="{{ old('gambar') }}">
                    @error('gambar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button style="width: 25%; " class="btn btn-small btn-success btn-block" type="submit"><i
                        class="far fa-save"></i><span class="ml-2">save changes</span></button>
            </form>
        </div>
    </div>
    <a href="/dokumentasi" class="text-danger float-right">
        <i class="fas fa-arrow-left"><span class="ml-2">Back</span></i>
    </a>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@endsection