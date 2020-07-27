@extends('admin.base')
@section('content')

    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Advokat</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Data Advokat</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="/admin/advokat/tambahadvokat" class="btn btn-md btn-neutral">Tambah Data</a>
                        <a href="/admin/advokat/cetak" class="btn btn-md btn-neutral">Cetak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Tabel Advokat</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table id="tabel" class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Advokat</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">TTL</th>
                                <th scope="col">Hp</th>
                                <th scope="col">Email</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($advokats as $a)
                                <tr>
                                    <td>{{ $loop->index + 1}}</td>
                                        <td>{{$a->nama_advokat}}</td>
                                    <td>{{$a->alamat}}</td>
                                    <td>{{$a->tempat_lahir}}, {{$a->tanggal_lahir}}</td>
                                    <td>{{$a->no_telepon}}</td>
                                    <td>{{$a->email}}</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm" href="/admin/advokat/editadvokat/{{$a->id}}">Detail</a>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->

                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

    <script>
        $(document).ready(function () {
            $('#tabel').DataTable();
        });
    </script>
@endsection
