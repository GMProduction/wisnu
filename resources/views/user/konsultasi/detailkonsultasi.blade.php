@extends('user.base')
@section('content')
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <script>
            Swal.fire({
                title: 'Success',
                text: 'Berhasil menambah data konsultasi',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
        </script>
    @elseif(\Illuminate\Support\Facades\Session::has('edit'))
        <script>
            Swal.fire({
                title: 'Success',
                text: 'Berhasil merubah data konsultasi',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
        </script>
    @endif
    <style>
        .form-control[readonly] {
            background-color: white;
            color: black;
        }
    </style>
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Detail Jadwal</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/admin/jadwal">Data Jadwal</a></li>
                                <li class="breadcrumb-item"><a href="#">Detail Jadwal</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="/admin/jadwal/cetakDetail/{{$kasus->id}}" class="btn btn-md btn-neutral">Cetak</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">

                    <div class="card-body">
                            <h6 class="heading-small text-muted mb-4">Jadwal</h6>
                            <h2>{{$kasus->tanggal}}</h2>
                            <hr class="my-4"/>
                            <h6 class="heading-small text-muted mb-4">Data Kasus</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="noRegistrasi">No.
                                                Registrasi</label>
                                            <input readonly type="text" id="noRegistrasi" name="noRegistrasi" value="{{$kasus->jadwal->no_registrasi}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="jeniskasus">Jenis Kasus</label>
                                            <input readonly type="text" id="jeniskasus" name="jeniskasus" class="form-control" value="{{$kasus->jadwal->jenis_kasus}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="konsultasi">Layanan</label>
                                            <input readonly type="text" id="layanan" name="layanan" class="form-control" value="{{$kasus->jadwal->layanan}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="kronologi">Kronologi Kasus</label>
                                            <textarea readonly id="kronologi" name="kronologi" class="form-control">{{$kasus->jadwal->kronologi_kasus}}</textarea>
                                        </div>
                                    </div>

                                    @if($kasus->jadwal->image)
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-control-label" for="kronologi">Kronologi Kasus</label><br>
                                            <img src="{{asset('uploads/bukti')}}/{{$kasus->jadwal->image}}" height="200">
                                        </div>
                                    @endif

                                    <hr class="my-4"/>
                                    <!-- Description -->

                                </div>
                            </div>


                        <hr class="my-4"/>

                        <h6 class="heading-small text-muted mb-4">Data Advokat</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="nAdvokat">Nama Advokat</label>
                                        <input readonly type="text" id="nAdvokat" name="nAdvokat" value="{{$kasus->advokat->nama_advokat}}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="phAdvokat">No. Telepon</label>
                                        <input readonly type="text" id="phAdvokat" name="phAdvokat" value="{{$kasus->advokat->no_telepon}}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="email">Email</label>
                                        <input readonly type="text" id="email" name="email" value="{{$kasus->advokat->email}}"
                                               class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="ttl">TTL</label>
                                        <input readonly type="text" id="ttl" name="ttl" value="{{$kasus->advokat->tempat_lahir}}, {{$kasus->advokat->tanggal_lahir}}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="alamat">Alamat</label>
                                        <input readonly type="text" id="alamat" name="alamat" value="{{$kasus->advokat->alamat}}"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4"/>
                        <div class="card-header border-0">
                            <h3 class="mb-0">Tabel Konsultasi</h3>
                        </div>

                        <div class="table-responsive">
                            <table id="tabel" class="table align-items-center table-flush">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">#</th>
                                    <th scope="col" class="sort" data-sort="budget">Proses Konsultasi</th>
                                    <th scope="col" class="sort" data-sort="status">Detail Konsultasi</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @forelse($kasus->konsultasi as $v)
                                    <tr>
                                        <td>{{ $loop->index + 1}}</td>
                                        <td>{{$v->proses_konsultasi}}</td>
                                        <td>{{$v->detail_konsultasi}}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="4">Belum ada data konsultasi</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                            <!-- Description -->

                        </div>
                        <hr class="my-4"/>

                        <div class="col-12 text-right">
                            <a href="/user/konsultasi" class="btn btn-lg btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="post" onsubmit="">
                    @csrf
                    <input id="id_jadwal" name="id_jadwal" value="{{$kasus->id}}" hidden>
                    <input id="id_advokat" name="id_advokat" value="{{$kasus->id_advokat}}" hidden>
                    <input id="id" name="id" value="" hidden>
                    <input id="aksi" name="aksi" value="" hidden>

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Form Konsultasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="waktu" class="form-control-label">Proses Konsultasi</label>
                            <textarea class="form-control" required id="proses_konsultasi" name="proses_konsultasi" placeholder=""></textarea>
                        </div>
                        <div class="form-group">
                            <label for="waktu" class="form-control-label">Detail Konsultasi</label>
                            <textarea class="form-control" required id="detail_konsultasi" name="detail_konsultasi" placeholder=""></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script>
        function modalKonsultasi() {
            $('#modal #id').val('');
            $('#modal #aksi').val('add');
            $('#modal #detail_konsultasi').val('');
            $('#modal #proses_konsultasi').val('');
            $('#modal').modal('show');
        }

        $(document).on('click', 'a#edit', function () {
            $('#modal #id').val($(this).data('id'));
            $('#modal #aksi').val('edit');
            $('#modal #detail_konsultasi').val($(this).data('detail'));
            $('#modal #proses_konsultasi').val($(this).data('proses'));
            $('#modal').modal('show');
        })
    </script>

@endsection
