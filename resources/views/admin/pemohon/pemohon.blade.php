@extends('admin.base')
@section('content')

    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Pemohon</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Data Pemohon</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="/admin/pemohon/cetak" class="btn btn-md btn-neutral">Cetak</a>
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
                        <h3 class="mb-0">Light table</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table id="tabel" class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="budget">Nama Pemohon</th>
                                <th scope="col" class="sort" data-sort="status">No. Identitas</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">No. Telepon</th>
                                <th scope="col">Email</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">TTL</th>
                                <th scope="col">Pekerjaan</th>
                                <th scope="col">Agama</th>
                                <th scope="col">Status</th>
                                <th scope="col">Kewarganegaraan</th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($pemohons as $v)
                                <tr>
                                    <td>{{ $loop->index + 1}}</td>
                                    <td>{{ $v->nama_pemohon}}</td>
                                    <td>{{ $v->no_identitas}}</td>
                                    <td>{{ $v->alamat}}</td>
                                    <td>{{ $v->no_telepon}}</td>
                                    <td>{{ $v->email}}</td>
                                    <td>{{ $v->jenis_kelamin}}</td>
                                    <td>{{ $v->tempat_lahir}}, {{ $v->tanggal_lahir}}</td>
                                    <td>{{ $v->pekerjaan}}</td>
                                    <td>{{ $v->agama}}</td>
                                    <td>{{ $v->status}}</td>
                                    <td>{{ $v->kewarganegaraan}}</td>
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
