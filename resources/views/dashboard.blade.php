@extends('master.master')
@section('content')

            <div class="container mb-4 mt-3">
                <div class="row justify-content-center">
                    @foreach($kategori as $kategoris)
                    <div class="col-md-4">

                        <a href="/kategoris/{{ $kategoris->slug }} ">
                            <div class="card bg-dark text-white m-2">
                                <img src="img/dashboard/{{ $kategoris->gambar }}" class="card-img" alt="...">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">{{ $kategoris->name }}</h5></div>
                            </div>
                        </a>
                        
                    </div>
                    @endforeach
                </div>

            </div>

@endsection