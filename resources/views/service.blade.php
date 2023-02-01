<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masuk</title>
    @include('ringkas.ringkas-css')
</head>
<body>
@include('layout.sidebar')

        <div class="col-lg-11">
            <table class="table table-striped table-responsive ms-3 me-3 mt-4 mb-5">
                <thead>
                    <tr class="bg-dark me-3">
                        <th>No</th>
                        <th>Nama Costumer</th>
                        <th>Nama Barang</th>
                        <th>Tanggal Masuk</th>
                        <th>Komplain</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-active">
                        <th>1</th>
                        <td>Lord Rangga</td>
                        <td>Bumi</td>
                        <td>Rabu 02 November 2022</td> 
                        <td>Penghuninya kebanyakan maksiat</td>
                        <td>
                            <a class="btn btn-warning btn-sm p-1 m-1" href="#"><i class="fas fa-wrench me-1"></i>Selesai</a><br>
                            <a class="btn btn-success btn-sm p-1 m-1" href="#"><i class="fas fa-edit me-1"></i>Edit</a><br>
                            <a class="btn btn-danger btn-sm p-1 m-1" href="#"><i class="fas fa-trash me-1"></i>Hapus</a>
                        </td>
                    </tr>
                    <tr class="">
                        <th>2</th>
                        <td>Lord Rangga</td>
                        <td>Bumi</td>
                        <td>Rabu 02 November 2022</td>
                        <td>Penghuninya kebanyakan maksiat</td>
                        <td>
                            <a class="btn btn-warning btn-sm p-1 m-1" href="#"><i class="fas fa-wrench me-1"></i>Selesai</a><br>
                            <a class="btn btn-success btn-sm p-1 m-1" href="#"><i class="fa fa-edit me-1"></i>Edit</a><br>
                            <a class="btn btn-danger btn-sm p-1 m-1" href="#"><i class="fas fa-trash me-1"></i>Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

                </div>
                <!-- /#page-content-wrapper -->

            </div>
            <!-- /#wrapper -->
{{-- <footer>
    @include('layout.footer')
</footer> --}}

@include('ringkas.ringkas-js')
</body>
</html>