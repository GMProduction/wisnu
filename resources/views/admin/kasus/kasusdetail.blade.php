@extends('admin.base')
@section('content')

    <style>
        .form-control[readonly] {
            background-color: white;
            color: black;
        }
    </style>
    <!-- Page content -->
    <div class="main-content" id="panel">

        <!-- Header -->
        <div class="header pb-6 d-flex align-items-center"
             style="min-height: 100px; background-size: cover; background-position: center top;">
            <!-- Mask -->
            <span class="mask bg-gradient-default opacity-8"></span>
            <!-- Header container -->

        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-xl-12 order-xl-1">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">Detail Kasus </h3>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="noRegistrasi">No.
                                                Registrasi</label>
                                            <input readonly type="text" id="noRegistrasi" name="noRegistrasi" value="{{$kasus->no_registrasi}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="noIdentitas">No.
                                                Identitas</label>
                                            <input readonly type="text" id="noIdentitas" name="noIdentitas" value="{{$kasus->pemohon->pemohon->no_identitas}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="nama">Nama</label>
                                            <input readonly type="text" id="nama" name="nama" class="form-control" value="{{$kasus->pemohon->pemohon->nama_pemohon}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="jeniskasus">Jenis Kasus</label>
                                            <input readonly type="text" id="jeniskasus" name="jeniskasus" class="form-control" value="{{$kasus->jenis_kasus}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="konsultasi">Layanan</label>
                                            <input readonly type="text" id="layanan" name="layanan" class="form-control" value="{{$kasus->layanan}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="kronologi">Kronologi Kasus</label>
                                            <textarea readonly id="kronologi" name="kronologi" class="form-control">{{$kasus->kronologi_kasus}}</textarea>
                                        </div>
                                    </div>

                                    <hr class="my-4"/>
                                    <!-- Description -->
                                    @if($kasus->status == 'pending')

                                        <div class="col col-1 text-right mr-2">
                                            <button type="submit" onclick="modalTerima()" class="btn btn-lg btn-primary">Terima</button>
                                        </div>
                                        <div class="col col-1 text-right">
                                            <button type="button" href="#modal" data-target="#modal" data-toggle="modal" class="btn btn-lg btn-danger">Tolak</button>
                                        </div>
                                    @else
                                        <div class="col-12">
                                            <h2 class="text-center" style=" font-weight: bold">Kasus {{$kasus->status}}</h2>
                                        </div>
                                    @endif
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="post" onsubmit="return tolak()">
                    @csrf
                    <input id="id" name="id" value="{{$kasus->no_registrasi}}" hidden>
                    <input id="status" name="status" value="tolak" hidden>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Alasan Menolak</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <textarea class="form-control" id="alasan" name="alasan" placeholder="Tulis alasan ..."></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalTerima" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <form method="post">
                    @csrf
                    <input id="id" name="id" value="{{$kasus->no_registrasi}}" hidden>
                    <input id="noRegistrasi" name="noRegistrasi" value="{{$kasus->id}}" hidden>
                    <input id="status" name="status" value="terima" hidden>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Form Jadwal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="reg">No.
                                        Registrasi</label>
                                    <input readonly type="text" id="reg" required name="reg" value="{{$kasus->no_registrasi}}"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="advokat">Advokat</label>
                                    <select class="form-control" id="advokat" name="advokat" required>
                                        <option value="">Pilih Nama Lelang</option>
                                        @foreach($advokats as $ad)
                                            <option value="{{ $ad->id }}">{{ $ad->nama_advokat }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tanggal">Tanggal</label>
                                    <input type="date" id="tanggal" name="tanggal" required
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="form-group">
                                    <label class="form-control-label" for="jam">Jam</label>
                                    <select class="form-control" name="jam" id="jam">
                                        @for($i=0;$i<=23;$i++)
                                            <option value="{{str_pad($i,2,'0',STR_PAD_LEFT)}}">{{str_pad($i,2,'0',STR_PAD_LEFT)}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-1">
                                <div class="form-group">
                                    <label class="form-control-label" for="jam">Menit</label>
                                    <select class="form-control" id="menit" name="menit">
                                        @for($i=0;$i<=60;$i++)
                                            <option value="{{str_pad($i,2,'0',STR_PAD_LEFT)}}">{{str_pad($i,2,'0',STR_PAD_LEFT)}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="layanan">Layanan</label>
                                    <input type="text" id="layanan" name="layanan" value="" required
                                           class="form-control">
                                </div>
                            </div>
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
        $(document).ready(function () {
            @if(\Illuminate\Support\Facades\Session::has('success'))
            swal({
                title: 'Success',
                text: 'Kasus telah {{$status}}',
                icon: 'success',
                confirmButtonText: 'Ok'
            });
            @endif

        });

        function modalTerima() {
            $('#modalTerima #advokat').val('');
            $('#modalTerima #tanggal').val('');
            $('#modalTerima #layanan').val('');
            $('#modalTerima').modal('show');
        }

        function tolak() {
            var alasan = $('#alasan').val();
            if (alasan == '') {
                swal('Alasan harus diisi');
                return false
            }

        }
    </script>

@endsection
