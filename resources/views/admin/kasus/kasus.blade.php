@extends('admin.base')
@section('content')

    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Kasus</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="/"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Data Kasus</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="/admin/kasus/add" class="btn btn-md btn-neutral">Tambah Data</a>
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
                                <th scope="col" class="sort" data-sort="status">No. Registrasi</th>
                                <th scope="col">Layanan</th>
                                <th scope="col">Jenis Kasus</th>
                                <th scope="col">Status</th>
                                <th scope="col">Alasan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @foreach($kasus as $v)

                                <tr>
                                    <td>{{ $loop->index + 1}}</td>
                                    <td>{{ $v->pemohon->pemohon->nama_pemohon }}</td>
                                    <td>{{ $v->no_registrasi }}</td>
                                    <td>{{ $v->layanan }}</td>
                                    <td>{{ $v->jenis_kasus }}</td>
                                    <td>{{ $v->status }}</td>
                                    <td>{{ $v->alasan }}</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm" href="/admin/kasus/kasusdetail/{{$v->no_registrasi}}">Detail</a>
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

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tolak Kasus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="alasan">Alasan menolak</label>
                            <textarea class="form-control" id="alasan" name="alasan" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
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
