@extends('master.master')
@section('content')


{{-- form logout --}}
<div class="container-kategoris mb-4 mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10">

            {{-- Table --}}
            <div class="col-lg-8">
                <table class="table table-striped table-responsive ms-3 mx-5">
                    <thead>
                        <tr class="bg-dark me-3">
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Nama Barang</th>
                            <th>No Seri</th>
                            <th>Harga</th>
                            <th>stok</th>

                            
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($barangs as $barang => $barangs)
                    <tbody>
                        <tr class="table-active">
                            <td>{{ ++$barang }}</td>
                            <td><img src="{{ asset('img/uploads/'.$barangs->gambar) }}" alt=""></td>
                            <td>{{ $barangs->nama_barang }}</td>
                            <td>{{ $barangs->no_seri }}</td>
                            <td>{{ $barangs->harga }}</td>
                            <td>{{ $barangs->stok }}</td>
                            <td>
                                {{-- <a class="btn btn-warning btn-sm p-1 m-1" href="#"><i
                                        class="fas fa-wrench me-1"></i>Cetak</a><br> --}}
                                <a class="btn btn-success btn-sm p-1 m-1" href="/edit/{{ $barangs->id }}"><i
                                        class="fas fa-edit me-1"></i>Edit</a><br>
                                <a class="btn btn-danger btn-sm p-1 m-1" href="/hapus/{{ $barangs->id }}"><i
                                        class="fas fa-trash me-1"></i>Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            {{-- Div Penutup table --}}

            @endsection
