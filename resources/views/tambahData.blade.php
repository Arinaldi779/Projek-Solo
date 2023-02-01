@extends('master.master')
@section('content')

<p class="h3 position-relative text-tambahData mt-4 text-center mb-2">Tambahkan Data</p>
<div class="row justify-content-center mt-3">
    <div class="col-md-10 mt-2">
        <div class="container-form">
            <form action="{{ route('createProduk') }}" method="post" class="row g-3 p-3" enctype="multipart/form-data">
                @csrf
                {{-- Nama Barang --}}
                <div class="col-md-6 form-group">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" id="nama_barang"
                        placeholder="Masukkan Nama Barang">
                    @foreach ($errors->get('nama_barang') as $msg)
                    <p class="text-danger">{{ $msg }}</p>
                    @endforeach
                </div>
                {{-- No Seri --}}
                <div class="col-md-6 form-group">
                    <label for="inputPassword4" class="form-label">Nomor Seri</label>
                    <input type="text" name="no_seri" class="form-control" id="inputPassword4"
                        placeholder="Masukkan Nomor Seri Barang">
                    @foreach ($errors->get('no_seri') as $msg)
                    <p class="text-danger">{{ $msg }}</p>
                    @endforeach
                </div>
                {{-- Gambar --}}
                <div class="col-6 form-group">
                    <label for="inputAddress" class="form-label">Foto</label>
                    <input type="file" name="gambar" class="form-control" id="inputAddress"
                        placeholder="Masukkan Foto Barang">
                    @foreach ($errors->get('gambar') as $msg)
                    <p class="text-danger">{{ $msg }}</p>
                    @endforeach
                </div>
                {{-- Harga --}}
                <div class="col-6 form-group">
                    <label for="inputAddress2" class="form-label">Harga</label>
                    <input type="text" name="harga" class="form-control" id="inputAddress2"
                        placeholder="Masukkan Harga">
                    @foreach ($errors->get('harga') as $msg)
                    <p class="text-danger">{{ $msg }}</p>
                    @endforeach
                </div>
                {{-- Deskripsi --}}
                <div class="col-md-6 form-group">
                    <label for="inputCity" class="form-label">Deskripsi</label>
                    <textarea type="text" name="deskripsi" class="form-control" id="inputCity"
                        placeholder="Masukkan Deskripsi Barang"></textarea>
                    @foreach ($errors->get('deskripsi') as $msg)
                    <p class="text-danger">{{ $msg }}</p>
                    @endforeach
                </div>
                {{-- Kategori --}}
                <div class="col-md-4 form-group">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select id="inputState" name="kategori_id" class="form-select">
                        <option selected>--PILIH KATEGORI--</option>
                        @foreach ($kategori as $cateitem)
                        <option value="{{ $cateitem->id }}">{{ $cateitem->name }}</option>
                        @endforeach
                    </select>
                    @foreach ($errors->get('kategori_id') as $msg)
                    <p class="text-danger">{{ $msg }}</p>
                    @endforeach
                </div>
                {{-- Stok --}}
                <div class="col-md-2 form-group">
                    <label for="foto" class="form-label">Stok</label>
                    <input type="number" name="stok" class="form-control" id="foto" placeholder="Isi Stok Barang">
                    @foreach ($errors->get('stok') as $msg)
                    <p class="text-danger">{{ $msg }}</p>
                    @endforeach
                </div>
                {{-- Button --}}
                <div class="col-12 form-group">
                    <button type="submit" class="btn btn-tambah">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
